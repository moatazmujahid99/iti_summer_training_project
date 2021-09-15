<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //return view("users.index",compact("users"));
        return 'hello index' . $users;
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
    public function show($id)
    {
        $user = User::find($id);
        return 'show user' . $id;
        // return view("users.show",compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view('about.edit_about');
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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'phone_number' => 'nullable|numeric',
            'description' => 'nullable|min:6',
            'user_img' => 'nullable|mimes:jpg,jpeg,png',
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

        return redirect('/about');
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
