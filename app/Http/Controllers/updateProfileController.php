<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class updateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function updateprofile(Request $request)
    {
        
        if(!$request->password){
              toast('Password is required','danger');  
                  return redirect()->route('modify-personal-info');  
        }

        if (!\Hash::check($request->password , Auth::user()->password )) {
            toast('Password doesnot match','danger'); 
                return redirect()->route('modify-personal-info');
        }


        if($request->hasFile('image')){
  	      $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            
            $image->move(('images/'),time().'_'.$image_name);
        
            $image_path = "images/".time().'_'.$image_name;
        }
         if(!empty($image_path))
        {
            DB::table('users')->where('id',Auth::user()->id)->update(['first_name' => $request->first_name, 'last_name' => $request->last_name,
            'siret_number' => $request->siret_number,  'phone_number' => $request->phone_number , 'email' => $request->email , 'address' => $request->address
            ,'image' => $image_path,'facebook_profile_url'=>$request->facebook_profile_url
        ]);
        }
      //  DB::select('update users set first_name='..'');
        DB::table('users')->where('id',Auth::user()->id)->update(['first_name' => $request->first_name, 'last_name' => $request->last_name,
        'siret_number' => $request->siret_number,  'phone_number' => $request->phone_number , 'email' => $request->email , 'address' => $request->address,'facebook_profile_url'=>$request->facebook_profile_url
        
    ]);
/*    alert()->success("Personal Info Updated Successfully ");*/
     toast('Personal Info Updated Successfully','success'); 
    return redirect()->route('modify-personal-info');

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
        //
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
    public function destroy($id)
    {
        //
    }
}
