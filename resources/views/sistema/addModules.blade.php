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
  <div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome do Pacote</th>
          <th>Categoria do Pacote</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$pack->name}}</td>
          <td>{{$pack->category->description}}</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="form-module">
    <p>Selecionar os Módulos desse pacote:</p>
    <form class="form-horizontal" method="POST" action="{{route($route)}}">
      @csrf
      <input type="hidden" value="{{$pack->id}}" name="pack_id">
      <div class="control-group">
        <label class="control-label" for="inputDescription"></label>
        <div class="controls">
          @foreach($modules as $module)
            <label class="checkbox">
              <input type="checkbox"
               name="modules[]" 
               value="{{$module->id}}"
               @if($module_ids->where('id', $module->id)->isNotEmpty())
               checked
               @endif
               >
              {{$module->description}}
            </label>
 
          @endforeach
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn btn-info">Salvar</button>
        </div>
      </div>
    </form>
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