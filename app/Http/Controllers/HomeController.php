<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Auth::user()->posts;
        $friends = Auth::user()->getFriends();

        foreach ($friends as $friend)
            $posts = $posts->concat($friend->posts);

        $posts = $posts->sortBy('created_at');

        return view('home', ['posts' => $posts]);
    }

}
