<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ENController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        $route='/en/home';
        return view('EN.index', compact('route'));
    }

    public function aboutus(){
        $route='/en/aboutus';
        return view('EN.AboutUs', compact('route'));
    }

    public function contactus(){
        $route='/en/contactus';
        return view('EN.ContactUs', compact('route'));
    }

    public function members(){
        $route='/en/members';
        return view('EN.Members', compact('route'));
    }

    public function applications(){
        $route='/en/applications';
        return view('EN.Applications', compact('route'));
    }
}
