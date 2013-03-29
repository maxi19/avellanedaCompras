<?php
	require ("funciones.php");

	$productos = dameProductos();
	
		while ($row=mysqli_fetch_assoc($productos)){ 
		$nombre = $row['nombre'];	
		$email = $row['email'];
		$direccion = $row['direccion'];
		$descripcion = $row['descripcion'];
		$precio = $row['precio'];
		
		echo "<div class='reserva'>".
		"<div class='tabs_txt'>".$nombre."</div>".
				"<div class='tabs_txt'>".$email."</div>".
						"<div class='tabs_txt'>".$direccion."</div>".
								"<div class='tabs_txt'>".$descripcion."</div>".
									"<div class='tabs_txt'>".$precio."</div>".		
										"<li class='tabs_borrar' onclick='borrarElemento(".$nombre.")'><a href='#'alt='borrar reserva'>borrar</a></li>".		
		"</div>";
	
	
		}
	

?>