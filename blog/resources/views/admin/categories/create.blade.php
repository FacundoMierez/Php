
@extends('layouts.app')

@section('title','Crear Categorias')

@section('content')
	
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger"> 
			{{$error}}	
		</div>
	@endforeach

	{!! Form::open(['route'=>'categories.store','method' => 'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection
