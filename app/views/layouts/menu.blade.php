<div class="dropdown" >
	<ul class="nav nav-tabs">
		<li  role="presentation"><a href="{{ URL::to('home') }}">Home</a></li>
		<li role="presentation" class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('portfolio')}}"  role="button" aria-expanded="false">Portfolio<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ URL::to('fineArt') }}">Fine Art</a></li>
					<li><a href="{{ URL::to('gallery') }}">Portraits</a></li>
					<li><a href="{{ URL::to('event') }}">Events</a></li>
				</ul>
		</li>
		<li role="presentation"><a href= "{{ URL::to('contact')}}">Contact Us</a></li>
		<li role="presentation"><a href= "{{ URL::to('bio')}}">Bio</a></li>
		<li role="presentation"><a href= "{{ URL::to('work')}}">WorkShop</a></li>
	</ul>
</div>