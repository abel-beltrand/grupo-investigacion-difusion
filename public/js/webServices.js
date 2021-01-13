// JavaScript Document
function obtenerEfemeridesPorMes_ws(mes){
	var resultado = $.ajax({
		url:"/sistemas/efemerides/datos/efemerides/webServices/efemeridesWs.php",
		data:{
			"mes":mes,
			"accion":"obtenerPorMes"
		},
		dataType:"json",
		type:"POST",
		async:true
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				resultado = {
					mensaje:{
						resultado:false,
						texto:"Ocurrió un error. No se recibieron datos"
					}
				};
				return $.Deferred().reject(resultado);
			}
			else if(!data.mensaje.resultado){
				return $.Deferred().reject(data);
			}
			return data;
		},
		function(){
			resultado = {
				mensaje:{
					resultado:false,
					texto:"Ocurrió un error. No se recibieron datos"
				}
			};
			
			return resultado;
		}
	);
	
	return resultado;
}

function obtenerEfemeridesPorDia_ws(mes, dia){
	var resultado = $.ajax({
		url:"/sistemas/efemerides/datos/efemerides/webServices/efemeridesWs.php",
		data:{
			"mes":mes,
			"dia":dia,
			"accion":"obtenerPorDia"
		},
		dataType:"json",
		type:"POST"
	}).then(
		function(data){
			//console.log(data);
			if(!(data && typeof data === "object")){
				resultado = {
					mensaje:{
						resultado:false,
						mensaje:"Ocurrió un error. No se recibieron datos"
					}
				};
				return $.Deferred().reject(resultado);
			}
			else if(!data.mensaje.resultado){
				return $.Deferred().reject(data);
			}
			return data;
		},
		function(){
			resultado = {
				mensaje:{
					resultado:false,
					mensaje:"Ocurrió un error. No se recibieron datos"
				}
			};
		}
	);
	return resultado;
}
// JavaScript Document
function obtenerNoticias_ws(pagina){
	var resultado = $.ajax({
		url:"/sistemas/noticias/datos/noticias/noticiasWs.php",
		data:{
			"pagina":pagina,
			"accion":"obtenerNoticias"
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"noticias":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Ocurrió un error al intentar recuperar las noticias. No se recibieron datos desde el servidor"
					}
				};
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			return data;
		},
		function(data){
			console.log(data);
			var r = {
				"noticias":null,
				"mensajeSistema":{
					"resultado":false,
					"texto":"Ocurrió un error al intentar recuperar las noticias. No se recibieron datos desde el servidor"
				}
			};
			
			return r;
		}
	);
	
	return resultado;
}
function obtenerEventos_ws(idArea){
	var resultado = $.ajax({
		url:"/sistemas/gestionweb/webServices/gestionwebWs.php",
		data:{
			"idArea":idArea,
			"accion":"obtenerEventos"
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"eventos":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener los eventos"
					}
				};
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			
			return data;
		},
		function(data){
			var r = {
					"eventos":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener los eventos"
					}
				};
			return r;
		}
	);
	
	return resultado;
}
function obtenerAvisos_ws(idArea){
	var resultado = $.ajax({
		url:"/sistemas/gestionweb/webServices/gestionwebWs.php",
		data:{
			"idArea":idArea,
			"accion":"obtenerAvisos"
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"avisos":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener los avisos"
					}
				};
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			
			return data;
		},
		function(data){
			var r = {
					"avisos":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener los avisos"
					}
				};
			return r;
		}
	);
	
	return resultado;
}
function obtenerConvocatorias_ws(idArea, pagina){
	var resultado = $.ajax({
		url:"/sistemas/gestionweb/webServices/gestionwebWs.php",
		data:{
			"idArea":idArea,
			"accion":"obtenerConvocatorias",
			"pagina":pagina
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"convocatorias":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener las convocatorias"
					}
				};
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			
			return data;
		},
		function(data){
			var r = {
					"convocatorias":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener las convocatorias"
					}
				};
			return r;
		}
	);
	
	return resultado;
}
function obtenerHistorias_ws(idArea, pagina){
	var resultado = $.ajax({
		url:"/sistemas/gestionweb/webServices/gestionwebWs.php",
		data:{
			"idArea":idArea,
			"accion":"obtenerHistorias",
			"pagina":pagina
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"historias":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener las imágenes de transición"
					}
				};
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			
			return data;
		},
		function(data){
			var r = {
					"historias":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener las historias de éxito"
					}
				};
			return r;
		}
	);
	
	return resultado;
}
function obtenerImagenesTransicion_ws(idArea){
	var resultado = $.ajax({
		url:"/sistemas/gestionweb/webServices/gestionwebWs.php",
		data:{
			"idArea":idArea,
			"accion":"obtenerImagenesTransicion"
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"imagenesTransicion":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener las imágenes de transición"
					}
				};
				
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			return data;
		},
		function(data){
			var r = {
					"imagenesTransicion":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener las imágenes de transición"
					}
				};
			return r;
		}
	);
	return resultado;
}
function obtenerEventosVigentesFUL_ws(soloPrimeros){
	var resultado = $.ajax({
		url:"/sistemas/gestionweb/webServices/gestionwebWs.php",
		data:{
			"soloPrimeros":soloPrimeros,
			"accion":"obtenerEventosVigentesFUL"
		},
		type:"GET",
		dataType:"json"
	}).then(
		function(data){
			if(!(data && typeof data === "object")){
				var r = {
					"eventos":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener los eventos"
					}
				};
				return $.Deferred().reject(r);
			}
			else if(!data.mensajeSistema.resultado)
				return $.Deferred().reject(data);
			
			return data;
		},
		function(data){
			var r = {
					"eventos":null,
					"mensajeSistema":{
						"resultado":false,
						"texto":"Hubo un error al intentar obtener los eventos"
					}
				};
			return r;
		}
	);
	
	return resultado;
}