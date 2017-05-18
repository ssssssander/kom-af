<?php

namespace App\Console\Commands;

use App\Helpers\CrawlInfo;
use App\StudentGuideItem;
use Illuminate\Console\Command;

class ScrapeStudentGuide extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:studentguide';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes data from the Guido student guide and inserts them in the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();#dnn_ctr775_ModuleContent h4
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categories = ['drinken', 'eten', 'ontspanning'];

        $scrapedStudentGuideItemIds = StudentGuideItem::select('id')->get();

        if(!$scrapedStudentGuideItemIds->isEmpty()) {
            StudentGuideItem::truncate();
        }

        for($j = 1; $j <= count($categories); $j++) {
            $categoriesIndex = $j - 1;
            $url = "http://www.guido.be/Stadsgids/Antwerpen/tabid/192/CategoryId/$j/SubCategoryId/-1/CityId/2/OrderBy/0/page/1/Default.aspx#775";

            $crawlInfo = CrawlInfo::getCrawlInfo($url);

            $loadingText = "\r\n\r\n" . 'Scraping student guide... (' . $categories[$categoriesIndex] . ')' . "\r\n";
            $this->info($loadingText);

            $nameCssSelector = '#dnn_ctr775_ModuleContent h4';
            $itemUrlCssSelector = '.gginfo .underline';

            $scrapedNames = $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']);
            $scrapedItemUrls = $crawlInfo['crawler']->filter($itemUrlCssSelector)->extract($crawlInfo['text']);

            for($i = 2; $i <= 5; $i++) {
                $link = $crawlInfo['crawler']->selectLink(strval($i))->link();
                $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
                $scrapedNames =
                    array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']));
                $scrapedItemUrls =
                    array_merge($scrapedItemUrls, $crawlInfo['crawler']->filter($itemUrlCssSelector)->extract($crawlInfo['text']));
            }

            $bar = $this->output->createProgressBar(count($scrapedNames));

            for($i = 0; $i < count($scrapedNames); $i++) {
                $scrapedStudentGuideItem = new StudentGuideItem;
                $scrapedStudentGuideItem->name = trim($scrapedNames[$i]);
                $scrapedStudentGuideItem->item_url = trim($scrapedItemUrls[$i]);
                $scrapedStudentGuideItem->category = $categories[$categoriesIndex];

                $scrapedStudentGuideItem->save();

                $bar->advance();
            }
        }

        $bar->finish();
    }
}
