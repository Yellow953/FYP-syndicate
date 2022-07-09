<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function DeleteBoard($id){
        $board = Board::find($id)->delete();
        return redirect()->back(); 
    }

    public function EditBoard($id){
        $board = Board::find($id);
        return view('admin.EditBoard', compact('board'));
    }

    public function SaveBoard(Request $request, $id){
        $board = Board::find($id);

        $board->name = $request->name;
        $board->position = $request->position;
        $board->start = $request->start;
        $board->end = $request->end;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $board->image = $filename;
        }
        
        $board->save();

        return redirect('/en/admin/board');
    }

    public function NewBoard(){
        return view('admin.NewBoard');
    }

    public function SaveNewBoard(Request $request){
        $board = new Board();

        $board->name = $request->name;
        $board->position = $request->position;
        $board->start = $request->start;
        $board->end = $request->end;

        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $board->image = $filename;
        }

        $board->save();

        return redirect('/en/admin/board');
    }
}
