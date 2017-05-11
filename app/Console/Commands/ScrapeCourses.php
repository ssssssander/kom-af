<?php

namespace App\Console\Commands;

use App\Helpers\CrawlInfo;
use App\Course;
use App\School;
use Illuminate\Console\Command;

class ScrapeCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:courses {schools?* : The schools you wish to scrape the courses from, defaults to all schools}';

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
        $schools = $this->argument('schools');
        $schools = array_map('strtolower', $schools);
        $amountOfSchools = 4;
        $possibleSchools = array('kdg', 'ua', 'tm', 'ap');
        $amountOfSchoolsArray = range(1, $amountOfSchools);

        if(empty($schools) || in_array('all', $schools)) {
            for($i = 1; $i <= $amountOfSchools; $i++) {
                $this->scrapeCourse($i);
            }
        }
        else {
            for($i = 0; $i < $amountOfSchools; $i++) {
                if(in_array($possibleSchools[$i], $schools)) {
                    $this->scrapeCourse($amountOfSchoolsArray[$i]);
                }
            }
        }
    }

    public function scrapeCourse($schoolId) {
        $loadingText = "\r\n\r\n" . 'Scraping ' . School::find($schoolId)->name . '...';
        $this->info($loadingText);
        $schoolIdIndex = $schoolId - 1;

        $urls = array(
            'https://www.kdg.be/opleidingen/professionele-bachelor',
            'https://www.uantwerpen.be/nl/onderwijs/opleidingsaanbod',
            'http://www.thomasmore.be/opleidingen/zoeken?f[0]=im_field_opleidingstype%3A6&f[1]=im_field_opleidingstype%3A64',
            'https://www.ap.be/bachelors-en-masters/459',
            '',
            ''
        );

        $nameCssSelectors = array(
            'article > header > h4 > a',
            'section > h2 > a',
            'div.field > h2',
            'div.field-item > p > a',
            '',
            ''
        );

        $crawlInfo = CrawlInfo::getCrawlInfo($urls[$schoolIdIndex]);

        $scrapedNames = $crawlInfo['crawler']->filter($nameCssSelectors[$schoolIdIndex])->extract($crawlInfo['text']);
        $scrapedCourseUrls = $crawlInfo['crawler']->filter($nameCssSelectors[$schoolIdIndex])->extract($crawlInfo['href']);
        // $scrapedDescriptions = $crawlInfo['crawler']->filter($descriptionCssSelector)->extract($crawlInfo['text']);

        // $scrapedCourseUrls = $this->getFullUris($crawlInfo, count($scrapedNames), $schoolId);

        if($schoolId == 3) {
            $link = $crawlInfo['crawler']->selectLink('2')->link();
            $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
            $scrapedNames =
                array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelectors[$schoolIdIndex])->extract($crawlInfo['text']));
            $link = $crawlInfo['crawler']->selectLink('3')->link();
            $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
            $scrapedNames =
                array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelectors[$schoolIdIndex])->extract($crawlInfo['text']));
        }
        elseif($schoolId == 4) {
            $scrapedNames = array_slice($scrapedNames, 2);
            $scrapedCourseUrls = array_slice($scrapedCourseUrls, 2);
        }

        $bar = $this->output->createProgressBar(count($scrapedNames));
        $scrapedCourseIds = Course::select('id')->get();

        if(!$scrapedCourseIds->isEmpty()) {
            Course::truncate();
        }

        for($i = 0; $i < count($scrapedNames); $i++) {
            if($schoolId == 1) {
                $scrapedCourseUrls[$i] = 'https://www.kdg.be' . $scrapedCourseUrls[$i];
            }
            elseif($schoolId == 2) {
                $scrapedCourseUrls[$i] = 'https://www.uantwerpen.be' . $scrapedCourseUrls[$i];
            }
            elseif($schoolId == 3) {
                $urlFromName = trim(strtolower($scrapedNames[$i]));
                $urlFromName = str_replace(explode(',', '- en , en , & , '), array_fill(0, 4, '-'), $urlFromName);
                $scrapedCourseUrls[$i] = 'http://www.thomasmore.be/ons-aanbod/' . $urlFromName;
            }
            elseif($schoolId == 4) {
                if(strpos($scrapedCourseUrls[$i], 'ap.be') === false) {
                    $scrapedCourseUrls[$i] = 'https://www.ap.be' . $scrapedCourseUrls[$i];
                }
            }
            elseif($schoolId == 5) {

            }
            elseif($schoolId == 6) {

            }

            $scrapedCourse = new Course;
            $scrapedCourse->school_id = $schoolId;
            $scrapedCourse->name = $scrapedNames[$i];
            // $scrapedCourse->description = $scrapedDescriptions[$i];
            $scrapedCourse->course_url = $scrapedCourseUrls[$i];
            $scrapedCourse->save();

            $bar->advance();
        }

        $bar->finish();
    }
}
