<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpagewebController extends Controller
{
    //

    public function index(){

        return view('ladingpage.index');
    }
}
