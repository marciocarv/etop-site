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
      <input type="hidden" value="{{$categoryUpdate->id}}" name="id_category">
      @endif
      <div class="control-group">
        <label class="control-label" for="inputDescription">Descrição</label>
        <div class="controls">
          <input 
            type="text" 
            id="inputDescription" 
            name="description"
            @if($action == 'update')
            value = "{{$categoryUpdate->description}}"
            @endif
            placeholder="Descrição">
        </div>
      </div>
      @if($action == 'update')
      <div class="control-group">
        <label class="control-label" for="inputPassword">Imagem Atual</label>
        <div class="controls">
          <img src="{{asset('storage/'.$categoryUpdate->image)}}" width="30">
        </div>
      </div>
      @endif
      <div class="control-group">
        <label class="control-label" for="inputPassword">Nova Imagem (205 x 205)</label>
        <div class="controls">
          <input type="file" id="inputPassword" name="image">
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
    <p><strong>Listagem de Categorias</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Ações</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{$category->description}}</td>
          <td><img src="{{asset('/storage/'.$category->image)}}" title="{{$category->description}}" width="30"></td>
          <td>
            <a href="{{route('set-update-category', ['id'=>$category->id])}}"><i class="icon-edit"></i>Editar</a> | 
            <a href="{{route('delete-category', ['id'=>$category->id])}}"><i class="icon-trash"></i>Apagar</a></td>
        </tr>
        @endforeach
        @if($categories->isEmpty())
        <tr>
          <td colspan="3"> Não há categorias registradas</td>
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