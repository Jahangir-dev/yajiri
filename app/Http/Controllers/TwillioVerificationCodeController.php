<?php

namespace App\Http\Controllers;

use App\Models\TwillioVerificationCode;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\User;
class TwillioVerificationCodeController extends Controller
{

    public function sendTwillioCode(Request $request){



        // Find your Account SID and Auth Token at twilio.com/console
        // and set the environment variables. See http://twil.io/secure
        try {
        $smscode = random_int(100000, 999999);
        $sid = 'ACbf529562473cae40e129ecbfcfca11c4';//getenv("TWILIO_ACCOUNT_SID");
        $token = '2eb8e3dcd15d9b561d6a6f53f6717f52';//getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
        ->create($request->phone_number, // to
            ["body" => "Verification Code is ".$smscode, "from" => "+17752524587"]
        );

            $code = TwillioVerificationCode::where('phone_number',$request->phone_number)->where('verified',0)->first();
            if(empty($code)){
                $code = new TwillioVerificationCode();                
            }

            $code->phone_number = $request->phone_number;
            $code->code= $smscode;
            $code->save();
            return 1;
        }
        catch(\Exception $e){
            return $e->getMessage();
        }

    }



    public function testsendTwillioCode(Request $request){



        // Find your Account SID and Auth Token at twilio.com/console
        // and set the environment variables. See http://twil.io/secure

        $smscode = random_int(100000, 999999);
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

       /* $message = $twilio->messages
        ->create('+9203205038329', // to
            ["body" => "Verification Code is ".$smscode, "from" => "+18508056137"]
        );*/

            $code = TwillioVerificationCode::where('phone_number',+17752524587)->first();
            if(empty($code)){
                $code = new TwillioVerificationCode();                
            }

            $code->phone_number = $request->phone_number;
            $code->code= $smscode;
            $code->save();
            return 1;
    }

    public function verifytwilliocode(Request $request){

           $code = TwillioVerificationCode::where('phone_number',$request->phone_number)->where('code',$request->code)->first();
           if(empty($code)){
                return -1;
           }else{
                $code->verified=1;
                $code->save();                
                return 1;    
           }
    }

    public function phone_number_check(Request $request)
    {
        
        $user = User::where('phone_number',$request->pre_phone_number)->first();
        if(!empty($user)){
            return 1;
        }else{
            return 0;
        }
    }

}
