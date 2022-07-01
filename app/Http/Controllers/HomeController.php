<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/home');
    }

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

    public function applications(){
        $route='/applications';
        return view('Applications', compact('route'));
    }

    public function contactussubmit(Request $request){

        return redirect()->back();
    }
}
