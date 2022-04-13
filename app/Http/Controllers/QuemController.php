<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemController extends Controller
{
    public function quem(){
        return view('site.about');
    }
}
