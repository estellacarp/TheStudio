@extends('layouts.public')

@section('title')  @stop

@section('css')
@stop
@section('content')
<h1> View</h1>
<article>
		<h1>{{$photo->Title}}</h1>	
		<br/>
		<img src="{{'../public/asset/image/'.$photo->ImageBig.'.jpg' }}" alt="{{ $photo->Title}}">
		<h1>{{$photo->Desc}}</h1>
		<br/>
		<h1>${{$photo->Price}}.00</h1>
		<br/>
		</article>
<hr>
<a href="{{ URL ::previous() }}">Back</a>
<a href="{{ URL ::to('next/'. $photo->id)}}">Next</a>


@stop
@stop