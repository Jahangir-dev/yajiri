<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublishRequest;
use App\Models\Category;
use App\Models\Chat;
use App\Models\serviceproviderfavModel;
use App\Models\User;
use App\Models\review;
use App\Models\publish_image;
use App\Models\AllStatus;
use App\Models\FavRequestModel;
use App\Models\Map;
use App\Models\theboard;
use Auth;
use DB;
use App\Models\UserCategory;
use App\Models\UserDistance;

class RequestController extends Controller
{
    public function confirm_publish_save(Request $request)
    {
     //   dd($request);

        // $request->validate([
        //     'request_title' => 'required',
        //     'category' => 'required',
        //     'sub_category' => 'required',
        //     'price' => 'required',
        //     'position' => 'required',
        //     'description' => 'required',
        //     'file'=>'required',
        //     ]);



        if(Auth::user()){

        $validated = $request->validate([
            'request_title' =>'required',
            'category' =>'required',
            'sub_category' =>'required',

            'price' =>'required',
            'position' =>'required',
            'position2' =>'required',
            'description' =>'required',
            'file' =>'required',


        ]);
        if(isset($request->urgent) || isset($request->professional) || isset($request->professional) )
        {
            $thumbnail="";

            $new= new PublishRequest();
            $new->request_title=$request->request_title;
            $new->category=$request->category;
            $new->sub_category=$request->sub_category;
            $new->budget=$request->budget;
            $new->price=$request->price;
            $new->position=$request->position;
            $new->position2=$request->position2;
            $new->formated_address=$request->formated_address;
            $new->description=$request->description;
            $new->urgent=$request->urgent;
            $new->professional=$request->professional;
            $new->phone_number=$request->phone_number;


            $new->auth_id=Auth::user()->id;
            $new->save();

            if ($request->hasFile('file'))
                    {

                        $images = $request->file('file');

                        foreach($images as $image) {
                            $name = $image->getClientOriginalName();


/*                            $path =  $image->move(public_path('images/images/'),$name);*/


                                    $destinationPath = public_path()."/images/images/";
                                    $extension =  $image->getClientOriginalExtension();
                                    $fileName = time();
                                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                                    if(!$image->move($destinationPath,$fileName))
                                    {
                                        throw new \Exception("Failed Upload");                    
                                    }

                                    $picture = asset("/public/images/images/")."/".$fileName;

                            publish_image::create([
                                'publish_id' =>  $new->id,
                                'images' => 'images/images/'.$fileName
                              ]);
                        }


                }
                $neww=PublishRequest::find($new->id);
                $neww->file='images/images/'.$fileName;


                $neww->save();
            return redirect()->route('confirm-publish',['id'=>$new->id]);
        }else{
            toast('Please Login For Publish Request','info');
            return redirect()->back();
        }
        }
        else{
            toast('Please Login For Publish Request','info');
            return redirect()->back();
        }




    }
    public function confirm_publish_save_update(Request $request)
    {

         if(Auth::user()){

            $validated = $request->validate([
            'request_title' =>'required',
            'category' =>'required',
            'sub_category' =>'required',

            'price' =>'required',
            'position' =>'required',
            'description' =>'required',

        ]);


    if(isset($request->urgent) || isset($request->professional) || isset($request->phone_number) )
        {
            $p = PublishRequest::where('id',$request->id)->first();
            $p->request_title = $request->request_title;
            $p->category = $request->category;
            $p->sub_category = $request->sub_category;
            $p->price = $request->price;
            $p->position = $request->lat;
            $p->position2 = $request->lng;
            $p->description = $request->description;
            $p->budget = $request->budget;
            $p->urgent = $request->urgent;
            $p->professional = $request->professional;
            $p->phone_number = $request->phone_number;
            $p->formated_address = $request->formated_address;
            $p->save();

                   if ($request->hasFile('file'))
                    {

                        $images = $request->file('file');

                        foreach($images as $image) {
                            $name = $image->getClientOriginalName();


                            $path =   $image->move(('images/images'),time().'_'.$name);



                            publish_image::create([
                                'publish_id' =>  $request->id,
                                'images' => $path
                              ]);
                        }
                }            

                 toast('Modified','success');
            return redirect()->route('confirm-publish',['id'=>$request->id]);
                
        }


         }
        else{
            toast('Please Login For Publish Request','info');
            return redirect()->back();
        }

    }

    public function modify_delete_image($id){
        $publish_image=publish_image::where('id',$id)->delete();    
            toast('Removed','success');
        return redirect()->back();            
    }


    public function confirm_publish($id)

    {

        $request=PublishRequest::where('id',$id)->with('user')->first();
        $publish_image=publish_image::where('publish_id',$id)->get();
        //dd($request);
        return view('frontend.ConformPublish',compact('request','publish_image'));
    }

    public function UpdatePublishRequest($id){

        $category=Category::get();
        if(Auth::user())
        {
            $islogin="true";
            $request=PublishRequest::where('id',$id)->with('user')->first();
            $publish_image=publish_image::where('publish_id',$id)->get();

            return view('frontend.UpdatePublishRequest',compact('category','islogin','request','publish_image'));
        }
        else{
            $islogin="false";

            return view('frontend.UpdatePublishRequest',compact('category','islogin','request'));
        }


    }


    public function user_confirm_published_save(Request $request)
    {

       $confirm_publish=PublishRequest::where('id',$request->id)->first();
       if(!empty($confirm_publish)){
        $confirm_publish->confirm_status=1;
        $confirm_publish->save();
       }
       toast('Your Request Is Published Successfully','success');
       return view('frontend.validatingRequest1', ['requestid' => $request->id]);
    }

    public function validating_request()
    {

        //dd($request);


        return view('frontend.validatingRequest1');
    }

    public function view_request($id)
    {
        $confirm_publish=PublishRequest::where('id',$id)->with('user')->first();
        $publish_image=publish_image::where('publish_id',$id)->get();

      return view('frontend.ViewRequest' , [ 'confirm_publish' => $confirm_publish , 'publish_image' => $publish_image ]);
    }

    public function my_request()
    {
        $myrequest=PublishRequest::where('auth_id',Auth::user()->id)->with('user','category_rel')->get();
        //dd($myrequest);
     return view('frontend.MyRequests',compact('myrequest'));
    }
    public function close($id)
    {
        PublishRequest::where('id',$id)->update(['close' => '1']);
        alert()->success('Closed');
        return back();

    }
    public function cancel($id)
    {
        PublishRequest::where('id',$id)->update(['cancel' => '1']);
        alert()->success('Cancel');
        return back();

    }


    public function myfavourites_neighbor(Request $req)
    {
        if(Auth::user())
        {
           /* $data=DB::select('SELECT *
            FROM serviceproviderfav
            INNER JOIN users ON serviceproviderfav.user_favid=users.id where serviceproviderfav.userid='.Auth::user()->id.' ');*/

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

           $data = serviceproviderfavModel::where('userid',Auth::user()->id)->with('user_d');
          if($req->search){

            $data = $data->whereHas('provider_d', function($q) use ($req){
                $q->where('name', 'like', '%'.$req->search.'%');
            });

            $data = $data->with('provider_d.user_services');            
          }else{
            $data = $data->with('provider_d.user_services');
          }


            $data = $data->paginate(30);
            foreach($data as $u){
                $actual = 6371 * acos(  
                    cos(deg2rad((float)$lat)) * cos(deg2rad((float)$u->provider_d->position))
                    * cos(deg2rad((float)$u->provider_d->position2) - deg2rad((float)$lng))
                    + sin(deg2rad((float)$lat)) * sin(deg2rad((float)$u->provider_d->position))
                );

                $u->distance = $actual;

           }

           return view('frontend.MyFavouritesNeighbors' , [ 'data' =>$data ]);
           /*if($data)
           {
            return view('frontend.MyFavouritesNeighbors' , [ 'data' =>$data ]);
           }
           else
           {
               toast('No Data Found');
               return view('frontend.MyFavouritesNeighbors' , [ 'data' =>$data ]);

           }*/

        }
        else{
            return back();
        }

    }

    public function my_favourite_request()
    {
     if(Auth::user())
     {

        $favourite=DB::select('select publish_request.id, publish_request.request_title, publish_request.category,publish_request.sub_category, publish_request.formated_address, publish_request.budget , publish_request.price
        , publish_request.position , publish_request.description , publish_request.urgent , publish_request.urgent , publish_request.professional ,  publish_request.phone_number  ,
         publish_request.file , publish_request.auth_id , publish_request.map, publish_request.created_at , users.name , users.first_name ,  users.last_name , users.last_name , users.address ,users.phone_number
          from publish_request   left JOIN users  ON   publish_request.auth_id  = users.id   JOIN favouriterequest ON publish_request.auth_id = favouriterequest.user_id and publish_request.id
          = favouriterequest.request_id where favouriterequest.whomtoshow='.Auth::user()->id.' order by id desc limit 0 , 30');
          $category=Category::get();
        //   dd($favourite);
          return view('frontend.MyFavoritesRequests', [ 'favourite' => $favourite ,  'category'  =>  $category ]);


     }
     else
     {
        toast('Please Login For Publish Request','info');


        return back();
     }


    }
    public function my_favourite_request2($limtit1,$limtit2)
    {
     if(Auth::user())
     {

        $favourite=DB::select('select publish_request.id, publish_request.request_title, publish_request.category,publish_request.sub_category, publish_request.budget , publish_request.price
        , publish_request.position , publish_request.description , publish_request.urgent , publish_request.urgent , publish_request.professional ,  publish_request.phone_number  ,
         publish_request.file , publish_request.auth_id , publish_request.map, publish_request.created_at , users.name , users.first_name ,  users.last_name , users.last_name , users.address ,users.phone_number
          from publish_request   left JOIN users  ON   publish_request.auth_id  = users.id   JOIN favouriterequest ON publish_request.auth_id = favouriterequest.user_id and publish_request.id
          = favouriterequest.request_id where favouriterequest.whomtoshow='.Auth::user()->id.' order by id desc limit '.$limtit1.', '.$limtit2.'');
          $category=Category::get();
          return view('frontend.MyFavoritesRequests', [ 'favourite' => $favourite ,  'category'  =>  $category ]);


     }
     else
     {
        toast('Please Login For Publish Request','info');


        return back();
     }


    }

    public function  my_favourite_request_category(Request $request)
    {

     if(Auth::user())
     {


      $category=DB::select('select * from category where name LIKE "%'.$request->name.'%" limit 1');
      foreach($category as $cate){
        $categoryid=$cate->id;
      }

      if(isset($categoryid)){
      $favourite=DB::select('select publish_request.id, publish_request.request_title, publish_request.category,publish_request.sub_category, publish_request.budget , publish_request.price
      , publish_request.position , publish_request.description , publish_request.urgent , publish_request.urgent , publish_request.professional ,  publish_request.phone_number  ,
       publish_request.file , publish_request.auth_id , publish_request.map, publish_request.created_at , users.name , users.first_name ,  users.last_name , users.last_name , users.address ,users.phone_number
        from publish_request   left JOIN users  ON   publish_request.auth_id  = users.id   JOIN favouriterequest ON publish_request.auth_id = favouriterequest.user_id and publish_request.id
        = favouriterequest.request_id where favouriterequest.whomtoshow='.Auth::user()->id.' and publish_request.category= '.$categoryid.' order by id desc ');
        $category=Category::get();
        return view('frontend.MyFavoritesRequests', [ 'favourite' => $favourite ,  'category'  =>  $category ]);
      }
      else
      {
        toast('No Category Found','info');


        return back();
      }

     }
     else
     {
        toast('Please Login For Publish Request','info');


        return back();
     }


    }



    public function chat()
    {

        $users = User::select('id','first_name','last_name','image')->get();
     return view('frontend.Chat',compact('users'));
    }
    public function mobile_chat_message()
    {
     return view('frontend.MobileChatMessages');
    }
    public function mobile_chat_profile()
    {
        return view('frontend.MobileChatProfile');
    }

    public function pink_leave_review($id)
    {
     return view('frontend.PinkLeaveReview' , [ 'id' => $id]);
    }

    public function save_review(Request $request,$id)
    {
        if(empty(Auth::user()))
        {
            toast('Please Sign In!','info');
            return redirect()->route('user-chat' , [ 'id' => $id ]);
        }
        if(empty($request->review))
        {
            toast('Please submit your review ','info');
            return back();
        }

        if(review::where('user_id',Auth::user()->id)){
            toast('You Already Submitted Review!','info');
            return redirect()->route('user-chat' , [ 'id' => $id ]);
        }
        $new = new review();
        $new->publish_id=$request->publish_id;
        $new->review=$request->review;
        $new->user_id=Auth::user()->id;
        $new->save();
        alert()->success('Review Submitted Successfully');
        return redirect()->route('user-chat' , [ 'id' => $id ]);

    }

    public function modify_personal_info()
    {
      // $userdetail= DB::select('select * from users where id='.Auth::user()->id.' limit 1');
      if(Auth::user())
        {
            $userdetail = DB::table('users')->find(Auth::user()->id);
            return view('frontend.ModifyPersonalinfo', compact('userdetail'));
        }
        else{
            toast('Please Login To View Your Profile','fail');
            return redirect('/');

        }

    }
    public function change_password()
    {

        return view('frontend.ChangePassword');
    }
    public function changepassword(Request $request)
    {
        if(Auth::user())
        {
        $request->validate([
            'p_password' => ['required'],
            'n_password' => ['required'],
            'c_password' => ['required'],
        ]);


        $pass= (bcrypt($request->p_password));



        $id=Auth::user()->id;
        $users = DB::table('users')->find(Auth::user()->id);

        if (\Hash::check($request->p_password , $users->password )) {
            if($request->n_password==$request->c_password)
            {
                $pass= (\Hash::make($request->n_password));

                DB::table('users')->where('id',$id)->update(['password'=>$pass]);
                return back()->with('message','Successfully Updated');

            }
            else
            {
                return back()->with('error','Password and Confirm Password Does not Match');

            }
            }else{
                return back()->with('error','Your Previous Password is incorrect!');



            }

        }
        else{
            toast('Please Login to Change Password','fail');
            return redirect()->back();

        }
    }

    public function deleteuserservice($id)
    {
     DB::table('userprofileservice')->where('id',$id)->delete();
     return back();
    }

    public function modify_categories()
    {
        $categories=DB::table('userprofileservice')->where('userid',Auth::User()->id)->orderBy('id', 'DESC')->get();
        $category=DB::table('category')->orderBy('id', 'DESC')->get();        
        $my_categories = UserCategory::where('user_id',Auth::user()->id)->pluck('category_id')->toArray();
        
        return view('frontend.ModifyCategories', compact('categories','category','my_categories'));

    }
    public function modify_categories_edit()
    {
        $category=DB::table('category')->orderBy('id', 'DESC')->get();
        $categories=DB::table('userprofileservice')->where('userid',Auth::User()->id)->orderBy('id', 'DESC')->get();

        return view('frontend.ModifyCategoryEdit', compact('categories','category'));
    }
    public function modify_distance()
    {
        $distance = UserDistance::where('user_id',Auth::user()->id)->first();
        return view('frontend.ModifyDistance',compact('distance'));
    }

    public function change_language()
    {
        return view('frontend.ChangePassword');
    }

    public function view_detail($id)
    {
     $detail=PublishRequest::where('id',$id)->with('user')->first();
     $publish_image=publish_image::where('publish_id',$detail->id)->get();

     //dd($detail);
     return view('frontend.viewdetails',compact('detail','publish_image'));
    }

    public function requests(Request $r)

    {
        $distance = 50000000000;
        $request = PublishRequest::select();
        if($r->search){
            $request = $request->where('request_title', 'like', '%'.$r->search.'%');
        }

           if(Auth::check()){

            $myDistance = UserDistance::where('user_id',Auth::user()->id)->first();
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
            $request = $request->where('close',0)->where('status',1)->with('user','category_rel','user_fvrt')->orderBy('id','DESC')->paginate(30);
            $request = $request->where('auth_id', '!=', Auth::user()->id);
           }else{

            // $lat = 33.6059770;
            // $lng = 73.477788;
            // $distance = 5;
            $data = Map::first();
            $lat = $data->latitude;
            $lng = $data->longitude;
            $distance = $data->distance;

            $request = $request->where('close',0)->where('status',1)->with('user','category_rel')->orderBy('id','DESC')->paginate(30);

           }

          

$subCategory = [];
            if($r->status){
                $request = $request->where('status',$r->status);
            }

            if($r->category){
                $request = $request->where('category',$r->category);
            }
            if($r->subcategory){
                $subCategory = DB::table('sub_category')->where('category_id', $r->category)->get();
                $request = $request->where('sub_category',$r->subcategory);
            }
            

            foreach($request as $u){

                if(Auth::check())
                {
                     $user_dist = UserDistance::where('user_id', $u->id)->first();
                     if($user_dist)
                     {
                      $actual = 6371 * acos(
                          cos(deg2rad((float)$lat)) * cos(deg2rad((float)$user_dist->lat))
                          * cos(deg2rad((float)$user_dist->lng) - deg2rad((float)$lng))
                          + sin(deg2rad((float)$lat)) * sin(deg2rad((float)$user_dist->lat))
                      );
                     }
                     else{
                         $actual = 6371 * acos(
                             cos(deg2rad((float)$lat)) * cos(deg2rad((float)$u->position))
                             * cos(deg2rad((float)$u->position2) - deg2rad((float)$lng))
                             + sin(deg2rad((float)$lat)) * sin(deg2rad((float)$u->position))
                         );
                     }
                }
                else{
                    $actual = 0;
                }

                $u->distance = $actual;
           }


/*            $request=PublishRequest::where('close',0)->where('status',1)->with('user','category_rel')
            ->orderBy('id','DESC')->skip(0)->take(30)->get();*/
            $category = DB::select('select * from category  ORDER BY id DESC');
            $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
            $allstatus = AllStatus::orderBy('id','desc')->get();
            $thebardos = theboard::orderBy('id','desc')->get();/*->DB::select('select DISTINCT position from publish_request ORDER BY id DESC')*/;
            $slider = DB::select('select * from requestslider ORDER BY id DESC');
            $favs_final = [];
            if(Auth::check())
            {
                $favs = DB::select('select user_id from favouriterequest where whomtoshow='.Auth::user()->id);
                if($favs)
                {
                    foreach($favs as $fav)
                    {
                        $favs_arr[] = $fav->user_id;
                    }
                    $favs_final = DB::table('users')
                    ->whereIn('id', $favs_arr)
                    ->get();
                }
            }
        return view('frontend.RequestsPage',compact('request','sub_category','allstatus','thebardos','category','slider','distance','favs_final','subCategory'));
    }
    public function requests2($limit1,$limit2)
    {
        $request=PublishRequest::where('status',1)->with('user','category_rel')->orderBy('id','DESC')->skip($limit1)->take($limit2)->get();

            $category = DB::select('select * from category  ORDER BY id DESC');
            $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
            $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
            $thebardos = DB::select('select DISTINCT position from publish_request ORDER BY id DESC');
            $slider = DB::select('select * from requestslider ORDER BY id DESC');

       return view('frontend.RequestsPage',compact('request','sub_category','allstatus','thebardos','category','slider'));
    }
    public function requests_location($location)
    {

        $request=PublishRequest::where('status',1)->where('position',$location)->with('user','category_rel')->orderBy('id','DESC')->get();

            $category = DB::select('select * from category  ORDER BY id DESC');
            $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
            $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
            $thebardos = DB::select('select DISTINCT position from publish_request ORDER BY id DESC');
            $slider = DB::select('select * from requestslider ORDER BY id DESC');


       return view('frontend.RequestsPage',compact('request','sub_category','allstatus','thebardos','category','slider'));
    }

    public function requests_category($cate)
    {
        $category=DB::table('category')->where('name',$cate)->first();

        $request=PublishRequest::where('status',1)->where('category',$category->id)->with('user','category_rel')->orderBy('id','DESC')->get();

            $category = DB::select('select * from category  ORDER BY id DESC');
            $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
            $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
            $thebardos = DB::select('select DISTINCT position from publish_request ORDER BY id DESC');
            $slider = DB::select('select * from requestslider ORDER BY id DESC');


       return view('frontend.RequestsPage',compact('request','sub_category','allstatus','thebardos','category','slider'));
    }
    public function whatareyoulookingfor(Request $request)
    {

        $request1=PublishRequest::
        orWhere('request_title', 'LIKE', '%'.$request->name.'%')
        ->orWhere('category', 'LIKE', '%'.$request->name.'%')
        ->orWhere('sub_category', 'LIKE', '%'.$request->name.'%')
        ->orWhere('budget', 'LIKE', '%'.$request->name.'%')
        ->orWhere('price', 'LIKE', '%'.$request->name.'%')
        ->orWhere('position', 'LIKE', '%'.$request->name.'%')
        ->orWhere('description', 'LIKE', '%'.$request->name.'%')
        ->orWhere('urgent', 'LIKE', '%'.$request->name.'%')
        ->orWhere('professional', 'LIKE', '%'.$request->name.'%')
        ->orWhere('phone_number', 'LIKE', '%'.$request->name.'%')
        ->orWhere('phone_number', 'LIKE', '%'.$request->name.'%')
        ->where('status',1)





        ->with('user','category_rel')->orderBy('id','DESC')->get();


            $category = DB::select('select * from category  ORDER BY id DESC');
            $sub_category = DB::select('select * from sub_category  ORDER BY id DESC');
            $allstatus = DB::select('select * from allstatus  ORDER BY id DESC');
            $thebardos = DB::select('select DISTINCT position from publish_request ORDER BY id DESC');
            $slider = DB::select('select * from requestslider ORDER BY id DESC');


            $request=$request1;
       return view('frontend.RequestsPage',compact('request','sub_category','allstatus','thebardos','category','slider'));
    }



    public function favouriterequest($id1,$id2)
    {

        if(Auth::user())
        {

        $isalreadyexsist=DB::select('select user_id, whomtoshow , request_id from favouriterequest where  user_id='.$id1.' and whomtoshow='.Auth::user()->id.' and
        request_id='.$id2.' ');

        if($isalreadyexsist)
        {
            FavRequestModel::where('user_id', $id1)->where('request_id', $id2)->delete();
            toast("Removed from favourites", 'warning');
            return back();
        }
        else{
            DB::select('insert into favouriterequest (user_id,request_id,whomtoshow) values ('.$id1.','.$id2.','.Auth::user()->id.')');
        toast("Added To favourite Page",'success');
        return back();

        }


        }
        else
        {

            return back();
        }

    }

    //chat message crud
    public function store(Request $request){
        $data= new Chat;
        $data->user_id = $request['user_id'];
        $data->touser_id = $request['touser_id'];
        $data->message = $request['message'];
        $data->save();
        return redirect('chat');
    }
}
