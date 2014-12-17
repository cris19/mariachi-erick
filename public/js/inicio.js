$(function(){
/********************************************************************************************************
*
*	Summary: Variables generales
*
*********************************************************************************************************/
	var altoPantalla = $(window).height();		//Tamaño de la pagina (alto)



/********************************************************************************************************
*
*	Summary: Inicializamos nuestra pagina
*
*********************************************************************************************************/
	//Div principal y fonde secundariodel del tamaño completo de la pagina
	$('#presentacion, #fondo_secundario').css({'height': altoPantalla});

	//Ajustamos la localizacion del contenedor 
	$('#contenedor').css({top: altoPantalla});


/********************************************************************************************************
*
*	Summary: Funcionalidad para google maps
*
*********************************************************************************************************/
	function initialize() {
		var mapCanvas = document.getElementById('contacto-informacion-mapa'),
		mapOptions = {
		    center: new google.maps.LatLng(44.5403, -78.5463),
		    zoom: 8,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
	    }  
		var map = new google.maps.Map(mapCanvas, mapOptions)
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);


/********************************************************************************************************
*
*	Summary: Funcionalidad para actualizar background (fondo secundario)
*
*********************************************************************************************************/
	$(window).on('scroll',function(e){
		var topWindow     = $(this).scrollTop(),
			topContenedor = $('#contenedor').offset().top;
			console.log((topWindow + 100) > topContenedor);
		if( (topWindow + 10) > topContenedor ) 
		{
			$('#fondo_secundario').css({'z-index' : 150 });
		} 
		else
		{
			$('#fondo_secundario').css({'z-index' : 50 });
		}
	})

});