<!DOCTYPE html>
<html>
<head>
	<title>App @yield('title','Default')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body>

<nav class="navbar navbar-default col-md-10 col-md-offset-1">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Blog</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Blog</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Usuarios</a></li>
              <li><a href="#">Articulos</a></li>
              <li><a href="#">Categorias</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Categorias <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
</nav>



<div class="container">
  <div class="panel panel-info">
    
    <div class="panel-heading">@yield('title','Default')</div>
    
    <div class="panel-body">
      @yield('content')
    </div>
  </div>
	
</div>

</body>
</html>