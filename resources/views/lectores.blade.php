@extends('layout.master')
@section('titulo','Lectores')
@section('contenido')
<div class="container">
<div id="lectores">
<div class="row">
	<br>
	<br>
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
	<center>
		<font color="black" face="Broadway">
			<h1><b>Lector</b></h1>
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
		<input type="text" placeholder="ESCRIBA EL NOMBRE DEL LECTOR" class="form-control"
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
	                 	<h2><b>Editar Lector</b></h2>
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
					<h4><b>Apellidos:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese sus Apellidos" class="form-control" v-model="apellidos">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Telefono:</b></h4>
				</font>
					<input type="text" name="" placeholder="Escriba su Telefono" class="form-control" v-model="telefono">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Direccion:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese su Direccion" class="form-control" v-model="direccion">
				</div>
				<div>
				<font face="Arial" color="goldenrod">
					<h4><b>Codigo Postal:</b></h4>
				</font>
					<input type="text" name="" placeholder="Ingrese su Codigo Postal" class="form-control" v-model="codigo_postal">
				</div>
				</form>

				<br>
		          <button class="btn btn-outline-success" v-on:click="updateLector(id_lector)">Guardar</button>
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
							<b>ID LECTOR</b>
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
							<b>APELLIDOS</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>TELEFONO</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>DIRECCION</b>
						</center>
						</font>
						</th>

						<th>
						<font color="white">
						<center>
							<b>CODIGO POSTAL</b>
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
						<tr v-for="lector in filtroLector">
							<td><font color="white">@{{lector.id_lector}}</font></td>
							<td><font color="white">@{{lector.nombre}}</font></td>
							<td><font color="white">@{{lector.apellidos}}</font></td>
							<td><font color="white">@{{lector.telefono}}</font></td>
							<td><font color="white">@{{lector.direccion}}</font></td>
							<td><font color="white">@{{lector.codigo_postal}}</font></td>
							<td>
				                <span class="btn btn-outline-primary icon-pencil-1" v-on:click="showLector(lector.id_lector)"></span><br><br>
				                <span class="btn btn-outline-danger icon-trash-empty" v-on:click="eliminarLector(lector.id_lector)"></span>
				             </td>
						</tr>
					</tbody>
		</table>
		</div>
	<div class="col-xs-2"></div>
</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="add_lectores">
	     <div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<font face="Magneto" color="black">
                 <center>
                 	<h1 class="modal-title"><b>Nuevo Lector</b></h1>
                 </center>
                 </font>	
					<button type="button" class="close" data-dismiss="modal" aria.label="close"><span aria-hidden="true">x</span>
					</button>
		  	</div>
			<div class="modal-body">
			<font face="Arial" color="goldenrod">
				<h6><b>Id Lector:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese la id del lector" class="form-control" v-model="id_lector">
			<font face="Arial" color="goldenrod">
				<h6><b>Nombre:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese el nombre" class="form-control" v-model="nombre">
			<font face="Arial" color="goldenrod">
				<h6><b>Apellidos:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese sus Apellidos" class="form-control" v-model="apellidos">
			<font face="Arial" color="goldenrod">
				<h6><b>Telfono:</b></h6>
			</font>
				<input type="text" name="" placeholder="Escriba su Telefono" class="form-control" v-model="telefono">
			<font face="Arial" color="goldenrod">
				<h6><b>Direccion:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese su Direccion" class="form-control" v-model="direccion">
			<font face="Arial" color="goldenrod">
				<h6><b>Codigo Postal:</b></h6>
			</font>
				<input type="text" name="" placeholder="Ingrese su Codigo Postal" class="form-control" v-model="codigo_postal">

			</div>
			<div align="right">
			    <button type="button" class="btn btn-outline-danger btn-gl" data-dismiss="modal">Close</button>
			    <button type="submit" class="btn btn-outline-success btn-gl" v-on:click="agregarLector()">Guardar</button><br><br>
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
<script src="js/lector.js"></script>
<!-- <script type="js/jquery-3.3.1.min.js"></script>
<script type="js/jquery.min.js"></script> -->
@endpush
<input type="hidden" name="route" value="{{url('/')}}">