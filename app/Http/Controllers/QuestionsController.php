<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionsController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function DeleteQuestion($id){
        $question = Question::find($id)->delete();
        return redirect()->back(); 
    }

    public function AddToFavorite($id){
        $question = Question::find($id);
        $question->favorite = 1;
        $question->save();
        return redirect()->back();
    }

    public function ReplyQuestion($id){
        $question  = Question::find($id);
        return view('admin.replyQuestion', compact('question'));
    }

    public function SendQuestion(Request $request, $id){
        $question = Question::find($id);
        
        $question->answer = $request->answer;
        $question->save();

        return redirect('en/admin/userQuestions');
    }  
}
