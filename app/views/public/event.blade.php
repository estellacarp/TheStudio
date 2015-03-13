@extends('layouts.public')

@section('title')Commercial @stop

@section('css')

@stop

@section('content')
<h1>This is the Commercial Gallery</h1>

<div class="container">
<div class="row">

	@if (isset($photo))
			@foreach($photo as $photoInfo)
			
			<div class="col-md-6">
				<article>
				<h1>{{$photoInfo->Title}}</h1>
				<img src="{{'asset/image/'.$photoInfo->Image.'.jpg'}}">
				<p>${{$photoInfo->Price}}.00</p>
				<p>{{$photoInfo->Desc}}</p>
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
