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
use Illuminate\Support\Facades\DB;

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

        $carsBrands = Car::distinct()->select('marque')->get();
        $marques = array();
        foreach($carsBrands as $carsBrand) {
            $marques[] = $carsBrand->marque;
        }

        View::share('marques', $marques);
        
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

        $cars = Car::where('type', '=', 'sans-permis')->orderBy('created_at', 'desc')->get();

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

        //populate with images
        foreach($news as $new) {
            $images = Image::where("object_name", "news")->where("object_id", $new['id'])->get();
            $new->images = $images;
        }

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
            $images = Image::where("object_name", "news")->where("object_id", $new['id'])->get();
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

        $cars = Car::take(4)->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }


        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);


        $vehicule = Car::where('slug', $slug)->first();

        //populate with images
        $images = Image::where("object_name", "car")->where("object_id", $vehicule['id'])->get();
        $vehicule->images = $images;

        View::share('vehicule', $vehicule);
        View::share('cars', $cars);

        return view('vehicule');
    }

    public function article($slug) {

        $cars = Car::take(4)->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);


        $article = News::where('slug', $slug)->first();

        //populate with images
        $images = Image::where("object_name", "news")->where("object_id", $article['id'])->get();
        $article->images = $images;

        View::share('article', $article);

        return view('article');
    }

    public function produit($slug) {

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $produit = Produit::where('en_magasin', '>', 0)->where('en_stock', '>', 0)->where('slug', $slug)->first();
        $images = Image::where("object_name", "produit")->where("object_id", $produit['id'])->get();
        $produit->images = $images;


        //TODO: get products instead
        $cars = Car::take(4)->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }


        View::share('produit', $produit);
        View::share('cars', $cars);

        return view('produit');
    }

    public function forfait($slug) {

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $forfait = Forfait::where('slug', $slug)->first();
        $images = Image::where("object_name", "forfait")->where("object_id", $forfait['id'])->get();
        $forfait->images = $images;


        //TODO: get products instead
        $cars = Car::take(4)->orderBy('created_at', 'desc')->get();

        //populate with images
        foreach($cars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }


        $forfaits = Forfait::take(4)->orderBy('created_at', 'desc')->get();

        View::share('forfait', $forfait);
        View::share('forfaits', $forfaits);
        View::share('cars', $cars);

        return view('forfait');
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
            $message->to('stamcar.toyota@neuf.fr');
        });

        return view('contactOk');
    }

    public function searchVeh() {

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $anneeMax = Input::get('anneeMax');
        $anneeMin = Input::get('anneeMin');

        $kmMax = Input::get('kmMax');
        $kmMin = Input::get('kmMin');

        $prixMax = Input::get('prixMax');
        $prixMin = Input::get('prixMin');

        $marque = Input::get('marque');

        $foundCars = Car::where('annee', '>=', $anneeMin)
            ->where('annee', '<=', $anneeMax)
            ->where('km', '>=', $kmMin)
            ->where('km', '<=', $kmMax)
            ->where('prix', '>=', $prixMin)
            ->where('prix', '<=', $prixMax)
            ->where('marque', $marque)->get();

        //populate with images
        foreach($foundCars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }

        View::share('foundCars', $foundCars);

        return view('searchVeh');
    }

    function search($keyword) {

        $news = News::take(3)->orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $foundCars = Car::where('titre', 'like', '%' . $keyword . '%')->get();

        //populate with images
        foreach($foundCars as $car) {
            $images = Image::where("object_name", "car")->where("object_id", $car['id'])->get();
            $car->images = $images;
        }
        
        View::share('foundCars', $foundCars);

        return view('search');
    }
}
