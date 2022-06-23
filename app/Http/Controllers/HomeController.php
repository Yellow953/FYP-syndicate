<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        $route='/home';
        return view('index', compact('route'));
    }

    public function aboutus(){
        $route='/aboutus';
        return view('AboutUs', compact('route'));
    }

    public function contactus(){
        $route='/contactus';
        return view('ContactUs', compact('route'));
    }

    public function members(){
        $route='/members';
        return view('Members', compact('route'));
    }

    public function appliances(){
        $route='/appliances';
        return view('Appliances', compact('route'));
    }
}
