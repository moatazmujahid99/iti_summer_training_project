@extends('layouts.profile_header')
@section('contant')
<!-- begin profile-content -->
<div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-friends tab -->
                  <div class="tab-pane fade in active show" id="profile-friends">
                     <h4 class="m-t-0 m-b-20">Friend List</h4>
                     <!-- begin row -->
                     <div class="row row-space-2">

                     @yield('friend_card')
                    
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end #profile-friends tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->


            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-friends tab -->
                  <div class="tab-pane fade in active show" id="profile-friends">
                     <h4 class="m-t-0 m-b-20">People you may know</h4>
                     <!-- begin row -->
                     <div class="row row-space-2">

                     @yield('known_people')
                     
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end #profile-friends tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
@stop

<!-- begin col-6 -->
