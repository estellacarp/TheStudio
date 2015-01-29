@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')

		

<h1>This is the Photo Gallery</h1>
<div class="container-fluid, container">	
<div class="row">
	@if (isset($photo))
		@foreach($photo as $photInfo)
			
			<div class="col-md-4">
				<h1>{{$photoInfo->Title}}</h1>
				<h1>{{$photoInfo->Desc}}</h1>
				
				<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="{{'asset/image/'.$photoInfo->Image.'.jpg'}}"><img src="{{'asset/image/'.$photoInfo->Image.'.jpg'}}"></button>
					
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif

</div>
</div>

@stop		
@stop
