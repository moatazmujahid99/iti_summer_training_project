@extends('layouts.app')

@section('content')

{{--display all my (logged-in user) friend requests--}}

@if (!$requests->count())
    <p> you have no friend requests </p>
@else
    @foreach ($requests as $request)

        <ul>
            {{--display the user's name who sent a friend request to me (logged-in user)--}}
            <li>
                <a href="/users/{{$request->sender->id}}">{{$request->sender->name}}</a>
            </li>
        </ul>

    @endforeach
@endif

@endsection
