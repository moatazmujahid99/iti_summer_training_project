@extends('layouts.sign_header')
@section('form')
<form action="#">
			<h1>Sign in</h1><br>
			<span>or use your account</span>
<!--****Email & Password****-->
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<br>
<!--****Sign In Button****-->
            <button><a style="color: white;" href="{{ url('/home')}}">Sign In</a></button>
		</form>
@stop

@section('right_text')
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp"><a style="color: white;" href="{{ url('/signup')}}">Sign Up</a></button>
			</div>
@stop
		
