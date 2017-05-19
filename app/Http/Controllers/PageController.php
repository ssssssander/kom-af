<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\School;
use App\Course;
use App\Testimonial;
use App\StudentGuideItem;
use App\Helpers\CollectionPaginate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
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

	public function studentengids(Request $request) {
        $categories = ['drinken', 'eten', 'ontspanning'];
        $selectedCategories = [];
        $studentGuideItems = [];

        foreach($categories as $category) {
            array_push($selectedCategories, $request->input($category));
        }

        for($i = 0; $i < count($selectedCategories); $i++) {
            if(!array_filter($selectedCategories)) {
                $studentGuideItems = StudentGuideItem::all();
            }
            elseif(isset($selectedCategories[$i])) {
                if(Cache::has('firstLoop')) {
                    $studentGuideItems = $studentGuideItems->merge(StudentGuideItem::where('category', $categories[$i])->get());
                }
                else {
                    $studentGuideItems = StudentGuideItem::where('category', $categories[$i])->get();
                    Cache::put('firstLoop', true, 1000);
                }
            }
        }

        Cache::flush();

        $studentGuideItems = $studentGuideItems->sortBy('name');
        $studentGuideItems = CollectionPaginate::paginate($studentGuideItems, 12, $request);

		return view('studentengids', ['studentGuideItems' => $studentGuideItems, 'selectedCategories' => $selectedCategories]);
	}

	public function zoeken(Request $request) {
        $query = $request->input('zoek');
        $query = preg_replace('/\s+/', ' ', $query);

        if($request->has('zoek')) {
            $articleResults = Article::search($query)->get();
            $courseResults = Course::search($query)->get();
            $schoolResults = School::search($query)->get();
            $studentGuideResults = StudentGuideItem::search($query)->get();

            // $results = $articleResults->merge($courseResults);
            // $results = $results->forPage($_GET['page'], 6);

            return view('zoeken',
                [
                    'query' => $query,
                    'articleResults' => $articleResults,
                    'courseResults' => $courseResults,
                    'schoolResults' => $schoolResults,
                    'studentGuideResults' => $studentGuideResults
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
