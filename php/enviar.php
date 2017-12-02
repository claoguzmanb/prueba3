<?php

include("conection.php");

if(isset($_POST['nombre']) &&
isset($_POST['asunto']) &&
isset($_POST['grupo']) &&
isset($_POST['correo']) &&
isset($_POST['mensaje'])){

#Declaracion de variables
	$nom=$_POST['nombre'];
	$asunto=$_POST['asunto'];
	$gpo=$_POST['grupo'];
	$email=$_POST['correo'];
	$msj=$_POST['mensaje'];

	$sql="INSERT INTO contacto(nombre,asunto,grupo,correo,mensaje) VALUES ('$nom','$asunto','$gpo','$email','$msj')";

	if($mysqli->query($sql)==TRUE){
		$mysqli->close();
	}
}
?>