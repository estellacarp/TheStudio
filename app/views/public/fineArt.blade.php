@extends('layouts.public')

@section('title') Fine Art @stop

@section('css')

@stop

@section('content')
<h1>Fine Art Gallery</h1>

<div class="container">
<div class="row">
	@if (isset($photo))
		@foreach($photo as $photoInfo)
			
			<div class="col-md-3">
				<article id="images">
				<a href="{{URL::to('largeArt/'. $photoInfo->id)}}">
				<h2>{{$photoInfo->Title}} </h2>
				<img src="{{'/asset/image/'.$photoInfo->Image.'.jpg'}}" >
				</a>
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
