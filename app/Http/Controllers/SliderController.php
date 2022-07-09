<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Http\Request;

class SliderController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }

    public function DeleteSlideshow($id){
        $slideshow = Slideshow::find($id)->delete();
        return redirect()->back(); 
    }

    public function NewSlideshow(){
        return view('admin.NewSlideshow');
    }

    public function SaveNewSlideshow(Request $request){
        $slideshow = new Slideshow();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $slideshow->image = $filename;
        }
        
        $slideshow->save();

        return redirect('/en/admin/slideshow');
    }
   
}
