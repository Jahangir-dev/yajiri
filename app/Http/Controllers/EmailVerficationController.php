<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\User;
use App\Models\EmailVerificationCode;
use Mail;


class EmailVerficationController extends Controller
{

    public function email_Verification_opt(Request $request){

         $email_opt = md5(date('Y-m-d').microtime());

         $this->validate($request, [
            'email' => 'required'
        ]);

            $smscode = random_int(100000, 999999);
            $code = EmailVerificationCode::where('email',$request->email)->where('verified',0)->first();
            if(empty($code)){
                $code = new EmailVerificationCode();                
            }

            $code->email = $request->email;
            $code->code= $smscode;
            $code->save();
            return 1;

        
        $email = $request->email;

        $data = ['email'=>$email,'opt'=>$smscode];
        $mail = Mail::send('emails.verify_opt',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'Email Opt Verfication')->from("admin@yajari.tn")->subject("New Registration Email Verification");
            });

        return 1;

    }

    public function email_verification($token)
    {

        $user = User::where('email_verification_token',$token)->first();
        if(empty($user)){

            $type = 'warning';
            $message = 'Token Invalid';
             toast("Verification link is expired or not valid",'warning');

/*            alert()->warning("Token Invalid");*/
             return redirect()->back();
        }else{
            if($user->login_status==1 && $user->is_active==1){

            $type = 'warning';
                    $message = 'Account Already Activated';
            // alert()->warning("Account Already Activated");
             toast("Account Already Activated",'warning');
             return redirect()->back()->with('warning','Account Already Activated');
            }else{

             $type = 'success';
             $message = 'Congrats! Email Verified Successfully, Please Login';
             $user->is_active = 1;
             $user->login_status=1;
             $user->verifypass = 1;
             $user->save();
             toast("Email Verified Successfully, Please Login",'success');
             return redirect()->back()->with('verify','Email Verified Successfully, Please Login');
            }


        }
    }

    public function email_opt_verfication(Request $request)
    {
        //dd($request);
        $email_opt=md5(date('Y-m-d').microtime());
        $new= new User();
        $new->email_opt='#'.substr($email_opt, 0,7);
        $new->email=$request->email;
        $new->save();
        return redirect()->back();

    }

    public function verify_email_code(Request $request){

           $code = EmailVerificationCode::where('email',$request->email)->where('code',$request->code)->first();
           if(empty($code)){
                return -1;
           }else{
                $code->verified=1;
                $code->save();                
                return 1;    
           }
    }


    public function sendTestMail(Request $request)
    {

        $email = 'mohammad.arbaz001@gmail.com'; $smscode = '123456';
        $data = ['email'=>$email,'opt'=>$smscode];
        Mail::send('emails.verify_opt',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'Email Opt Verfication')->from("info@yajiri.com")->subject("New Registration Email Verification");
            });


    }


    public function email_check(Request $request){

        $user = User::where('email',$request->email)->first();
        if(!empty($user)){
            return 1;
        }else{
            return 0;
        }

    }


}
