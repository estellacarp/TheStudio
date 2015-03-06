<!DOCTYPE html>
<html>
	<head>
		<title>The Studio @yield('title') </title>
		<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
	
		
		

		@yield('css')
		
	</head>
	<body>
		<img id="logo"  src="asset/image/logo.jpg" width="80%">
		@include('layouts.menu')
		@yield('content')




		{{ HTML::script("https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js")}}	
		{{ HTML::script('asset/js/bootstrap.min.js') }}

	</body>
</html>