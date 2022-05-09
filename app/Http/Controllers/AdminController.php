<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\AllStatus;
use App\Models\theboard;
use App\Models\serviceProviderModel;
use App\Models\RequestSliderModel;
use App\Models\ServiceSliderModel;
use App\Models\User;
use App\Models\MomentsofLifeModel;
use App\Models\RealizeYourProjectModel;
use App\Models\easystepsModel;
use App\Models\contactusModels;
use App\Models\Map;
use DB;
use Mail;


class AdminController extends Controller
{
    public function admin_home()
    {
        return view('admin.adminhome');
    }
    public function category_list()
    {
        $category=Category::get();
      return view('admin.category_list',compact('category'));
    }

    public function admin_add_new_category()
    {
     return view('admin.admin_add_new_category');
    }

    public function admin_category_save(Request $request)
    {

        $new=new Category();
        $new->name=$request->category_name;
        $new->save();



        alert()->success('Category Inserted Successfully');
        return redirect()->route('category-list');
    }


    public function admin_category_edit($id)
    {

       $edit= Category::where('id',$id)->first();
       return view('admin.admin_category_edit',compact('edit'));
    }

    public function admin_category_update(Request $request)
    {

       $update= Category::where('id',$request->id)->first();
       if (!empty($update)) {
           $update->name=$request->category_name;
           $update->save();
       }
       toast('Category Is Updated Successfully','success');
       return redirect()->route('category-list');


    }

    public function admin_category_delete($id)
    {
        $delete = Category::where('id',$id)->delete();
        toast('Category Is Deleted Successfully','success');
        return redirect()->back();

    }
    public function sub_category_list()
    {
        $sub_category = SubCategory::with('subcategory')->get();
       return view('admin.sub_category_list',compact('sub_category'));
    }

    public function add_new_subcategory()
    {
        $category=Category::get();
     return view('admin.add_new_subcategory',compact('category'));
    }
    public function admin_subcategory_save(Request $request)
    {

       $new= new SubCategory();
       $new->subcategory_name=$request->subcategory_name;
       $new->category_id=$request->category_id;
       $new->save();
       alert()->success("SubCategory is Inserted Successfully");
       return redirect()->route('sub-category-list');
    }

    public function admin_subcategory_edit($id)
    {
        $category=Category::get();
       $edit = SubCategory::where('id',$id)->first();
       return view('admin.admin_subcategory_edit',compact('edit','category'));
    }

    public function admin_subcategory_update(Request $request)
    {
       $update = SubCategory::where('id',$request->id)->first();
       if (!empty($update)) {
       $update->subcategory_name=$request->subcategory_name;
       $update->category_id=$request->category_id;
       $update->save();

       }
       toast('Subcategory is Updated Successfully','success');
       return redirect()->route('sub-category-list');
    }

    public function admin_subcategory_delete($id)
    {
        $delete=SubCategory::where('id',$id)->delete();
        toast('Subcategory is Deleted Successfully','success');
        return redirect()->back();
    }
    public function user_list()
    {

        $users = DB::table('users')
            ->join('role_users', 'role_users.user_id', '=', 'users.id')
            ->get();

       return view('admin.user_list',compact('users'));
    }

    public function admin_add_new_user()
    {
      return view('admin.admin_add_new_user');
    }

    public function admin_user_save(Request $request)
    {
        $token = md5(date('Y-m-d').microtime());

        $this->validate($request, [
            'registration_type' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'image' => 'required',
            'term_condition' => 'required',
            'receive_information' => 'required',

        ]);



        if ($request->hasFile('image'))
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('image')->getClientOriginalExtension();
                    $filename_original = $request->file('image')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('image')->move($destinationPath,$filename_original))
                    {
                        throw new \Exception("Failed Upload");
                    }

                    $thumbnail = asset("/images/images/")."/".$filename_original;


                }

        $input = $request->all();
        $user_id=User::insertGetId([
        'first_name'=>$request->fname,
        'last_name'=>$request->lname,
        'company_name'=>$request->company_name,
        'siret_number' => $request->siert_number,
        'address'=>$request->address,
        'password'=>bcrypt($request->password),
        'verifypass'=>$request->password,
        'phone_number' => $request->phone,
        'email' => $request->email,
         'dob' => $request->dob,
         'registration_type' => $request->registration_type,
         'image'=>$thumbnail,
        'remember_token' => $token
        ]);


         $id=User::find($user_id);
        $role=DB::table('roles')->where('name','User')->first();
        $id->roles()->attach($role->id);
        $email = $request->email;
        $token=$token;
        $data = ['email'=>$email,'token'=>$token];
         Mail::send('emails.verify_mail',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'New Registration')->from("systems@better1.com")->subject("New Registration Email Verification");
            });

         toast('New User is Created Successfully','success');
        return redirect()->back();
    }


    public function admin_user_edit($id)
    {
        $edit=User::where('id',$id)->first();
        return view('admin.admin_user_edit',compact('edit'));
    }
    public function admin_user_update(Request $request)
    {

             $this->validate($request, [
                    'registration_type' => 'required',
                    'email' => 'required|email|exists:users,email',
                    'phone' => 'required',
                    'address' => 'required',
                    'password' => 'required',
                    'dob' => 'required',
                    'term_condition' => 'required',
                    'receive_information' => 'required',

                ]);



                if ($request->hasFile('image'))
                            {

                            $destinationPath = public_path()."/images/images/";
                            $extension =  $request->file('image')->getClientOriginalExtension();
                            $filename_original = $request->file('image')->getClientOriginalName();
                            $fileName = time();
                            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                            if(!$request->file('image')->move($destinationPath,$filename_original))
                            {
                                throw new \Exception("Failed Upload");
                            }

                            $thumbnail = asset("/images/images/")."/".$filename_original;


                        }

        $update=User::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->first_name=$request->fname;
            $update->last_name=$request->name;
            $update->company_name=$request->company_name;
            $update->company_name=$request->company_name;
            $update->address=$request->address;
            $update->password=bcrypt($request->passowrd);
            $update->phone_number=$request->phone;
            $update->email=$request->email;
            $update->dob=$request->dob;
            $update->siret_number=$request->siert_number;
            $update->registration_type=$request->registration_type;
            if ($request->hasFile('image')) {

                $update->image=$thumbnail;
            }
            $update->save();

        }
        alert()->success("User Data is Updated Successfully");
        return redirect()->route('user-list');
    }

    public function admin_user_delete($id)
    {
        $delete=User::where('id',$id)->delete();
        toast('User Is Deleted Successfully','success');
        return redirect()->back();
    }




    //All Status
    public function allstatus()
    {
        $allstatus=DB::select('select * from allstatus  ORDER BY id DESC');
        return view('admin.allstatus' , [ 'allstatus' => $allstatus ]);

    }

    public function add_new_status()
    {
        return view('admin.add_new_status');

    }
    public function admin_status_save(Request $request)
    {
        $new=new AllStatus();
        $new->status=$request->status;
        $new->save();
        alert()->success('All Status Inserted Successfully');
        return redirect()->route('allstatus');
    }

    public function admin_status_delete($id)
    {
        $delete = Allstatus::where('id',$id)->delete();
        toast('Category Is Deleted Successfully','success');
        return redirect()->back();
    }
    public function admin_status_edit($id)
    {
        $edit=Allstatus::find($id);
        return view('admin.admin_status_edit', ['edit' => $edit ]);
    }
    public function admin_status_update(Request $request)
    {

        $update= Allstatus::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->status=$request->status;
            $update->save();
        }
        toast('Status Is Updated Successfully','success');
        return redirect()->route('allstatus');
    }

    //All Bardos

    public function thebardos()
    {
        $thebardos=DB::select('select * from thebardos ORDER BY id DESC');
        return view('admin.thebardos' , [ 'thebardos' => $thebardos ]);

    }

    public function add_new_thebardos()
    {
        return view('admin.add_new_thebardos');

    }
    public function admin_thebardos_save(Request $request)
    {
        $new=new theboard();
        $new->name=$request->name;
        $new->save();
        alert()->success('All Status Inserted Successfully');
        return redirect()->route('thebardos');

    }
    public function admin_theboard_delete($id)
    {
        $delete = theboard::where('id',$id)->delete();
        toast('The Bardos Is Deleted Successfully','success');
        return redirect()->back();
    }
    public function admin_theboard_edit($id)
    {
        $edit=theboard::find($id);

        return view('admin.thebardos_edit', ['edit' => $edit ]);
    }
    public function admin_theboards_update(Request $request)
    {

        $update= theboard::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->name=$request->name;
            $update->save();
        }
        toast('The Bardos Is Updated Successfully','success');
        return redirect()->route('thebardos');
    }

    public function Service_Provider()
    {
        $serviceprovider= DB::select('select * from serviceprovider ORDER BY id DESC');
        return view('admin.service_provider' , [ 'serviceprovider' => $serviceprovider ]);
    }
    public function requestSlider()
    {
        $requestslider= DB::select('select * from  requestslider ORDER BY id DESC');
        return view('admin.requestslider' , [ 'requestslider' => $requestslider ]);
    }
    public function add_new_requestSlider()
    {

        return view('admin.add_new_requestSlider');
    }
    public function add_save_requestSlider(Request $request)
    {
        $validated = $request->validate([

            'file' => 'required',
            'filename' => 'required',
        ]);


        if($request->hasFile('file')){
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(('uploads'),time().'_'.$image_name);

            $image_path = "uploads/" . $image_name;
        }


        $new = new RequestSliderModel;

        $new->file=$imgg;
        $new->filename=$request->filename;
        $new->save();

        return back()->with('success','You have successfully upload file.');

        $requestslider=DB::select('select * from  requestslider ORDER BY id DESC');
        return view('admin.requestslider' , [ 'requestslider' => $requestslider ]);
    }

    public function admin_requestSlider_delete($id)
    {
        RequestSliderModel::find($id)->delete();

        return redirect()->back()->with('message','successfull deleted');
    }
    public function admin_requestSlider_edit($id)
    {
        $request=RequestSliderModel::find($id);

        return view('admin.add_new_requestSlider_edit', ['request' =>  $request ] );


    }
    public function add_save_requestSlider_edit_save(Request $request,$id)
    {
        $request->validate([


            'filename' => 'required',
        ]);


        if($request->hasFile('file')){
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(('uploads'),time().'_'.$image_name);

            $image_path = "uploads/" .time().'_'.$image_name;
            $new=RequestSliderModel::find($id);

            $new->file=$imgg;
            $new->filename=$request->filename;
            $new->save();
        }

            $new=RequestSliderModel::find($id);
            $new->filename=$request->filename;
            $new->save();





        return redirect()->route('requestSlider')->with('message','Sussfully Edited');
    }

    public function serviceSlider()
    {
        $requestslider=DB::select('select * from  serviceslider ORDER BY id DESC');
        return view('admin.serviceSlider' , [ 'requestslider' => $requestslider ]);
    }

    public function add_new_serviceSlider()
    {

        return view('admin.add_new_serviceSlider');
    }

    public function add_save_serviceSlider(Request $request)
    {
        $validated = $request->validate([

            'file' => 'required',
            'filename' => 'required',
        ]);


        if($request->hasFile('file')){
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(('uploads'),time().'_'.$image_name);

            $image_path = "uploads/" .time().'_'.$image_name;
        }


        $new = new ServiceSliderModel;
        $new->file=$imgg;
        $new->filename=$request->filename;
        $new->save();
        toast('Inserted Successfully','success');
        return back()->with('success','You have successfully upload file.');


    }
    public function admin_serviceSlider_delete($id)
    {
        ServiceSliderModel::find($id)->delete();

        return redirect()->back()->with('message','successfull deleted');
    }

    public function admin_serviceSlider_edit($id)
    {
        $request=ServiceSliderModel::find($id);



        return view('admin.add_new_serviceSlider_edit', ['request' =>  $request ] );


    }


    public function add_save_serviceSlider_edit_save($id , Request $request)
    {
        $validatedData = $request->validate([

            'filename' => ['required'],
        ]);

        if($request->hasFile('file')){
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(('uploads'),time().'_'.$image_name);

            $image_path = "uploads/" .time().'_'.$image_name;

            $new=ServiceSliderModel::find($id);

            $new->file=$imgg;
            $new->filename=$request->filename;
            $new->save();

            }

            $new=ServiceSliderModel::find($id);
            $new->filename=$request->filename;
            $new->save();




            alert()->success("Row Edited ");
            return redirect()->route('serviceSlider')->with('message','Sussfully Edited');

    }


    //Moments of Life
    public function momentoflifetable()
    {
        $momentsoflife=DB::select('SELECT  id ,  title ,  filename ,  created_at ,  updated_at  FROM  momentsoflife order by id desc ');
        return view('admin.momentoflifetable' , [ 'momentsoflife' => $momentsoflife ]);

    }
    public function momonentsoflife()
    {
        return view('admin.momentsoflife');
    }
    public function momentsoflife_add(Request $request)
    {

         $request->validate([
            'title' => 'required',
            'file' => 'required',
        ]);


        if($request->hasFile('file')){



            //Get FileName with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();

            //get Only FileName
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $request->file('file')->move(('file'), $fileNameToStore);


            $new = new MomentsofLifeModel();

            $new->title=$request->title;
            $new->filename=$path;
            $new->save();

            alert()->success("Data Inserted Successfully");
            return redirect()->route('momonentsoflife');

        }


    }

    public function momonentsoflife_delete($id){

           DB::select('DELETE FROM momentsoflife WHERE id='.$id.'');
            alert()->success('Deleted Successfully');
            return redirect()->route('momentoflifetable');

    }

    public function momonentsoflife_edit($id)
    {
        $momonentsoflife=DB::table('momentsoflife')->find($id);
        return view('admin.momonentsoflife_edit' , [ 'momonentsoflife' => $momonentsoflife ]);
    }
    public function momentsoflife_edit_save($id,Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
        ]);

        if($request->hasFile('file')){


            //Get FileName with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();

            //get Only FileName
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $request->file('file')->move(('file'), $fileNameToStore);

            $update=DB::table('momentsoflife')->where('id' , $id)->update(['title' => $request->title , 'filename' => $path  ]);

            if($update)
            {
                alert()->success("Updated Successfully");
                return redirect()->route('momentoflifetable');
            }
            else
            {
                toast('Updated Fail','info');
                return redirect()->back();

            }

        }


    }

    public function exchangewithconfidence()
    {
        $exchange =DB::select('SELECT * FROM exchangewithconfidence order by id desc');
        return view('admin.exchangewithconfidence' , [ 'exchange' => $exchange ]);
    }
    public function exchangewithconfidence_add()
    {

        return view('admin.exchangewithconfidence_add');

    }

    public function exchangewithconfidence_add_save(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => ['required'],
            'file' => 'required',
        ]);


        if($request->hasFile('file')){


            //Get FileName with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();

            //get Only FileName
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $request->file('file')->move(('file'), $fileNameToStore);


            $new = new RealizeYourProjectModel();
            $new->title = $request-> title;
            $new->description = $request->description;
            $new->file = $path;
            $new->save();

            alert()->success("Added Successfully");
            return redirect()->route('exchangewithconfidence');

        }




    }


    public function exchangewithconfidence_delete($id)
    {
        RealizeYourProjectModel::find($id)->delete();
        alert()->success("Successfully Deleted");
        return redirect()->route('exchangewithconfidence');

    }

    public function exchangewithconfidence_edit($id)
    {
        $exchangewithconfidence = DB::table('exchangewithconfidence')->find($id);

        return view('admin.exchangewithconfidence_edit' , [ 'exchangewithconfidence' => $exchangewithconfidence ]);
    }


    public function exchangewithconfidence_edit_save($id,Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => ['required'],

        ]);

        if($request->hasFile('file')){


            //Get FileName with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();

            //get Only FileName
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $request->file('file')->move(('file'), $fileNameToStore);



            $new = RealizeYourProjectModel::find($id);
            $new-> title = $request-> title;
            $new-> description	 = $request-> description	;
            $new-> file	 = $path	;
            $new-> save();

            alert()->success("Successfully Updated");
            return redirect()->route('exchangewithconfidence');

        }


        $new = RealizeYourProjectModel::find($id);
        $new-> title = $request-> title;
        $new-> description	 = $request-> description	;
        $new-> save();
        alert()->success("Successfully Updated");
        return redirect()->route('exchangewithconfidence');


    }

    public function easysteps()
    {
        $easystepstofind=db::select('SELECT id, title, file, created_at, updated_at FROM easystepstofind order by id desc limit 3');
        return view('admin.easystepstofind' , [ 'easystepstofind' => $easystepstofind ]);

    }
    public function easystepstofind_add()
    {
        return view('admin.easystepstofind_add');

    }

    public function easystepstofind_add_save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file'  => 'required',
        ]);



        if($request->hasFile('file')){


            //Get FileName with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();

            //get Only FileName
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $request->file('file')->move(('file'), $fileNameToStore);



            $users=easystepsModel::create($request->all());
            $users->update(['file' => $path]);

            alert()->success('Row  Inserted');

            return back();




        }




    }

        public function easysteps_delete($id)
        {
            easystepsModel::find($id)->delete();
            alert()->success('Row Deleted');
            return back();

        }

        public function easysteps_edit($id)
        {
            $easysteps= easystepsModel::find($id);
            return view('admin.easysteps_edit' , [ 'easysteps' =>  $easysteps ]);

        }

        public function easystepstofind_edit_save($id,Request $request)
        {
            $request->validate([
                'title' => 'required',
            ]);


            if($request->hasFile('file')){


                //Get FileName with extension
                $fileNameWithExt = $request->file('file')->getClientOriginalName();

                //get Only FileName
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                //Get only Extension
                $extension = $request->file('file')->getClientOriginalExtension();
                //FileName To Store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                //upload Image
                $path = $request->file('file')->move(('file'), $fileNameToStore);


                $easysteps= easystepsModel::find($id);
                $easysteps->update($request->all());
                $easysteps->update(['file' => $path  ]);
                alert()->success("Updated Successfully");
                return redirect()->route('easysteps');

            }

                $easysteps= easystepsModel::find($id);
                $easysteps->update($request->all());

                alert()->success("Updated Successfully");
                return redirect()->route('easysteps');


        }


        public function ContactusMessages()
        {

            $contactus=DB::select('SELECT id, name, email,
             subject, description, created_at,
            updated_at FROM contactus order by id desc');

            return view('admin.ContactusMessages', [ 'contactus' =>  $contactus ]);


        }





    // Service Provideo

    public function add_new_serviceprovider()
    {
        $category=DB::select('select * from category ORDER BY id DESC ');
        return view('admin.add_new_serviceprovider', compact('category'));

    }

    public function add_save_serviceprovider(Request $request)
    {

        if($request->hasFile('img')){



            //Get FileName with extension
            $fileNameWithExt = $request->file('img')->getClientOriginalName();

            //get Only FileName
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get only Extension
            $extension = $request->file('img')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $request->file('img')->move(('images'), $fileNameToStore);


            $new=new serviceProviderModel();
            $new->name=$request->name;
            $new->img=$fileNameToStore;
            $new->description=$request->description;
            $new->date=$request->date;
            $new->location=$request->location;
            $new->category=$request->category;
            $new->distance=$request->distance;


            $new->save();
            alert()->success('All Data Inserted Successfully');
            return redirect()->route('Service_Provider');


        }

        if($file = $request->hasFile('img')) {

            $file = $request->file('img') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'images' ;
            $des=$file->move($destinationPath,$fileName);





    }


    }


    public function admin_serviceprovider_delete($id)
    {
        $delete = serviceProviderModel::where('id',$id)->delete();
        toast('The Service Provider Is Deleted Successfully','success');
        return redirect()->back();
    }
    public function admin_serviceprovider_edit($id)
    {
        $edit=serviceProviderModel::find($id);

        $category=DB::select('select * from category ORDER BY id DESC');

        return view('admin.serviceprovider_edit', ['edit' => $edit ] , [ 'category' => $category]);

    }
    public function admin_serviceprovider_update(Request $request)
    {
        $update= serviceProviderModel::where('id',$request->id)->first();

        if (!empty($update)) {
            $update->name=$request->name;

            $update->description=$request->description;
            $update->date=$request->date;
            $update->location=$request->location;
            $update->category=$request->category;
            $update->distance=$request->distance;
            $update->save();
        }
        toast('The Data Is Updated Successfully','success');
        return redirect()->route('Service_Provider');

    }



public function create(){
    return view('admin.map_setting');

}
public function store(Request $request){
    $data = new Map;
    $data->latitude = $request['latitude'];
    $data->longitude = $request['longitude'];
    $data->distance = $request['distance'];
    $data->save();
   return back();

}



}
