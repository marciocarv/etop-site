@extends('layouts.templateSistema')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/select2.css')}}" type="text/css" media="screen" /> 
<style>
  .module{
    margin-top: 90px;
  } 
</style>
@endsection

@section('content')
<div class="container module">
  <div class="title">
    <h3>Gerenciar Mensagens de contato</h3>
    @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
      {{session('error')}}
    </div>
    @endif
  </div>
  <div class="listagem">
    <p><strong>Listagem de Mensagens</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome</th>
          <th>departamento</th>
          <th>Ações</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($contacts as $contact)
        <tr>
          <td>{{$contact->name}}</td>
          <td>{{$contact->department}}</td>
          <td>
            <a href="{{route('view-contact', ['id'=>$contact->id])}}"><i class="icon-eye-open"></i>Visualizar</a> | 
            <a href="{{route('delete-contact', ['id'=>$contact->id])}}"><i class="icon-trash"></i>Apagar</a></td>
        </tr>
        @endforeach
        @if($contacts->isEmpty())
        <tr>
          <td colspan="3"> Não há módulos registrados</td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>


</div>

@endsection


@section('script')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'content' );
</script>
<script src="{{asset('js/select2/select2.js')}}"></script>
<script>$(document).ready(function() { $("#category_id").select2(); });</script>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

@endsection