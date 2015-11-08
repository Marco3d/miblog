@extends('layouts.admin')

@section('title', 'Listado de usuarios')

@section('content')

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
  		<td></td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $users->render() !!}





@endsection