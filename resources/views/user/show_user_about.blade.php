@extends('user.show_user_header')
@section('contant')

<div class="profile-content">
    <!-- begin tab-content -->
    <div class="tab-content p-0">
       <!-- begin #profile-about tab -->
       <div class="tab-pane fade in active show" id="profile-about">
          <!-- begin table -->
          <div class="table-responsive">
             <table class="table table-profile">
                <tbody>
                <tr>
                      <td class="field"><strong> First Name</strong></td>
<!--****************First Name************-->
                      <td> {{$user->first_name}}</td>
                   </tr>
                   <tr>
                      <td class="field"><strong>Last Name</strong></td>
<!--****************Last Name************-->
                     <td> {{$user->last_name}}</td>
                   </tr>

                   @isset($user->phone_number)
                   <tr>
                        <td class="field"><strong>Mobile</strong></td>
                        <!--****************Mobile Number ************-->

                        <td> {{$user->phone_number}}</td>

                    </tr>
                    @endisset

                    @isset($user->description)
                   <tr class="highlight">
                      <td class="field"><strong> Bio</strong></td>
                      <td>
<!--****************Bio************-->

                        <textarea style="resize: none" name="description" class="form-control input-lg no-border" rows="2" disabled>{{$user->description}}</textarea>

                      </td>
                   </tr>
                   @endisset

                   <tr class="divider">
                      <td colspan="2"></td>
                   </tr>

                   @isset($user->country)
                   <tr>
                      <td class="field"><strong>Country/Region</strong></td>

                       <td>{{$user->country}}</td>
                   </tr>
                   @endisset

                   @isset($user->city)
                   <tr>
                     <td class="field"><strong>City</strong></td>

                        <td>{{$user->city}}</td>

                  </tr>
                  @endisset

                   <tr>
                      <td class="field"><strong>Gender</strong></td>
                      <td>{{$user->gender}}</td>
                   </tr>
                   <tr>
                      <td class="field"><strong>Birthdate</strong></td>
                      <td>{{$user->birthdate}}</td>
                   </tr>




                </tbody>
             </table>
          </div>
          <!-- end table -->
       </div>
       <!-- end #profile-about tab -->
    </div>
    <!-- end tab-content -->
 </div>
 <!-- end profile-content -->


@endsection
