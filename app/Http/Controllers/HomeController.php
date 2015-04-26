<?php namespace App\Http\Controllers;

use App\Car;
use App\Image;
use View;
use App\ForfaitCategorie;
use App\Forfait;
use App\News;
use App\Produit;
use App\EmailNewsletter;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

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
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $cars = Car::where('type', '=', 'neuf')->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }

        View::share('cars', $cars);

        return view('home');
	}

    public function gammeToyota()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $cars = Car::where('type', '=', 'neuf')->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }

        View::share('cars', $cars);

        return view('gammeToyota');
    }

    public function sansPermis()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $cars = Car::where('type', '=', 'neuf')->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "sans-permis")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }

        View::share('cars', $cars);

        return view('sansPermis');
    }

    public function occasion()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $cars = Car::where('type', '=', 'occasion')->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }

        View::share('cars', $cars);

        return view('occasion');
    }

    public function pieces()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $pieces = Produit::where('en_magasin', '>', 0)->where('en_stock', '>', 0)->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($pieces as $piece) {
            $images = Image::where("object_name", "produit")->where("object_id", $piece['id'])->get();
            $piece->images = $images;
        }

        View::share('pieces', $pieces);

        return view('pieces');
    }

    public function infosPratiques()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        return view('infosPratiques');
    }

    public function actu()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $newsfeed = News::take(30)->orderBy('created_at', 'desc')->get();
        View::share('newsfeed', $newsfeed);

        //populate with images
        foreach($newsfeed as $new) {
            $images = Image::where("object_name", "car")->where("object_id", $new['id'])->get();
            $new->images = $images;
        }

        return view('actu');
    }

    public function forfaits()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $forfaits = Forfait::orderBy('created_at', 'desc')->get();
        View::share('forfaits', $forfaits);

        //populate with images
        foreach($forfaits as $forfait) {
            $images = Image::where("object_name", "forfait")->where("object_id", $forfait['id'])->get();
            $forfait->images = $images;
        }

        return view('forfaits');
    }

    public function contact()
    {
        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        return view('contact');
    }

    public function vehicule($slug) {

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $vehicule = Car::where('slug', $slug)->first();

        View::share('vehicule', $vehicule);

        return view('vehicule');
    }

    public function signupNewsletter() {

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        if(count(EmailNewsletter::where('email', Input::get('email'))->get()) == 0)
        {
            $newsletter = new EmailNewsletter();
            $newsletter->email = Input::get('email');
            $newsletter->is_disabled = false;
            $newsletter->save();
        }

        return view('newsletterOk');
    }

    public function sendContactEmail() {

        $nom = Input::get('nom');
        $email = Input::get('email');
        $message = Input::get('message');

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        Mail::raw('Nouveau message du site stamcar.fr: NOM: [' . $nom . '] EMAIL: [' . $email . '] MESSAGE: [' . $message . ']', function($message)
        {
            $message->from('noreply@mandrillapp.com', 'Message du site stamcar.fr');
            $message->to('alex.zhixin@gmail.com');
        });

        return view('contactOk');
    }
}