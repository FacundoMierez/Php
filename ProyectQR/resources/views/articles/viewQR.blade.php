@extends('layout.app')

@section('content')

	<img src="data:image/png;base64,{{DNS2D::getBarcodePNG($name, 'QRCODE',7,7)}}" alt="barcode" />
	
	<a href="{{ url('download?path='.$name) }}">
   		 Descargar
	</a>

@endsection()