
<div class ='form-group'>
{{Form::label('Title','Title:')}}
{{Form::text('Title', null, ['class' => 'form-control'])}}
{{$errors->first('Title')}}
</div>

<div class ='form-group'>
{{Form::label('Desc','Description:')}}
{{Form::textarea('Desc' , null, ['class' => 'form-control'])}}
{{$errors->first('Description')}}
</div>

<div class ='form-group'>
{{Form::label('Price','Price:')}}
{{Form::text('Price', null, ['class' => 'form-control'])}}
</div>

<div class ='form-group'>
{{Form::label('idArt', 'Fine Art:')}}
{{Form::checkbox('idArt')}} 
<br>
{{Form::label('idCom', 'Commercial:')}}
{{Form::checkbox('idCom')}} 
<br>
{{Form::label('idPort', 'Portraits:')}}
{{Form::checkbox('idPort')}}
</div>

<div class ='form-group'>
{{Form::label('ImageBig','Image Upload:')}}
{{Form::file('ImageBig' , null, ['class' => 'form-control'])}}
</div>







