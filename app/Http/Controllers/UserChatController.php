<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublishRequest;
use App\Models\serviceproviderreview;
use Auth;
use DB;
use App\Models\Message;
use App\Models\User;

class UserChatController extends Controller
{
    public function user_chat($id)
    {
        $pub = PublishRequest::find($id);

        $users = DB::select('SELECT users.created_at , users.address ,users.first_name ,users.last_name ,users.image
        FROM users
        left JOIN review
        ON users.id=review.user_id where users.id=' . $pub->auth_id . ' limit 1');

        return view('frontend.Chat', ['id' => $id, 'users' => $users, 'pub' => $pub]);
    }
    public function bluechat($id)
    {
        $chat = Message::where('user_id', Auth::user()->id)->orWhere('to_user_id', Auth::user()->id)->with('from_user')->get();

        $user_list = [];
        $user_list_c = [];
        foreach ($chat as $c) {
            if ($c->user_id != Auth::user()->id) {
                array_push($user_list, $c->user_id);
            }
            if ($c->to_user_id != Auth::user()->id) {
                array_push($user_list, $c->to_user_id);
            }
        }
        $user_list = array_unique($user_list);
        foreach ($user_list as $i => $u) {
            $userL = User::where('id', $u)->first();
            if (isset($userL)) {

                $user_list_c[$i]['user'] = $userL;
                $mesageR = Message::where('user_id', $u)->orWhere('to_user_id', $u)->orderBy('id', 'desc')->first();
                $user_list_c[$i]['mesageR'] = $mesageR->message;
                $user_list_c[$i]['time'] = date('d/m', strtotime($mesageR->created_at));
            }
        }


        if ($id == 'all') {

            $user = Auth::user();
        } else {

            $user = User::find(Auth::user()->id);
        }

        return view('frontend.BlueChat', [
            'id' => $id, 'user' => $user, 'chat' => $chat, 'user_list_c' => $user_list_c
        ]);
    }
    public function LeaveReviewBlue($id)
    {
        return view('frontend.LeaveReviewBlue', ['id' => $id]);
    }
    public function save_serviceprovider(Request $request)
    {

        if (Auth::user()) {

            if (empty($request->review)) {
                toast('Please write Something for the Service Provider', 'info');
                return back();
            }
            if (serviceproviderreview::where('user_id', $request->userid)->where('serviceprodiverid', $request->serviceproviderid)->first()) {
                toast('Your Post already submited!', 'info');
                return redirect()->route('bluechat', ['id' => $request->userid]);
            }

            $new = new serviceproviderreview();
            $new->user_id = $request->userid;
            $new->serviceprodiverid = $request->serviceproviderid;
            $new->review = $request->review;
            $new->save();
            alert()->success('Review Submitted');
            return redirect()->route('bluechat', ['id' => $request->userid]);
        } else {
            toast('Please sign In to Submit Review', 'info');
            return back();
        }
    }
}
