@extends('index')

@section('title','Lista Categorias')

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-info" href="{{action('CategoriasController@create')}}">Nuevo</a><br><br>
			<!-- otra forma<a class="btn btn-info" href="route('admin.users.create')">Nuevo</a>-->
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">
			
			<!--HEAD-->
			<thead>

				<tr class="active info">
					<th>#ID </th>
					<th>Descripcion</th>
					<th>ACCION</th>
				</tr>
			</thead>	

			<!--BODY-->
			<tbody class="text-center">
			@foreach( $cat as $item)
				<tr >
					<td>{{$item->id}}</td>
					<td >{{$item->name}}</td>

					<td>
						<a href="{{route('categories.destroy',$item->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash" ></i></a>

						<a href="{{route('categories.edit',$item->id)}}" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>

					</td>
					
				</tr>
			@endforeach
			</tbody>
		</table>
	
		<!-- pagination-->
		{!! $cat->render() !!}
	</div>

@endsection
