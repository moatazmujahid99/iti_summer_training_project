@extends('layouts.sign_header')
@section('form')
<form action="#" >
			<h1>Create Account</h1>
 <!--*****Edit Info*****-->
			<input type="text" placeholder="Frist Name"/>
            <input type="text" placeholder="Last Name"/>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
            <input type="text" placeholder="Mobile Number"/>
            <input type="text" placeholder="Bio" />
            <table>
            <tr>
                <td><input type="text" placeholder="Country" /></td>
                <td><input type="text" placeholder="City" /></td>
                <td><input type="text" placeholder="Street" /></td>
            </tr>
            <tr>
            <td class="field">Birthday</td>
                                 <td>
                                    <select class="form-control input-inline input-xs" name="day">
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
                                 </td>
            </tr><tr></tr>
            <tr>
                 <td class="field">Gender</td>
                 <td>
                 <select class="form-control input-inline input-xs" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                 </select>
                 </td>
            </tr>
            </table>
            <input type="file" id="profile_img" name="profile_img" style="background-color: white;">
            <br>
            <button ><a style="color: white;" href="{{ url('/home')}}">Sign Up</a></button>
		</form>


@stop

@section('right_text')
<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<a href="{{url('/signin')}}"><button class="ghost" id="signIn">Sign In</button></a>
			</div>
@stop
