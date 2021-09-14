<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        // Pass Post Collection to view
        //return view('posts.index', compact('posts'));
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $validated = $request->validate([
        //     'user_id' => 'required|string|unique:posts|min:1|max:100',
        //     'description' => 'required|string|min:5|max:2000',
        //     'post_img' => 'required|string'
        // ]);



        // Create and save post with validated data
        $post = Post::create([
            'description' => $request->description,
            'user_id' => Auth::id(),
            //'post_img' => $request->post_img,
        ]);

        // Redirect the user to the created post with a success notification
        //return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);

        //return view('posts.show', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validate posted form data
        // $validated = $request->validate([
        //     'user_id' => 'required|string|unique:posts|min:1|max:100',
        //     'description' => 'required|string|min:5|max:2000',
        //     'post_img' => 'required|string'
        // ]);

        $post = Post::find($id);

        $post->update([
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            //'post_img' => $request->post_img,
        ]);

        // Redirect the user to the created post woth an updated notification
        //return redirect()->route('posts.index');
    }

    public function edit($id)
    {

        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }


    public function destroy($id)
    {

        $post = Post::find($id);

        $post->delete();

        // Redirect user with a deleted notification
        //return redirect()->route('posts.index');
    }
}
