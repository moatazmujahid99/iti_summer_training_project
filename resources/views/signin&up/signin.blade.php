@extends('layouts.sign_header')
@section('form')
<form method="POST" action="{{ route('login') }}">
    @csrf
			<h1>Sign in</h1><br>
			<span>or use your account</span>
    <!--****Email & Password****-->
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" >

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong style="font-size: 10px; color:red">{{ $message }}</strong>
        </span>
    @enderror


    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" size="100">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong style="font-size: 10px; color:red">{{ $message }}</strong>
        </span>
    @enderror

	<br>
    <!--****Sign In Button****-->
    <button type="submit" class="btn btn-primary">
        {{ __('Sign In') }}
    </button>
</form>
@stop

@section('right_text')
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp"><a style="color: white;" href="{{ url('/signup')}}">Sign Up</a></button>
			</div>
@stop

