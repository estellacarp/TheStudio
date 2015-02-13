@extends('layouts.private')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
<p>Hello, {{ $name }}</p>


<div class="container-fluid">
<div class="row">
	@if (isset($photo))
		@foreach($photo as $photoInfo)
			
			<div class="col-md-4">
				<article>
				<h1>{{$photoInfo->Title}}</h1>
				<h1>{{$photoInfo->Desc}}</h1>
				<h1>${{$photoInfo->Price}}</h1>
				<img src="{{'asset/image/'.$photoInfo->Image.'.jpg'}}">
			
				{{ link_to("editPage/$photoInfo->id",'Edit')}}
				<br/>
				{{ link_to("deleteRow/$photoInfo->id",'Delete')}}
				</article>
				
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif
</div>
</div>



@stop