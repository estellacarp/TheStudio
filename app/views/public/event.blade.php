@extends('layouts.public')

@section('title') Events @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
<h1>This is the Events Gallery</h1>

<div class="container">
<div class="row">
	@if (isset($event))
		@foreach($event as $eventInfo)
			
			<div class="col-md-4">
				<article>
				<h1>{{$eventInfo->Title}}</h1>
				<img src="{{'asset/image/'.$photoInfo->Image.'.jpg'}}">
				<p>${{$eventInfo->Price}}.00</p>
				<p>{{$eventInfo->Desc}}</p>
				</article>
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif
</div>
</div>
<br/>
<br/>

@stop		
@stop
