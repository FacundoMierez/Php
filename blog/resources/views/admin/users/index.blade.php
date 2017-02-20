@extends('index')

@section('title','Lista Usuarios')

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-info" href="{{action('usuariosController@create')}}">Nuevo</a><br><br>
			<!-- otra forma<a class="btn btn-info" href="route('admin.users.create')">Nuevo</a>-->
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">
			
			<!--HEAD-->
			<thead>

				<tr class="active info">
					<th>#ID </th>
					<th>Nombre </th>
					<th>Email </th>
					<th>Tipo </th>
					<th>ACCION</th>
				</tr>
			</thead>	

			<!--BODY-->
			<tbody class="text-center">
			@foreach( $users as $item)
				<tr >
					<td>{{$item->id}}</td>
					<td >{{$item->name}}</td>
					<td>{{$item->email}}</td>
					
					@if($item->type=="admin")
						<td class="active text-danger">{{$item->type}}</td>
					@else
						<td>{{$item->type}}</td>
					@endif

					<td>
						<a href="{{route('users.destroy',$item->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash" ></i></a>

						<a href="{{route('users.edit',$item->id)}}" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>

					</td>
					
				</tr>
			@endforeach
			</tbody>
		</table>
	
		<!-- pagination-->
		{!! $users->render() !!}
	</div>

@endsection
