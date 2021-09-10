@extends('layouts.app')

@section('content')

<p style="margin: 10px">{{$user->name}}'s profile</p>

{{--display the actual user's info in good design--}}
<div style="background-color: burlywood;width:200px; height:200px; margin:10px">his info</div>

{{--if me (logged in user) sent a friend request to a user i'm viewing his profile now--}}
@if (Auth::user()->hasSentFriendRequestTo($user))

    <p>waiting for {{ $user->name }} to accept your request</p>

{{--if me (logged-in user) recieved a friend request from a user i'm viewing his profile now--}}
@elseif (Auth::user()->hasFriendRequestFrom($user))

    <a href="/accept/{{$user->id}}" class="btn btn-primary">Accept friend request</a>
    <a href="/deny/{{$user->id}}" class="btn btn-danger">Deny friend request</a>

{{--if i'm (logged-in user) a friend with a user i'm viewing his profile now--}}
@elseif(Auth::user()->isFriendWith($user))

    <p>You and {{ $user->name }} are friends</p>
    <a href="/unfriend/{{$user->id}}" class="btn btn-danger">Unfriend</a>

{{--if the previous conditions are false ,it means that i didn't send a friend request
or recieved one. So, i (logged-in user) can send a friend request to
a user i'm viewing his profile now--}}
@elseif(Auth::user()->id !== $user->id) {{--if me (logged-in user) view my profile
                                        ,so i can't sent a freind request to myself--}}

    <a href="/sent_to/{{$user->id}}" class="btn btn-primary">send a friend request</a>
@endif



{{--display the friends of a user i'm viewing his profile--}}

<h4 style="margin-top:10px ">{{ $user->name }} 's friends</h4>

@if (!$his_friends->count())
    <p>{{ $user->name }} has no friends</p>
@else
    <ul>
        @foreach ($his_friends as $friend)

            {{--you don't have to understand this condition, just change the style of
            "li" , "a" , "ul" or add a user's pic to "li",ect--}}
            @if ($friend->recipient_id === $user->id)

            {{--display the user's friend--}}
                <li>
                    <a href="/users/{{$friend->sender->id}}"> {{$friend->sender->name}}</a>
                </li>
            {{-------------------------}}

            {{--you don't have to understand this condition, just change the style of
            "li" , "a" , "ul" or add a user's pic to "li",ect--}}
            @elseif($friend->sender_id === $user->id)

            {{--display the user's friend--}}
                <li>
                    <a href="/users/{{$friend->recipient->id}}"> {{$friend->recipient->name}}</a>
                </li>

                {{-------------------------}}
            @endif

        @endforeach
    </ul>
@endif

@endsection
