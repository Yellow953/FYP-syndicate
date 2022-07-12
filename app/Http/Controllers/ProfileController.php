<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile($id){
        $user = User::find($id);
        $route = '/profile';
        return view('Profile', compact('user', 'route'));
    }

    public function profileEdit($id){
        $user = User::find($id);
        $route = '/profile/edit';
        return view('EditProfile', compact('user', 'route'));
    }

    public function profileSave(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/images/uploads/', $filename);
            $user->profile_image = $filename;
        }

        $user->password = bcrypt($request->password);

        $user->save();


        return redirect('profile/'.$user->id);
    }


}
