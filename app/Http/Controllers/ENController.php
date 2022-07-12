<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\News;
use App\Models\Project;
use App\Models\Question;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class ENController extends Controller{
    public function index(){
        $route='/en/home';
        $news = News::latest()->take(3)->get();
        $questions = Question::where('favorite', 1)->paginate(3);
        $slides = Slideshow::paginate(3);
        return view('EN.index', compact('route', 'news', 'questions', 'slides'));
    }

    public function aboutus(){
        $route='/en/aboutus';
        $projects = Project::paginate(3);
        return view('EN.AboutUs', compact('route', 'projects'));
    }

    public function contactus(){
        $route='/en/contactus';
        return view('EN.ContactUs', compact('route'));
    }

    public function members(){
        $route='/en/members';
        $board = Board::all();
        return view('EN.Members', compact('route', 'board'));
    }

    public function applications(){
        $route='/en/applications';
        return view('EN.Applications', compact('route'));
    }
}
