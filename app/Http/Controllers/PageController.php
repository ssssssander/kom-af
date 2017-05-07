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

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
   {
        $heroImages = HeroImage::all();
        view()->share('heroImages', $heroImages);
        // $this->middleware('auth');
   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function algemeen()
	{
		$news = false; //DB::table("articles")->latest()->first();
		return view('algemeen',compact('news'));
	}
	public function testimonials()
	{
		$testimonials = Testimonial::all();

		return view('testimonials', compact('testimonials'));
	}
	public function testimonial(Testimonial $testimonial)
	{
		return view('testimonial', compact('testimonial'));
	}
	public function scholen()
	{
        $schools = School::all();

		return view('scholen', compact('schools'));
	}
	public function school(School $school)
	{
        Course::where('school_id', $school->id)->delete();

        if($school->id == 1) {
            $url = 'https://www.kdg.be/opleidingen/professionele-bachelor';
            $nameCssSelector = 'article > header > h4 > a';
            $descriptionCssSelector = 'div.field-item > h3 + p';
        }
        elseif($school->id == 2) {
            $url = 'https://www.uantwerpen.be/nl/onderwijs/opleidingsaanbod/';
            $nameCssSelector = 'section > h2 > a';
        }

        $crawlInfo = $this->getCrawlInfo($url);

        $scrapedNames = $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['text']);
        // $scrapedDescriptions = $crawlInfo['crawler']->filter($descriptionCssSelector)->extract($crawlInfo['text']);
        $scrapedCourseUrls = $crawlInfo['crawler']->filter($nameCssSelector)->extract($crawlInfo['href']);

        for($i = 0; $i < count($scrapedNames); $i++) {
            if($school->id == 1) {
                $scrapedCourseUrls[$i] = 'https://www.kdg.be' . $scrapedCourseUrls[$i];
            }
            elseif($school->id == 2) {
                $scrapedCourseUrls[$i] = 'https://www.uantwerpen.be' . $scrapedCourseUrls[$i];
            }

            $scrapedCourse = new Course;
            $scrapedCourse->school_id = $school->id;
            $scrapedCourse->name = $scrapedNames[$i];
            // $scrapedCourse->description = $scrapedDescriptions[$i];
            $scrapedCourse->course_url = $scrapedCourseUrls[$i];
            $scrapedCourse->save();
        }

        $courses = Course::all();

		return view('school', compact('school'));
	}
	public function opleiding(Course $course)
	{
		return view('opleiding', compact('course'));
	}
	public function nieuws()
	{
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
	public function artikel(Article $article)
	{
		return view('artikel', compact('article'));
	}
	public function gids()
	{
        $free_time_items = FreeTime::all();

		return view('gids', compact('free_time_items'));
	}
	public function zoeken()
	{
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
            'crawler' => $crawler,
            'text' => $scrapeText,
            'src' => $scrapeSrc,
            'href' => $scrapeHref
        ];

        return $crawlInfo;
    }
}
