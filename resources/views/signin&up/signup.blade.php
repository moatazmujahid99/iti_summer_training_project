@extends('layouts.sign_header')
@section('form')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <h1>Create Account</h1>
<!--*****Edit Info*****-->

    <input type="text"  name ="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" placeholder="Name"/>
    @error('name')
    <span class="invalid-feedback" role="alert" style="text-align: left">
        <strong style="font-size: 10px; color:red">{{ $message }}</strong>
    </span>
    @enderror

    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email"/>

    @error('email')
        <span class="invalid-feedback" role="alert" style="text-align: right">
            <strong style="font-size: 10px; color:red ;">{{ $message }}</strong>
        </span>
    @enderror


    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong style="font-size: 10px; color:red">{{ $message }}</strong>
        </span>
    @enderror

    <input type="password" name="password_confirmation" placeholder="confim password" />

    <input id="city" type="text"  name="city" placeholder="City">

    <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" placeholder="Birth Date">

    @error('birthdate')
        <span class="invalid-feedback" role="alert">
            <strong style="font-size: 10px; color:red">{{ $message }}</strong>
        </span>
    @enderror


    <input type="file" id="profile_img" name="profile_img" style="background-color: white;padding:20px 0">
    <br>
    <button type="submit" class="btn btn-primary">
                            {{ __('Sign Up') }}
                        </button>
</form>



@stop

@section('right_text')
<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<a href="{{url('/signin')}}"><button class="ghost" id="signIn">Sign In</button></a>
			</div>
@stop

