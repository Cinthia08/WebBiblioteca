<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script src="js/vue.js"></script>
    <script src="js/vue.min.js"></script>

</head>
<body>	
<div id="usuario">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/fondo.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form">
				@csrf
					<div class="login100-form-avatar">
						<img src="images/usuario.png" alt="Usuario">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Registrarse
					</span>

			<div class="row">
			<div class="col-md-12">
				<font face="Georgia" color="yellow">
					<center>
					<h4><b>Nombre:</b></h4>
					</center>
				</font>
				<input type="text" placeholder="Name" class="form-control"
				v-model="nombre"><br>
			</div>

			<div class="col-md-12">
				<font face="Georgia" color="yellow">
					<center>
					<h4><b>Apellidos:</b></h4>
					</center>
				</font>
				<input type="text" placeholder="LastName" class="form-control" v-model="apellido">
				<br>
			</div>

			<div class="col-md-12">
				<font face="Georgia" color="yellow">
					<center>
					<h4><b>Contraseña:</b></h4>
					</center>
				</font>
				<input type="text" placeholder="Password" class="form-control" v-model="password"><br>
			</div>

			<div class="col-md-12">
				<font face="Georgia" color="yellow">
					<center>
					<h4><b>Telefono:</b></h4>
					</center>
				</font>
				<input type="text" placeholder="Telephone" class="form-control" v-model="celular"><br>
			</div>

			<div class="col-md-12">
				<font face="Georgia" color="yellow">
					<center>
					<h4><b>Seleccione Una Imagen:</b></h4>
					</center>
				</font>
				<input type="file" class="form-control" accept="image/jpeg" maxlength="1024" @change="alSeleccionar"><br>
			</div>

			<!--<div class="col-md-6">
					<img v-bind:src="preview" class="img img-rounded" width="400px" height="200px" v-if="preview">-->
			</div>
			<button>hahhaa</button>
			<div class="container-login100-form-btn p-t-10">
				Registrar
				</button>
			</div>
				
			</div>

				</form>
			</div>
		</div>
	</div>
</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/vue-resource.js"></script>
	<script src="js/main.js"></script>

	<script src="js/usuarios.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->



</body>
</html>