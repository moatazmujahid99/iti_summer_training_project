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
                                <td> {{ $user->first_name }}</td>
                            </tr>
                            <tr>
                                <td class="field"><strong>Last Name</strong></td>
                                <!--****************Last Name************-->
                                <td> {{ $user->last_name }}</td>
                            </tr>
                            <tr>
                                <td class="field"><strong>Mobile</strong></td>
                                <!--****************Mobile Number ************-->
                                @isset($user->phone_number)

                                    <td> {{ $user->phone_number }}</td>
                                @else
                                    <td>Please add your phone number</td>
                                @endisset

                            </tr>
                            <tr class="highlight">
                                <td class="field"><strong> Bio</strong></td>
                                <td>
                                    <!--****************Bio************-->
                                    @isset($user->description)
                                        <textarea style=" width: 500px; height: 150px; resize: both; overflow: auto;" name="description"
                                            class="form-control input-lg no-border" rows="2"
                                            disabled>{{ $user->description }}</textarea>
                                    @else
                                        <textarea name="description"
                                            class="form-control input-lg no-border" rows="2"
                                            disabled>Tell me about yourself</textarea>
                                    @endisset

                                </td>
                            </tr>
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="field"><strong>Country/Region</strong></td>
                                @isset($user->country)
                                    <td>{{ $user->country }}</td>
                                @else
                                    <td>Please add your country</td>
                                @endisset

                            </tr>
                            <tr>
                                <td class="field"><strong>City</strong></td>
                                @isset($user->city)
                                    <td>{{ $user->city }}</td>
                                @else
                                    <td>Please add your city</td>
                                @endisset

                            </tr>

                            <tr>
                                <td class="field"><strong>Gender</strong></td>
                                <td>{{ $user->gender }}</td>
                            </tr>
                            <tr>
                                <td class="field"><strong>Birthdate</strong></td>
                                <td>{{ $user->birthdate }}</td>
                            </tr>



                            <tr class="highlight">
                                <td class="field">&nbsp;</td>
                                <td class="p-t-10 p-b-10">
                                    <!--**************Update Button**********-->

                                    <a class="btn btn-primary width-150" href="/users/{{ $user->id }}/edit">Edit your
                                        profile</a>

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
