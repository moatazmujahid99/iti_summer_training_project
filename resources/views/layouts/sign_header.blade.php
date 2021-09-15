<html>
<head>
    <link rel="stylesheet" href="{{URL::asset('css/loginStyle.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <script src="{{URL::asset('js/loginJs.js')}}"></script>
    <title>Facebook</title>
    </head>
<body>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		@yield('form')
	</div>
	<div class="overlay-container">
		<div class="overlay">
			@yield('right_text')
		</div>
	</div>
</div>
</body>
</html>
