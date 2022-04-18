@extends('layouts.templateSite')

@section('css')
<link rel="stylesheet" href="{{asset('css/about.css')}}" type="text/css" media="screen" />
@endsection

@section('content')
<div id="aboutus">
    <div class="container">
        <div class="section_header">
            <h3>Metodologia</h3>
        </div>
        <div class="row">
            <div class="span12 intro">
                <p>A estrutura de ensino/aprendizagem proposta em nosso modelo educacional transforma o aluno, que costumeiramente &eacute; um simples passageiro
                     que observa, em um aluno atento, observador, que interage com o conte&uacute;do absorvendo o conceito apresentado e construindo o seu conhecimento.
                      Como resultado, surge um profissional ativo e preparado para um mercado cada vez mais exigente.</p>
                <p>Os m&oacute;dulos de conhecimento tem dura&ccedil;&atilde;o de 16h a 150h e cada aula &eacute; estruturada em tres partes, sendo:</p>
                Parte 1 - O aluno assiste a explica&ccedil;&atilde;o narrada pelo avatar.<p></p>
                <p>Parte 2 - O aluno executa exerc&iacute;cios que simulam o ambiente pr&aacute;tico da disciplina.</p>
                <p>Parte 3 - O aluno faz uma avalia&ccedil;&atilde;o de aprendizagem.</p>
                <p>Sempre que a nota da avalia&ccedil;&atilde;o for igual ou superior a 7 pontos, o aluno estar&aacute; liberado para a pr&oacute;xima li&ccedil;&atilde;o.</p>
                <p>O aluno poder&aacute; assistir novamente a li&ccedil;&atilde;o quantas vezes quiser e desta forma o curso seguir&aacute; o seu tempo de aprendizagem.
                     Em nosso modelo educacional &eacute; o curso que segue a evolu&ccedil;&atilde;o do aluno garantindo que cada etapa ultrapassada se tornou conhecimento
                      consolidado.</p>
            </div>                
        </div>
        <hr />
        <div class="btn-share">
            <div>
                <div class="fb-share-button" data-href="http://www.etop.net.br/?p=metodologia" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.etop.net.br/?p=metodologia&amp;src=sdkpreparse">Compartilhar</a></div>
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