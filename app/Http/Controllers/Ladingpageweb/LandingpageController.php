<?php

namespace App\Http\Controllers\Ladingpageweb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index(){


        return view('ladingpage.index');
    }
}
