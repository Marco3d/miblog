@extends('layouts.admin')

@section('title','Crear Artículos')

@section('content')


           {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST','files'=>true]) !!}
				
				<div class="form-group">
					{!! Form::label('title','Título') !!}
					{!! Form::text('title',null,['class' =>'form-control', 'placeholder' =>'Título del artículo','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('content','Contenido') !!}
					{!! Form::textarea('content',null,['class' =>'form-control', 'placeholder' =>'Contenido del artículo','required'])!!}
				</div>


				<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form::select('category_id',$categories, null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">
					
					{!! Form::hidden('user_id', Auth::user()->id, null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('imagen','Imagen') !!}
					{!! Form::file('path')!!}
				</div>










				
				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}
					
				</div>


			    
			{!! Form::close() !!}
@endsection			
