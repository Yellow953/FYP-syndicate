<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }

    public function DeleteUser($id){
        $user = User::find($id)->delete();
        return redirect()->back(); 
    }

    public function EditUser($id){
        $user = User::find($id);
        return view('admin.EditUser', compact('user'));
    }

    public function SaveUser(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->active = $request->active;
        $user->start_date = $request->start_date;
        $user->end_date = $request->end_date;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $user->profile_image = $filename;
        }
        
        $user->save();

        return redirect('/en/admin/users');
    }

    public function NewUser(){
        return view('admin.NewUser');
    }

    public function SaveNewUser(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->active = $request->active;
        $user->start_date = $request->start_date;
        $user->end_date = $request->end_date;
        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $user->profile_image = $filename;
        }else{
            $user->profile_image = "default.png";
        }
        
        $user->save();

        return redirect('/en/admin/users');
    }


}
