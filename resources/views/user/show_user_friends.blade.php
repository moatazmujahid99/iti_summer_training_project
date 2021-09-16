@extends('user.show_user_header')
@section('contant')



@if(!$user->getAcceptedFriendships()->count())

@else

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">

            <ul class="list-group">
                @foreach ($user->getAcceptedFriendships() as $friend)

                    @if ($friend->recipient_id === $user->id)
                        @php
                            if(isset($friend->sender->user_img)){
                                $image_path= asset('images/users/' . $friend->sender->user_img);
                            }elseif($friend->sender->gender === "male") {
                                $image_path= 'https://bootdey.com/img/Content/avatar/avatar7.png';
                            }elseif($friend->sender->gender === "female"){
                                $image_path='https://www.bootdey.com/img/Content/avatar/avatar3.png';
                            }
                        @endphp

                        <li class="list-group-item mb-1">
                            <a href="/user_posts/{{$friend->sender->id}}" title="Show Details" style="font-weight: bold;text-decoration: none;color:black">
                                <img src="{{$image_path}}" alt="" width="74" height="62">&nbsp;
                                {{$friend->sender->first_name.' '.$friend->sender->last_name}}
                            </a>

                        </li>

                    @elseif($friend->sender_id === $user->id)
                        @php
                            if(isset($friend->recipient->user_img)){
                                $image_path= asset('images/users/' . $friend->recipient->user_img);
                            }elseif($friend->recipient->gender === "male") {
                                $image_path= 'https://bootdey.com/img/Content/avatar/avatar7.png';
                            }elseif($friend->recipient->gender === "female"){
                                $image_path='https://www.bootdey.com/img/Content/avatar/avatar3.png';
                            }
                        @endphp

                        <li class="list-group-item mb-1">
                            <a href="/user_posts/{{$friend->recipient->id}}" title="Show Details" style="font-weight: bold;text-decoration: none;color:black">
                                <img src="{{$image_path}}" alt="" width="74" height="62">&nbsp;
                                {{$friend->recipient->first_name.' '.$friend->recipient->last_name}}
                            </a>

                        </li>

                    @endif

                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif


@endsection
