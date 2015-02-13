@extends('layouts.private')

@section('title') Create New Project @stop

@section('content')

<H1>This is for me to add information to the site</H1>



{{Form::open(['url' => 'save','class'=>'form', 'files'=>true])}}
@include('layouts.formInput')
{{Form::Submit('Save', ['class' => 'btn btn-primary'])}}
{{Form::close()}}



@stop