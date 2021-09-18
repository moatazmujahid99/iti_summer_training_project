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
        $validated = $request->validate([
            'description' => 'required|string|min:5|max:2000',
            'post_img' => 'nullable|mimes:jpg,png,jpeg|max:5048'
        ]);


        $post = Post::find($id);
        $user = $post->user;

        if (Auth::user()->id !== $post->user_id) {
            abort(403, "You are not authorized to update a post of another user");
        }


        if (isset($request->post_img)) {
            $imageName = time() . '-' . Auth::user()->first_name . '.' . $request->post_img->extension();
            $request->post_img->move(public_path('images/posts'), $imageName);
        } elseif (isset($post->post_img) && !(isset($request->post_img))) {
            $imageName = $post->post_img;
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
        //return redirect('/users/' . $user->id . '/profile');
        return redirect($request->return);
    }

    public function edit(Request $request ,$id)
    {

        //dd($request->return);
        
        $post = Post::find($id);
        $user = $post->user;

        if (Auth::user()->id !== $post->user_id) {
            abort(403, "You are not authorized to edit a post of another user");
        }

        //return view('posts.edit', compact('post'));
        return view('posts.edit_post', [
            'post' => $post,
            'user' => $user,
            'return' => $request->return,
        ]);
    }


    public function destroy($id)
    {
        $post = Post::where("id", $id)->first();

        if (Auth::user()->id !== $post->user_id) {
            abort(403, "You are not authorized to delete a post of another user");
        }

        $post->delete();



        // return deleted!!
        //return redirect('');
        return back();
    }
}
