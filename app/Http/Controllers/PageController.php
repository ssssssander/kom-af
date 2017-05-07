<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\School;
use App\Course;
use App\FreeTime;
use App\Testimonial;
use App\HeroImage;
use Goutte\Client;
use Illuminate\Support\Facades\DB;

class PageController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $heroImages = HeroImage::all();
        view()->share('heroImages', $heroImages);
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function algemeen() {
		$news = false; //DB::table("articles")->latest()->first();
		return view('algemeen',compact('news'));
    }

	public function testimonials() {
		$testimonials = Testimonial::all();
		return view('testimonials', compact('testimonials'));
	}

	public function testimonial(Testimonial $testimonial) {
		return view('testimonial', compact('testimonial'));
	}

	public function scholen() {
        $schools = School::all();
		return view('scholen', compact('schools'));
	}

	public function school(School $school) {
        Course::where('school_id', $school->id)->delete();

        switch($school->id) {
            case 1:
                $url = 'https://www.kdg.be/opleidingen/professionele-bachelor';
                $nameCssSelector = 'article > header > h4 > a';
                break;
            case 2:
                $url = 'https://www.uantwerpen.be/nl/onderwijs/opleidingsaanbod/';
                $nameCssSelector = 'section > h2 > a';
                break;
            case 3:
                $url = 'http://www.thomasmore.be/opleidingen/zoeken?f[0]=im_field_opleidingstype%3A6&f[1]=im_field_opleidingstype%3A64';
                $nameCssSelector = 'div.field > h2';
                break;
            case 4:
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

        // $scrapedCourseUrls = $this->getFullUris($crawlInfo, count($scrapedNames), $school->id);

        // Thomas More moet speciaal doen ze
        if($school->id == 3) {
            $link = $crawlInfo['crawler']->selectLink('2')->link();
            $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
            $scrapedNames = array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']));
            $link = $crawlInfo['crawler']->selectLink('3')->link();
            $crawlInfo['crawler'] = $crawlInfo['client']->click($link);
            $scrapedNames = array_merge($scrapedNames, $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']));
        }
        elseif($school->id == 4) {
            $scrapedNames = array_slice($scrapedNames, 2);
            $scrapedCourseUrls = array_slice($scrapedCourseUrls, 2);
        }

        for($i = 0; $i < count($scrapedNames); $i++) {
            if($school->id == 1) {
                $scrapedCourseUrls[$i] = 'https://www.kdg.be' . $scrapedCourseUrls[$i];
            }
            elseif($school->id == 2) {
                $scrapedCourseUrls[$i] = 'https://www.uantwerpen.be' . $scrapedCourseUrls[$i];
            }
            elseif($school->id == 3) {
                $urlFromName = trim(strtolower($scrapedNames[$i]));
                $urlFromName = str_replace(explode(',', '- en , en , & , '), array_fill(0, 4, '-'), $urlFromName);
                $scrapedCourseUrls[$i] = 'http://www.thomasmore.be/ons-aanbod/' . $urlFromName;
            }
            elseif($school->id == 4) {
                if(strpos($scrapedCourseUrls[$i], 'ap.be') === false) {
                    $scrapedCourseUrls[$i] = 'https://www.ap.be' . $scrapedCourseUrls[$i];
                }
            }
            elseif($school->id == 5) {

            }
            elseif($school->id == 6) {

            }

            $scrapedCourse = new Course;
            $scrapedCourse->school_id = $school->id;
            $scrapedCourse->name = $scrapedNames[$i];
            // $scrapedCourse->description = $scrapedDescriptions[$i];
            $scrapedCourse->course_url = $scrapedCourseUrls[$i];
            $scrapedCourse->save();
        }

		return view('school', compact('school'));
	}

    // public function opleiding(Course $course) {
    //     return view('opleiding', compact('course'));
    // }

	public function nieuws() {
        Article::where('scraped', true)->delete();

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

        for($i = 0; $i < count($scrapedTitles); $i++) {
            $scrapedArticle = new Article;
            $scrapedArticle->title = $scrapedTitles[$i];
            $scrapedArticle->content = $scrapedContent[$i];
            $scrapedArticle->time_ago = $scrapedTimeAgoes[$i];
            $scrapedArticle->image_url = $scrapedImageUrls[$i];
            $scrapedArticle->article_url = $scrapedArticleUrls[$i];
            $scrapedArticle->scraped = true;
            $scrapedArticle->save();
        }

        $articles = Article::paginate(6);

		return view('nieuws', compact('articles'));
	}

	public function artikel(Article $article) {
		return view('artikel', compact('article'));
	}

	public function gids() {
        $free_time_items = FreeTime::all();

		return view('gids', compact('free_time_items'));
	}

	public function zoeken() {
		return view('zoek');
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

    // public function getFullUris($crawlInfo, $scrapedNamesCount, $schoolId) {
    //     $scrapedCourseUrls = array();

    //     for($i = 1; $i <= $scrapedNamesCount; $i++) {
    //         if($schoolId == 1) {
    //             array_push(
    //                 $scrapedCourseUrls,
    //                 $crawlInfo['crawler']->filter("article:nth-of-type($i) > header > h4 > a")->link()->getUri()
    //             );
    //     }
    //         elseif($schoolId == 2) {
    //             array_push(
    //                 $scrapedCourseUrls,
    //                 $crawlInfo['crawler']->filter("h2:nth-of-type($i) > a")->link()->getUri()
    //             );
    //         }
    //     }

    //     return $scrapedCourseUrls;
    // }
}
