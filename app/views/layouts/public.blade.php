<!DOCTYPE html>
<html>
	<head>
		<title>The Studio @yield('title') </title>
		<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
		@yield('css')

	</head>
	<body>
		
		<img src="asset/image/logo.jpg" width="100%">
		<div>

			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="{{ URL::to('home') }}">Home</a></li>
				<li><a href="{{ URL::to('gallery')}}">Photo Gallery</a>	</li>
				<li><a href= "{{ URL::to('contact')}}">Contact Us</a></li>
				<li><a href= "{{ URL::to('work')}}">Bio</a></li>
				<li><a href= "{{ URL::to('hist')}}">History</a></li>
				<li><a href= "{{ URL::to('work')}}">WorkShop</a></li>
			</ul>
		</div>
		<!-- <a href="{{ URL::to('login') }}">Go to login page</a> -->
		
		@yield('content')
		
	</body>
</html>