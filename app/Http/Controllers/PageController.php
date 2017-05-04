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
        $scrapedTitles = $crawler->filter($titleCssSelector)->extract($scrapeText);
        $scrapedContent = $crawler->filter($contentCssSelector)->extract($scrapeText);
        $scrapedTimeAgoes = $crawler->filter($timeAgoCssSelector)->extract($scrapeText);
        $scrapedImageUrls = $crawler->filter($imageUrlCssSelector)->extract($scrapeSrc);
        $scrapedArticleUrls = $crawler->filter($articleUrlCssSelector)->extract($scrapeHref);

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

        $articles = Article::paginate(12);

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
}
