@extends('layouts.public')

@section('title')  @stop

@section('css')
@stop
@section('content')

		<article id="bigImage">
			<h1 class="textLarge">{{$photo->Title}}</h1>	
			<h2 class="textLarge">{{$photo->Desc}}</h2>
			<h2 class="textLarge">${{$photo->Price}}.00</h2>
				<a href="{{ URL ::previous() }}" id="BN">Back</a>
			<img src="{{ asset('asset/image/'. $photo->ImageBig.'.jpg') }}" alt="{{ $photo->Title}}">
				<a href="{{ URL ::to ('next')}}" id="BN">Next</a>
			<br/>
		</article>
<hr>
@stop
@stop