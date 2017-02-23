@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a href="" >
                <img class="img img-responsive img-rounded" src="http://static.minutouno.com/adjuntos/150/imagenes/011/230/0011230322.jpg" alt="Will Neil Young's new tour be worth the wait">
            </a>
        </div>

        <div class="col-md-4">
            <div class="search text-center">
                <h3><span class="glyphicon glyphicon-search"></span> Buscar Articulos</h3>
            </div>
            <input type="text" name="search" id="search" class="form-control" title="search" placeholder="Buscar...">

            <div class="search text-center">
               <h3><span class=""></span>Categorias</h3>
            </div>
            <div class="category">
                <ul>
                @foreach ($cat as $item)                    
                    <li role="separator" class="divider"><a href="{{$item->id}}">{{$item->name}}</a></li>
                @endforeach

                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
