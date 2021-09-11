<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index($user_id)
    {
        $userPosts = Post::where('user_id', $user_id)->get();
        return PostResource::collection($userPosts);
    }
}
