<?php

namespace App\Http\Controllers;

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
        return view('nieuws');
    }
	public function artikel($id)
	{
		return view('artikel');
	}
	public function scholen()
	{
		return view('scholen');
	}
	public function opleidingen($id)
	{
		return view('opleidingen');
	}
	public function opleiding($id)
	{
		return view('opleiding');
	}
	public function vrijetijd()
	{
		return view('vrijetijd');
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
}
