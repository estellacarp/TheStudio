@extends('layouts.public')

@section('title') Portriats @stop

@section('css')

@stop

@section('content')

<h1>This is the Portraits</h1>
<div class="container">
<div class="row">
	@if (isset($photo))
		@foreach($photo as $photoInfo)
			
			<div class="col-md-3">
				<article>
				<h1>{{$photoInfo->Title}}</h1>
				<h1>$ {{$photoInfo->Price}}</h1>
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
