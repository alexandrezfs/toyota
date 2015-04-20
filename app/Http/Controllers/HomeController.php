<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

    public function gammeToyota()
    {
        return view('gammeToyota');
    }

    public function sansPermis()
    {
        return view('sansPermis');
    }

    public function occasion()
    {
        return view('occasion');
    }

    public function pieces()
    {
        return view('pieces');
    }

    public function infosPratiques()
    {
        return view('infosPratiques');
    }

    public function actu()
    {
        return view('actu');
    }

    public function forfaits()
    {
        return view('forfaits');
    }

    public function contact()
    {
        return view('contact');
    }

}
