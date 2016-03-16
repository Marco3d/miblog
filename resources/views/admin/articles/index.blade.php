@extends('layouts.admin')

@section('title', 'Listado de artículos')

@section('content')

@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>


@endif

   

<table class="table table-striped">
  <thead>
  	<th>Titulo</th>
  	<th>Contenido</th>
  	<th>Autor</th>
  	<th>Categoria</th>
    <th>Imagen</th>
    <th>Acciones</th>
  
  
  	

  </thead>

  <tbody>
  	<tr>
  		@foreach ($articles as $article)
  		<td>{{$article->title}}</td>
  		<td>{{$article->content}}</td>
      <td>{{$article->user->name}}</td>
      <td>{{$article->category->name}}</td>
      @if(empty($article->path))
      <td><img src="{{asset('images')}}/no-imagen.jpg"  style ="width: 100px"></td>
      @else
      <td><img src="{{asset('images')}}/{{$article->path}}"  style ="width: 100px"></td>
      @endif
      
  		<td><a class="btn btn-success" href="{{route('admin.articles.edit', $article->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('admin.articles.destroy', $article->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $articles->render() !!}

@endsection