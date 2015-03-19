<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

		$photo = photo::paginate(30);
		return View::make('public.home',['photo'=>$photo]);
	}

	public function gallery()
	{
		$photo = photo::where('idPort','=','1')->get();
		return View::make('public.gallery',['photo'=>$photo]);
	}

	public function contact()
	{
		return View::make('public.contact');
	}

	public function portfolio()
	{
		
		return View::make('public.portfolio');
	}

	public function work()
	{
		
		return View::make('public.work');
	}
	public function bio()
	{
		
		return View::make('public.bio');
	}

	public function event()
	{
		$photo = photo::where('idCom','=','1')->get();
		return View::make('public.event',['photo'=>$photo]);
	}

	public function fineArt()
	{
		$photo = photo::where('idArt','=','1')->get();
		return View::make('public.fineArt',['photo'=>$photo]);
	}
	public function largeArt($id)
	{
		$photo = photo::findOrFail($id);
		return View::make('public.largeImage',['photo'=> $photo]);
	}
	public function next($id)
	{
		$photo = photo::findOrFail($id);
		$next = photo::where('id', '>', 25)->get();
		return View::make('public.largeArt',['photo'=>$photo])->with('next',$next);
	}

}
