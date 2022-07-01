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

    public function memberApplications(){
        return view('admin/MemberApplications');
    }

    public function insuranceApplications(){
        return view('admin/InsuranceApplications');
    }

    public function insurances(){
        return view('admin/Insurances');
    }

    public function userQuestions(){
        return view('admin/UserQuestions');
    }

}
