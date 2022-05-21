<?php

namespace App\Http\Controllers;

use App\Models\AllStatus;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Map;
use App\Models\PublishRequest;
use Auth;
use Illuminate\Http\Request;
use App\Models\serviceproviderfavModel;
use DB;
use App\Models\UserDistance;
use App\Models\User;

class ServiceProviders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //

            $category = DB::select('select * from category  ORDER BY id DESC');
            $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
            $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
            $thebardos = DB::select('select id , address from users  ORDER BY id DESC');
            $serviceprovider = DB::select('select * from serviceprovider  ORDER BY id DESC limit 2');
            $slider=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3');

            $slider2=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3,5');


            $users=DB::select('SELECT  id,name,first_name, last_name,rang, company_name, address, created_at, image, aboutme, services FROM users order by id desc limit 30');

                  if(Auth::check()){

            $myDistance = UserDistance::where('user_id',Auth::user()->id)->first();
// dd(Auth::user()->id);
            if(isset($myDistance)){
                $lat = $myDistance->lat;
                $lng = $myDistance->lng;
                $distance = $myDistance->distance;
            }else{

                $data = Map::first();
                $lat = $data->latitude;
                $lng = $data->longitude;
                $distance = $data->distance;

            }
           }else{

            // $lat = 33.6059770;
            // $lng = 73.477788;
            // $distance = 5;
                $data = Map::first();
                $lat = $data->latitude;
                $lng = $data->longitude;
                $distance = $data->distance;

           }

           $users = User::select();

           if($req->search){
            $users = $users->where('name', 'like', '%'.$req->search.'%');
           }

/*            $users = $users->take(30)->get()->filter(function ($profile) use ($lat, $lng, $distance) {
                $actual = 6371 * acos(
                    cos(deg2rad($lat)) * cos(deg2rad($profile->position))
                    * cos(deg2rad($profile->position2) - deg2rad($lng))
                    + sin(deg2rad($lat)) * sin(deg2rad($profile->position))
                );


            $profile->distance = $actual;
                return $distance >= $actual;
            });;*/


           $request = PublishRequest::select();


           if($req->has('status') && $req->status){
               $st = AllStatus::where('slug',$req->status)->first();
               $request = $request->where('status',$st->id);
           }

           if($req->has('category') && $req->category){
               $st = Category::where('id',$req->category)->first();
               $request = $request->where('category',$st->id);
           }

           if($req->has('search') && $req->search){
               $request = $request->where('request_title', 'like', '%'.$req->search.'%');
           }


           $users = User::select();
           $users = $users->with('user_services');

           if(Auth::check()){

            $users = $users->with(['service_fvrt' => function ($query) {
                $query->where('userid',Auth::user()->id);
            }]);


           }

           if($req->search){
            $users = $users->where('name', 'like', '%'.$req->search.'%');
           }
           if($req->has('category'))
           {
               $users->whereHas('categories', function($query) use ($req){
                    $query->where('category_id', $req->category);
               });
           }
            $users = $users->paginate(30);
           foreach($users as $u){

                $actual = 6371 * acos(
                    cos(deg2rad((float)$lat)) * cos(deg2rad((float)$u->position))
                    * cos(deg2rad((float)$u->position2) - deg2rad((float)$lng))
                    + sin(deg2rad((float)$lat)) * sin(deg2rad((float)$u->position))
                );

                $u->distance = $actual;
           }
             

/*            $distance_a = [];$tr = 0;
            $users = $users->where(function ($profile) use ($lat, $lng, $distance,$tr,$distance_a) {
                $pos = $profile->first();

                $actual = 6371 * acos(
                    cos(deg2rad((float)$lat)) * cos(deg2rad((float)$pos->position))
                    * cos(deg2rad((float)$pos->position2) - deg2rad((float)$lng))
                    + sin(deg2rad((float)$lat)) * sin(deg2rad((float)$pos->position))
                );


                $pos->distance11 = $actual; 
                $profile = $pos;

                $distance_a[$tr] = $actual;
                $tr++;

                return $distance >= $actual;

            })->paginate(30);;*/


            


            $subCategory = NULL;$Scategory = NULL;
            if($req->has('subcategory')){
                $Scategory = Category::where('id',$req->category)->first();
                $subCategory = SubCategory::where('slug',$req->subcategory)->where('category_id',$Scategory->id)->get();                            
            }



            return view('frontend.ServiceProviders' , [ 'category' => $category , 'sub_category' => $sub_category ,
            'allstatus' => $allstatus , 'thebardos' => $thebardos , 'serviceprovider' => $serviceprovider , 'slider' => $slider, 'slider2' => $slider2 , 'users' => $users,'subCategory'=>$subCategory,'Scategory'=>$Scategory ]);

    }
    public function serviceprovidercate($cate_name)
    {

        $category = DB::select('select * from category  ORDER BY id DESC');
        $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
        $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
        $thebardos = DB::select('select id , address from users  ORDER BY id DESC');
        $serviceprovider = DB::select('select * from serviceprovider  ORDER BY id DESC limit 2');
        $slider=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3');

        $slider2=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3,5');

        $users=DB::select('SELECT  id,name,first_name, last_name,rang, company_name, address, created_at, image, aboutme, services FROM users  where services="'.$cate_name.'" order by id desc limit 30');
        if(empty($users))
        {
            toast('No Data Found','info');
        }
        else{
            toast('Successfully Found Data"'.$cate_name.'"','success');
        }
        return view('frontend.ServiceProviders' , [ 'category' => $category , 'sub_category' => $sub_category ,
        'allstatus' => $allstatus , 'thebardos' => $thebardos , 'serviceprovider' => $serviceprovider , 'slider' => $slider, 'slider2' => $slider2 , 'users' => $users ]);




    }
    public function serviceproviderfav($id)
    {
        if(Auth::user())
        {

/*           $user=DB::select('SELECT * FROM serviceproviderfav WHERE userid='.Auth::user()->id.' and user_favid='.$id.' ');*/
           $user = serviceproviderfavModel::where('userid',Auth::user()->id)->where('user_favid',$id)->first();
           if(empty($user))
           {
            $new = new serviceproviderfavModel();
            $new -> userid =  Auth::user()->id;
            $new -> user_favid =  $id;
            $new->save();
            toast('Marked as favourite','success');
            return redirect()->back();
           }
           else
           {
           $user = serviceproviderfavModel::where('userid',Auth::user()->id)->where('user_favid',$id)->delete();
            toast('Removed as favourite','warning');
            return redirect()->back();
           }

        }
        else
        {
            return redirect()->back();
        }




    }

    public function whatareyoulookingforservice(Request $request)
    {
        $category = DB::select('select * from category  ORDER BY id DESC');
        $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
        $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
        $thebardos = DB::select('select id , address from users  ORDER BY id DESC');
        $serviceprovider = DB::select('select * from serviceprovider  ORDER BY id DESC limit 2');
        $slider=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3');

        $slider2=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3,5');

        $users=DB::select('SELECT  id,name,first_name, last_name,rang, company_name, address, created_at, image, aboutme, services FROM users
          where  services LIKE "%'.$request->search_service.'%" or aboutme LIKE "%'.$request->search_service.'%" or dob like "%'.$request->search_service.'%"
          or address like "%'.$request->search_service.'%" or name like "%'.$request->search_service.'%"

          order by id desc limit 30');
        if(empty($users))
        {
            toast('No Data Found','info');
        }
        else{
            toast('Successfully Found Data"'.$request->search_service.'"','success');
        }
        return view('frontend.ServiceProviders' , [ 'category' => $category , 'sub_category' => $sub_category ,
        'allstatus' => $allstatus , 'thebardos' => $thebardos , 'serviceprovider' => $serviceprovider , 'slider' => $slider, 'slider2' => $slider2 , 'users' => $users ]);


    }

    public function serviceproviderboards($id)
    {

        $category = DB::select('select * from category  ORDER BY id DESC');
        $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
        $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
        $thebardos = DB::select('select id , address from users  ORDER BY id DESC');
        $serviceprovider = DB::select('select * from serviceprovider  ORDER BY id DESC limit 2');
        $slider=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3');

        $slider2=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3,5');

        $users=DB::select('SELECT  id,name,first_name, last_name,rang, company_name, address, created_at, image, aboutme, services FROM users  where address="'.$id.'" order by id desc limit 30');

        if(empty($users))
        {
            toast('No Data Found','info');
        }
        else{
            toast('Successfully Found Data"'.$id.'"','success');
        }
        return view('frontend.ServiceProviders' , [ 'category' => $category , 'sub_category' => $sub_category ,
        'allstatus' => $allstatus , 'thebardos' => $thebardos , 'serviceprovider' => $serviceprovider , 'slider' => $slider, 'slider2' => $slider2 , 'users' => $users ]);



    }

    public function serviceproviderpagination($limit1,$limit2)
    {

        $category = DB::select('select * from category  ORDER BY id DESC');
        $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
        $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
        $thebardos = DB::select('select id , address from users  ORDER BY id DESC');
        $serviceprovider = DB::select('select * from serviceprovider  ORDER BY id DESC limit 2');
        $slider=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3');

        $slider2=DB::select('select * FROM serviceslider ORDER BY id DESC limit 3,5');

        $users=DB::select('SELECT  id,name,first_name, last_name,rang, company_name, address, created_at, image, aboutme, services FROM users  order by id desc limit '.$limit1.','.$limit2.' ');

        if(empty($users))
        {
            toast('No Data Found','info');
        }
        else{
            toast('Successfully Found Data','success');
        }
        return view('frontend.ServiceProviders' , [ 'category' => $category , 'sub_category' => $sub_category ,
        'allstatus' => $allstatus , 'thebardos' => $thebardos , 'serviceprovider' => $serviceprovider , 'slider' => $slider, 'slider2' => $slider2 , 'users' => $users ]);


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
