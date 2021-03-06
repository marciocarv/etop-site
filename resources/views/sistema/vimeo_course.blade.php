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
      <input type="hidden" value="{{$vimeo_courseUpdate->id}}" name="vimeo_course_id">
      @endif
      @if($action == 'update')
      <div class="control-group">
        <label class="control-label" for="inputPassword">Imagem Atual</label>
        <div class="controls">
          <img src="{{asset('storage/'.$vimeo_courseUpdate->image)}}" width="50">
        </div>
      </div>
      @endif
      <div class="control-group">
        <label class="control-label" for="inputPassword">Nova Imagem (200x150)</label>
        <div class="controls">
          <input type="file" id="inputPassword" name="image">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputName">Nome do curso</label>
        <div class="controls">
          <input 
            type="text" 
            style="width:100%;"
            id="inputName" 
            name="name"
            @if($action == 'update')
            value = "{{$vimeo_courseUpdate->name}}"
            @endif
            placeholder="Nome do Curso">
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
            value = "{{$vimeo_courseUpdate->url}}"
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
    <p><strong>Listagem de Cursos do Pacote 2</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Imagem</th>
          <th>Url (link)</th>
          <th>A????es</th>
        </tr>
      </thead>  
      <tbody>
        @foreach($vimeo_courses as $vimeo_course)
        <tr>
          <td><img src="{{asset('/storage/'.$vimeo_course->image)}}" title="{{$vimeo_course->name}}" width="50"></td>
          <td>{{$vimeo_course->name}}</td>
          <td>{{$vimeo_course->url}}</td>
          <td>
            <a href="{{route('set-update-vimeo_course', ['id'=>$vimeo_course->id])}}"><i class="icon-edit"></i>Editar</a> | 
            <a href="{{route('delete-vimeo_course', ['id'=>$vimeo_course->id])}}"><i class="icon-trash"></i>Apagar</a> |
          </td>
        </tr>
        @endforeach
        @if($vimeo_courses->isEmpty())
        <tr>
          <td colspan="4"> N??o h?? cursos registrados</td>
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