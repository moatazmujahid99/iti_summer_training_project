@extends('layouts.app')

@section('content')

{{--display my (logged-user) friends--}}

@if(!$friends->count())
    <p>you don't have any friends</p>
@else

    <ul>
        @foreach ($friends as $friend)

            {{--you don't have to understand this condition, just change the style of
                "li" , "a" , "ul" or add a user's pic to "li",ect--}}
            @if ($friend->recipient_id === Auth::user()->id)

                {{--display the user's friend--}}
                <li>
                    <a href="/users/{{$friend->sender->id}}"> {{$friend->sender->name}}</a>
                </li>
                {{-------------------------}}

            {{--you don't have to understand this condition, just change the style of
                "li" , "a" , "ul" or add a user's pic to "li",ect--}}

            @elseif($friend->sender_id === Auth::user()->id)

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
