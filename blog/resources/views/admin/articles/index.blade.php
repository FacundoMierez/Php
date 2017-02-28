@extends('index')

@section('title','Lista Articulos')

@section('content')
	<br>
	<div class="row">
		
		<div class="col-md-6">
			<a class="btn btn-info" href="{{action('ArticlesController@create')}}">Nuevo</a><br><br>
			<!-- otra forma<a class="btn btn-info" href="route('admin.users.create')">Nuevo</a>-->
		</div>
		
		{!!Form::open(['route'=>'articles.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Tags...','aria-describedby'=>'search']) !!}	
					<span class="input-group-addon" id="search">
						<i class=" glyphicon glyphicon-search" aria-hidden="true"></i>
					</span>
			</div>
		{!!Form::close() !!}
	
		</div>


		<div class="table-responsive">
			<table class="table table-bordered table-hover table-condensed">
			
			<!--HEAD-->
			<thead>
				<tr class="active info">
					<th>ID</th>
					<th>Titulo</th>
					<th>Categoria</th>
					<th>User</th>
					<th>Accion</th>
				</tr>
			</thead>	

			<!--BODY-->
			<tbody class="text-center">
				@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>
					<td>
						<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning"> 
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a> 
						
						<a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('seguro de eliminar esta noticia???')" class="btn btn-danger"> 
							<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
						</a>

					</td>
				</tr>
			@endforeach
			</tbody>
				
			</table>
		
			<!-- pagination-->
			<div class="text-center">
				{!! $articles->render() !!}
			</div>
		</div>

@endsection
