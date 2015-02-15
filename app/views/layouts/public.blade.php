<!DOCTYPE html>
<html>
	<head>
		<title>The Studio @yield('title') </title>
		<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
		@yield('css')
	</head>
	<body>
		<img class='img-responsive' src="asset/image/logo.jpg">
		@include('layouts.menu')
		@yield('content')

	</body>
</html>