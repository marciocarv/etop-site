@extends('layouts.templateSite')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/select2.css')}}" type="text/css" media="screen" /> 
@endsection

@section('content')
<div id="contact">
    <div class="container">
        <div class="section_header">
            <h3>Contato</h3>
        </div>
        <div class="row contact">
            <p>Entre em contato conosco</p>
            <div id="none"></div>
            <form method="post" action="?p=contato&flag=1">
                <div class="row form">
                    <div class="span6 box">							
                       <input class="name" type="text" placeholder="Nome" name="nome" />
                        <input class="mail" type="text" placeholder="E-mail" name="email" />
                        <select name="id_tipo" id="id_tipo" data-form="select2" style="width:100%;height:37px" data-placeholder="Departamento" >
                            <option value=""></option>
                            <option value="1">CONTATO</option>
                            <option value="2">SUSGEST&Otilde;ES</option>
                            <option value="3">VENDAS</option>
                            </select>
                            <br />
                    </div>
                    <div class="span6 box box_r">
                        <textarea name="texto" placeholder="Mensagem..."></textarea>
                    </div>
                </div>
                <div class="row submit">
                    <div class="span3 right">
                        <input type="submit" value="Enviar" />
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
</div>




@endsection


@section('script')
<script src="{{asset('js/select2/select2.js')}}"></script>
<script>$(document).ready(function() { $("#id_tipo").select2(); });</script>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

@endsection