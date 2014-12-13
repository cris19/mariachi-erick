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
	//Div principal del tamaño completo de la pagina
	$('header').css({'height': altoPantalla});

	//Ajustamos la localizacion del contenedor 
	$('#contenedor').css({top: altoPantalla});

});