<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function DeleteUser($id){
        $user = User::find($id)->delete();
        return redirect()->back(); 
    }

    public function EditUser($id){
        $user = User::find($id);
        return view('admin.EditUser', compact('user'));
    }

    public function SaveUser(Request $request, $id){

    }

    public function NewUser(){
        return view('admin.NewUser');
    }

    public function SaveNewUser(Request $request){

    }


}
