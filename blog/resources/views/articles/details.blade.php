@extends('layouts.app')

@section('content')
<!-- Inicio Banner -->
<section id="banner">
    <div class="content">
        
  
       
        <div class="row">
        	<div class="col-md-12">
        		 <h2>{{$article[0]->title}}<br /></h2>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-8 col-md-offset-2">
                    
                    <div id="carousel-1" class="carousel slide" data-ride="carousel">
                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" clas="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                
                    <!-- Contenedor de los slideshow-->
                   
                    <div class="carousel-inner" role="listbox">
                        @foreach($article[0]['images'] as $image)

                            <div class="item {{$active}}">   
                                @php $active="motivaor" @endphp          
                                <img src="{{$image->name}}" class="img img-responsive" alt="">
                                <div class="carousel-caption hidden-xs hidden-sm">
                                    <h3>Este es nuestro slide #1</h3>
                                    <p></p>
                                </div>
                              
                            </div>

                            
                          
                            
                        @endforeach

       
                        <!-- Controles-->
                        <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" arian-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>

                        <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>

                    </div>
                  

                </div>	
        	</div>
        </div>
		<hr>
        <div class="row">
        	<div class="col-md-12">			
        		<p align="justify">{{($article[0]->content)}}</p>

        	</div>
        </div>
           
    
		
  
    </div>
       
</section>
 <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-noticias.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<!--Fin Banenr -->
@endsection