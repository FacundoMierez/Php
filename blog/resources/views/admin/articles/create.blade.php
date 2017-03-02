@extends('layouts.app')

@section('title','Crear Articulos')

@section('content')
	
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger"> 
			{{$error}}	
		</div>
	@endforeach


	
	{!! Form::open(['route'=>'articles.store','method' => 'POST','files'=>'true']) !!}
		
		<div class="form-group">
			{!! Form::label('title','Titulo', ['class' => ''])!!}
			{!! Form::text('title',null, ['class' => 'form-control','placeholder'=>'Ingrese Titulo','required','autofocus','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria', ['class' => ''])!!}
			{!! Form::select('category_id', $cats,null,['class'=>'form-control select-cat','required'])!!} 
		</div>

		<div class="form-group">
			{!! Form::label('tags','Tags', ['class' => ''])!!}
			{!! Form::select('tags[]', $tags,null,['class'=>'form-control  select-tag','required','multiple'])!!} 
		</div>
		
		<div class="form-group">
			{!! Form::label('content','Contenido', ['class' => ''])!!}
			{!! Form::textarea('content',null, ['class' => 'form-control textarea-content','placeholder'=>'Ingrese Contenido...','required','minlength'=>'5'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>
		
		<div class="form-group">
			{!! Form::label('image','Imagen', ['class' => ''])!!}
			{!! Form::file('image',null, ['class' => 'form-control','placeholder'=>'Ingrese Imagen...','required'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection

@section('js')

<script>

	$('.select-tag').chosen({
		placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
		max_selected_options: 3,
		search_contains: true,
		no_results_text: 'No se encontraron estos tags'
	});

	$('.select-cat').chosen({
		placeholder_text_single:'Seleccione una categoria'
	});

	$('.textarea-content').trumbowyg();
	
</script>

@endsection
