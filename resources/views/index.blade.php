@extends('layouts.front')

@section('title', 'Mi blog')

@section('content')

<div class="container">
	<div class="row">
		
		<div class="col-md-8">
			<h1>Últimas Noticias</h1>

				<article>
				<h2> Titulo de la noticia</h2>

					<div class="row">


						<div class="col-md-6">
							 <span class="glyphicon glyphicon-folder-open"></span> Nombre de la Categoria
							 <span class="glyphicon glyphicon-user"></span>  Nombre del usuario
						</div>	

						<div class="col-md-6">
							<span class="glyphicon glyphicon-calendar"></span>Fecha
						</div>	

					</div>

					<br>

					<img src="{{route('home')}}/images/14ciudad.jpg" class="img-responsive">
					<br>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ducimus maxime, inventore veritatis, sit dolor. Harum iure unde voluptates voluptatum aut cupiditate impedit magnam asperiores alias tenetur, nobis eligendi nesciunt!</p>

					<a class="btn btn-primary" href="#" role="button">Leer mas...</a>
				</article>



			
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