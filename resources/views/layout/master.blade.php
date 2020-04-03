<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo')</title>
  <meta name="route" value="{{url('/')}}">
  <meta name="token" id="token" value="{{ csrf_token() }}">

	
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/JavaScript" src="js/vue.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
  <script type="text/JavaScript" src="js/vue.min.js"></script>


</head>
<body>
<header>
	<div class="container">

		<div class="row">
			<nav class="col-12 col-sm-3 col-lg-2 menu d-flex justify-content-between ml-auto">
				<span class="">
                      <img src="imagenes/usuarios/{{Session::get('foto')}}" class="img-circled" alt="User Image" width="50" height="50">
                    </span>
                  <span><font color="white"> {{Session::get('rol')}} </font></span>
			</nav>
		</div>
	</div>
</header>
<div class="container-fluid">
	<div class="row">
			<div class="barra-lateral col-12 col-sm-auto">
				<div class="logo">
					<img src="imagenes/usuarios/{{Session::get('foto')}}" class="img-circle img" alt="User Image">
					<span>{{Session::get('nombre')}}</span>
				</div>
				<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
				<a href="{{url('biblio')}}"><i class="icon-home"></i><span>Bibliotecas</span></a>
				<a href="{{url('libro')}}"><i class="icon-th-list"></i><span>Libros</span></a>
       			<a href="{{url('lector')}}"><i class="icon-user"></i><span>Lectores</span></a>
        		<a href="{{url('prestamo')}}"><i class="icon-cog-alt"></i><span>Detalle Prestamo</span></a>
				</nav>
			</div>

			<main class="main col">
				<div class="container">
					<div class="row">
					@yield('contenido')
					</div>
				</div>
			</main>

	</div>
</div>



@stack('scripts')

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

<!-- jQuery 3 -->
<!-- <script src="adminlte/dist/js/jquery.min.js"></script> -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
    <script type="text/JavaScript" src="js/vue.min.js"></script>
    <script type="text/JavaScript" src="js/vue-resource.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
	<script src="js/moment-with-locales.min.js"></script>


</body>
</html>