@extends('layout.master')
@section('titulo','Bibliotecas')
@section('contenido')
<div class="container">
<div id="bibliotecas">
<div class="row">
	<br>
	<br>
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
	<center>
		<font color="black" face="Broadway">
			<h1><b>Bibioteca</b></h1>
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
		<input type="text" placeholder="ESCRIBA EL NOMBRE DE LA BIBLIOTECA" class="form-control"
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
	                 	<h2><b>Editar Biblioteca</b></h2>
	                 </center>
	            	</font>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Nombre:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese el nombre" class="form-control" v-model="nombre">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Domicilio:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese su Domicilio" class="form-control" v-model="domicilio">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Dias Abierto:</b></h4>
				</font>
					<input type="text" name="" placeholder="Escriba los dias abierto" class="form-control" v-model="dias_abierto">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Hora Abierto:</b></h4>
				</font>
					<input type="text" name="" placeholder="horario abierto" class="form-control" v-model="horario_abierto">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Hora Cerrado:</b></h4>
				</font>
					<input type="text" name="" placeholder="horario cerrado" class="form-control" v-model="horario_cerrado">
				</div>
				</form>

				<br>
		          <button class="btn btn-outline-success" v-on:click="updateBiblioteca(id_biblioteca)">Guardar</button>
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
							<b>ID BIBLIOTECA</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>NOMBRE</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>DOMICILIO</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>DIAS ABIERTO</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>HORA ABIERTO</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>HORA CERRADO</b>
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
						<tr v-for="biblioteca in filtroBiblio">
							<td><font color="white">@{{biblioteca.id_biblioteca}}</font></td>
							<td><font color="white">@{{biblioteca.nombre}}</font></td>
							<td><font color="white">@{{biblioteca.domicilio}}</font></td>
							<td><font color="white">@{{biblioteca.dias_abierto}}</font></td>
							<td><font color="white">@{{biblioteca.horario_abierto}}</font></td>
							<td><font color="white">@{{biblioteca.horario_cerrado}}</font></td>
							<td>
				                <span class="btn btn-outline-primary icon-pencil-1" v-on:click="showBiblioteca(biblioteca.id_biblioteca)"></span><br><br>
				                <span class="btn btn-outline-danger icon-trash-empty" v-on:click="eliminarBiblioteca(biblioteca.id_biblioteca)"></span>
				             </td>
						</tr>
					</tbody>
		</table>
		</div>
	<div class="col-xs-2"></div>
</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="add_bibliotecas">
	     <div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<font face="Magneto" color="black">
                 <center>
                 	<h1 class="modal-title"><b>Nueva Biblioteca</b></h1>
                 </center>
                 </font>	
					<button type="button" class="close" data-dismiss="modal" aria.label="close"><span aria-hidden="true">x</span>
					</button>
		  	</div>
			<div class="modal-body">
			<font face="Arial" color="goldenrod">
				<h6><b>Id Biblioteca:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese la id de la Biblioteca" class="form-control" v-model="id_biblioteca">
			<font face="Arial" color="goldenrod">
				<h6><b>Nombre:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese el nombre" class="form-control" v-model="nombre">
			<font face="Arial" color="goldenrod">
				<h6><b>Domicilio:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese su Domicilio" class="form-control" v-model="domicilio">
			<font face="Arial" color="goldenrod">
				<h6><b>Dias Abiertos:</b></h6>
			</font>
				<input type="text" name="" placeholder="Escriba los dias abierto" class="form-control" v-model="dias_abierto">
			<font face="Arial" color="goldenrod">
				<h6><b>Hora Abierto:</b></h6>
			</font>
				<input type="text" name="" placeholder="horario abierto" class="form-control" v-model="horario_abierto">
			<font face="Arial" color="goldenrod">
				<h6><b>Hora Cerrado:</b></h6>
			</font>
				<input type="text" name="" placeholder="horario cerrado" class="form-control" v-model="horario_cerrado">

			</div>
			<div align="right">
			    <button type="button" class="btn btn-outline-danger btn-gl" data-dismiss="modal">Close</button>
			    <button type="submit" class="btn btn-outline-success btn-gl" v-on:click="agregarBiblioteca()">Guardar</button><br><br>
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
<script src="js/biblioteca.js"></script>
<!-- <script type="js/jquery-3.3.1.min.js"></script>
<script type="js/jquery.min.js"></script> -->
@endpush
<input type="hidden" name="route" value="{{url('/')}}">