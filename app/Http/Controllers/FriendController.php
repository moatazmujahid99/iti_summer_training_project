<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function show_friends()
    {
        $friends = Auth::user()->getAcceptedFriendships();

        return view(
            'friendship_test.show_friends' //change the path to a suitable one
            ,
            compact('friends')
        );
    }

    public function show_friend_requests()
    {
        $requests = Auth::user()->getFriendRequests();

        return view(
            'friendship_test.show_friends_requests' //change the path to a suitable one
            ,
            compact('requests')
        );
    }


    public function sent_friend_request($id)
    {
        $recipient = User::where("id", $id)->first();
        Auth::user()->befriend($recipient);

        // don't change the path
        return back();  //it means that you return to the previous view
    }

    public function accept_friend_request($id)
    {
        $sender = User::where("id", $id)->first();
        Auth::user()->acceptFriendRequest($sender);

        // don't change the path
        return back();  //it means that you return to the previous view
    }

    public function deny_friend_request($id)
    {
        $sender = User::where("id", $id)->first();
        Auth::user()->denyFriendRequest($sender);

        // don't change the path
        return back();  //it means that you return to the previous view
    }



    public function unfriend($id)
    {
        $friend = User::where("id", $id)->first();
        Auth::user()->unfriend($friend);

        // don't change the path
        return back();  //it means that you return to the previous view
    }
}
