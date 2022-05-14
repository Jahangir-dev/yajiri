<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Response;
use Auth;
class AuthController extends Controller
{
    public function userLogin(Request $request){
    $this->validate($request,[
        'email'=>'required',
        'password'=>'required',             
    ]);


        $login = $this->username();
       // dd($login);

               $email = $request->input('email');
               $password = $request->input('password');

                $user = User::where('email',$request->input('email'))->first();
            //    /dd($user);



        if($user == null && $login == 'email'){
    
         //toast('Please use valid email','danger');  

         return response()->json(['login' => 0,'msg' => 'Please use valid email']);
       }

       if($login=='phone'){

            $user = User::where('phone_number',$request->phone)->first();
            if(empty($user)){
                toast('Phone & Password combination doesn\'t not match','danger');                 
                //return redirect()->back();
                return response()->json(['login' => 0,'msg' => 'Phone or Password doesn\'t match']);
            }else{


                if (!\Hash::check($request->password , $user->password )) {
                        // toast('Password  doesnot match','danger'); 
                        // return redirect()->back(); 
                        return response()->json(['login' => 0,'msg' => 'Phone or Password combination doesn\'t match']);                           
                }else{

                     \Auth::login($user);
                     return response()->json(['login' => 1]);
                     return redirect()->route('user_categories');
                }


            }

       }else{

        if(!Auth::attempt($request->only(['email','password']))){

            // toast('Email & Password combination doesn\'t not match','danger'); 
            // return redirect()->back();
            return response()->json(['login' => 0,'msg' => 'Email or Password combination doesn\'t match']);
        }   

       }



     

       
        if(Auth::user()->hasAccess(['admin'])){
            return response()->json(['login' => 2]);
          //toast('Welcome To Admin Dashboard','success');           
          //return redirect()->route('admin-home')->with('success','WELCOME'.Auth::user()->username.'...');
        
        }

         elseif(Auth::user()->hasAccess(['user'])){
            return response()->json(['login' => 1]);
               // return redirect()->route('user_categories');
                   
               // return back(); 
                
        }

                else{
         
          return redirect()->back()->with('danger','Something went wrong please try again...');
        } 








        



        
    }


        public function username()
        {
            $login = request()->input('email');

            if(is_numeric($login)){
                $field = 'phone';
            } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
                $field = 'email';
            } else {
                $field = 'username';
            }

            request()->merge([$field => $login]);

            return $field;
        }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
