<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;

public function index()
{
    // Get all Posts, ordered by the newest first
    $posts = Post::latest()->get();

    // Pass Post Collection to view
    return view('posts.index', compact('posts'));
}   

public function create()
{
    // Show create post form
    return view('posts.create');
}

public function store(Request $request)
{
    // Validate posted form data
    $validated = $request->validate([
        'title' => 'required|string|unique:posts|min:5|max:100',
        'content' => 'required|string|min:5|max:2000',
        'category' => 'required|string|max:30'
    ]);

    // Create slug from title
    $validated['slug'] = Str::slug($validated['title'], '-');

    // Create and save post with validated data
    $post = Post::create($validated);

    // Redirect the user to the created post with a success notification
    return redirect(route('posts.show', [$post->slug]))->with('notification', 'Post created!');
}

public function show(Post $post)
{
    // Pass current post to view
    return view('posts.show', compact('post'));
}

public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}


public function update(Request $request, Post $post)
{
    // Validate posted form data
    $validated = $request->validate([
        'title' => 'required|string|unique:posts|min:5|max:100',
        'content' => 'required|string|min:5|max:2000',
        'category' => 'required|string|max:30'
    ]);

    // Create slug from title
    $validated['slug'] = Str::slug($validated['title'], '-');

    // Update Post with validated data
    $post->update($validated);

    // Redirect the user to the created post woth an updated notification
    return redirect(route('posts.index', [$post->slug]))->with('notification', 'Post updated!');
}

public function destroy(Post $post)
{
    // Delete the specified Post
    $post->delete();

    // Redirect user with a deleted notification
    return redirect(route('posts.index'))->with('notification', '"' . $post->title .  '" deleted!');
}
