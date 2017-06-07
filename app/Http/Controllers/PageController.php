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
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PageController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function algemeen() {
        $news = DB::table('articles')->where('id', 3)->orderby('updated_at', 'desc')->first();
        $testimonial = DB::table('testimonials')->where('id', 4)->orderby('updated_at', 'desc')->first();
		return view('algemeen', compact('testimonial','news'));
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

		return view('school', compact('school', 'courses'));
	}

	public function nieuws() {
        $articles = DB::table('articles')->orderBy('updated_at', 'desc')->paginate(6);

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

		return view('studentengids', compact('studentGuideItems', 'selectedCategories'));
	}

	public function zoeken(Request $request) {
        if(Input::has('zoek')) {
            $query = Input::get('zoek');
            $query = preg_replace('/\s+/', ' ', $query);

            $articleResults = Article::search($query)->get();
            $courseResults = Course::search($query)->get();
            $studentGuideResults = StudentGuideItem::search($query)->get();
            $testimonialResults = Testimonial::search($query)->get();

            $searchResults = $articleResults->merge($courseResults)->merge($studentGuideResults)->merge($testimonialResults);

            $searchResults = CollectionPaginate::paginate($searchResults, 6, $request);
            $searchResults = $searchResults->appends(Input::except('page'));

            return view('zoeken', compact('query', 'searchResults'));
        }
        else {
            return back();
        }
	}
}
