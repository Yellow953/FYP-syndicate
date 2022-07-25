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
        $total_users = User::all()->count();
        $total_insurances = Insurance::all()->count();
        $total_news = News::all()->count();
        $total_questions = Question::all()->count();
        return view('admin/index', compact('total_users', 'total_insurances', 'total_news', 'total_questions'));
    }

    public function users(){
        $search = request()->query('search');
        
        if($search){
            $users = User::where('name', 'LIKE', "%{$search}%")->paginate(10);
            if ($users->count() == 0) {
                $users = User::where('email', 'LIKE', "%{$search}%")->paginate(10);
                if ($users->count() == 0) {
                    $users = User::where('phone', 'LIKE', "%{$search}%")->paginate(10);
                }
            }
        }else{
            $users = User::paginate(10);
        }
        
        return view('admin/Users', compact('users'));
    }

    public function news(){
        $search = request()->query('search');
        if($search){
            $news = News::where('name', 'LIKE', "%{$search}%")->paginate(10);
            if ($news->count() == 0) {
                $news = News::where('text', 'LIKE', "%{$search}%")->paginate(10);
            }
        }else{
            $news = News::paginate(10);
        }

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
        $search = request()->query('search');
        if($search){
            $questions = Question::where('email', 'LIKE', "%{$search}%")->paginate(10);
        }else{
            $questions = Question::paginate(10);
        }

        return view('admin/UserQuestions', compact('questions'));
    }

    public function slideshow(){
        $slideshow = Slideshow::paginate(10);
        return view('Admin.slideshow', compact('slideshow'));
    }

    public function board(){
        $search = request()->query('search');

        if($search){
            $board = Board::where('name', 'LIKE', "%{$search}%")->paginate(10);
        }else{
            $board = Board::paginate(10);
        }
        return view('Admin.board', compact('board'));
    }

    public function projects(){
        $search = request()->query('search');
        if($search){
            $projects = Project::where('name', 'LIKE', "%{$search}%")->paginate(10);
        }else{
            $projects = Project::paginate(10);
        }
        $projects = Project::paginate(10);
        return view('Admin.projects', compact('projects'));
    }
}
