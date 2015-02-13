<!DOCTYPE html>
<html>
	<head>
		<title>Private</title>
			<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
			@yield('css')
	</head>
	<body>
		<img src="asset/image/logo.jpg" width="100%">
			<div >
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="{{ URL::to('home') }}">HOME</a></li>
					<li><a href="{{ URL::to('create') }}">CREATE</a></li>
					<li><a href="{{ URL::to('dashboard') }}">DASHBOARD</a></li>
					<li><a href="{{ URL::to('editPage') }}">Edit</a></li>
				</ul>
			</div>
			<div class ="content">	
			@yield('content')
			</div>
	</body>
</html>