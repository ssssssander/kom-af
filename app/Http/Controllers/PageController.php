<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
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
	public function artikel(Request $request)
	{
        $articles =
            array(
                1 => array('id' => 2, 'title' => 'zing', 'content' => 'dingidy zoppety zingle boondle',
                'image_url' => '/img/Grote_Markt_Antwerpen.jpg', 'image_alt' => 'Grote Markt'),
                2 => array('id' => 7, 'title' => 'dingledoo', 'content' => 'riggidy dongle',
                'image_url' => '/img/Grote_Markt_Antwerpen.jpg', 'image_alt' => 'Grote Markt'),
                3 => array('id' => 8, 'title' => 'zippetidoodle', 'content' => 'skappity zoppety ningle nangle',
                'image_url' => '/img/Grote_Markt_Antwerpen.jpg', 'image_alt' => 'Grote Markt'),
                4 => array('id' => 22, 'title' => 'bojangle', 'content' => 'goppety zeppety',
                'image_url' => '/img/Grote_Markt_Antwerpen.jpg', 'image_alt' => 'Grote Markt')
            );

        $id = $request->route('id');

		return view('artikel', ['articles' => $articles, 'id' => $id]);
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
