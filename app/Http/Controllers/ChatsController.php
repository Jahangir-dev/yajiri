<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Pusher\Pusher;
use App\Models\Message;

use Illuminate\Support\Facades\Auth;
class ChatsController extends Controller
{

/**
 * Show chats
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
  return view('chat');
}

/**
 * Fetch all messages
 *
 * @return Message
 */
public function fetchMessages()
{
  return Message::with('user')->get();
}

/**
 * Persist message to database
 *
 * @param  Request $request
 * @return Response
 */
public function sendMessage(Request $request)
{



    $new = new Message();
    $new->user_id = Auth::user()->id;
    $new->to_user_id = $request->user_id;
    $new->message = $request->msg;
    $new->save();    

    $options = array(
                        'cluster' => env('PUSHER_APP_CLUSTER'),
                        'encrypted' => true
                        );
    $pusher = new Pusher(
                            env('PUSHER_APP_KEY'),
                            env('PUSHER_APP_SECRET'),
                            env('PUSHER_APP_ID'), 
                            $options
                        );

    $data['message'] = $request->msg;
    $data['to_user_id'] = $request->user_id;   
    $data['user_id'] = Auth::user()->id;       
    $pusher->trigger('notification-send', 'App\\Events\\NotificationEvent', $data);




}
}
