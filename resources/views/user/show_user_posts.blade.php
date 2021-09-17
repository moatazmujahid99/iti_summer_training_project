@extends('user.show_user_header')
@section('contant')


    <div class="divider"></div>
    <div class="row">
        @foreach ($user->posts as $post)
            @include('posts.post', ['post' => $post])
        @endforeach
    </div>

@endsection
