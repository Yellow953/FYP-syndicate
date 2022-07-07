<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }

    public function DeleteNews($id){
        $news = News::find($id)->delete();
        return redirect()->back(); 
    }

    public function EditNews($id){
        $news = News::find($id);
        return view('admin.EditNews', compact('news'));
    }

    public function SaveNews(Request $request, $id){
        $news = News::find($id);

        $news->name = $request->name;
        $news->text = $request->text;
        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $news->image = $filename;
        }

        $news->save();

        return redirect('/en/admin/news');
    }

    public function NewNews(){
        return view('admin.NewNews');
    }

    public function SaveNewNews(Request $request){
        $news = new News();

        $news->name = $request->name;
        $news->text = $request->text;
        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $news->image = $filename;
        }

        $news->save();

        return redirect('/en/admin/news');
    }
}
