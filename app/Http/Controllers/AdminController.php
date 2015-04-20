<?php
/**
 * Created by PhpStorm.
 * User: alexandrenguyen
 * Date: 20/04/15
 * Time: 23:01
 */

namespace App\Http\Controllers;


class AdminController extends Controller {

    public function __construct()
    {

    }

    public function login() {

        return view('admin/login');
    }

}