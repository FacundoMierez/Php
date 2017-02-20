
@extends('index')

@section('title','Editar Usuarios')

@section('content')
	{!! Form::open(['route'=>['users.update', $user],'method' => 'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre', ['class' => ''])!!}
			{!! Form::text('name', $user->name, ['class' => 'form-control','placeholder'=>'Ingrese Nombre','required','autofocus'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>

		<div class="form-group">
			{!! Form::label('email','Email', ['class' => ''])!!}
			{!! Form::email('email', $user->email, ['class' => 'form-control','placeholder'=>'Ingrese Email','required'])!!} <!--params:nombre,valorpor defecto, clases-->
		</div>
		
		<div class="form-group">
			{!! Form::label('type','Tipo', ['class' => ''])!!}
			{!! Form::select('type', ['member'=>'Miembro','admin'=>'Administrador'],$user->type,['class'=>'form-control'])!!} 
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection
