@extends('layouts.templateSite')

@section('css')
<link rel="stylesheet" href="{{asset('css/about.css')}}" type="text/css" media="screen" />
@endsection

@section('content')
<div id="aboutus">
    <div class="container">
        <div class="section_header">
            <h3>Cursos da Plataforma de estudo</h3>
        </div>
        <div class="row">
            <div class="span12 intro">
                @foreach($vimeo_courses as $vimeo_course)
                <div class="media">
                    <a class="pull-left" href="{{$vimeo_course->url}}">
                      <img class="media-object" src="{{asset('storage/'.$vimeo_course->image)}}" width="70">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">{{$vimeo_course->name}}</h4>
                      <p><strong><a href="{{$vimeo_course->url}}">Acessar o curso</a></strong></p>
                    </div>
                </div>
                <hr>
                @endforeach     
            </div>
        </div>
    </div>
</div>

<div class="container">            

    <hr />
    <div class="btn-share">
        <div>
            <div class="fb-share-button" data-href="https://www.etop.net.br/?p=quemsomos" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.etop.net.br/?p=quemsomos&amp;src=sdkpreparse">Compartilhar</a></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        </div>
        <div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" rel="nofollow">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>
        <div>							
            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300"></div>
            <script type="text/javascript">
              window.___gcfg = {lang: 'pt-BR'};

              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
        </div>
    </div>

</div>




@endsection


@section('script')
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

@endsection