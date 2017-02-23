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

    <div class="row feature">
        <div class="col-md-6 feature-new">
            <h4>Noticias</h4>            
        </div>
        <div class="col-md-4 col-md-offset-2 hidden-xs">
            <ul class="nav nav-pills">
                <li role="presentation" class="popular"><a href="#">Recientes</a></li>
                <li role="presentation" class="reciente"><a href="#">Populares</a></li>
            </ul>   

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            
            <div class="row">
                <br>
                <div class="col-md-6">
                    <a href="">
                        <img width="250" src="http://ep00.epimg.net/tecnologia/imagenes/2014/01/06/actualidad/1389037452_720619_1389037645_noticia_normal.jpg" class="img img-responsive">
                    </a>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="">
                                <img  width="200" src="http://ep01.epimg.net/internacional/imagenes/2016/11/09/estados_unidos/1478647677_279555_1478692897_noticia_fotograma.jpg" class="img img-responsive">

                            </a>
                        </div>
                         <div class="col-md-7">
                            <p>Elecciones en EEUU</p>
                            <strong>Categoria: <mark>Politica</mark></strong>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <a href="">
                                <img  width="200" src="http://todo-tecnologia.net/wp-content/uploads/2014/02/42FF-Tecnologia-novo1.gif" class="img img-responsive">

                            </a>
                        </div>
                        <div class="col-md-7">
                            <p>Reloj Inteligente</p>
                            <strong>Categoria: <mark>Tecnologia</mark></strong>
                        </div>
                    </div>

                </div>      
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-5 search">Educacion</div>
            <div class="col-md-5 col-md-offset-1 search">Negocio</div>
        </div>
    </div>
</div>
@endsection
