@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')

<h1>This is the Potrfolio</h1>

<div class="container">
<div class="row" >

		<div class="col-md-4">
			<article>
				<a href="{{ URL::to('gallery')}}">	
				<h1>Portraits</h1>
				<img src="asset/image/hello 2 small.jpg">
				</a>
			</article>
		</div>
		<div class="col-md-4">
			<article>
			<a href="{{ URL::to('event')}}">	
				<h1>Events</h1>
				<img src="asset/image/hello 2 small.jpg">
				</a>
			</article>
		</div>
		<div class="col-md-4">
			<article>
				<a href="{{ URL::to('fineArt')}}">	
				<h1>Fine Art</h1>
				<img src="asset/image/hello 2 small.jpg" >
				</a>
			</article>
		</div>
	</div>
</div>

<br/>
<br/>

@stop		
@stop