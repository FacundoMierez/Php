@extends('layouts.app')

@section('title','Editar Tags')

@section('content')
	{!! Form::open(['route'=>['tags.update', $tag],'method' => 'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name', $tag->name, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection
