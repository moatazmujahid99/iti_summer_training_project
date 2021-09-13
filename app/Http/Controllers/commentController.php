<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class commentController extends Controller
{


    public function addComment(Request $request, $id){
        $this->validate($request,[
            'comment'=>'required|max:200'
        ]);
        $post= Post::findOrFail($id);
        $commet = new Comment();
        $coment->user_id = auth()->user()->id;//how to replcae this without the midleware?
        $coment->post_id= $post->id;
        $coment->comment_text= $request->input('comment');
        $coment->save();
        return redirect()->back();

    }

}