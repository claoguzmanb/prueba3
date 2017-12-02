<?php

$mysqli=new mysqli("localhost:3306","root","","mipagina");

/*comprobar la conexion de la bd*/
	if ($mysqli->connect_errno) {
		printf("Falló la conexion: %s\n",$mysqli->connect_error);
		exit();
	}
?>