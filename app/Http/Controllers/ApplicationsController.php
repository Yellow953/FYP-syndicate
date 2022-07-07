<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\InsuranceApplication;
use App\Models\MemberApplication;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicationsController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function AcceptInsurance($id){
        $insuranceApplication = InsuranceApplication::find($id);

        $insurance = new Insurance();
        $insurance->user_id = $insuranceApplication->user_id;
        $insurance->start_date = Carbon::now();
        $insurance->end_date = Carbon::now()->addMonth(3);

        $insurance->save();
        $insuranceApplication->delete();
    
        return redirect()->back();
    }

    public function RejectInsurance($id){
        InsuranceApplication::find($id)->delete();
        return redirect()->back();
    }

    public function AcceptMember($id){
        $memberApplication = MemberApplication::find($id);

        $user = User::find($memberApplication->user_id);
        $user->role = 2;
        $user->start_date = Carbon::now(); 
        $user->end_date = Carbon::now()->addMonth(3);

        $user->save();
        $memberApplication->delete();

        return redirect()->back();
    }

    public function RejectMember($id){
        MemberApplication::find($id)->delete();
        return redirect()->back();
    }

}
