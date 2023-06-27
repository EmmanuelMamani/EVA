<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historiaController extends Controller
{
    //
    public function ver_intro(){
        return view('introduccion');
    }
}
