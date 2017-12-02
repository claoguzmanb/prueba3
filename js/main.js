$(document).ready(function(){
	main();
 });
var contador = 1;
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
function accion(strdata)
{
	$.post(
		"php/funciones.php",
		{accion:strdata},
		function(data){
			$('.contenedor2').html(data);
		})
}
function confirmarmsg(){
	if(confirm('Enviar el correo')==1){
		$.post(
			"php/enviar.php",
			$('#contactame').serialize());
		alert('Mensaje enviado');
	}
}