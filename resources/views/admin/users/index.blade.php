@extends('layouts.admin')

@section('title', 'Listado de usuarios')

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
  	<th>Email</th>
  	<th>Tipo</th>
  	<th>Acciones</th>
  
  	

  </thead>

  <tbody>
  	<tr>
  		@foreach ($users as $user)
  		<td>{{$user->name}}</td>
  		<td>{{$user->email}}</td>
  		<td>{{$user->type}}</td>
  		<td><a class="btn btn-success" href="#" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="#" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $users->render() !!}





@endsection