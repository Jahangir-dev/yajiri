<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\PublishRequest;
use App\Models\User;
use Mail;
class PublishRequestController extends Controller
{
    public function publish_request_list()
    {
        $publishrequest=PublishRequest::where('cancel',0)->where('confirm_status',1)->with('category_rel')->orderby('id','desc')->get();
        return view('admin.publish_request_list',compact('publishrequest'));
    }


    public function publishrequest()
    {
        $category=Category::get();
        if(Auth::user())
        {
            $islogin="true";
    
            return view('frontend.PublishRequest',compact('category','islogin'));
        }
        else{
            $islogin="false";
           
            return view('frontend.PublishRequest',compact('category','islogin'));
        }

       
        
    }

    public function admin_request_approve($id)
    {
    
        $approve=PublishRequest::where('id',$id)->where('confirm_status',1)->first();

        if (!empty($approve)) {
           $approve->status=1;
           $approve->save();
        }
        toast('Publish Request Is Approved','success');
        return redirect()->back();
    }
    public function admin_request_disapproe_givereason($id)
    {
        return view('admin.admin_request_disapprovegivereason',[ 'id' => $id ]);
    }

    public function admin_request_disapprove(Request $request,$id)
    {
        
       $disapprove=PublishRequest::where('id',$id)->where('confirm_status',1)->first();
     
       $auth=User::find($disapprove->auth_id);
       $email=$auth->email;
        $key=$request->disapprovereason;
        Mail::send('email',['data'=>$key ,'disapprove' => $disapprove ],function($mail) use ($email){
            $mail->to($email,'Yajiri')
            ->subject("Sent From yajari ");
    }); 



        if (!empty($disapprove)) {
           $disapprove->status=-1;
           $disapprove->save();
        }
        toast('Publish Request Is DisApproved','success');
        return redirect()->back();  
    }
    public function updateprofilepicture(Request $request){



        if($request->hasFile('image')){
  	      $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            
            $image->move(('images/'),time().'_'.$image_name);
        
            $image_path = "images/".time().'_'.$image_name;
            $user=User::where('id',Auth::user()->id)->update([ 'image' => $image_path]);
        }
       
        return back();

    }


    public function updatecoverpicture(Request $request){



        if($request->hasFile('image')){
          $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            
            $image->move(('images/'),time().'_'.$image_name);
        
            $image_path = "images/".time().'_'.$image_name;
            $user=User::where('id',Auth::user()->id)->update([ 'coverphoto' => $image_path]);
        }
       
        return back();

    }

    
    public function admin_publish_request_delete($id)
    {
        $delete=PublishRequest::where('id',$id)->where('confirm_status',1)->delete();
        toast('Publish Request Is Deleted Successfully','success');
        return redirect()->back();
    }

    public function get_subcategory(Request $r){

        $cat = SubCategory::where('category_id',$r->id)->get();

        $x = -1;

        foreach($cat as $i => $c){

            if($x==-1){
                $x = '<option value="'.NULL.'">Select SubCategory</option> <option value="'.$c->id.'">'.$c->subcategory_name.'</option>';
            }else{
                $x = $x .'<option value="'.$c->id.'">'.$c->subcategory_name.'</option>';
            }

        }


        return $x;
    }
}
