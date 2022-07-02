<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function DeleteNews($id){
        $news = News::find($id)->delete();
        return redirect()->back(); 
    }

    public function EditNews($id){
        $news = News::find($id);
        return view('admin.EditNews', compact('news'));
    }

    public function SaveNews(Request $request, $id){

    }

    public function NewNews(){
        return view('admin.NewNews');
    }

    public function SaveNewNews(Request $request){

    }
}
