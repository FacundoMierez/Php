@extends('layouts.app')

@section('title','Crear Usuarios')

@section('content')
	
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger"> 
			{{$error}}	
		</div>
	@endforeach

	{!! Form::open(['route'=>'users.store','method' => 'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::label('email','Email', ['class' => ''])!!}
			{!! Form::email('email',null, ['class' => 'form-control','placeholder'=>'Ingrese Email','required','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña', ['class' => ''])!!}
			{!! Form::password('password', ['class' => 'form-control','placeholder'=>'Ingrese Contraseña','required','minlength'=>'5'])!!}
		</div>
		
		<div class="form-group">
			{!! Form::label('type','Tipo', ['class' => ''])!!}
			{!! Form::select('type', ['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Seleccione una opcion...','required'])!!} 
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection
