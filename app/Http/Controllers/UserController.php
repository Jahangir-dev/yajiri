<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\UserCategory;
use App\Models\UserDistance;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Auth;
use Mail;
use Validator;    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userRegister(Request $request)
    {
    
        $token = md5(date('Y-m-d').microtime()); 



      $validator = Validator::make($request->all(), [
            'registerPhoneNumber' => 'required',
            'registerEmail' => 'required|email|unique:users,email',
            'registerPassword' => 'required',
        ]);


        if ($validator->fails()) {
            toast($validator->errors()->first(),'warning');
            return redirect()->back()->withInput();
        }


        $input = $request->all();
        $user_id=User::insertGetId([
        'name'=>$request->registerFirstName?$request->registerFirstName.' '.$request->registerLastName:$request->registerCompanyName,
       
        'first_name'=>$request->registerFirstName??$request->registerCompanyName,
        'last_name'=>$request->registerLastName??NULL,
        'company_name'=>$request->registerCompanyName,
        'address'=>$request->registerAddress,
        'password'=>bcrypt($request->registerPassword),
        'siret_number' => $request->registerSiretNumber,
        'phone_number' => $request->registerPhoneNumberCode.''.$request->registerPhoneNumber,
        'country' => $request->registerCountrySelect,
        'sms_code' => $request->registerFirstName,
        'email' => $request->registerEmail,
        'remember_token' => $token
        ]);
       

        $user=User::find($user_id);
        $role=DB::table('roles')->where('name','User')->first();
        $user->roles()->attach($role->id);
        $user->email_verification_token = $token;
        $user->login_status = 0;
        $user->verifypass = 0;
        $user->is_active = 0;
        $user->save();    
        $email = $request->registerEmail;
        $token=$token;
        $data = ['email'=>$email,'token'=>$token];


        Mail::send('emails.verify_mail',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'Email Verification')->from("info@yajiri.com")->subject("New Registration Email Verification");
            });

            toast('Registration successfully, verification Email Sent','success');
        // alert()->success('Registration successfully');
        return redirect()->back()->with('success','Registration successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }


     public function email_Verification_opt(Request $request)
    {
        //dd($request);

        $email_opt = md5(date('Y-m-d').microtime());

         $this->validate($request, [
            'email' => 'required'
        ]);


        $email_chk=User::where('email',$request->email)->first();
        if(!empty($email_chk)){

         alert()->error('Email Must Be Unique'); 
        return redirect()->back();

        }


        $user_id=User::insertGetId([
            'email'=>$request->email,
         'email_opt' => substr($email_opt, 0,6),
        ]);
       
        
        $email = $request->email;
        $opt=substr($email_opt,0,6);
        $data = ['email'=>$email,'opt'=>$opt];
        Mail::send('emails.verify_opt',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'Email Opt Verfication')->from("systems@better1.com")->subject("New Registration Email Verification");
            });
        alert()->success("Your Email OPT is sended. Kindly check your email.");

        return redirect()->back();

    }


    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],
        ]);
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phone_number']));
        if ($verification->valid) {
            $user = tap(User::where('phone_number', $data['phone_number']))->update(['isVerified' => true]);
            /* Authenticate user */
            Auth::login($user->first());
            return redirect()->route('home')->with(['message' => 'Phone number verified']);
        }
        return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }

    public function user_categories(Request $request)
    {

        $ucat = UserCategory::where('user_id',Auth::user()->id)->count();

        if($ucat==0){
            $category=Category::orderBy('id', 'DESC')->get();
            return view('frontend.ChoseCategory',compact('category'));
        }   
        $d = UserDistance::where('user_id',Auth::user()->id)->first();
        if(empty($d)){
             return view('frontend.ChoseDistance');
        }

        return redirect()->route('home');


    }

    function user_categories_remove($id){

        $ucat = UserCategory::where('user_id',Auth::user()->id)->where('category_id',$id)->delete();
        return redirect()->back();
    }

    public function user_save_categories(Request $request)
    {



        if($request->modified){

            foreach($request->category as $c){

                $new = new UserCategory();
                $new->user_id = Auth::user()->id;
                $new->category_id = $c;
                $new->save();                

            }

            return redirect()->back();    

        }else{

            $categories = explode(',',$request->selected_category);
            foreach($categories as $c){
                $new = new UserCategory();
                $new->user_id = Auth::user()->id;
                $new->category_id = $c;
                $new->save();
            }

            $d = UserDistance::where('user_id',Auth::user()->id)->first();
            if(empty($d)){
                return redirect()->route('user_choose_distance');
            }else{
                return redirect()->route('home');                    
            }


        }


    }   

    public function choose_distance(Request $request)
    {
        return view('frontend.ChoseDistance');
    }   


    public function user_save_distance(Request $request){

        $d = UserDistance::where('user_id',Auth::user()->id)->first();
        if(empty($d)){
            $d = new UserDistance();            
        }
        $d->user_id = Auth::user()->id;
        $d->lat = $request->lat;
        $d->lng = $request->lng;
        $d->distance = $request->distance_range;
        $d->save();


        if($request->has('modified')){  
            return redirect()->back();            
        }else{
            return redirect()->route('home');            
        }


    }

    public function get_subcategories(Request $request){

        $category = Category::where('slug',$request->val)->first();
        $sub_category = SubCategory::where('category_id',$category->id)->get();
        $x = '';
        return $sub_category;
    }


}