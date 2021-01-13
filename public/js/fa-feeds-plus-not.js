// JavaScript Document
function obtenerFacebook_ws(url_i){
	var resultado = $.ajax({
		url:url_i,
		type:"GET",
		dataType:"json"
	}).then(function(data){
		if(!(data && typeof data === "object"))
			return $.Deferred().reject("");
		else
			return data;
	});
	
	return resultado;
}
function fbFetch(){
	  //Set Url of JSON data from the facebook graph api. make sure callback is set with a '?' to overcome the cross domain problems with JSON
      //var url = "https://graph.facebook.com/UAEH.edu/posts?access_token=166963240332733|WLPg5rfPQ4hMB43GTv7rSgX3yLY&limit=4&callback=?";
	 //var url = "/sistemas/facebook/";

	  	String.prototype.convertirURL = function() {
			return this.replace(/[A-Za-z]+:\/\/[\w-]+\.[\w:%&~?\/.="-]+/g, function(url) { //* /[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&~\?\/.=]+/g
				if(url.length > 23){
					var urlCORTA = url.substring(0, 23);
					return urlCORTA.link(url);
				}
				else
					return url.link(url);
			});
		};
		String.prototype.convertirUsuario = function() {
			return this.replace(/@+[\w-]+/g, function(u) {//*  /[@]+[A-Za-z0-9-_]+/g
				if(u!= "@s"){
					var usuario = u.replace("@","")
					return u.link("http://twitter.com/"+usuario);
				}else
					return u;
			});
		};
		String.prototype.convertirHashtag = function() {
			return this.replace(/#+[\w-]+/g, function(e) {
				var etiqueta = e.replace("#","%23")
				//https://twitter.com/search?q=alienmau&src=typd API v1.1
				//return e.link("https://twitter.com/search?q="+etiqueta+"&src=typd");
				return e.link("https://twitter.com/UAEH_OFICIAL");
			});
		};
		
	  
	  /////////////////////////////////////////////////////////////////////////////////////////////////////
	  /////////////////////////////////////////////////////////////////////////////////////////////////////
	var pagina = 1;
	
	var resultado_noticias = obtenerNoticias_ws(pagina);
	//var resultado_facebook = obtenerFacebook_ws(url);
	
	$.when(resultado_noticias).done(function(data_noticias){
		var noticias;
		var numeroPaginas;
		
		pagina++;
		
		// verifica que se hayan recuperado noticias
		if(data_noticias.noticias.registros && typeof data_noticias.noticias.registros === "object"){
			noticias = data_noticias.noticias.registros;
			numeroPaginas = data_noticias.noticias.numeroPaginas;
		}
		else{
			return;
		}
		
		/////NOTICIAS//////
		var noti = [];
		var w= 0;
		$.each(noticias, function(i, v){
			//Detener cuando sean 4 iteraciones
			if(w >= 4)
				return false;
			else{
				// obtiene la primer imagen de la noticia, si es que hay alguna
				var imagenSalida;
				if(v.imagenes && typeof v.imagenes === "object" && v.imagenes.length > 0)
					imagenSalida = v.imagenes[0];
				else
					imagenSalida = "/noticias/images/no_image.jpg";
				//(v.titulo, v.descripcion, imagenSalida, fechaSalida, v.urlNoticia);
				noti[w] = [];
				noti[w][0] = v.titulo;
				noti[w][1] = imagenSalida;
				
				var imagen_noticia = new Image();
				imagen_noticia.src = imagenSalida;
				
				noti[w][2] = v.urlNoticia;
				w++;	
			}
			
			
		});
		
		// FACEBOOK
			
		var html ="";
		var postt =1;
		var x =0;
		//var totalc = 194; //Total de caracteres a mostrar en cada post
		
		while(postt<=4){
		
			
			switch (postt) {
				case 1:
					html +='<div class="row" style="margin-left:0px;">';
					// link, picture , message	
					html += '	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '  		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '			<div class="hoverImg">';
					html += '				<a href="'+ noti[x][2] +'"><div class="center-block" style="';
					html += "background-image:url('https://www.uaeh.edu.mx" + noti[x][1] + "'); ";
					html += 'height:180px; background-position:top; background-size:cover;"><div class="foto_titulo">'+ noti[x][0] +'</div></div></a></div></div>';
					html += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 textlink no-paddingLR bordeTxT">';
					
					html += '		</div>';
					html += '	</div>';
					break; 
				case 2:
					// link, picture , message	
					html += '	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '  		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '			<div class="hoverImg">';
					html += '				<a href="'+ noti[x][2] +'"><div class="center-block" style="';
					html += "background-image:url('https://www.uaeh.edu.mx" + noti[x][1] + "'); ";
					html += 'height:180px; background-position:top; background-size:cover;"><div class="foto_titulo">'+ noti[x][0] +'</div></div></a></div></div>';
					html += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 textlink no-paddingLR bordeTxT">';
					
					html += '		</div>';
					html += '	</div>';
					html += '</div>';
					break; 
				case 3:
					html +='<div class="row" style="margin-left:0px;">';
					// link, picture , message	
					html += '	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 textlink no-paddingLR bordeTxT">';
					
					html += '		</div>';
					html += '  		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '			<div class="hoverImg">';
					html += '				<a href="'+ noti[x][2] +'"><div class="center-block" style="';
					html += "background-image:url('" + noti[x][1] + "'); ";
					html += 'height:180px; background-position:top; background-size:cover;"><div class="foto_titulo">'+ noti[x][0] +'</div></div></a></div></div>';
					html += '	</div>';
					break;
				case 4:
					html += '	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 textlink no-paddingLR bordeTxT">';
					
					html += '		</div>';
					html += '  		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-paddingLR">';
					html += '			<div class="hoverImg">';
					html += '				<a href="'+ noti[x][2] +'"><div class="center-block" style="';
					html += "background-image:url('https://www.uaeh.edu.mx" + noti[x][1] + "'); ";
					html += 'height:180px; background-position:top; background-size:cover;"><div class="foto_titulo">'+ noti[x][0] +'</div></div></a></div></div>';
					html += '	</div>';
					html += '</div>';
					break;
				default: 
					break;
			}
			
			x++;
			postt++;
		}
			
		
		//Animacion por cada fetch
		$('.facebookfeed').html(html);
		$('.facebookfeed').animate({opacity:0}, 500, function(){
				
															  });
		$('.facebookfeed').animate({opacity:1}, 500);
	});
	
}
