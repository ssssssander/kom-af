<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\School;
use App\Course;
use App\FreeTime;
use App\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function algemeen()
	{
		return view('algemeen');
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
		$articles = Article::paginate(12);

		return view('nieuws', compact('articles'));
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
