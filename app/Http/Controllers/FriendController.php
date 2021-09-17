<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function show_friends($id)
    {
        $user = User::find($id);
        $friends = $user->getAcceptedFriendships();

        if (Auth::id() == $id) {
            $view = "friends.show_all_friends";
        } else {
            $view = "user.show_user_friends";
        }

        return view(
            $view,
            [
                'friends' => $friends,
                'user' => $user
            ]
        );
    }

    public function show_friend_requests()
    {
        $requests = Auth::user()->getFriendRequests();

        return view(
            'friends.show_friend_requests',
            [
                'requests' => $requests,
                'user' => Auth::user()
            ]
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
        Auth::user()->unfriend($sender);

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
