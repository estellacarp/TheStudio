@extends('layouts.public')

@section('title') Portriats @stop

@section('css')

@stop

@section('content')

<h1>Portraits Gallery</h1>
<div class="container">
<div class="row">
	@if (isset($photo))
		@foreach($photo as $photoInfo)
			
			<div class="col-md-3">
				<article id ="images">
				<h2>{{$photoInfo->Title}}</h2>
				<img src="{{'asset/image/'.$photoInfo->Image.'.jpg'}}">
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
