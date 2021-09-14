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
                                 <td class="field">First Name</td>
   <!--****************First Name************-->
                                 <td> <textarea class="form-control input-lg no-border" rows="1" >John</textarea></td>
                              </tr>
                              <tr>
                                 <td class="field">Last Name</td>
   <!--****************Last Name************-->
                                 <td> <textarea class="form-control input-lg no-border" rows="1" >Doe</textarea></td>
                              </tr>
                              <tr>
                                 <td class="field">Mobile</td>
   <!--****************Mobile Number ************-->
                                 <td> <textarea class="form-control input-lg no-border" rows="1" >000000</textarea></td>
                              </tr>
                              <tr class="highlight">
                                 <td class="field">Bio</td>
                                 <td> 
   <!--****************Bio************-->
                                    <textarea class="form-control input-lg no-border" rows="2">Web And Frontend Developer</textarea>
                                 </td>
                              </tr>
                              <tr class="divider">
                                 <td colspan="2"></td>
                              </tr>
                              <tr>
                                 <td class="field">Country/Region</td>
                                 <td>
   <!--****************Country************-->
                                 <textarea class="form-control input-lg no-border" rows="1" >USA</textarea>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="field">City</td>
   <!--****************City************-->
                                 <td> <textarea class="form-control input-lg no-border" rows="1" >LA</textarea></td>
                              </tr>
                              <tr>
                                 <td class="field">Street</td>
   <!--****************Street************-->
                                 <td> <textarea class="form-control input-lg no-border" rows="1" >7 high ST</textarea></td>
                              </tr>
                             
                              <tr>
                                 <td class="field">Gender</td>
                                 <td>
                                    <select class="form-control input-inline input-xs" name="gender">
   <!--****************Gender************-->
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                    </select>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="field">Birthdate</td>
                                 <td>
                                    <select class="form-control input-inline input-xs" name="day">
   <!--****************Day************-->
                                        <option value="01" selected="">01</option>
                                        <option value="02" selected="">02</option>
                                        <option value="03" selected="">03</option>
                                        <option value="04" selected="">04</option>
                                        <option value="05" selected="">05</option>
                                        <option value="06" selected="">06</option>
                                        <option value="07" selected="">07</option>
                                        <option value="08" selected="">09</option>
                                        <option value="10" selected="">10</option>
                                        <option value="11" selected="">11</option>
                                        <option value="12" selected="">12</option>
                                        <option value="13" selected="">13</option>
                                        <option value="14" selected="">14</option>
                                        <option value="15" selected="">15</option>
                                        <option value="16" selected="">16</option>
                                        <option value="17" selected="">17</option>
                                        <option value="18" selected="">18</option>
                                        <option value="19" selected="">19</option>
                                        <option value="20" selected="">20</option>
                                        <option value="21" selected="">21</option>
                                        <option value="22" selected="">22</option>
                                        <option value="23" selected="">23</option>
                                        <option value="24" selected="">24</option>
                                        <option value="25" selected="">25</option>
                                        <option value="26" selected="">26</option>
                                        <option value="27" selected="">27</option>
                                        <option value="28" selected="">28</option>
                                        <option value="29" selected="">29</option>
                                        <option value="30" selected="">30</option>
                                        <option value="31" selected="">31</option>
                                    </select></td>
                                 <td>
                                    <select class="form-control input-inline input-xs" name="month">
   <!--****************Month************-->
                                        <option value="01" selected="">01</option>
                                        <option value="02" selected="">02</option>
                                        <option value="03" selected="">03</option>
                                        <option value="04" selected="">04</option>
                                        <option value="05" selected="">05</option>
                                        <option value="06" selected="">06</option>
                                        <option value="07" selected="">07</option>
                                        <option value="08" selected="">09</option>
                                        <option value="10" selected="">10</option>
                                        <option value="11" selected="">11</option>
                                        <option value="12" selected="">12</option>
                                    </select></td>
                                    <td>
                                    <select class="form-control input-inline input-xs" name="year">
   <!--****************Year************-->
                                        <option value="1989" selected="">1989</option>
                                        <option value="1990" selected="">1990</option>
                                        <option value="1991" selected="">1991</option>
                                        <option value="1992" selected="">1992</option>
                                        <option value="1993" selected="">1993</option>
                                        <option value="1994" selected="">1994</option>
                                        <option value="1995" selected="">1995</option>
                                        <option value="1996" selected="">1996</option>
                                        <option value="1997" selected="">1997</option>
                                        <option value="1998" selected="">1998</option>
                                        <option value="1999" selected="">1999</option>
                                        <option value="2000" selected="">2000</option>
                                    </select>
                                 </td><td></td>
                              </tr>
                              <tr>
                              <td class="field">Profile Img</td>
   <!--**************Profile Img**********-->
                              <td><input type="file" id="profile_img" name="profile_img" style="background-color: white;"></td>
                              </tr>
                              <tr class="divider">
                                 <td colspan="2"></td>
                              </tr>
                              <tr class="highlight">
                                 <td class="field">&nbsp;</td>
                                 <td class="p-t-10 p-b-10">
   <!--**************Update Button**********-->
                                    <button type="submit" class="btn btn-primary width-150">Update</button>
                                    <button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5">Cancel</button>
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