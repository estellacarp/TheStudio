@extends('layouts.private')

@section('title') Create New Project @stop

@section('content')

<H1>Fill out the form to add pictures.</H1>

{{Form::open(['url' => 'save','class'=>'form', 'files'=>true])}}
@include('layouts.formInput')
{{Form::Submit('Save', ['class' => 'btn btn-primary'])}}
{{Form::close()}}



@stop