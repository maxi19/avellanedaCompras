<?php

session_start();
$salt = "|#€7`¬23ads4ook12";
$saltCookie = "|@#57e+ç´|@#d";
//coniguracion de acceso a la db
$usuario = "root";
$host = "localhost";
$password = "AAbb00";

//configuracion de tablas y de la db
$database = "avellanedacompras";
$tablaUsuarios = "usuario";
$tablaReservas = "usuarios";
$tablaComentarios = "comentarios";

function conectarseDb() {

	global $host;
	global $usuario;
	global $password;

	global $database;
	global $tablaUsuarios;
	global $tablaReservas;
	global $tablaComentarios;

	if (!($link = new mysqli($host, $usuario, $password, $database))) {
		echo "Error conectando al servidor de base de datos.";
		exit();
	}
	return $link;
}

function dameProductos() {

	$link = conectarseDb();
	
	if ($results = mysqli_query($link, "select nombre,email,descripcion,precio,direccion from productos"));
	
	cerrarConexion($link);
	
	return $results;
	
}

function crearRegistro($nombre,$descripcion,$precio,$direccion,$email){
		

	$link = conectarseDb();
	
	$nombre = mysqli_real_escape_string($link, $nombre);
	$descripcion = mysqli_real_escape_string($link, $descripcion);
	$precio = mysqli_real_escape_string($link, $precio);
	$direccion = mysqli_real_escape_string($link, $direccion);
	$email = mysqli_real_escape_string($link, $email);
			
	if($result = mysqli_query($link, "insert into productos(nombre,email,descripcion,precio,direccion) values ('$nombre','$email','$descripcion','$precio','$direccion')"));
	
	cerrarConexion($link);
	
	return $result;
}


function cerrarConexion($link){
	mysqli_close($link);
}


?>