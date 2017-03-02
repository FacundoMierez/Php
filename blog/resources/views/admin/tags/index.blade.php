@extends('layouts.app')

@section('title','	List Tags')

@section('content')
<br>
	
	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-info" href="{{action('TagsController@create')}}">Nuevo</a><br><br>
			<!-- otra forma<a class="btn btn-info" href="route('admin.users.create')">Nuevo</a>-->
		</div>
		
		{!!Form::open(['route'=>'tags.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
		<div class="input-group">
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Tags...','aria-describedby'=>'search']) !!}	
				<span class="input-group-addon" id="search">
					<i class=" glyphicon glyphicon-search" aria-hidden="true"></i>
				</span>	
			{!!Form::close() !!}
		</div>


	</div>
	
	<div class="row">
		<div class="col-md-12">	
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
					@foreach( $tag as $item)
						<tr >
							<td>{{$item->id}}</td>
							<td >{{$item->name}}</td>

							<td>
								<a href="{{route('tags.destroy',$item->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash" ></i></a>

								<a href="{{route('tags.edit',$item->id)}}" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>

							</td>
							
						</tr>
					@endforeach
					</tbody>
				</table>
			
				<!-- pagination-->
				{!! $tag->render() !!}
			</div>
		</div>
	</div>

@endsection
