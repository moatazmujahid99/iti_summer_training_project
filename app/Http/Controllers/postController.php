<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {


        $posts = Post::latest()->get();


        //return view('posts.index', compact('posts'));
        return "index";
    }

    public function create()
    {

        return redirect('');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        $validated = $request->validate([
            'description' => 'required|string|min:5|max:2000',
            'post_img' => 'nullable|mimes:jpg,png,jpeg|max:5048'
        ]);

        if (isset($request->post_img)) {
            $imageName = time() . '-' . Auth::user()->first_name . '.' . $request->post_img->extension();
            $request->post_img->move(public_path('images/posts'), $imageName);
        } else {
            $imageName = null;
        }

        // Create and save post with validated data
        Post::create([
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'post_img' => $imageName,
        ]);

        //return!
        return redirect('/home');
    }

    public function show($id)
    {
        $post = Post::find($id);
        //return view('posts.show', compact('post'));
        return "show";
    }

    public function update(Request $request, $id)
    {
        // Validate posted form data
        // $validated = $request->validate([
        //     'user_id' => 'required|string|unique:posts|min:1|max:100',
        //     'description' => 'required|string|min:5|max:2000',
        //     'post_img' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        $post = Post::find($id);

        if (isset($request->post_img)) {
            $imageName = time() . '-' . Auth::user()->first_name . '.' . $request->post_img->extension();
            $request->post_img->move(public_path('images/posts'), $imageName);
        } else {
            $imageName = null;
        }

        $post->update([
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'post_img' => $imageName,
        ]);

        // return !!
        //return redirect('/post');
        return "update";
    }

    public function edit($id)
    {

        $post = Post::find($id);

        //return view('posts.edit', compact('post'));
        return "edit";
    }


    public function destroy($id)
    {
        Post::destroy($id);

        // return deleted!!
        //return redirect('');
        return back();
    }
}
