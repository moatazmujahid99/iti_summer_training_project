<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $users = User::all();
        //return view("users.index",compact("users"));
        return view('user.show_all_users', [
            'user' => Auth::user(),
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'hello create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'hello store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $page = explode('/', $request->getRequestUri())[3];
        if (Auth::id() == $id) {
            $user = Auth::user();
        } else {
            $user = User::find($id);
        }
        if ($page == 'profile') {
            if (Auth::id() == $id) {
                $view = 'profile.profile';
            } else {
                $view = 'user.show_user_posts';
            }
        } else {
            if (Auth::id() == $id) {
                $view = 'about.about';
            } else {
                $user = User::find($id);
                $view = 'user.show_user_about';
            }
        }
        return view($view, [
            'user' => $user,
            'posts' => $user->posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('about.edit_about', compact("user"));
        // return view("users.edit",compact("user"));
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
        $user = User::find($id);

        $request->validate([
            'first_name' => 'required|min:3|max:250',
            'last_name' => 'required|min:3|max:250',
            'phone_number' => 'nullable|digits:11',
            'description' => 'nullable|min:6|max:250',
            'user_img' => 'image|max:5050|nullable|mimes:jpg,jpeg,png',
        ]);

        if (isset($request->user_img)) {
            $imageName = time() . '-' . $request->first_name . '.' . $request->user_img->extension();
            $request->user_img->move(public_path('images/users'), $imageName);
        } elseif (isset($user->user_img) && !(isset($request->user_img))) {
            $imageName = $user->user_img;
        } else {
            $imageName = null;
        }

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'user_img' => $imageName,

        ]);

        return redirect("/users/" . $user->id . "/about");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        //return redirect("/users");
        return 'destroy user' . $id;
    }
}
