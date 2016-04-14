@extends('layouts.front')

@section('title', 'Mi blog')

@section('content')

<div class="container">
	<div class="row">
		
		<div class="col-md-8">
			<h1>Últimas Noticias</h1>
			@foreach($articles as $article)	
				<article>
				<h2>{{$article->title}} </h2>

					<div class="row">


						<div class="col-md-6">
							 <span class="glyphicon glyphicon-folder-open"></span> {{$article->category->name}}
							 <span class="glyphicon glyphicon-user"></span>  {{$article->user->name}}
						</div>	

						<div class="col-md-6">

							<span class="glyphicon glyphicon-calendar"></span> {{Date::parse($article->created_at)->format('j \d\e F \d\e Y')}}
						</div>	

					</div>

					<br>
					@if(empty($article->path))
					@else
					<img src="{{route('home')}}/images/{{$article->path}}" class="img-responsive">
					@endif
					<br>

					<p> {{substr($article->content, 0,300)}}...</p>

					<a class="btn btn-primary" href="{{'article'}}/{{$article->slug}}" role="button">Leer mas</a>
				</article>
			@endforeach()

			{!! $articles->render()!!}


			
		</div>

		<div class="col-md-4">
			<div class="panel panel-primary">
  <!-- Default panel contents -->
			  <div class="panel-heading">Ùltimas Noticias</div>
			  <div class="panel-body">
			    
			  </div>

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Morbi leo risus</li>
			    <li class="list-group-item">Porta ac consectetur ac</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>

			<div class="panel panel-primary">
  <!-- Default panel contents -->
			  <div class="panel-heading">Recursos</div>
			  <div class="panel-body">
			    
			  </div>

			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Morbi leo risus</li>
			    <li class="list-group-item">Porta ac consectetur ac</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>
			
		</div>
			
		</div>







	</div> <!-- fin row -->

	<footer>
		<div class="container">
		<hr/>
		 	<p class="text-center">Copyright &copy; Digital Datos.Todos los derechos reservados</p>
		</div>
	</footer>







</div>


@endsection