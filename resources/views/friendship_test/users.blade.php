@extends('layouts.app')

@section('content')

@if ($users->count()===1)
    <p>there isn't any user except you</p>
@else
    <ul>
    @foreach ($users as $user)

        {{-- i don't display myself as a user because i'm already logged in and
        i know i'm a user --}}
        @if ($user->id===auth()->id())
            @continue
        @else
            <li>
                <a href="/users/{{$user->id}}"> {{$user->name}}</a>
            </li>
        @endif

    @endforeach
    </ul>
@endif


@endsection
