<?php
/**
 * Created by PhpStorm.
 * User: alexandrenguyen
 * Date: 20/04/15
 * Time: 23:01
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Input;
use Request;
use DB;
use App\Car;
use App\Image;
use View;

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
        $car = new Car();
        $car->titre = Input::get('titre');
        $car->description = Input::get('description');
        $car->km = Input::get('km');
        $car->prix = Input::get('prix');
        $car->annee = Input::get('annee');
        $car->type = Input::get('type');

        $car->save();

        return redirect('admin/veh/list');
    }

    public function vehEditAction($id) {

        $car = Car::find($id);

        View::share('car', $car);

        return view('admin/veh/edit');
    }

    public function vehEditPostAction() {

        $id = Input::get("id");

        $car = Car::find($id);

        $car->titre = Input::get("titre");
        $car->description = Input::get("description");
        $car->km = Input::get("km");
        $car->prix = Input::get("prix");
        $car->annee = Input::get("annee");
        $car->type = Input::get('type');

        $car->save();

        return redirect('admin/veh/list');
    }

    public function upload() {

        $extension = Input::file('file')->getClientOriginalExtension();

        $filename = uniqid() . '.' . $extension;
        $uploadPath = public_path() . '/upload';
        $filepath = $uploadPath . '/' . $filename;

        Request::file('file')->move($uploadPath, $filename);

        //Register into database
        /*
        $image = new Image();
        $image->filename = $filename;
        $image->absolute_path = $filepath;
        $image->uri = Request::root() . '/upload/' . $filename;
        $image->object_name = Input::get("object_name");
        */

        $response = array("filepath" => $filepath, "filename" => $filename, "uploadPath" => $uploadPath);

        return json_encode($response);
    }
}