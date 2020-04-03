var	route= document.querySelector("[name=route]").value;
var urlLector = route + '/apilector';
var urlLec= urlLector +'/';

new Vue({
	el:'#lectores',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		prueba:'HOLA MUNDO',
		lectores:[],
		id_lector: '',
		nombre: '',
		apellidos: '',
		telefono: '',
		direccion: '',
		codigo_postal:'',
		buscar:'',
		editando: false,
	},

		created:function(){
		this.getLector();
	},

	methods:{
		getLector:function(){
			this.$http.get(urlLector)
			.then(function(json){
				this.lectores=json.data
			});
		},


		showModal:function(){
			$('#add_lectores').modal('show');
			this.limpiar
		},
		// fin de show modal
		// inicio de agregar alumno
		agregarLector:function()
		{
			// construir un objeto que necesitamos por el api
			var lect={id_lector:this.id_lector,
							nombre: this.nombre,
							apellidos: this.apellidos,
							telefono: this.telefono,
							direccion: this.direccion,
							codigo_postal:this.codigo_postal}
				// limpiar campos
				this.id_lector='';
				this.nombre='';
				this.apellidos='';
				this.telefono='';
				this.direccion='';
				this.codigo_postal='';
				// para un metodo store se necesita un post

				this.$http.post(urlLector,lect)
				.then(function(response){
					this.getLector();
					$('#add_lectores').modal('hide');
				});
		},

		showLector:function(id){
			// crear un json 
			this.$http.get(urlLector + '/' + id)
			.then(function(json){
				this.id_lector=json.data.id_lector;
				this.nombre=json.data.nombre;
				this.apellidos=json.data.apellidos;
				this.telefono=json.data.telefono;
				this.direccion=json.data.direccion;
				this.codigo_postal=json.data.codigo_postal;
				this.editando=true;
			});
		},

		updateLector:function(id)
		{
			// construir un objeto que necesitamos por el api
			var lect={id_lector:this.id_lector,
							nombre: this.nombre,
							apellidos: this.apellidos,
							telefono: this.telefono,
							direccion: this.direccion,
							codigo_postal: this.codigo_postal}

						 console.log();

			this.$http.patch(urlLec+id,lect)
			.then(function(json){
				this.getLector();
				this.limpiar();
			})
		},
		

		limpiar:function(){

				this.id_lector='';
				this.nombre='';
				this.apellidos='';
				this.telefono='';
				this.direccion='';
				this.codigo_postal='';
				this.editando=false;
	  	},


		eliminarLector:function(id){
			var resp=confirm("se eliminara el Lector")
			if (resp==true) {
				this.$http.delete(urlLec+id)
				.then(function(json){
					this.getLector();
				});
			}
		}

    },
    computed:{

		filtroLector:function(){
			return this.lectores.filter((lectores)=>{
				return lectores.nombre.match(this.buscar.trim()) ||
				lectores.nombre.toLowerCase().match(this.buscar.trim().toLowerCase());
			});
		}
	}
});