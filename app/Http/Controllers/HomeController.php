<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Question;
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
        $route = '/home';
        $news = News::latest()->take(3)->get();
        $questions = Question::where('favorite', 1)->paginate(3);
        return view('index', compact('route', 'news', 'questions'));
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
