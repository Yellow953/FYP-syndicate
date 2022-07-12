<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\News;
use App\Models\Project;
use App\Models\Question;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller{
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/home');
    }

    public function index(){
        $route = '/home';
        $news = News::latest()->take(3)->get();
        $questions = Question::where('favorite', 1)->paginate(3);
        $slides = Slideshow::paginate(3);
        return view('index', compact('route', 'news', 'questions', 'slides'));
    }

    public function aboutus(){
        $route='/aboutus';
        $projects = Project::paginate(3);
        return view('AboutUs', compact('route', 'projects'));
    }

    public function contactus(){
        $route='/contactus';
        return view('ContactUs', compact('route'));
    }

    public function members(){
        $route='/members';
        $board = Board::all();
        return view('Members', compact('route', 'board'));
    }

    public function applications(){
        $route='/applications';
        return view('Applications', compact('route'));
    }

    public function NewQuestion(Request $request){
        $question = new Question();

        $question->name = $request->name;
        $question->email = $request->email;
        $question->topic = $request->topic;
        $question->subject = $request->subject;
        $question->question= $request->message;
        $question->favorite = 0;

        $question->save();

        return redirect()->back();
    }
}
