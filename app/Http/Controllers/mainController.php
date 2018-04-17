<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function viewHomepage(){
        return view('homepage');
    }
}
