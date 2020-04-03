@extends('layout.master')
@section('titulo','Libros')
@section('contenido')
<div class="container">
<div id="libros">
<div class="row">
	<br>
	<br>
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
	<center>
		<font color="black" face="Broadway">
			<h1><b>Libro</b></h1>
		</font>
	</center>
	</div>
</div>
<div class="row">
<div class="col-xs-2"></div>
	<div class="col-xs-8" align="left">
	<font face="Georgia" color="black">
		<h3><b>BUSCAR A:</b></h3>
	</font>
		<input type="text" placeholder="ESCRIBA EL NOMBRE DEL LIBRO" class="form-control"
		 v-model="buscar">
		</div>
		<div class="col-xs-2"></div>
	</div>

	<br>
	<div class="row">
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
		<font face="Georgia" color="black">
			<h3><b>Clic En El Boton Agregar Para Insertar Un Nuevo Elemento</b></h3>
		</font>
			<button class="btn btn-outline-success" v-on:click="showModal()">Agregar</button>
			<br><br>
	</div>
	</div>

<div class="row">
	<div class="col-xs-3"></div>
		<div class="row" v-if="editando==true">
			<div class="col-md-6">
				<form>
					<font face="Magneto" color="black">
	                 <center>
	                 	<h2><b>Editar Libro</b></h2>
	                 </center>
	            	</font>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Titulo:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese el Titulo" class="form-control" v-model="titulo">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Numero de Paginas:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese su Numero de Paginas" class="form-control" v-model="no_pagina">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Año de Edicion:</b></h4>
				</font>
					<input type="text" name="" placeholder="Escriba el Año de Edicion" class="form-control" v-model="anio_edicion">
				</div>
				</form>

				<br>
		          <button class="btn btn-outline-success" v-on:click="updateLibro(id_libro)">Guardar</button>
		          <button class="btn btn-outline-warning" v-on:click="editando=false">Cancelar</button>
			</div>
			<div class="col-xs-3"></div>
		</div>
	</div>

<div class="row">
	<div class="col-xs-2"></div>
		<div class="col-xs-8">
		<table class="table table-bordered table-dark table-striped table-hover">
					<thead style="background: goldenrod">
						<th>
						<font color="white">
						<center>
							<b>ID LIBRO</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>TITULO</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>NUMERO DE PAGINAS</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>AÑO DE EDICION</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>OPCIONES</b>
						</center>
						</font>
						</th>
					</thead>
					<tbody>
						<tr v-for="libro in filtroLibro">
							<td><font color="white">@{{libro.id_libro}}</font></td>
							<td><font color="white">@{{libro.titulo}}</font></td>
							<td><font color="white">@{{libro.no_pagina}}</font></td>
							<td><font color="white">@{{libro.anio_edicion}}</font></td>
							<td>
				                <span class="btn btn-outline-primary icon-pencil-1" v-on:click="showLibro(libro.id_libro)"></span><br><br>
				                <span class="btn btn-outline-danger icon-trash-empty" v-on:click="eliminarLibro(libro.id_libro)"></span>
				             </td>
						</tr>
					</tbody>
		</table>
		</div>
	<div class="col-xs-2"></div>
</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="add_Libros">
	     <div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<font face="Magneto" color="black">
                 <center>
                 	<h1 class="modal-title"><b>Nuevo Libro</b></h1>
                 </center>
                 </font>	
					<button type="button" class="close" data-dismiss="modal" aria.label="close"><span aria-hidden="true">x</span>
					</button>
		  	</div>
			<div class="modal-body">
			<font face="Arial" color="goldenrod">
				<h6><b>Id Libro:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese la id del Libro" class="form-control" v-model="id_libro">
			<font face="Arial" color="goldenrod">
				<h6><b>Titulo:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese el Titulo" class="form-control" v-model="titulo">
			<font face="Arial" color="goldenrod">
				<h6><b>Numero de Paginas:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese el Numero de Paginas" class="form-control" v-model="no_pagina">
			<font face="Arial" color="goldenrod">
				<h6><b>Año de Edicion:</b></h6>
			</font>
				<input type="text" name="" placeholder="Escriba el Año de Edicion" class="form-control" v-model="anio_edicion">

			</div>
			<div align="right">
			    <button type="button" class="btn btn-outline-danger btn-gl" data-dismiss="modal">Close</button>
			    <button type="submit" class="btn btn-outline-success btn-gl" v-on:click="agregarLibro()">Guardar</button><br><br>
			</div>

		  </div><!-- /.modal-content -->
	     </div><!-- /.modal-dialog -->
	</div><!-- /-modal -->
  </div>
 </div>
@endsection

@push('scripts')
	<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/vue-resource.js"></script>
<script src="js/libro.js"></script>
<!-- <script type="js/jquery-3.3.1.min.js"></script>
<script type="js/jquery.min.js"></script> -->
@endpush
<input type="hidden" name="route" value="{{url('/')}}">