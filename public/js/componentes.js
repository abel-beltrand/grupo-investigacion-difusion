function obtenerImagenesTransicion(idArea){
	var resultado = obtenerImagenesTransicion_ws(idArea);
	
	resultado.done(mostrarImagenesTransicion);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}
function mostrarImagenesTransicion(data){
	var $imagenes_c = $("#myCarousel");
	var $indicadores = $("ol.carousel-indicators", $imagenes_c);
	var $imagenes = $(".carousel-inner", $imagenes_c);
	
	$indicadores.empty();
	$imagenes.empty();
	
	if(data.imagenesTransicion.registros && typeof data.imagenesTransicion.registros === "object")
		var imagenes = data.imagenesTransicion.registros;
	else
		return;
	
	
	$.each(imagenes, function(i, v){
		// indicadores ó los puntos que la hacen de paginadores, en la parte inferior del carousel
		$indicadores.append("<li data-target='#myCarousel' data-slide-to='"+i+"'"+(i===0?" class='active'":"")+"></li>");
		
		// contenido del carousel
		$imagenes.append(
				'<div class="item'+(i===0?' active':'')+'">'+
					'<a href="'+((v.url && v.url!=="")?v.url:"#")+'" class="link-b">'+
						'<img src="'+v.foto_url+'" data-src="" style="width:100%" alt="'+v.titulo+'" class="img-responsive">'+
					'</a>'+
					'<div class="container">'+
						'<div class="carousel-caption">'+
							'<a href="'+((v.url && v.url!=="")?v.url:"#")+'" class="link-b" style="color:#fff">'+'<h1 class="titulo_carrusel hidden-xss" style="text-shadow: 8px 2px 8px #000;">'+((v.titulo && v.titulo !== "")?v.titulo:"")+'</h1>'+
							'<div class="hidden-xs" style="text-shadow: 8px 2px 8px #000;">'+((v.descripcion && v.descripcion !== "")?v.descripcion:"")+'</div></a>'+
						'</div>'+
					'</div>'+
				'</div>');
	});
	
	
	// inicializa el carousel
	$imagenes_c.carousel(
		{
			interval:10000
		}
	);
}
function obtenerHistorias(idArea){
	var resultado = obtenerHistorias_ws(idArea, 1);
	
	resultado.done(mostrarHistorias);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}
function mostrarHistorias(data){
	var $historias_c = $("#content-historias .row-fluid .container-fluid");
	
	$historias_c.empty();
	if(data.historias.registros && typeof data.historias.registros === "object")
		var historias = data.historias.registros;
	else
		return;
	
	$historias_c.append('<div class="col-lg-12 well-lg"><h3>HISTORIAS DE ÉXITO</h3></div>');
	$.each(historias, function(i, v){
		
		if(i < 3)
			$historias_c.append(
				'<div class="history-mg col-sm-4 col-md-4">'+
					'<div class="history-imagen"><a href="'+v.url+'"><img src="'+v.foto_url+'" class="img-circle" style="max-width:200px; max-height:200px;"></a></div>'+
					'<h4 class="text-left">'+v.nombre+'</h4><p class="semblanza">'+v.descripcion+
					'</p><div class="col-sm-12 col-md-12 text-right"><a href="'+v.url+'" class="link-vm"><em>Leer más &gt;&gt;</em></a></div>'+
				'</div>'
			);
	});
}
function obtenerConvocatorias(idArea){
	var resultado = obtenerConvocatorias_ws(idArea);
	
	resultado.done(mostrarConvocatorias);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}
function mostrarConvocatorias(data){
	var $convocatoria_c = $("#convocatoria");
	$(".portada, .convocatorias", $convocatoria_c).empty();
	
	if(data.convocatorias.registros && typeof data.convocatorias.registros === "object")
		var convocatorias = data.convocatorias.registros;
	else
		return;
	
	$.each(convocatorias, function(i, v){
		if(i<4){
			if(i == 0){
				if(v.portada_url && v.portada_url !== "")
					$(".portada", $convocatoria_c).append(
							"<a href='" + (v.url?v.url:"#") + "'>" +
								'<img class="img-responsive" src="'+v.portada_url+'" alt="'+v.titulo+'" ">'+
							'</a>');
			}
			$(".convocatorias", $convocatoria_c).append("<p><a href='"+(v.url?v.url:"#")+"' class='link-b'>"+v.titulo+"</a></p><br>");
		}
	});
}
function obtenerAvisos(idArea){
	var resultado = obtenerAvisos_ws(idArea);
	
	resultado.done(mostrarAvisos);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}
function mostrarAvisos(data){
	var $aviso_c = $("#aviso");
	$(".portada, .avisos", $aviso_c).empty();
	
	if(data.avisos.registros && typeof data.avisos.registros === "object")
		var avisos = data.avisos.registros;
	else
		return;
	
	$.each(avisos, function(i, v){
		if(i<4){
			if(i == 0){
				if(v.portada_url && v.portada_url !== "")
					$(".portada", $aviso_c).append(
							"<a href='" + (v.url?v.url:"#") + "'>" +
							'<img class="img-responsive" src="'+v.portada_url+'" alt="'+v.titulo+'" ">'+
							'</a>');
			}
			$(".avisos", $aviso_c).append("<p><a href='"+(v.url?v.url:"#")+"' class='link-b'>"+v.titulo+"</a></p><br>");
		}
	});
}
function obtenerEventos(idArea){
	var resultado = obtenerEventos_ws(idArea);
	
	resultado.done(mostrarEventos);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}
function mostrarEventos(data){
	var mes = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
	var $eventos_c = $("#eventos");
	
	if(data.eventos.registros && typeof data.eventos.registros === "object")
		var eventos = data.eventos.registros;
	else
		return;
	
	$.each(eventos, function(i, v){
		if(i<3){
			var fecha = new Date(v.fechaInicio);
			
			$eventos_c.append(
				'<div class="row pa_evento">'+
					'<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">'+
						'<div class="circle-multiline">'+
							'<span>'+fecha.getDate()+'</span><br>'+mes[fecha.getMonth()].substr(0, 3)+
						'</div>'+
					'</div>'+
					'<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">'+
						'<a href="'+((v.url && v.url !== ""?v.url:"javascript:void(0)"))+'" class="link-b"><p class="pa_item-evento"><span class="title-evento">'+v.nombre+'</span><br>'+
						fecha.getHours()+':'+(fecha.getMinutes()<9?"0"+fecha.getMinutes():fecha.getMinutes())+' hrs.<br><span class="tipo-evento">'+
						((v.lugar && typeof v.lugar === "string")?v.lugar:"")+'</span></p></a>'+
					'</div>'+
				'</div>'
			);
		}
	});
}
function obtenerEventosFUL(){
	var resultado = obtenerEventosVigentesFUL_ws(true);
	
	resultado.done(mostrarEventosFUL);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}
function mostrarEventosFUL(data){
	var mes = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
	var $eventos_c = $("#eventosFUL");
	
	if(data.eventos.registros && typeof data.eventos.registros === "object")
		var eventos = data.eventos.registros;
	else
		return;
	
	$.each(eventos, function(i, v){
		if(i<3){
			var fecha = new Date(v.fechaInicio);
			
			$eventos_c.append(
				'<div class="row pa_evento">'+
					'<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">'+
						'<div class="circle-multiline">'+
							'<span>'+fecha.getDate()+'</span><br>'+mes[fecha.getMonth()].substr(0, 3)+
						'</div>'+
					'</div>'+
					'<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">'+
						'<a href="'+((v.url && v.url !== ""?v.url:"javascript:void(0)"))+'" class="link-b"><p class="pa_item-evento"><span class="title-evento">'+v.nombre+'</span><br>'+
						fecha.getHours()+':'+(fecha.getMinutes()<9?"0"+fecha.getMinutes():fecha.getMinutes())+' hrs.<br><span class="tipo-evento">'+
						((v.lugar && typeof v.lugar === "string")?v.lugar:"")+'</span></p></a>'+
					'</div>'+
				'</div>'
			);
		}
	});
}
function obtenerEfemerides(){
	var fecha = new Date();
	var resultado = obtenerEfemeridesPorDia_ws(fecha.getMonth()+1, fecha.getDate());
	
	resultado.done(mostrarEfemerides);
	resultado.fail(function(data){
		console.log(data.mensajeSistema.texto);
	});
}

function mostrarEfemerides(data){
	var mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	var $efemerides_c = $("#content-efemerides");
	var $indicadores = $(".carousel-indicators", $efemerides_c);
	var $contenido = $(".carousel-inner", $efemerides_c);
	
	$indicadores.empty();
	$contenido.empty();
	
	var efemeride_clase;
	$.each(data.efemerides, function(i, efemeride){
		// genera los indicadores
		if(i === 0){
			$indicadores.append('<li data-target="#myCarousel2" data-slide-to="0" class="active">');
		}
		else
			$indicadores.append('<li data-target="#myCarousel2" data-slide-to="'+i+'">');
		
		// prepara la fecha de salida
		var fecha = new Date(efemeride.fecha);			
		var fechaSalida = "";
		
		if(efemeride.ignorarDia == 0){
			fechaSalida = fecha.getDate()+" de ";
		}
		fechaSalida = fechaSalida + mes[fecha.getMonth()];
		if(efemeride.ignorarAnio == 0){
			fechaSalida = fechaSalida + " de " + fecha.getFullYear();
		}
		
		// adjunta la efemeride
		if(i === 0)
			efemeride_clase = "item active";
		else
			efemeride_clase = "item";
		
		$contenido.append(
					'<div class="'+efemeride_clase+'">'+
						'<p class="efemt">'+fechaSalida+'<br><br>'+
							'<span style="font-style:normal;">'+efemeride.descripcion+'</span>'+
						'</p>'+
					'</div>'
		);
	})
	
	$("#myCarousel2").carousel(
		{
			interval:10000
		}
	);
}
