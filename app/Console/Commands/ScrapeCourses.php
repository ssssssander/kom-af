<?php

namespace App\Console\Commands;

use App\Course;
use Goutte\Client;
use Illuminate\Console\Command;

class ScrapeCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:courses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes courses from school websites and inserts them in the database';

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
        $amountOfSchools = 4;

        for($j = 1; $j <= $amountOfSchools; $j++) { // This is bad
            switch($j) {
                case 1:
                    $this->info(PHP_EOL . 'Scraping KdG...');
                    $url = 'https://www.kdg.be/opleidingen/professionele-bachelor';
                    $nameCssSelector = 'article > header > h4 > a';
                    break;
                case 2:
                    $this->info(PHP_EOL . 'Scraping UA...');
                    $url = 'https://www.uantwerpen.be/nl/onderwijs/opleidingsaanbod/';
                    $nameCssSelector = 'section > h2 > a';
                    break;
                case 3:
                    $this->info(PHP_EOL . 'Scraping TM...');
                    $url = 'http://www.thomasmore.be/opleidingen/zoeken?f[0]=im_field_opleidingstype%3A6&f[1]=im_field_opleidingstype%3A64';
                    $nameCssSelector = 'div.field > h2';
                    break;
                case 4:
                    $this->info(PHP_EOL . 'Scraping AP...');
                    $url = 'https://www.ap.be/bachelors-en-masters/459';
                    $nameCssSelector = 'div.field-item > p > a';
                    break;
                case 5:
                    $url = '';
                    $nameCssSelector = '';
                    break;
                case 6:
                    $url = '';
                    $nameCssSelector = '';
                    break;
            }

            $crawlInfo = $this->getCrawlInfo($url);

            $scrapedNames = $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']);
            $scrapedCourseUrls = $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['href']);
            // $scrapedDescriptions = $crawlInfo['crawler']->filter($descriptionCssSelector)->extract($crawlInfo['text']);

            // $scrapedCourseUrls = $this->getFullUris($crawlInfo, count($scrapedNames), $j);

            if($j == 3) {
                $link = $crawlInfo['crawler']->selectLink('2')->link();
                $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
                $scrapedNames = array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']));
                $link = $crawlInfo['crawler']->selectLink('3')->link();
                $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
                $scrapedNames = array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']));
            }
            elseif($j == 4) {
                $scrapedNames = array_slice($scrapedNames, 2);
                $scrapedCourseUrls = array_slice($scrapedCourseUrls, 2);
            }

            $bar = $this->output->createProgressBar(count($scrapedNames) + 1);

            Course::where('school_id', $j)->delete();
            $bar->advance();

            for($i = 0; $i < count($scrapedNames); $i++) {
                if($j == 1) {
                    $scrapedCourseUrls[$i] = 'https://www.kdg.be' . $scrapedCourseUrls[$i];
                }
                elseif($j == 2) {
                    $scrapedCourseUrls[$i] = 'https://www.uantwerpen.be' . $scrapedCourseUrls[$i];
                }
                elseif($j == 3) {
                    $urlFromName = trim(strtolower($scrapedNames[$i]));
                    $urlFromName = str_replace(explode(',', '- en , en , & , '), array_fill(0, 4, '-'), $urlFromName);
                    $scrapedCourseUrls[$i] = 'http://www.thomasmore.be/ons-aanbod/' . $urlFromName;
                }
                elseif($j == 4) {
                    if(strpos($scrapedCourseUrls[$i], 'ap.be') === false) {
                        $scrapedCourseUrls[$i] = 'https://www.ap.be' . $scrapedCourseUrls[$i];
                    }
                }
                elseif($j == 5) {

                }
                elseif($j == 6) {

                }

                $scrapedCourse = new Course;
                $scrapedCourse->school_id = $j;
                $scrapedCourse->name = $scrapedNames[$i];
                // $scrapedCourse->description = $scrapedDescriptions[$i];
                $scrapedCourse->course_url = $scrapedCourseUrls[$i];
                $scrapedCourse->save();

                $bar->advance();
            }
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
