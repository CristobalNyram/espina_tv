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
    public function services(){
        return view('ladingpage.sponsor');

    }
    public function contact_us(){
        return view('ladingpage.contact-us');

    }
}
