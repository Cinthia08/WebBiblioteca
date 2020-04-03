var UrlUsuario="http://localhost/Biblioteca/public/apiUsuario";
new Vue({

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},


	el:'#usuario',
	data:{
		saludo:'hola mundo',
		usuarios:[],
		id_encargado:'',
		nombre:'',
		apellido:'',
		password:'',
		celular:'',
		foto:'',
		id_rol:2,
		active:'Encargado',
		preview:''
	},

	created:function(){
		this.getUsuario();
	},

	methods:{
		getUsuario:function(){
			this.$http.get(UrlUsuario)
			.then(function(json){
				this.usuarios=json.data
			});
		},

		alSeleccionar(event){
			this.foto=event.target.files[0];
			// console.log(this.foto);
			this.preview=URL.createObjectURL(this.foto)
		},

		// guardarUser:function(){
		// 	var data = new FormData();
		// 	data.append('id_encargado', this.id_encargado);
		// 	data.append('nombre',this.nombre);
		// 	data.append('apellido',this.apellido);
		// 	data.append('password',this.password);
		// 	data.append('celular',this.celular);
		// 	data.append('id_rol', this.id_rol);
		// 	data.append('foto',this.foto);

		// 	var config={
		// 		header:{'Content-Type':'image/jpg'}
		// 	}

		// 	this.$http.post(UrlUsuario,data,confi
		// 	.then(function(json){
				
		// 	})
		// 	.catch(function(json){
		// 		console.log(json);
		// 		alert('USUARIO AGREGADO');
		// 	})

		// },

		agregarUser:function(){
			var usuario ={
				id_encargado:this.id_encargado,
				nombre:this.nombre,
				apellido:this.apellido,
				password:this.password,
				celular:this.celular,
				id_rol:this.id_rol,
				active:this.active,
				foto:this.foto
			};
			this.id_encargado='';
			this.nombre='';
			this.apellido='';
			this.password='';
			this.celular='';
			this.id_rol='';
			this.active='';
			this.foto='';

			this.$http.post(UrlUsuario,usuario)
				.then(function(response){
					this.getUsuario();
				alert('se ha agregado un usuario nuevo');
			});
		}

	}
	

});