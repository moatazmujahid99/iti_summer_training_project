<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    //don't copy it if you are already implemented it to avoid any conflict
    public function index()
    {
        $users = User::all();
        return view('friendship_test.users', compact('users'));
    }
    //-----------------------------------

    public function show($id)
    {
        $user = User::where("id", $id)->first();

        //must be copied because here you get the user's friends
        $his_friends = $user->getAcceptedFriendships();

        return view('friendship_test.user_show', [
            'user' => $user,

            //must be copied because here you send the user's friends to the view to display them
            'his_friends' => $his_friends
        ]);
    }
}
