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
    <h3>{{$title}}</h3>
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
  <div class="form-module">
    <form class="form-horizontal" method="POST" action="{{route($route)}}"" enctype="multipart/form-data">
      @csrf
      @if($action == 'update')
      <input type="hidden" value="{{$noticeUpdate->id}}" name="notice_id">
      @endif
      <div class="control-group">
        <label class="control-label" for="inputDescription">Título</label>
        <div class="controls">
          <input 
            type="text"
            style="width:100%;"
            id="inputTitle" 
            name="title"
            @if($action == 'update')
            value = "{{$noticeUpdate->title}}"
            @endif
            placeholder="Título"
            >
        </div>
      </div>
      @if($action == 'update')
      <div class="control-group">
        <label class="control-label" for="inputPassword">Imagem Atual</label>
        <div class="controls">
          <img src="{{asset('storage/'.$noticeUpdate->image)}}" width="100">
        </div>
      </div>
      @endif
      <div class="control-group">
        <label class="control-label" for="inputPassword">Nova Imagem</label>
        <div class="controls">
          <input type="file" id="inputPassword" name="image">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputContent">Conteúdo da Notícia</label>
        <div class="controls">
          <textarea rows="3" name="content" id="content">@if($action == 'update'){{$noticeUpdate->content}}@endif</textarea>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn btn-info">Salvar</button>
        </div>
      </div>
    </form>
  </div>
  <div class="listagem">
    <p><strong>Listagem de Notícias</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Título</th>
          <th>Ações</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($noticies as $notice)
        <tr>
          <td>{{$notice->title}}</td>
          <td>
            <a href="{{route('view-notice', ['id'=>$notice->id])}}"><i class="icon-eye-open"></i>Visualizar</a> |
            <a href="{{route('set-update-notice', ['id'=>$notice->id])}}"><i class="icon-edit"></i>Editar</a> | 
            <a href="{{route('delete-notice', ['id'=>$notice->id])}}"><i class="icon-trash"></i>Apagar</a></td>
        </tr>
        @endforeach
        @if($noticies->isEmpty())
        <tr>
          <td colspan="3"> Não há Notícias registrados</td>
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