@extends('layouts.app')


@section('content')

<!-- Inicio Banner -->
<section id="banner">
    <div class="content">
        <header>
        @foreach ($articles as $element)
            <h3>{{$element->title}}<br /></h3>
            <p><i class="fa fa-folder-open-o"></i>{{$element->category->name}}</p>  
        </header>
        <p align="justify">{{str_limit($element->content,$limit = 253, $end = '...')}}</p>
        <p><i class="fa fa-clock-o"> {{$element->created_at}}</i></p>
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
        @foreach ($article as $element)
      
        <article>
            <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
            <h3>{{$element->title}}</h3>
            <p><i class="fa fa-folder-open-o"></i> {{$element->category->name}}</p> 
            <p> {{str_limit($element->content,$limit = 100, $end = '...')}}</p>
            <p><i class="fa fa-clock-o"> {{$element->created_at->diffForHumans()}}</i></p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        @endforeach
    </div>
                                    
</section>
<!--Fin Article -->

@endsection