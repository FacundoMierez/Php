@extends('layouts.app')


@section('content')

<!-- Inicio Banner -->
<section id="banner">
    <div class="content">
        <header>
        @foreach ($articleReciente as $element)
            <h3>{{$element->title}}<br /></h3>
            <p><i class="fa fa-folder-open-o"></i><a href="{{ route('HomeSearchCategory',$element->category->name) }}"> {{$element->category->name}}</a></p>  
        </header>
        <p align="justify">{{str_limit($element->content,$limit = 253, $end = '...')}}</p>
        <p><i class="fa fa-clock-o">{{$element->created_at->diffForHumans()}}</i></p>
        <ul class="actions">
            <li><a href="#" class="button big">Learn More</a></li>
        </ul>
    </div>

    <span class="image object">
        <img src="{{$element->images[0]->name}}" alt="" />
    </span>
    @endforeach
</section>
<!--Fin Banenr -->


<!-- Inicio Section CATEGORY -->
<section>                                
    <header class="major">
        <h2>Categorias</h2>
    </header>
    @foreach ($cat as $element)@endforeach
    <div class="features">
        
        <article>
            <span class="icon fa-diamond"></span>
            <div class="content">
                 <h3>Lorem ipsum dolor sit amet</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>

        <article>
            <span class="icon fa-paper-plane"></span>
            <div class="content">
                <h3>Sapien veroeros</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>

        <article>
            <span class="icon fa-rocket"></span>
            <div class="content">
                <h3>Quam lorem ipsum</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>

        <article>
            <span class="icon fa-signal"></span>
            <div class="content">
                <h3>Sed magna finibus</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>

    </div>

</section>
<!-- FIN Section CATEGORY -->

<!--Inicio article-->

<section>
    <header class="major">
        <h2>Mas Reciente</h2>
    </header>
  

    <div class="posts">
        @foreach ($articles as $element)   
            <article>
                <a href="{{ route('HomeSearchArticle',$element->title) }}" class="image">
                @foreach($element->images as $image)
                    <img src="{{$image->name}}" alt="" />
                    @break <!--este brack me sirve cuando un articulo tiene mas de una imagen, entonces con esto solo muestro una sola-->
                @endforeach
                 </a> 

                <br>
                <h3>
                    <a href="{{ route('HomeSearchArticle',$element->title) }}" class="image">{{$element->title}}</a>
                </h3>
                <p><i class="fa fa-folder-open-o"></i><a href="{{ route('HomeSearchCategory',$element->category->name) }}"> {{$element->category->name}}</a></p> 
                <p> {{str_limit($element->content,$limit = 100, $end = '...')}}</p>
                <p><i class="fa fa-clock-o"> {{$element->created_at->diffForHumans()}}</i></p>
                <ul class="actions">
                    <li><a href="{{ route('HomeSearchArticle',$element->title) }}" class="button">More</a></li>
                </ul>
            </article>
       
        @endforeach
    </div>
 
                                    
</section>
<!--Fin Article -->

@endsection