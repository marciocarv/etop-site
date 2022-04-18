@extends('layouts.templateSistema')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/lib/animate.css')}}" media="screen, projection" /> 
<link rel="stylesheet" href="{{asset('css/lib/flexslider.css')}}" type="text/css" media="screen" />
@endsection

@section('content')

<section id="feature_slider" class="">
    <article class="slide" id="tour" style="background: url('{{asset('img/backgrounds/mangos.jpg')}}') repeat-x top center;">
        <img class="asset left-472 sp650 t143 z3" src="{{asset('/storage/'.$showcase->image)}}" style="width:400px;" />
        <div class="info">
            <h2>{{$showcase->title}} </h2>
            <a href="{{$showcase->url}}">Ver mais</a>
        </div>
    </article>
    <article class="slide" id="tour" style="background: url('{{asset('img/backgrounds/mangos.jpg')}}') repeat-x top center;">
        <img class="asset left-472 sp650 t143 z3" src="{{asset('/storage/'.$showcase->image)}}" style="width:400px; height: 300px" />
        <div class="info">
            <h2>{{$showcase->title}} </h2>
            <a href="{{$showcase->url}}">Ver mais</a>
        </div>
    </article>
    <article class="slide" id="tour" style="background: url('{{asset('img/backgrounds/mangos.jpg')}}') repeat-x top center;">
        <img class="asset left-472 sp650 t143 z3" src="{{asset('/storage/'.$showcase->image)}}" style="width:400px; height: 300px" />
        <div class="info">
            <h2>{{$showcase->title}} </h2>
            <a href="{{$showcase->url}}">Ver mais</a>
        </div>
    </article>
</section>

@endsection

@section('script')

<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  

@endsection