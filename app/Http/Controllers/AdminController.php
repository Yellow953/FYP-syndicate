<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\MemberApplication;
use App\Models\InsuranceApplication;
use App\Models\News;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function admin(){
        return view('admin/index');
    }

    public function users(){
        $users = User::paginate(5);
        return view('admin/Users', compact('users'));
    }

    public function news(){
        $news = News::paginate(5);
        return view('admin/News', compact('news'));
    }

    public function memberApplications(){
        $memberApplications = MemberApplication::paginate(5);
        $users = User::all();
        return view('admin/MemberApplications', compact('memberApplications', 'users'));
    }

    public function insuranceApplications(){
        $insuranceApplications = InsuranceApplication::paginate(5);
        $users = User::all();
        return view('admin/InsuranceApplications', compact('insuranceApplications', 'users'));
    }

    public function insurances(){
        $insurances = Insurance::paginate(5);
        $users = User::all();
        return view('admin/Insurances', compact('insurances', 'users'));
    }

    public function userQuestions(){
        $questions = Question::paginate(5);
        return view('admin/UserQuestions', compact('questions'));
    }

}
