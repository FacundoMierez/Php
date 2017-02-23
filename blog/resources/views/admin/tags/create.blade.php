@extends('layouts.app')

@section('title','Crear Tags')

@section('content')
<br>
{!! Form::open(['route'=>'tags.store','method' => 'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection