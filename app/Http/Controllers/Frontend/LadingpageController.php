<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;

class LadingpageController extends Controller
{
    public function index(){


        return view('ladingpage.index');
    }
}
