@extends('index')

@section('title','Lista Articulos')

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-info" href="{{action('ArticlesController@create')}}">Nuevo</a><br><br>
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
				
			</tbody>
		</table>
	
		<!-- pagination-->
		
	</div>

@endsection
