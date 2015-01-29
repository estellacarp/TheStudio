@extends('layouts.private')

@section('title') Create New Project @stop

@section('content')

<H1>This is for me to Update and edit information to the site</H1>



{{Form::model($photo,['url' => 'update/'.$photo->id, 'files'=>true])}}
@include('layouts.formInput')
{{Form::Submit('Save Update', ['class' => 'btn btn-primary'])}}
{{Form::close()}}





@stop