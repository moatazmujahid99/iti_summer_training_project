@extends('layouts.profile_header')
@section('contant')
<!-- begin profile-content -->
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
                                 <td> {{Auth::user()->first_name}}</td>
                              </tr>
                              <tr>
                                 <td class="field"><strong>Last Name</strong></td>
   <!--****************Last Name************-->
                                <td> {{Auth::user()->last_name}}</td>
                              </tr>
                              <tr>
                                 <td class="field"><strong>Mobile</strong></td>
   <!--****************Mobile Number ************-->
                                @isset(Auth::user()->phone_number)

                                    <td> {{Auth::user()->phone_number}}</td>
                                @else
                                    <td>Please add your phone number</td>
                                @endisset

                              </tr>
                              <tr class="highlight">
                                 <td class="field"><strong> Bio</strong></td>
                                 <td>
   <!--****************Bio************-->
                                    @isset(Auth::user()->description)
                                    <textarea style="resize: none" name="description" class="form-control input-lg no-border" rows="2" disabled>{{Auth::user()->description}}</textarea>
                                    @else
                                    <textarea style="resize: none" name="description" class="form-control input-lg no-border" rows="2" disabled>Tell me about yourself</textarea>
                                    @endisset

                                 </td>
                              </tr>
                              <tr class="divider">
                                 <td colspan="2"></td>
                              </tr>
                              <tr>
                                 <td class="field"><strong>Country/Region</strong></td>
                                 @isset(Auth::user()->country)
                                    <td>{{Auth::user()->country}}</td>
                                 @else
                                    <td>Please add your country</td>
                                 @endisset

                              </tr>
                              <tr>
                                <td class="field"><strong>City</strong></td>
                                @isset(Auth::user()->city)
                                   <td>{{Auth::user()->city}}</td>
                                @else
                                   <td>Please add your city</td>
                                @endisset

                             </tr>

                              <tr>
                                 <td class="field"><strong>Gender</strong></td>
                                 <td>{{Auth::user()->gender}}</td>
                              </tr>
                              <tr>
                                 <td class="field"><strong>Birthdate</strong></td>
                                 <td>{{Auth::user()->birthdate}}</td>
                              </tr>



                              <tr class="highlight">
                                 <td class="field">&nbsp;</td>
                                 <td class="p-t-10 p-b-10">
   <!--**************Update Button**********-->

                                    <a class="btn btn-primary width-150" href="/users/{{ auth()->user()->id }}">Edit your profile</a>

                                 </td>
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
@stop
