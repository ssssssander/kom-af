<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\School;
use App\Course;
use App\FreeTime;
use App\Testimonial;
use App\HeroImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
		$news = DB::table('articles')->orderby('created_at','desc')->first();
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
        $courses = Course::where('school_id', $school->id)->paginate(12);

		return view('school', ['school' => $school, 'courses' => $courses]);
	}

    // public function opleiding(Course $course) {
    //     return view('opleiding', compact('course'));
    // }

	public function nieuws() {
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

	public function zoeken(Request $request) {
        $query = $request->input('zoek');
        $query = preg_replace('/\s+/', ' ', $query);

        if($request->has('zoek')) {
            $articleResults = Article::search($query)->get();
            $courseResults = Course::search($query)->get();
            $schoolResults = School::search($query)->get();

            // $results = $articleResults->merge($courseResults);
            // $results = $results->forPage($_GET['page'], 6);

            return view('zoek',
                [
                    'query' => $query,
                    'articleResults' => $articleResults,
                    'courseResults' => $courseResults,
                    'schoolResults' => $schoolResults
                ]);
        }
        else {
            return back();
        }
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
