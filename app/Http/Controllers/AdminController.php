<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    public function admin(){
        return view('admin/index');
    }

    public function users(){
        return view('admin/Users');
    }

    public function news(){
        return view('admin/News');
    }

    public function memberAppliances(){
        return view('admin/MemberAppliances');
    }

    public function insuranceAppliances(){
        return view('admin/InsuranceAppliances');
    }

    public function insurances(){
        return view('admin/Insurances');
    }

    public function userQuestions(){
        return view('admin/UserQuestions');
    }

}
