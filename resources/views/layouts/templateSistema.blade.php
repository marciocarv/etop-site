<!DOCTYPE html>
<html>
<head>
	<title>ETOP Educação | Cursos de Inform&aacute;tica e profissionalizantes</title>

	<link rel="shortcut icon" href="favicon1.ico" />
	<link rel="icon" href="favicon1.ico" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
	<meta name="author" content="Márcio Carvalho dos Santos" />
			
	<meta name="description" content="ETOP Educação localizada em Palmas - TO oferece v&aacute;rios cursos profissionalizantes nas áreas de : Profissional Digital, Gest&atilde;o Financeira, Designer Gr&aacute;fico, Web Designer Profissional, Cria&ccedil;&atilde;o E Edi&ccedil;&atilde;o De V&iacute;deos, Melhor Idade, On Kids, Assistente De Marketing, Atendente De Farm&aacute;cia, Curso Preparat&oacute;rio De Auxiliar Odontol&oacute;gico, Desenvolvedor De Jogos, Linux, Programador Profissional, T&eacute;cnicas Sucroalcooleiras, Inform&aacute;tica Para Concurso e serviços: Assist&ecirc;ncia T&eacute;cnica, Cyber caf&eacute;, Encaderna&ccedil;&atilde;o, Jogos, Loca&ccedil;&atilde;o de projetores, Recarga de Cartuchos, Telemensagens - Seu futuro come&ccedil;a aqui em Palmas e Aparecida do Rio Negro - Tocantins." />
	<meta name="keywords" content="ETOP Educação, cursos, noticias, dicas importantes, audios, servi&ccedil;os, &uacute;ltimas not&iacute;cias"/>
	
	<meta property="og:title" content="ETOP Educação | Cursos de Inform&aacute;tica e profissionalizantes" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="ETOP Educação" />
	<meta property="og:url" content="https://www.etopeducacao.com.br/?" />
	<meta property="og:image" content="{{asset('/img/logo_face.jpg')}}" />
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
			  <a class="brand" href="?" class="active">
				  <img src="{{asset('img/logo-etop.png')}}" width="150" />
			  </a>
			  <div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle und" data-toggle="dropdown">
								GERENCIAR CURSOS
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">                            
								<li><a href="{{route('category')}}">CATEGORIA</a></li>
								<li><a href="{{route('module')}}">MODULOS</a></li>
								<li><a href="{{route('pack')}}">PACOTES</a></li>
								<li><a href="{{route('vimeo_course')}}">LINKS VIMEO</a></li>
							</ul>
						</li>
						<li><a href="{{route('showcase')}}">GERENCIAR VITRINE</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle und" data-toggle="dropdown">
								GERENCIAR PÁGINAS
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">                            
								<li><a href="{{route('contact')}}">CONTATO</a></li>
								<li><a href="{{route('institutional')}}">QUEM SOMOS</a></li>
								<li><a href="{{route('methodology')}}">METODOLOGIA</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle und" data-toggle="dropdown">
								GERENCIAR MÍDIAS
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">                            
								<li><a href="{{route('notice')}}">NOTÍCIAS</a></li>
								<li><a href="{{route('module')}}">FOTOS</a></li>
							</ul>
						</li>					               
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
							<a href="https://www.facebook.com/jjcfprofissional" class="facebook" target="_blank">
								<span class="socialicons ico1"></span>
								<span class="socialicons_h ico1h"></span>
							</a>
							<a href="https://twitter.com/jjcinformatica" class="twitter" target="_blank">
								<span class="socialicons ico2"></span>
								<span class="socialicons_h ico2h"></span>
							</a>                                                       
						</div>
					</div>
					<div class="row copyright">
						<div class="span12">
							ETOP Qualifica&ccedil;&atilde;o Profissional &copy; - Todos os direitos reservados <br />
							Fone: (63) 99253 - 6918
						</div>
					</div>
				</div>            
			</div>
		</div>
	</footer>
	
	<div class="container">     
		<div class="webcabecass row">			
			<a href="https://bit.ly/2WwyttA"><img src="{{asset('/img/WhatsApp-icone.png')}}" style="height:80px; position:fixed; bottom: 25px; right: 25px; z-index:100;" data-selector="img"></a>
		</div>
	</div>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/theme.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('js/index-slider.js')}}"></script> 
	
	<script type="text/javascript" src="https://app.contako.com.br/WidgetJSFixo.sikoni/?cadastro=A3998B80FE"></script>

	@yield('script')

	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25158137-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
</body>
</html>