<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\School;
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
    public function nieuws()
    {
        $articles = Article::all();

        return view('nieuws', compact('articles'));
    }
	public function artikel(Article $article)
	{
		return view('artikel', compact('article'));
	}
	public function scholen()
	{
        $schools = School::all();

		return view('scholen', compact('schools'));
	}
	public function opleidingen($id)
	{
		return view('opleidingen');
	}
	public function opleiding($id)
	{
		return view('opleiding');
	}
	public function vrije_tijd()
	{
		return view('vrije_tijd');
	}
	public function omgeving()
	{
		return view('omgeving');
	}
	public function testimonials()
	{
		return view('testimonials');
	}
	public function testimonial($id)
	{
		return view('testimonial');
	}
	public function zoeken($query)
	{
		return view('testimonial');
	}
}
