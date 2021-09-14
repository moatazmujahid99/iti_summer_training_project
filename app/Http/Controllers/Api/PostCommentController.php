<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function index($post_id)
    {
        $postComments = Comment::where('post_id', $post_id)->get();
        return CommentResource::collection($postComments);
    }
}
