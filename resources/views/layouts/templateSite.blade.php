<!DOCTYPE html>
<html>
<head>
	<title>ETOP Educação | Cursos de Inform&aacute;tica e profissionalizantes</title>

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="icon" href="favicon.ico" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
	<meta name="author" content="Márcio Carvalho dos Santos" />
			
	<meta name="description" content="ETOP Educação localizada em Palmas - TO oferece v&aacute;rios cursos profissionalizantes nas áreas de : Profissional Digital, Gest&atilde;o Financeira, Designer Gr&aacute;fico, Web Designer Profissional, Cria&ccedil;&atilde;o E Edi&ccedil;&atilde;o De V&iacute;deos, Melhor Idade, On Kids, Assistente De Marketing, Atendente De Farm&aacute;cia, Curso Preparat&oacute;rio De Auxiliar Odontol&oacute;gico, Desenvolvedor De Jogos, Linux, Programador Profissional, T&eacute;cnicas Sucroalcooleiras, Inform&aacute;tica Para Concurso e serviços: Assist&ecirc;ncia T&eacute;cnica, Cyber caf&eacute;, Encaderna&ccedil;&atilde;o, Jogos, Loca&ccedil;&atilde;o de projetores, Recarga de Cartuchos, Telemensagens - Seu futuro come&ccedil;a aqui em Palmas e Aparecida do Rio Negro - Tocantins." />
	<meta name="keywords" content="ETOP Educação, cursos, noticias, dicas importantes, audios, servi&ccedil;os, &uacute;ltimas not&iacute;cias"/>
	
	<meta property="og:title" content="ETOP Educação | Cursos de Inform&aacute;tica e profissionalizantes" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="ETOP Educação" />
	<meta property="og:url" content="https://www.etop.net.br/?" />
	<meta property="og:image" content="{{asset('img/logo_face.jpg')}}" />
	<meta property="og:description" content="ETOP Educação localizada em Palmas - TO oferece v&aacute;rios cursos profissionalizantes nas áreas de : Profissional Digital, Gest&atilde;o Financeira, Designer Gr&aacute;fico, Web Designer Profissional, Cria&ccedil;&atilde;o E Edi&ccedil;&atilde;o De V&iacute;deos, Melhor Idade, On Kids, Assistente De Marketing, Atendente De Farm&aacute;cia, Curso Preparat&oacute;rio De Auxiliar Odontol&oacute;gico, Desenvolvedor De Jogos, Linux, Programador Profissional, T&eacute;cnicas Sucroalcooleiras, Inform&aacute;tica Para Concurso e serviços: Assist&ecirc;ncia T&eacute;cnica, Cyber caf&eacute;, Encaderna&ccedil;&atilde;o, Jogos, Loca&ccedil;&atilde;o de projetores, Recarga de Cartuchos, Telemensagens" />
	
	
    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-overrides.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}" />

	<link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css" media="screen" />    

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
    
	@yield('css')

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; " /></head>
<body class="pull_top">
	<div class="navbar navbar-inverse transparent navbar-fixed-top">
		<div class="navbar-inner">
		  <div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="{{route('home')}}" class="active">
				  <img src="{{asset('img/logo-etop.png')}}" width="150" />
			  </a>
			  <div class="nav-collapse collapse">
				  <ul class="nav pull-right">
					  <li><a href="{{route('quemsomos')}}">QUEM SOMOS</a></li>
					  <!--<li class="dropdown">
						  <a href="#" class="dropdown-toggle und" data-toggle="dropdown">
							  UNIDADES
							  <b class="caret"></b>
						  </a>
						  <ul class="dropdown-menu">                            
							  <li><a href="?p=unidades/palmas">Palmas</a></li>
							  <li><a href="?p=unidades/aparecida">Aparecida do Rio Negro</a></li>
							  <li><a href="?p=unidades/divinopolis">Divin&oacute;polis</a></li>
							  <li><a href="?p=unidades/miranorte">Miranorte</a></li>
							  <li><a href="?p=unidades/marianopolis">Marian&oacute;polis</a></li>
							  <li><a href="?p=unidades/lagoa">Lagoa da Confus&atilde;o</a></li>
							  <li><a href="?p=unidades/cristalandia">Cristal&acirc;ndia</a></li>
							  <li><a href="?p=unidades/paraiso">Para&iacute;so</a></li>
						  </ul>
					  </li>-->
					  <!--<li><a href="?p=cursos">CURSOS</a></li>-->
					  <li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CURSOS
							  <b class="caret"></b>
						  </a>
						  <ul class="dropdown-menu">
							<li><a href="{{route('pack_site')}}">Ver todos os pacotes</a></li>
							@foreach($categories_menu as $category_menu)
							<li>
								<a href="{{route('pack-by-category_site', ['category'=>$category_menu->description, 'id'=>$category_menu->id])}}">{{$category_menu->description}}</a>
							</li>
							@endforeach
							<li><a href="{{route('module_site')}}">Ver todos os módulos</a></li>
						  </ul>
					  </li>
					  <li><a href="{{route('metodologia')}}">METODOLOGIA</a></li>
					  <!--<li><a href="?p=contato">UNIDADES</a></li>-->				
					  <!--<li><a href="about-us.html">PROMOÃ‡Ã•ES</a></li>-->
					  <li class="dropdown">
						  <a href="#" class="dropdown-toggle midia" data-toggle="dropdown">
							  M&Iacute;DIA
							  <b class="caret"></b>
						  </a>
						  <ul class="dropdown-menu">
							  <!--<li><a href="features.html">Audio</a></li>
							  <li><a href="services.html">Videos</a></li>
							  <li><a href="portfolio.html">Curr&iacute;culos</a></li>-->
							  <li><a href="{{route('notice_site')}}">Not&iacute;cias</a></li>
							  <li><a href="#">Fotos</a></li>
							  <!--<li><a href="?p=curriculo">Curr&iacute;culos</a></li>-->
							  <!--<li><a href="?p=videos">V&iacute;deos</a></li>-->
							  <!--<li><a href="coming-soon.html">Cursos Itinerantes</a></li>-->
						  </ul>
					  </li>
					  <li><a href="{{route('contato')}}">CONTATO</a></li>             
				  </ul>
			  </div>
		  </div>
		</div>
	  </div>  

    @yield('content')

    <!-- starts footer -->
	
	<footer id="footer">
		<div class="container">            
			<div class="row credits">
				<div class="span12">
					<div class="row social">
						<div class="span12">
							<a href="https://www.facebook.com/etopeducacao" class="facebook" target="_blank">
								<img src="{{asset('img/facebook.png')}}" width="30">
							</a>
							<a href="https://www.instagram.com/etopeducacao/" class="twitter" target="_blank">
								<img src="{{asset('img/instagram.png')}}" width="30">
							</a>                                
						</div>
					</div>
					<div class="row copyright">
						<div class="span12">
							ETOP Educação &copy; - Todos os direitos reservados <br />
							etopeducacao@gmail.com <br />
							Fone: (63) 99253-6918
						</div>
					</div>
				</div>            
			</div>
		</div>
	</footer>
	
	<div class="container">     
		<div class="webcabecass row">			
			<a href="https://contate.me/etop" target="_blank"><img src="{{asset('img/WhatsApp-icone.png')}}" style="height:80px; position:fixed; bottom: 25px; right: 25px; z-index:100;" data-selector="img"></a>
		</div>
	</div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/theme.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('js/index-slider.js')}}"></script> 

	@yield('script')

	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25158137-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
</body>
</html>