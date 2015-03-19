@extends('layouts.public')

@section('title')Commercial @stop

@section('css')

@stop

@section('content')
<h1>Commercial Gallery</h1>

<div class="container">
<div class="row">

	@if (isset($photo))
			@foreach($photo as $photoInfo)
			
			<div class="col-md-4">
				<article>
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
