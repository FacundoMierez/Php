<!DOCTYPE html>
<html>
<head>
	<title>App @yield('title','Default')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body>

<div class="row">
  <nav class="navbar navbar-default col-md-10 col-md-offset-1">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('HomeView')}}">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{route('users.index')}}">Usuarios</a></li>
          <li><a href="{{route('categories.index')}}">Categorias</a></li>
          <li><a href="#">Articulos</a></li>
          <li><a href="#">Imagenes</a></li>
          <li><a href="#">Tags</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-10">
      <div class="panel panel-info">
        
        <div class="panel-heading">@yield('title','Home')</div>
        
        <div class="panel-body">
          @yield('content')
        </div>
        <div class="panel-footer">
          @include('flash::message')
        </div>
      </div>
    </div>	
  </div>
</div>

</body>
</html>