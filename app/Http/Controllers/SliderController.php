<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }
   
}
