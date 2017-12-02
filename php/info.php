<?php
	if(strcmp($_REQUEST['accion'],'bienvenida')==0){
		print("Soy Claudia, hola");
	}
	if(strcmp($_REQUEST['accion'],'contacto')==0){
		print("<h1>Hola, en esta seccion me podras contactar para cualquier duda o comentario!</h1>");
		?>
			<form action='#' id='contactame' onsubmit="return false;" method="POST">
				<label>Nombre:</label><input type="text" name="name" placeholder="Nombre del contacto" required=""><br>
				<label>Asunto:</label><input type="text" name="asunto" placeholder="Asunto del mensaje" required=""><br>
				<label>Correo:</label><input type="text" name="email" placeholder="Correo del solicitante" required=""><br>
				<label>Mensaje:</label><textarea class='data' name='msg' rows="6">Mensaje...</textarea><br>
				<input type="hidden" name="accion" value="Enviar">
				<input type="submit" name="accion" value='Enviar' onclick="confirmarmsg();">
			</form>
		<?php
	}
	if(strcmp($_REQUEST['accion'],'Enviar')==0){
		print("Envio de correo por PHP");
	}
?>