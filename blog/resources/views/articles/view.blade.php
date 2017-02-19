<h1>VISTA DE ARTICLES VIEW</h1>

<h1>{{$articles->title}}</h1>

<hr>
		
<label>Content: </label>{{$articles->content}}</br>
<label>Categoria: </label>{{$articles->category->name}}</br>
<label>Usuario: </label>{{$articles->user->name}}</br>

@foreach($articles->tags  as $item)
	<label>Tags: </label>{{$item->name}}
@endforeach
		


