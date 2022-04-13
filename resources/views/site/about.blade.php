@extends('layouts.templateSite')

@section('content')
<div id="aboutus">
    <div class="container">
        <div class="section_header">
            <h3>Quem Somos</h3>
        </div>
        <div class="row">
            <div class="span12 intro">
                <p>Uma empresa que busca a cada dia se aperfei&ccedil;oar e trazer o que h&aacute; de mais moderno para nossos clientes. Seriedade, responsabilidade e compromisso s&atilde;o os maiores diferenciais da JJC Forma&ccedil;&atilde;o Profissional.</p>
<p>A JJC Forma&ccedil;&atilde;o Profissional oferece o que h&aacute; de melhor e mais moderno em cursos de inform&aacute;tica e profissionalizantes no pa&iacute;s. S&atilde;o mais de 60 op&ccedil;&otilde;es de curso sempre atualizados, instrutores com v&aacute;rios anos de experi&ecirc;ncia e o material did&aacute;tico mais completo poss&iacute;vel para um melhor aprendizado. Buscamos sempre atender as expectativas dos nossos alunos disponibilizando para os mesmo computadores de ultima gera&ccedil;&atilde;o e salas climatizadas com recursos multim&iacute;dia e TVs onde s&atilde;o abordadas grandes partes dos conte&uacute;dos dos cursos ministrados. Hor&aacute;rios flex&iacute;veis, 01 aluno por computador, aulas 100% pr&aacute;ticas e certificado com reconhecimento em todo Brasil.</p>
<p>A JJC Forma&ccedil;&atilde;o Profissional tamb&eacute;m ministra cursos e treinamentos em cidades e povoados do interior do estado do Tocantins. Navegue pelo nosso site e confira tudo que a nossa empresa pode oferecer para voc&ecirc; que mora em Palmas e regi&atilde;o.</p>
            </div>                
        </div>
    </div>
</div>

<div class="container">            

    <hr />
    <div class="btn-share">
        <div>
            <div class="fb-share-button" data-href="http://www.etop.net.br/?p=quemsomos" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.etop.net.br/?p=quemsomos&amp;src=sdkpreparse">Compartilhar</a></div>
                <div id="fb-root"></div>
        </div>
        <div>
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" rel="nofollow">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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