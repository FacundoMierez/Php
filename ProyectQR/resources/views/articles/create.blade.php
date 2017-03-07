@extends('layout.app')

@section('content')


	
	{!! Form::open(['route'=>'article.store','method' => 'POST','files'=>'true']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>
		
		<div class="form-group">
			{!! Form::label('description','Descripcion', ['class' => ''])!!}
			{!! Form::textarea('description',null, ['class' => 'form-control','placeholder'=>'Ingrese Descripcion','required','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>
		
		<div class="form-group">
			{!! Form::label('image','Imagen', ['class' => ''])!!}
			{!! Form::file('image',null, ['class' => 'form-control','placeholder'=>'Ingrese Imagen...','required'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection()