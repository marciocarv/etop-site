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
    <form class="form-horizontal" method="POST" action="{{route($route)}}">
      @csrf
      @if($action == 'update')
      <input type="hidden" value="{{$moduleUpdate->id}}" name="module_id">
      @endif
      <div class="control-group">
        <label class="control-label" for="inputDescription">Categoria</label>
        <div class="controls">
          <select name="category_id" id="category_id" data-form="select2" style="width:100%;" data-placeholder="Categoria" >
            @foreach($categories as $category)
            @if($action == 'update')
            <option value="{{$category->id}}" @if($moduleUpdate->category_id == $category->id) selected @endif>{{$category->description}}</option>
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
            id="inputDescription" 
            name="description"
            @if($action == 'update')
            value = "{{$moduleUpdate->description}}"
            @endif
            placeholder="Descrição"
            >
        </div>
      </div>
        <div class="control-group">
          <label class="control-label" for="inputDescription">Conteúdo Programático</label>
          <div class="controls">
            <textarea rows="5" name="content" id="content">@if($action == 'update'){{$moduleUpdate->content}}@endif</textarea>
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
    <p><strong>Listagem de Módulos</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Categoria</th>
          <th>Ações</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($modules as $module)
        <tr>
          <td>{{$module->description}}</td>
          <td>{{$module->category->description}}</td>
          <td>
            <a href="{{route('view-module', ['id'=>$module->id])}}"><i class="icon-eye-open"></i>Visualizar</a> |
            <a href="{{route('set-update-module', ['id'=>$module->id])}}"><i class="icon-edit"></i>Editar</a> | 
            <a href="{{route('delete-module', ['id'=>$module->id])}}"><i class="icon-trash"></i>Apagar</a></td>
        </tr>
        @endforeach
        @if($modules->isEmpty())
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