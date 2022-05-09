<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublishRequest;
use App\Models\Category;
use DB;
use App\Models\UserCategory;
use App\Models\UserDistance;
use App\Models\Map;
use App\Models\User;
use Auth;
class indexController extends Controller
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
    public function Home()
    {
        if(Auth::check()){

            $ucat = UserCategory::where('user_id',Auth::user()->id)->count();

            if($ucat==0){
                $category=Category::orderBy('id', 'DESC')->get();
                return view('frontend.ChoseCategory',compact('category'));
            }   
            $d = UserDistance::where('user_id',Auth::user()->id)->first();
            if(empty($d)){
                 return view('frontend.ChoseDistance');
            }

            
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
           }else{

            // $lat = 33.6059770;
            // $lng = 73.477788;
            // $distance = 5;
            $data = Map::first();
            $lat = $data->latitude;
            $lng = $data->longitude;
            $distance = $data->distance;

           }

           $distance = 50000000000;
            $request = PublishRequest::select();

            $request = $request->where('close',0)->where('status',1)->with('user','category_rel','user_fvrt')->orderBy('id','DESC')->skip(0)->take(4)->get();

            foreach($request as $u){

                $actual = 6371 * acos(
                    cos(deg2rad((float)$lat)) * cos(deg2rad((float)$u->position))
                    * cos(deg2rad((float)$u->position2) - deg2rad((float)$lng))
                    + sin(deg2rad((float)$lat)) * sin(deg2rad((float)$u->position))
                );

                $u->distance = $actual;
           }



        $companylogo=DB::select('SELECT * FROM companylogos order by id desc');
       


        $momentsoflife=DB::select('SELECT  id ,  title ,  filename ,  created_at ,  updated_at  FROM  momentsoflife order by id desc limit 5');
      
        $exchangewithconfidence =DB::select('SELECT id, title, file, description, created_at, updated_at FROM
         exchangewithconfidence order by id desc limit 3');


        $easystepstofind=DB::select('SELECT id, title, file, created_at, updated_at FROM easystepstofind order by id desc limit 3');
        
/*        $users=DB::select('SELECT  id,name,first_name, last_name, company_name, address, created_at, image, aboutme, services FROM users  order by id desc limit 4');*/
        
        $users = User::orderBy('id','desc')->limit(4)->get();
        return view('frontend.index', [ 'companylogo' => $companylogo , 'request' => $request , 'momentsoflife' => $momentsoflife ,
        'exchangewithconfidence' => $exchangewithconfidence , 'easystepstofind' => $easystepstofind , 'users' => $users
    ]);
    }
 
   public function lang_change($lang)
   {
        \App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();
   }

   public function how_it_works()
   {
        return view('frontend.how_it_works');
   }


}
