<?php

namespace App\Console\Commands;

use App\Article;
use Goutte\Client;
use Illuminate\Console\Command;

class ScrapeArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes articles from GATE15 and inserts them in the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = 'https://www.gate15.be/nl/nieuws';
        $titleCssSelector = 'article > h1 > span';
        $contentCssSelector = 'article > p';
        $timeAgoCssSelector = 'article > time';
        $imageUrlCssSelector = 'div.image > img';
        $articleUrlCssSelector = 'a.gate15-news-box';

        $crawlInfo = $this->getCrawlInfo($url);

        $scrapedTitles = $crawlInfo['crawler']->filter($titleCssSelector)->extract($crawlInfo['text']);
        $scrapedContent = $crawlInfo['crawler']->filter($contentCssSelector)->extract($crawlInfo['text']);
        $scrapedTimeAgoes = $crawlInfo['crawler']->filter($timeAgoCssSelector)->extract($crawlInfo['text']);
        $scrapedImageUrls = $crawlInfo['crawler']->filter($imageUrlCssSelector)->extract($crawlInfo['src']);
        $scrapedArticleUrls = $crawlInfo['crawler']->filter($articleUrlCssSelector)->extract($crawlInfo['href']);

        $bar = $this->output->createProgressBar(count($scrapedTitles) + 1);

        Article::where('scraped', true)->delete();
        $bar->advance();

        for($i = 0; $i < count($scrapedTitles); $i++) {
            $scrapedArticle = new Article;
            $scrapedArticle->title = $scrapedTitles[$i];
            $scrapedArticle->content = $scrapedContent[$i];
            $scrapedArticle->time_ago = $scrapedTimeAgoes[$i];
            $scrapedArticle->image_url = $scrapedImageUrls[$i];
            $scrapedArticle->article_url = $scrapedArticleUrls[$i];
            $scrapedArticle->scraped = true;
            $scrapedArticle->save();

            $bar->advance();
        }

        $bar->finish();
    }

    public function getCrawlInfo($url) {
        $scrapeText = '_text';
        $scrapeSrc = 'src';
        $scrapeHref = 'href';

        $client = new Client();
        $guzzleClient = new \GuzzleHttp\Client(array(
            'curl' => array(
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false
            ),
        ));
        $client->setClient($guzzleClient);
        $crawler = $client->request('GET', $url);

        $crawlInfo =
        [
            'client' => $client,
            'crawler' => $crawler,
            'text' => $scrapeText,
            'src' => $scrapeSrc,
            'href' => $scrapeHref
        ];

        return $crawlInfo;
    }
}
