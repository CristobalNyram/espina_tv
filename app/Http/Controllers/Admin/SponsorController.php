<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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

         return response()->json($this->sponsors->getAllSponsorsActiveAndInActive());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:sponsors,email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'description'=>'required',
            'address' => 'required',
            'time_support' => 'required'
         ]);



        $sponsor = new Sponsor();
        $sponsor->name=$request->name;
        $slug = SlugService::createSlug(Sponsor::class, 'slug',$sponsor->name);
        $sponsor->slug=$slug;
        $sponsor->description=$request->description;
        $sponsor->time_support=$request->time_support;
        $sponsor->phone_number=$request->phone_number;
        $sponsor->address=$request->address;
        $sponsor->email=now();
        $sponsor->status='2';

        if($sponsor->save()){
            $answer['status']=2;
            $answer['title']='success';
            $answer['message']='New Sponsor';

            return response()->json($answer);



        }else{
            $answer['status']=-2;
            $answer['title']='error';
            $answer['message']='erro Sponsor';
            return json_encode($answer);

        }


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
            $answer['message']='Error in the process';
            $answer['title']='Error';
            return response()->json($answer);
        }
    }

    public function desactive($id)
    {
        $answer=[];
        $sponsor= $this->sponsors::findOrFail($id);
        $sponsor->status=-1;

        if($sponsor->update()){

            $answer['status']=2;
            $answer['message']='Sponsor deactived';
            $answer['title']='Success';

            return response()->json($answer);
        }else{
            $answer['status']=-2;
            $answer['message']='Error in the process';
            $answer['title']='Error';
            return response()->json($answer);
        }
    }

    public function active($id)
    {
        $answer=[];
        $sponsor= $this->sponsors::findOrFail($id);
        $sponsor->status=2;

        if($sponsor->update()){

            $answer['status']=2;
            $answer['message']='Sponsor actived';
            $answer['title']='Success';

            return response()->json($answer);
        }else{
            $answer['status']=-2;
            $answer['message']='Error in the process';
            $answer['title']='Error';
            return response()->json($answer);
        }
    }
}
