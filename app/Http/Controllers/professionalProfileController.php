<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\userprofileservice;
use App\Models\UserDistance;
use Auth;
use DB;
use App\Models\PhotoGallery;

class professionalProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $usersdetail = DB::table('users')->find(Auth::user()->id);
        $usersdetailroles = DB::table('roles')->find(Auth::user()->id);
        $category = DB::select('select * from category  ORDER BY id DESC');
        $userprofileservice = userprofileservice::orderBy('id','desc')->where('userid',Auth::user()->id)->get();//DB::select('select * from userprofileservice  ORDER BY id DESC');
        $gallery = PhotoGallery::where('user_id',Auth::user()->id)->get();
        $d = UserDistance::where('user_id',Auth::user()->id)->first();
            return view('frontend.professionalProfile', [  'usersdetail' => $usersdetail , 'usersdetailroles' => $usersdetailroles
        , 'category' => $category , 'userprofileservice' => $userprofileservice,'gallery'=>$gallery, 'lat' => $d->lat, 'lng' => $d->lng
        ]);
        
    }
    public function updateuserprofile(Request $request,$id){
        DB::table('users')->where('id',$id)->update(['aboutme' => $request->aboutme]);
        return redirect()->route('professionalProfile');
    }
    public function userprofileservice(Request $request)
    {
        $aa=DB::table('userprofileservice')->where('userid',Auth::User()->id)->where('service',$request->service)->first();
      
        if(!empty($aa))
        {
           toast('Already Exsist', 'info');
            return back();
        }
        $userprofileservice=new userprofileservice();
        $userprofileservice->userid=$request->userid;
        $userprofileservice->service=$request->service;
        $userprofileservice->save();
        return back();
    }
    public function profileuser($id)
    {
       
        $usersdetail = DB::table('users')->find($id);
        $usersdetailroles = DB::table('roles')->find($id);
        $category = DB::select('select * from category  ORDER BY id DESC');
        $userprofileservice = userprofileservice::orderBy('id','desc')->where('userid',$id)->get();//DB::select('select * from userprofileservice  ORDER BY id DESC');
    
        return view('frontend.profileuser', [  'usersdetail' => $usersdetail , 'usersdetailroles' => $usersdetailroles , 'category' => $category
    , 'userprofileservice' => $userprofileservice]);
        
    }
    public function updatemapofuser(Request $request)
    {
        $user=User::where('id',Auth::user()->id)->update(['position' => $request->position , 'position2' => $request->position2]);
        return back();
    }
    public function updatephotogallary(Request $request)
    {
        $request->validate([
            'image' => 'required',         
        ]);

       foreach($request->image as $img){ 
        if($img){
  	      $image = $img;
            $image_name = $image->getClientOriginalName();
            
            $image->move(('images/'),time().'_'.$image_name);
        
            $image_path = "images/".time().'_'.$image_name;
        }


            $new = new PhotoGallery();
            $new->user_id = Auth::user()->id;
            $new->image = $image_path;
            $new->save();            

        }
/*        $user = DB::table('users')->find(Auth::user()->id);
        
        if(empty($user->photogallery1) || ($user->count==1) || ($user->count=="") )
        {
            $user = DB::table('users')->where('id',Auth::user()->id)->update(['photogallery1' => $image_path , 'count' => '2' ]);
            
        }
        else{
            $user = DB::table('users')->where('id',Auth::user()->id)->update(['photogallery2' => $image_path , 'count' => '1']);
        }*/
        return back();

    }
    public function updatenames(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $user = DB::table('users')->where('id',Auth::user()->id)->update(['first_name' => $request->firstname , 'last_name' => $request->lastname] );
        return back();
    }

    public function updateusertype(Request $request)
    {
        $request->validate([
            'usertype' => 'required',
            
        ]); 
        $user = DB::table('users')->where('id',Auth::user()->id)->update(['usertype' => $request->usertype] );
        return back();
    }

   public function delete_gallery($id)
   {
        PhotoGallery::where('id',$id)->delete();
        return redirect()->back();        
   }
}
