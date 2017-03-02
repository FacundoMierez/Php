@extends('layouts.app')

@section('content')
	@foreach ($articles as $element)
		Title<p>{{$element->title}}</p>
		Content<p>{{$element->content}}</p>

	@endforeach
@endsection