<?php

session_start();
$salt = "|#€7`¬23ads4ook12";
$saltCookie = "|@#57e+ç´|@#d";
//coniguracion de acceso a la db
$usuario="root";
$host="localhost";
$password="AAbb00";

//configuracion de tablas y de la db
$database="avellaneda";
$tablaUsuarios="usuario";
$tablaReservas="usuarios";
$tablaComentarios="comentarios";
	
    function conectaseDb() {
    	
	global $host;
	global $usuario;
	global $password;
	
	global $database;
	global $tablaUsuarios;
	global $tablaReservas;
	global $tablaComentarios;
		 
        if (!($link = new mysqli($host, $usuario, $password,$database))) { 
            echo "Error conectando al servidor de base de datos."; 
            exit(); 
        }
       	return $link; 
    }




	function dameProductos(){
		
		
		
		
		
		
	}






?>