<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InsurancesController extends Controller{
    public function DeleteInsurance($id){
        Insurance::find($id)->delete();
        return redirect()->back();
    }

    public function ExtendInsurance($id){
        $insurance = Insurance::find($id);
        $insurance->end_date = Carbon::parse($insurance->end_date)->addMonth(1);
        $insurance->save();
        return redirect()->back();
    }
}
