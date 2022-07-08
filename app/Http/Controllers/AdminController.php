<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Insurance;
use App\Models\MemberApplication;
use App\Models\InsuranceApplication;
use App\Models\News;
use App\Models\Project;
use App\Models\Question;
use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function admin(){
        return view('admin/index');
    }

    public function users(){
        $users = User::paginate(10);
        return view('admin/Users', compact('users'));
    }

    public function news(){
        $news = News::paginate(10);
        return view('admin/News', compact('news'));
    }

    public function memberApplications(){
        $memberApplications = MemberApplication::paginate(10);
        $users = User::all();
        return view('admin/MemberApplications', compact('memberApplications', 'users'));
    }

    public function insuranceApplications(){
        $insuranceApplications = InsuranceApplication::paginate(10);
        $users = User::all();
        return view('admin/InsuranceApplications', compact('insuranceApplications', 'users'));
    }

    public function insurances(){
        $insurances = Insurance::paginate(10);
        $users = User::all();
        return view('admin/Insurances', compact('insurances', 'users'));
    }

    public function userQuestions(){
        $questions = Question::paginate(10);
        return view('admin/UserQuestions', compact('questions'));
    }

    public function slideshow(){
        $slideshow = Slideshow::all();
        return view('Admin.slideshow', compact('slideshow'));
    }

    public function board(){
        $board = Board::paginate(10);
        return view('Admin.board', compact('board'));
    }

    public function projects(){
        $projects = Project::paginate(10);
        return view('Admin.projects', compact('projects'));
    }
}
