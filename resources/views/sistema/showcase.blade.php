@extends('layouts.templateSistema')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/select2.css')}}" type="text/css" media="screen" /> 
<style>
  .category{
    margin-top: 90px;
  } 
</style>
@endsection

@section('content')
<div class="container category">
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
  <div class="form-category">
    <form class="form-horizontal" method="POST" action="{{route($route)}}" enctype="multipart/form-data">
      @csrf
      @if($action == 'update')
      <input type="hidden" value="{{$showcaseUpdate->id}}" name="showcase_id">
      @endif
      @if($action == 'update')
      <div class="control-group">
        <label class="control-label" for="inputPassword">Imagem Atual</label>
        <div class="controls">
          <img src="{{asset('storage/'.$showcaseUpdate->image)}}" width="30">
        </div>
      </div>
      @endif
      <div class="control-group">
        <label class="control-label" for="inputPassword">Nova Imagem (400x400)</label>
        <div class="controls">
          <input type="file" id="inputPassword" name="image">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputDescription">Título</label>
        <div class="controls">
          <input 
            type="text" 
            style="width:100%;"
            id="inputTitle" 
            name="title"
            @if($action == 'update')
            value = "{{$showcaseUpdate->title}}"
            @endif
            placeholder="Título">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputDescription">URL (link)</label>
        <div class="controls">
          <input 
            type="text" 
            style="width:100%;"
            id="inputUrl" 
            name="url"
            @if($action == 'update')
            value = "{{$showcaseUpdate->url}}"
            @endif
            placeholder="Link de destino">
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
    <p><strong>Listagem de Vitrines</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Imagem</th>
          <th>Url (link)</th>
          <th>Visibilidade</th>
          <th>Ações</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($showcases as $showcase)
        <tr>
          <td><img src="{{asset('/storage/'.$showcase->image)}}" title="{{$showcase->title}}" width="50"></td>
          <td>{{$showcase->title}}</td>
          <td>{{$showcase->url}}</td>
          <td>{{$showcase->status}}</td>
          <td>
            <a href="{{route('view-showcase', ['id'=>$showcase->id])}}"><i class="icon-eye-open"></i>Visualizar</a> |
            <a href="{{route('set-update-showcase', ['id'=>$showcase->id])}}"><i class="icon-edit"></i>Editar</a> | 
            <a href="{{route('delete-showcase', ['id'=>$showcase->id])}}"><i class="icon-trash"></i>Apagar</a> |
            @if($showcase->status == 'mostrar')
            <a href="{{route('hidden-showcase', ['id'=>$showcase->id])}}"><i class="icon-eye-close"></i>Ocultar</a>
            @else
            <a href="{{route('show-showcase', ['id'=>$showcase->id])}}"><i class="icon-eye-open"></i>Mostrar</a>
            @endif
          </td>
        </tr>
        @endforeach
        @if($showcases->isEmpty())
        <tr>
          <td colspan="4"> Não há vitrines registradas</td>
        </tr>
        @endif
      </tbody>
    </table>
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