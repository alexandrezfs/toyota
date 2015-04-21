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
use App\VehOccaz;
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

    public function vehoccListAction()
    {
        $cars = VehOccaz::all();
        View::share('cars', $cars);

        return view('admin/vehoccList');
    }

    public function vehoccAddAction()
    {

        return view('admin/vehoccAdd');
    }

    public function vehoccAddPostAction()
    {
        $car = new VehOccaz();
        $car->titre = Input::get('titre');
        $car->description = Input::get('description');
        $car->km = Input::get('km');
        $car->prix = Input::get('prix');
        $car->annee = Input::get('annee');
        $car->time = date("H:i");
        $car->date = date("Y-m-d");

        $car->save();

        return redirect('admin/vehocc/list');
    }
}