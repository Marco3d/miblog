@extends('layouts.admin')

@section('title', 'Listado de categorias')

@section('content')

@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>


@endif

   

<table class="table table-striped">
  <thead>
  	<th>Nombre</th>
    <th>Acciones</th>
    

  	
  
  	

  </thead>

  <tbody>
  	<tr>
  		@foreach ($categories as $category)
  		<td>{{$category->name}}</td>
  		
  		<td><a class="btn btn-success" href="{{route('admin.categories.edit', $category->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('admin.categories.destroy', $category->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $categories->render() !!}





@endsection