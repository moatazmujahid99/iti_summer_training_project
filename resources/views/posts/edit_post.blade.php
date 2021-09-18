@extends('layouts.profile_header')
@section('contant')
<!-- begin profile-content -->
<div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-about tab -->
                  <div class="tab-pane fade in active show" id="profile-about">
                     <!-- begin table -->
                     <form action="/posts/{{$post->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="table-responsive">
                            <table class="table table-profile">
                               <tbody>
                                <tr >
                                    <td class="field"><strong> Post Body</strong></td>
                                    <!--****************Last Name************-->
                                    <td> <textarea style="width: 600px; height:150px" id="description" name="description" class="form-control{{ $errors->has('description') ? ' border-danger' : '' }}" rows="2" >{{ $post->description}}</textarea></td>

                                    <td style="font-weight: bold;font-size:15px" class="form-text text-danger">{!! $errors->first('description') !!}</td>

                                </tr>

                                @isset($post->post_img)
                                <tr>
                                    <td class="field"><strong> Post Image</strong></td>
                                    <td>

                                        <img width="280px" height="180px" src="{{ asset('images/posts/' . $post->post_img) }}" class="img-responsive full-width" id="show_image">
                                    </td>
                                </tr>
                                @endisset

                                <tr>
                                    <td class="field"><strong> Select Post Image</strong></td>
                                      <!--**************Profile Img**********-->
                                    <td><input style="width: 353.53px" type="file" id="file-input" name="post_img" class="form-control{{ $errors->has('post_img') ? ' border-danger' : '' }}" style="background-color: white;"></td>

                                    <td style="font-weight: bold" class="form-text text-danger">{!! $errors->first('post_img') !!}</td>

                                  </tr>

                                <tr class="divider">
                                    <td colspan="2"></td>
                                 </tr>
                                 <tr class="highlight">
                                    <td class="field">&nbsp;</td>
                                    <td class="p-t-10 p-b-10">
                                       <!--**************Update Button**********-->
                                       <button type="submit" class="btn btn-primary width-150">Update</button>

                                       <a class="btn btn-white btn-white-without-border width-150 m-l-5" href="/{{$return=='/'?'':$return}}">Cancel</a>

                                   </td>
                                 </tr>

                               </tbody>
                            </table>
                         </div>
                         <input type="hidden" name="return" value="{{$return}}" />
                    </form>

                     <!-- end table -->
                  </div>
                  <!-- end #profile-about tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
@stop
