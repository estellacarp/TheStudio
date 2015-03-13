@extends('layouts.public')

@section('title') Fine Art @stop

@section('css')

@stop

@section('content')
<h1>This is the Fine Art Gallery</h1>

<div class="container">
<div class="row">
	@if (isset($photo))
		@foreach($photo as $photoInfo)
			
			<div class="col-md-4">
				<article>
				<a href="{{URL::to('large/'. $photoInfo->id)}}">
				<h1>{{$photoInfo->Title}} </h1>
				<img src="{{'/asset/image/'.$photoInfo->Image.'.jpg'}}" >
				<p>${{$photoInfo->Price}}.00</p>
				</a>
				</li>
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
