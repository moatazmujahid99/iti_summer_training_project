<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                    rel="stylesheet">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="content" class="content content-full-width">
                                <!-- begin profile -->
                                <div class="profile">
                                    <div class="profile-header">
                                        <!-- BEGIN profile-header-cover -->
                                        <div class="profile-header-cover"></div>
                                        <!-- END profile-header-cover -->
                                        <!-- BEGIN profile-header-content -->
                                        <div class="profile-header-content">
                                            <!-- BEGIN profile-header-img -->
                                            <div class="profile-header-img">
                                                <!-- **************My image*************-->
                                                {{-- @php
                                                    if (isset($user->user_img)) {
                                                        $image_path = asset('images/users/' . $user->user_img);
                                                    } elseif ($user->gender === 'male') {
                                                        $image_path = 'https://bootdey.com/img/Content/avatar/avatar7.png';
                                                    } elseif ($user->gender === 'female') {
                                                        $image_path = 'https://www.bootdey.com/img/Content/avatar/avatar3.png';
                                                    }
                                                @endphp --}}

                                                <img height="93px" width="93px"
                                                    src="{{ asset('images/users/' . $user->user_img) }}">

                                            </div>
                                            <!-- END profile-header-img -->
                                            <!-- BEGIN profile-header-info -->
                                            <div class="profile-header-info">
                                                <!-- **************My name*************-->
                                                <h4 class="m-t-10 m-b-5">
                                                    {{ $user->first_name . ' ' . $user->last_name }}
                                                </h4>
                                                <!-- **************My bio*************-->
                                                <p class="m-b-10">{{ $user->description }}</p>
                                                <a href="{{ url('/') }}"
                                                    class="btn btn-primary btn-sm ">Timeline</a>
                                                <div style="height: 8px"></div>
                                            </div>
                                            <!-- END profile-header-info -->
                                        </div>
                                        <!-- END profile-header-content -->
                                        <!-- BEGIN profile-header-tab -->
                                        @php
                                            $num_of_requests = $user->getFriendRequests()->count();
                                        @endphp
                                        <ul class="profile-header-tab nav nav-tabs">
                                            <li class="nav-item"><a
                                                    class="nav-link {{ Request::is('users/' . $user->id . '/profile') ? 'active' : '' }}"
                                                    href="/users/{{ $user->id }}/profile">POSTS</a></li>
                                            <li class="nav-item"><a
                                                    class="nav-link {{ Request::is('users/' . $user->id . '/about') ? 'active' : '' }}"
                                                    href="/users/{{ $user->id }}/about">ABOUT</a></li>
                                            <li class="nav-item"><a
                                                    class="nav-link {{ Request::is('users/' . $user->id . '/people') ? 'active' : '' }}"
                                                    href="/users/{{ $user->id }}/people">PEOPLE</a></li>
                                            <li class="nav-item"><a
                                                    class="nav-link {{ Request::is('users/' . $user->id . '/friends') ? 'active' : '' }}"
                                                    href="/users/{{ $user->id }}/friends">FRIENDS</a></li>
                                            <li class="nav-item"><a
                                                    class="nav-link {{ Request::is('users/' . $user->id . '/requests') ? 'active' : '' }}"
                                                    href="/users/{{ $user->id }}/requests">FRIEND REQUESTS <span
                                                        class="badge badge-light">{{ $num_of_requests ? $num_of_requests : '' }}</span></a>
                                            </li>
                                        </ul>
                                        <!-- END profile-header-tab -->
                                    </div>
                                </div>
                                <!-- end profile -->
                                <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
                                    rel="stylesheet">
                                @yield('contant')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/preview_image.js') }}"></script>
</body>

</html>
