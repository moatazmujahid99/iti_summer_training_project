@extends('layouts.profile_header')
@section('contant')

@if (!$requests->count())

@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">

            <ul class="list-group">
                @foreach ($requests as $request)

                    <li class="list-group-item mb-1">
                        @php
                            if(isset($request->sender->user_img)){
                                $image_path= asset('images/users/' . $request->sender->user_img);
                            }elseif($request->sender->gender === "male") {
                                $image_path= 'https://bootdey.com/img/Content/avatar/avatar7.png';
                            }elseif($request->sender->gender === "female"){
                                $image_path='https://www.bootdey.com/img/Content/avatar/avatar3.png';
                            }
                        @endphp
                        <a title="Show Details" style="font-weight: bold;text-decoration: none;color:black" href="/user_posts/{{$request->sender->id}}">
                            <img src="{{$image_path}}" alt="" width="74" height="62">&nbsp;
                            {{$request->sender->first_name.' '.$request->sender->last_name}}
                        </a>

                        <a href="/deny/{{$request->sender->id}}" class="btn btn-danger float-right mt-2 mr-2">Deny </a>
                        <a href="/accept/{{$request->sender->id}}" class="btn btn-success float-right mt-2 mr-2">Accept</a>
                    </li>


                @endforeach
             </ul>
        </div>
    </div>
</div>
@endif

@endsection
