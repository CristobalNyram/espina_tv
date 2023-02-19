<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{

    private $sponsors;

    function __construct() {
        $this->sponsors = new Sponsor();
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.sponsor.index');
    }

    public function getSponsors(){

         return response()->json($this->sponsors->getAllSponsorsActive());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $answer=[];
        $sponsor= $this->sponsors::findOrFail($id);
        $sponsor->status=-2;

        if($sponsor->update()){

            $answer['status']=2;
            $answer['message']='Sponsor deleted';
            $answer['title']='Success';

            return response()->json($answer);
        }else{
            $answer['status']=-2;
            $answer['message']='Sponsor deleted';
            $answer['title']='Error';
            return response()->json($answer);
        }
    }
}
