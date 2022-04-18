@extends('layouts.templateSite')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/lib/animate.css')}}" media="screen, projection" /> 
<link rel="stylesheet" href="{{asset('css/lib/flexslider.css')}}" type="text/css" media="screen" />
@endsection

@section('content')

<section id="feature_slider" class="">
    @foreach($showcases as $showcase)
    <article class="slide" id="tour" style="background: url('{{asset('img/backgrounds/mangos.jpg')}}') repeat-x top center;">
        <img class="asset left-472 sp650 t143 z3" src="{{asset('/storage/'.$showcase->image)}}" style="width:400px;" />
        <div class="info">
            <h2>{{$showcase->title}} </h2>
            <a href="{{$showcase->url}}">Ver mais</a>
        </div>
    </article>
    @endforeach
</section>

<div id="showcase">
    <div class="container">
        <div class="section_header">
            <h3>Galeria de Cursos</h3>
        </div>		
        <div class="row feature ss">
            <div class="span1">
                &nbsp;
            </div>
            @foreach($categories as $category)
            <div class="span2">
                <div class="centralizar" style="text-transform: uppercase">
                    <a href="?p=cursos/idiomas"><img src="{{asset('storage/'.$category->image)}}" title="{{$category->description}}" /></a>
                    <span class="label_galeria_cursos">{{$category->description}}</span>
                </div>
            </div>
                @endforeach
            <div class="span1">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<div id="showcase">
    <div class="container">
        <div class="section_header">
            <h3>Cursos em Destaque</h3>
        </div>            
        <div class="row feature_wrapper">
            <!-- Features Row -->
            <div class="features_op1_row">
                <!-- Feature -->
                <div class="span4 feature first">
                    <div class="img_box">
                        <a href="?p=cursos/91/tecnologia-fundamental-iniciante-/">
                            <img src="img/profissional_digital.jpg" />
                            <span class="circle"> 
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Tecnologia Fundamental</h6>
                        <p>
                            Curso para iniciantes na &aacute;rea de inform&aacute;tica ou para aqueles que querem reciclar seus conhecimentos.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="span4 feature">
                    <div class="img_box">
                        <a href="?p=cursos/89/operador-de-computador-iniciante-/">
                            <img src="img/operador_computador.jpg" />
                            <span class="circle"> 
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Operador de Computador</h6>
                        <p>
                            Voc&ecirc; vai aprender a utilizar desde mouse e teclado at&eacute; as novas tecnologias, como tablets e os novos perif&eacute;ricos al&eacute;m de instalar programas, como: Jogos, aplicativos e antiv&iacute;rus.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="span4 feature last">
                    <div class="img_box">
                        <a href="?p=cursos/95/conceitos-em-animacao-e-games-avancado-/">
                            <img src="img/programador_games.jpg" />
                            <span class="circle"> 
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Conceitos em anima&ccedil;&atilde;o e Games</h6>
                        <p>
                            Este curso surge como uma grande novidade no mercado, onde o profissional desenvolver&aacute; jogos para computadores, celulares e internet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row feature_wrapper">
            <!-- Features Row -->
            <div class="features_op1_row">
                <!-- Feature -->
                <div class="span4 feature first">
                    <div class="img_box">
                        <a href="?p=cursos/96/desenvolvedor-web-avancado-/">
                            <img src="img/webdesign.jpg" />
                            <span class="circle"> 
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Desenvolvedor Web</h6>
                        <p>
                            Oferecemos um curso ideal para voc&ecirc; que quer ser um profissional de web, com elementos essenciais para constru&ccedil;&atilde;o de p&aacute;ginas para a internet.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="span4 feature">
                    <div class="img_box">
                        <a href="?p=cursos/97/tecnicas-em-gestao-de-empresas-avancado-/">
                            <img src="img/assistente_adm.jpg" />
                            <span class="circle"> 
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>T&eacute;cnicas em Gest&atilde;o de empresa</h6>
                        <p>
                            Essa &eacute; uma profiss&atilde;o cujas atividades est&atilde;o focadas em fun&ccedil;&otilde;es vitais da empresa, pois est&atilde;o diretamente relacionadas com o bom funcionamento administrativo, com a gest&atilde;o do neg&oacute;cio.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="span4 feature last">
                    <div class="img_box">
                        <a href="?p=cursos/98/analise-em-credito-e-cobranca-avancado-/">
                            <img src="img/gestao_financeira.jpg" />
                            <span class="circle"> 
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>An&aacute;lise em Cr&eacute;dito e Cobran&ccedil;a</h6>
                        <p>
                            O p&uacute;blico deste curso &eacute; composto por jovens ou pessoas em geral que buscam ingressar ou melhorar sua posi&ccedil;&atilde;o no mercado de trabalho.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="features">
    <div class="container">            
        <div class="row feature ss">
            <div class="span7">
               <a href="?p=contato"><img src="{{asset('img/matricula.png')}}" title="fa&ccedil;a sua matr&iacute;cula" /></a><br />
            </div>
            <div class="span5">
                <div id="19"></div><iframe width="374" height="246" src="https://www.youtube.com/embed/keP_kJgmqrI" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="section_header">
            <h3>Servi&ccedil;os ao Aluno</h3>
        </div>	
        <div class="row feature ss">
            <div class="span3">
                <div class="centralizar">
                    <a href="https://app.evoluaeducacao.com.br" target="_blank"><img src="img/estude_online.png" title="Estude Online" /></a>
                    <span class="label_galeria_cursos_servicos">ESTUDE ONLINE<br /> PLATAFORMA 01</span>
                </div>
            </div>
            <div class="span3">
                <div class="centralizar">
                    <a href="{{route('vimeo_course_site')}}"><img src="img/portal_aluno.png" title="Portal do Aluno" /></a>
                    <span class="label_galeria_cursos_servicos">ESTUDE ONLINE<br /> PLATAFORMA 02</span>
                </div>
            </div>
            <div class="span3">
                <div class="centralizar">
                    <a href="#"><img src="img/banco_curriculo.png" title="Banco de Curr&iacute;culos" /></a>
                    <span class="label_galeria_cursos_servicos">BANCO DE CURR&Iacute;CULOS (NEC)</span>
                </div>
            </div>
            <div class="span3">
                <div class="centralizar">
                    <a href="#"><img src="img/busca_certificado.png" title="Consulte seu certificado" /></a>
                    <span class="label_galeria_cursos_servicos">CERTIFICADOS</span>
                </div>
            </div>	
        </div>          
        <div class="row feature">				
            <div class="span7">
                <div class="section_header">
                    <h3>&Uacute;ltimas Not&iacute;cias</h3>
                </div>
                @foreach($notices as $notice)
                 <h5>
                    <a href="{{route('notice_site', ['id'=>$notice->id])}}">
                        <em>{{$notice->created_at->format('d/m/Y')}}</em> - {{$notice->title}}
                    </a>
                </h5>
                @endforeach
                <p class="leia_mais"><a href="{{route('noticies_site')}}">Todas as Not&iacute;cias</a></p>
            </div>
            <div class="span5 info">
                <div class="fb-like-box" data-href="https://www.facebook.com/jjcfprofissional?fref=ts" data-width="370" data-height="271" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>

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