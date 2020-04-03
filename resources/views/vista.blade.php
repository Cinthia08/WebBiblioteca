@extends('layout.master')
@section('contenido')
<div class="row" align="center">
<div class="2"></div>
		<div class="col-xs-8">
			<table class="table table-bordered table-responsive">
				<thead>
					<th style="background: goldenrod">
					<h2>
					<font face="forte" color="black">
					<center>
						Bibliotecas
					</center>
					</font>
					</h2>
					</th>

					<th style="background: yellow">
					<h2>
					<font face="forte" color="black">
					<center>
						Libros
					</center>
					</font>
					</h2>
					</th>

					<th style="background: goldenrod">
					<h2>
					<font face="forte" color="black">
					<center>
						Lectores
					</center>
					</font>
					</h2>
					</th>

					<th style="background: yellow">
					<h2>
					<font face="forte" color="black">
					<center>
						Prestamos
					</center>
					</font>
					</h2>
					</th>

				</thead>
				<tbody>
						<tr>
							<td style="background: goldenrod">
							<center>
								<img src="imagenes/biblioteca.jpg" width="150" height="150">
								<br>
								<br>
									<a href="{{url('biblio')}}">
									<button class="btn  btn-outline-success btn-block">ver</button>
									</a>
							</center>
							</td>

							<td style="background: yellow">
							<center>
								<img src="imagenes/libro.jpg" width="150" height="150">
								<br>
								<br>
									<a href="{{url('libro')}}">
									<button class="btn  btn-outline-success btn-block">ver</button>
									</a>
							</center>
							</td>

							<td style="background: goldenrod">
							<center>
								<img src="imagenes/lectores.jpg" width="150" height="150">
								<br>
								<br>
									<a href="{{url('lector')}}">
									<button class="btn  btn-outline-success btn-block">ver</button>
									</a>
							</center>
							</td>

							<td style="background: yellow">
							<center>
								<img src="imagenes/prestamo.jpg" width="150" height="150">
								<br>
								<br>
									<a href="{{url('prestamo')}}">
									<button class="btn  btn-outline-success btn-block">ver</button>
									</a>
							</center>
							</td>
						</tr>
				</tbody>
			</table>

			<a href="{{url('salir')}}">
			<button class="btn btn-outline-primary btn-sm">Cerrar</button>
			</a>
			</div>
	<div class="col-xs-2"></div>
</div>
@endsection