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
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                     </div>
                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
<!-- **************My name*************-->   
                        <h4 class="m-t-10 m-b-5">John Doe</h4>
<!-- **************My bio*************--> 
                        <p class="m-b-10">Web And Frontend Developer</p>
                        <a href="{{ url('/home') }}" class="btn btn-xs btn-yellow">Timeline</a>
                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
                  <!-- BEGIN profile-header-tab -->
                  <ul class="profile-header-tab nav nav-tabs">
                     <li class="nav-item"><a href="{{ url('/profile')}}" class="nav-link active show">POSTS</a></li>
                     <li class="nav-item"><a href="{{ url('/about')}}" class="nav-link active show" >ABOUT</a></li>
                     <li class="nav-item"><a href="#profile-photos" class="nav-link active show" >PHOTOS</a></li>
                     <li class="nav-item"><a href="#profile-videos" class="nav-link active show" >VIDEOS</a></li>
                     <li class="nav-item"><a href="{{ url('/friends') }}" class="nav-link active show" >FRIENDS</a></li>
                  </ul>
                  <!-- END profile-header-tab -->
               </div>
            </div>
            <!-- end profile -->

            @yield('contant')
            
         </div>
      </div>
   </div>
</div>
    	</div>
	</div>
</div>
<script type="text/javascript"></script>
</body>
</html>