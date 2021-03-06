@extends('layouts.profile_header')
@section('contant')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <ul class="list-group">
                @foreach ($users as $one_user)
                    @if ($one_user->id === auth()->id())

                        @continue
                    @else

                        <li class="list-group-item mb-1">
                            @php
                                if(isset($one_user->user_img)){
                                    $image_path= asset('images/users/' . $one_user->user_img);
                                }elseif($one_user->gender === "male") {
                                    $image_path= 'https://bootdey.com/img/Content/avatar/avatar7.png';
                                }elseif($one_user->gender === "female"){
                                    $image_path='https://www.bootdey.com/img/Content/avatar/avatar3.png';
                                }
                            @endphp

                            <a title="Show Details" style="font-weight: bold;text-decoration: none;color:black" href="/users/{{$one_user->id}}/profile">
                                <img src="{{$image_path}}" alt="" width="74" height="62">&nbsp;
                                {{ $one_user->first_name.' '. $one_user->last_name }}
                            </a>

                            @if (Auth::user()->hasSentFriendRequestTo($one_user))

                                <span class="float-right mt-3" style="font-weight:bold; color:rgb(102, 102, 102)">Your Request Is Sent Successfully</span>

                            @elseif (Auth::user()->hasFriendRequestFrom($one_user))
                                {{-- <a href="/deny/{{$one_user->id}}" class="btn btn-danger float-right mt-2 mr-2">Deny </a>
                                <a href="/accept/{{$one_user->id}}" class="btn btn-success float-right mt-2 mr-2">Accept</a> --}}

                                <span class="float-right mt-3" style="font-weight:bold; color:rgb(102, 102, 102)">View Your Friend Requests</span>

                            @elseif(Auth::user()->isFriendWith($one_user))
                            <span class="float-right mt-3" style="font-weight:bold; color:black; font-size:14px">You and {{ $one_user->first_name }} are friends</span>

                            @elseif(Auth::user()->id !== $one_user->id)

                                <a href="/sent_to/{{$one_user->id}}" class="btn btn-primary float-right mt-2 mr-2">Add Friend</a>
                            @endif

                        </li>
                    @endif
                @endforeach
            </ul>


        </div>
    </div>
</div>

@endsection
