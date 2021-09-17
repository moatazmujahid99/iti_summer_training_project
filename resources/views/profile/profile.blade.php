@extends('layouts.profile_header')
@section('contant')
    
    <div class="divider"></div>
    <div class="row">
        @foreach ($posts as $post)
            @include('posts.post', ['post' => $post])
        @endforeach
    </div>

@stop
