<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller{
    public function DeleteQuestion($id){
        $question = Question::find($id)->delete();
        return redirect()->back(); 
    }

    public function AddToFavorite($id){
        $question = Question::find($id);
        $question->favorite = 1;
        return redirect()->back();
    }

    public function NewQuestion(Request $request){
        $question = new Question();

        return redirect()->back();
    }
}
