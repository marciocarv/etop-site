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
      <input type="hidden" value="{{$packUpdate->id}}" name="pack_id">
      @endif
      <div class="control-group">
        <label class="control-label" for="inputDescription">Categoria</label>
        <div class="controls">
          <select name="category_id" id="category_id" data-form="select2" style="width:100%;" data-placeholder="Categoria" >
            @foreach($categories as $category)
            @if($action == 'update')
            <option value="{{$category->id}}" @if($packUpdate->category_id == $category->id) selected @endif>{{$category->description}}</option>
            @else
            <option value="{{$category->id}}">{{$category->description}}</option>
            @endif
            @endforeach
            </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputDescription">Nome</label>
        <div class="controls">
          <input 
            type="text"
            style="width:100%;"
            id="inputName" 
            name="name"
            @if($action == 'update')
            value = "{{$packUpdate->name}}"
            @endif
            placeholder="Nome"
            >
        </div>
      </div>
      @if($action == 'update')
      <div class="control-group">
        <label class="control-label" for="inputPassword">Imagem Atual</label>
        <div class="controls">
          <img src="{{asset('storage/'.$packUpdate->image)}}" width="100">
        </div>
      </div>
      @endif
      <div class="control-group">
        <label class="control-label" for="inputPassword">Nova Imagem 300x120</label>
        <div class="controls">
          <input type="file" id="inputPassword" name="image">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputDescription">Pacote em Destaque?</label>
        <div class="controls">
          <label class="radio">
            <input type="radio"
             name="spotlight" 
             id="promocional" 
             value="n" 
             @if($action == 'update' && $packUpdate->spotlight == 'n')
             checked
             @endif
             >
            Não
          </label>
          <label class="radio">
            <input 
              type="radio" 
              name="spotlight" 
              id="promocional" 
              value="s"
              @if($action == 'update' && $packUpdate->spotlight == 's')
              checked
              @endif
              >
            Sim
          </label>
        </div>
      </div>
      <div class="control-group" id="resume_campo">
        <label class="control-label" for="inputResume">Resumo</label>
        <div class="controls">
          <textarea rows="5" name="resume" id="resume" placeholder="Escreva um breve resumo do pacote">@if($action == 'update'){{$packUpdate->resume}}@endif</textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputDescription">Descrição</label>
        <div class="controls">
          <textarea rows="5" name="description" id="description">@if($action == 'update'){{$packUpdate->description}}@endif</textarea>
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
    <p><strong>Listagem de Pacotes</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Categoria</th>
          <th>Destaque</th>
          <th>Ações</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($packs as $pack)
        <tr>
          <td>{{$pack->name}}</td>
          <td>{{$pack->category->description}}</td>
          <td>{{$pack->spotlight == 's' ? 'Sim' : 'Não'}}</td>
          <td>
            <a href="{{route('set-add-modules', ['id'=>$pack->id])}}"><i class="icon-plus-sign"></i>Adicionar Módulos</a> |
            <a href="{{route('view-pack', ['id'=>$pack->id])}}"><i class="icon-eye-open"></i>Visualizar</a> |
            <a href="{{route('set-update-pack', ['id'=>$pack->id])}}"><i class="icon-edit"></i>Editar</a> | 
            <a href="{{route('delete-pack', ['id'=>$pack->id])}}"><i class="icon-trash"></i>Apagar</a></td>
        </tr>
        @endforeach
        @if($packs->isEmpty())
        <tr>
          <td colspan="3"> Não há Pacotes registrados</td>
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
  CKEDITOR.replace( 'description' );
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