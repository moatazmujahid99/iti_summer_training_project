@extends('layouts.profile_header')
@section('contant')
<!-- begin profile-content -->
<div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-about tab -->
                  <div class="tab-pane fade in active show" id="profile-about">
                     <!-- begin table -->
                     <form action="/users/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="table-responsive">
                            <table class="table table-profile">
                               <tbody>
                                    <tr>
                                     <td class="field"><strong>First Name</strong></td>
                                    <!--****************First Name************-->
                                    <td> <textarea style="width: 353.53px;resize: none" id="first_name" name="first_name" class="form-control{{ $errors->has('first_name') ? ' border-danger' : '' }}" rows="1" >{{Auth::user()->first_name}}</textarea></td>

                                    <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('first_name') !!}</td>
                                    </tr>

                                    <tr>
                                        <td class="field"><strong> Last Name</strong></td>
                                       <!--****************Last Name************-->
                                       <td> <textarea style="width: 353.53px;resize: none" id="last_name" name="last_name" class="form-control{{ $errors->has('last_name') ? ' border-danger' : '' }}" rows="1" >{{Auth::user()->last_name}}</textarea></td>

                                       <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('last_name') !!}</td>
                                    </tr>

                                    <tr>
                                        <td class="field"><strong> Mobile</strong></td>
                                       <!--****************Last Name************-->
                                       <td> <textarea style="width: 353.53px;resize: none" id="phone_number" name="phone_number" class="form-control{{ $errors->has('phone_number') ? ' border-danger' : '' }}" rows="1" >{{ Auth::user()->phone_number ?? ''}}</textarea></td>

                                       <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('phone_number') !!}</td>
                                    </tr>


                                  <tr >
                                    <td class="field"><strong> Bio</strong></td>
                                    <!--****************Last Name************-->
                                    <td> <textarea style="width: 353.53px;" id="description" name="description" class="form-control{{ $errors->has('description') ? ' border-danger' : '' }}" rows="2" >{{ Auth::user()->description ?? ''}}</textarea></td>

                                    <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('description') !!}</td>

                                  </tr>

                                  <tr class="divider">
                                     <td colspan="2"></td>
                                  </tr>
                                  <tr>
                                    <td class="field"><strong> Country/Region</strong></td>
                                    <!--****************Last Name************-->
                                    <td> <textarea style="width: 353.53px;resize: none" id="country" name="country" class="form-control{{ $errors->has('country') ? ' border-danger' : '' }}" rows="1" >{{ Auth::user()->country ?? ''}}</textarea></td>

                                    <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('country') !!}</td>
                                </tr>

                                  <td class="field"><strong> City</strong></td>
                                       <!--****************Last Name************-->
                                       <td> <textarea style="width: 353.53px;resize: none" id="city" name="city" class="form-control{{ $errors->has('city') ? ' border-danger' : '' }}" rows="1" >{{ Auth::user()->city ?? ''}}</textarea></td>

                                       <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('city') !!}</td>


                                  <tr>
                                  <td class="field"><strong> Profile Img</strong></td>
                                    <!--**************Profile Img**********-->
                                  <td><input style="width: 353.53px" type="file" id="user_img" name="user_img" class="form-control{{ $errors->has('city') ? ' border-danger' : '' }}" style="background-color: white;" value="{{Auth::user()->user_img}}"></td>

                                  <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('user_img') !!}</td>

                                </tr>
                                  <tr class="divider">
                                     <td colspan="2"></td>
                                  </tr>
                                  <tr class="highlight">
                                     <td class="field">&nbsp;</td>
                                     <td class="p-t-10 p-b-10">
                                        <!--**************Update Button**********-->
                                        <button type="submit" class="btn btn-primary width-150">Update</button>


                                        <a class="btn btn-white btn-white-without-border width-150 m-l-5" href="/about">Cancel</a>
                                    </td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                    </form>

                     <!-- end table -->
                  </div>
                  <!-- end #profile-about tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
@stop
