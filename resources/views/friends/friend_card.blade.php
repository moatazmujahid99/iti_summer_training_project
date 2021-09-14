@extends('friends.friends')

@section('friend_card')
<!-- begin col-6 -->
<div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
             <!--***********friend image **************** -->
                                 <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
            <!--***********friend name **************** -->  
                                    <b class="text-inverse">James Pittman</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                       <a href="javascript:;" class="btn btn-default">Friends</a>
                                       <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                       <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
            <!--*********** delete action **************** -->     
                                       <li><a href="#">Delete</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->


                        @stop


@section('known_people')
<!-- begin col-6 -->
<div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
       <!--***********friend image **************** -->
                                 <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
       <!--***********friend name **************** -->
                                    <b class="text-inverse">Mitchell Ashcroft</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
        <!--***********friend add button **************** --> 
                                       <a href="#" class="btn btn-default">Add</a>
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
@stop