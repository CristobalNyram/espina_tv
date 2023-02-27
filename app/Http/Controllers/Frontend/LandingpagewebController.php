<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class LandingpagewebController extends Controller
{
    //

    private $sponsors;

    function __construct() {
        $this->sponsors = new Sponsor();
      }

    public function index(){

        return view('ladingpage.index');
    }
    public function services(){

          $sponsors_active= $this->sponsors->getAllSponsorsActive();

        return view('ladingpage.sponsor',['sponsors_active'=>$sponsors_active]);

    }
    public function contact_us(){
        return view('ladingpage.contact-us');

    }

    public function service_page(){
        return view('ladingpage.services.index');

    }
}
