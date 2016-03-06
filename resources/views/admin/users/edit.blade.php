@extends('layouts.admin')

@section('title','Editar Usuario')

@section('content')

@if(count($errors) >0)
<div class="alert alert-danger" role="alert">
  <ul>
  	@foreach($errors->all() as $error)
  	<li>{{$error}}</li>
  	@endforeach

  </ul>

</div>


@endif

           {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
				<div class="form-group">
					{!! Form::label('name','Nombre') !!}
					{!! Form::text('name', $user->name,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('email','Correo electrónico') !!}
					{!! Form::email('email', $user->email,['class' =>'form-control', 'placeholder' =>'example@gmail.com','required'])!!}
				</div>

				

				<div class="form-group">
					{!! Form::label('type','Tipo de usuario') !!}
					{!! Form:: select('type',[''=>'Seleccione tipo de usuario'  ,'member' => 'Miembro','admin'=>'Administrador'], $user->type, ['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}
					
				</div>


			    
			{!! Form::close() !!}

			


			
@endsection			

			

