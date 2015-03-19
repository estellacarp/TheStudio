@extends('layouts.private')

@section('title') Home @stop

@section('css')

@stop

@section('content')
<p>Hello, {{ $name }}</p>


<div class="container-fluid">
<div class="row" >
	@if (isset($photo))
		@foreach($photo as $photoInfo)
			<div class="col-md-3">
				<article id="images" >
					<h1 id="textTitle">{{$photoInfo->Title}}</h1>
					<h1 id="textDesc">{{$photoInfo->Desc}}</h1>
					<h1 id="textPrice">${{$photoInfo->Price}}</h1>
					<img src="{{'asset/image/'.$photoInfo->Image.'.jpg'}}" width="15%">
					<ul class="nav nav-pills">
						<li class="active" class="Elink">{{link_to("editPage/$photoInfo->id",'Edit')}}</li>
						<li class="active" class="Elink">{{link_to("deleteRow/$photoInfo->id",'Delete')}}</li>
					</ul>
				</article>
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif
</div>
</div>



@stop