<?php
/**
 * Created by PhpStorm.
 * User: alexandrenguyen
 * Date: 20/04/15
 * Time: 23:01
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Cocur\Slugify\Slugify;
use Input;
use Request;
use DB;
use App\Car;
use App\Image;
use View;
use App\ForfaitCategorie;
use App\Forfait;
use App\News;
use App\Produit;

class AdminController extends Controller
{

    public function __construct()
    {
        if (!Request::is('admin') && !Request::is('admin/action/login')) {
            $this->middleware('authAdmin');
        }
    }

    public function home()
    {
        return view('admin/home');
    }

    public function login()
    {
        if(Session::get('username')) {
            return redirect('/admin/home');
        }

        return view('admin/login');
    }

    public function loginAction()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if ($username == "admin" && $password == "sta2008") {
            Session::put('username', $username);
            return redirect('admin/home');
        } else {
            return redirect('admin');
        }
    }

    public function vehListAction()
    {
        $cars = Car::all();
        View::share('cars', $cars);

        return view('admin/veh/list');
    }

    public function vehAddAction()
    {
        return view('admin/veh/add');
    }

    public function vehAddPostAction()
    {
        $slugify = new Slugify();

        $car = new Car();
        $car->titre = Input::get('titre');
        $car->marque = Input::get('marque');
        $car->description = Input::get('description');
        $car->km = Input::get('km');
        $car->prix = Input::get('prix');
        $car->annee = Input::get('annee');
        $car->moteur = Input::get('moteur');
        $car->transmission = Input::get('transmission');
        $car->chassis = Input::get('chassis');
        $car->type = Input::get('type');
        $car->images_json = Input::get('images');
        $car->slug = $slugify->slugify($car->titre);

        $car->save();

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        Image::saveImages($images, Input::get("object_name"), $car->id);

        return redirect('admin/veh/list');
    }

    public function vehEditAction($id)
    {
        $car = Car::find($id);

        View::share('car', $car);

        return view('admin/veh/edit');
    }

    public function vehEditPostAction()
    {
        $slugify = new Slugify();

        $id = Input::get("id");

        //remove all car images
        Image::where('object_id', '=', $id)->delete();

        $car = Car::find($id);

        $car->titre = Input::get('titre');
        $car->marque = Input::get('marque');
        $car->description = Input::get('description');
        $car->km = Input::get('km');
        $car->prix = Input::get('prix');
        $car->annee = Input::get('annee');
        $car->type = Input::get('type');
        $car->moteur = Input::get('moteur');
        $car->transmission = Input::get('transmission');
        $car->chassis = Input::get('chassis');
        $car->images_json = Input::get('images');
        $car->slug = $slugify->slugify($car->titre);

        $car->save();

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        Image::saveImages($images, Input::get("object_name"), $car->id);

        $car->save();

        return redirect('admin/veh/list');
    }

    function addForfaitAction() {

        $categories = ForfaitCategorie::all();

        View::share('categories', $categories);

        return view('admin/forfaits/add');
    }

    function addForfaitPostAction() {

        $slugify = new Slugify();

        $forfait = new Forfait();

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        $forfait->images_json = $images_json;
        $forfait->categorie_id = Input::get('categorie_id');
        $forfait->titre = Input::get('titre');
        $forfait->contenu = Input::get('contenu');
        $forfait->slug = $slugify->slugify($forfait->titre);

        $forfait->save();

        Image::saveImages($images, Input::get("object_name"), $forfait->id);

        return redirect('admin/forfaits/list');
    }

    function listForfaitsAction() {

        $forfaits = Forfait::all();

        View::share('forfaits', $forfaits);

        return view('admin/forfaits/list');
    }

    function editForfaitAction($id) {

        $forfait = Forfait::find($id);

        $categories = ForfaitCategorie::all();

        View::share('categories', $categories);
        View::share('forfait', $forfait);

        return view('admin/forfaits/edit');
    }

    function editForfaitPostAction() {

        $slugify = new Slugify();

        $id = Input::get('id');
        $forfait = Forfait::find($id);

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        $forfait->images_json = $images_json;
        $forfait->categorie_id = Input::get('categorie_id');
        $forfait->titre = Input::get('titre');
        $forfait->contenu = Input::get('contenu');
        $forfait->slug = $slugify->slugify($forfait->titre);

        $forfait->save();

        Image::saveImages($images, Input::get("object_name"), $forfait->id);

        return redirect('admin/forfaits/list');
    }

    function addForfaitCategorieAction() {

        return view('admin/forfaits/categories/add');
    }

    function addForfaitCategoriePostAction() {

        $categorie = new ForfaitCategorie();
        $categorie->nom = Input::get('nom');
        $categorie->save();

        return redirect('admin/forfaits/categories/list');
    }

    function listForfaitCategoriesAction() {

        $categories = ForfaitCategorie::all();

        View::share('categories', $categories);

        return view('admin/forfaits/categories/list');
    }

    function newsAddAction() {

        return view('admin/news/add');
    }

    function newsAddPostAction() {

        $slugify = new Slugify();

        $news = new News();

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        $news->images_json = $images_json;
        $news->titre = Input::get('titre');
        $news->contenu = Input::get('contenu');
        $news->slug = $slugify->slugify($news->titre);

        $news->save();

        Image::saveImages($images, Input::get("object_name"), $news->id);

        return redirect('admin/news/list');
    }

    function newsEditAction($id) {

        $news = News::find($id);

        View::share("news", $news);

        return view('admin/news/edit');
    }

    function newsEditPostAction() {

        $slugify = new Slugify();

        $id = Input::get("id");
        $news = News::find($id);

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        $news->images_json = $images_json;
        $news->titre = Input::get('titre');
        $news->contenu = Input::get('contenu');
        $news->slug = $slugify->slugify($news->titre);

        $news->save();

        Image::saveImages($images, Input::get("object_name"), $news->id);

        return redirect('admin/news/list');
    }

    function newsListAction() {

        $news = News::all();

        View::share("news", $news);

        return view('admin/news/list');
    }

    function produitsAddAction() {

        return view('admin/produits/add');
    }

    function produitsAddPostAction() {

        $slugify = new Slugify();

        $produit = new Produit();

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        $produit->images_json = $images_json;
        $produit->titre = Input::get('titre');
        $produit->description = Input::get('description');
        $produit->prix = Input::get('prix');
        $produit->prix_port = Input::get('prix_port');
        $produit->sold_count = 0;
        $produit->code = Input::get('code');
        $produit->en_magasin = Input::get('en_magasin') ? true : false;
        $produit->en_stock = Input::get('en_stock');
        $produit->date_limite_fin = Input::get('date_limite_fin');
        $produit->slug = $slugify->slugify($produit->titre);

        $produit->save();

        Image::saveImages($images, Input::get("object_name"), $produit->id);

        return redirect('admin/produits/list');
    }

    function produitsEditAction($id) {

        $produit = Produit::find($id);

        View::share("produit", $produit);

        return view('admin/produits/edit');
    }

    function produitsEditPostAction() {

        $slugify = new Slugify();

        $id = Input::get("id");
        $produit = Produit::find($id);

        $images_json = Input::get('images');
        $images = array_map('json_decode', json_decode($images_json));

        $produit->images_json = $images_json;
        $produit->titre = Input::get('titre');
        $produit->description = Input::get('description');
        $produit->prix = Input::get('prix');
        $produit->prix_port = Input::get('prix_port');
        $produit->code = Input::get('code');
        $produit->en_magasin = Input::get('en_magasin') ? true : false;
        $produit->en_stock = Input::get('en_stock');
        $produit->date_limite_fin = Input::get('date_limite_fin');
        $produit->slug = $slugify->slugify($produit->titre);

        $produit->save();

        Image::saveImages($images, Input::get("object_name"), $produit->id);

        return redirect('admin/produits/list');
    }

    function produitsListAction() {

        $produits = Produit::all();

        View::share("produits", $produits);

        return view('admin/produits/list');
    }

    public function upload()
    {
        $extension = Input::file('file')->getClientOriginalExtension();

        $filename = uniqid() . '.' . $extension;
        $uploadPath = public_path() . '/upload';
        $filepath = $uploadPath . '/' . $filename;

        Request::file('file')->move($uploadPath, $filename);

        $response = array("filepath" => $filepath, "filename" => $filename, "uploadPath" => $uploadPath, "uri" => Request::root() . '/upload/' . $filename);

        return json_encode($response);
    }

    public function analytics() {

        return view("admin/analytics");
    }

    public function logout() {

        Session::flush();

        return redirect("admin");
    }
}