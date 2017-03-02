
@extends('layouts.app')
@section('title','Editar Categorias')

@section('content')
	{!! Form::open(['route'=>['categories.update', $cat],'method' => 'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name', $cat->name, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>


		<div class="form-group">
			{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection
