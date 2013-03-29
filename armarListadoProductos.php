<?php
    
    include ('funciones.php' );

		$productos = dameProductos();

		while ($row=mysqli_fetch_assoc($productos)){
		$nombre = $row['nombre'];	
		$descripcion = $row['descripcion'];
		$precio= $row['precio'];
		$email = $row['email'];
		$direccion = $row['direccion'];
		
		echo "<div class='reserva'>".
		"<div class='tabs_txt'>".$nombre."</div>".
				"<div class='tabs_txt'>".$descripcion."</div>".
						"<div class='tabs_txt'>".$precio."</div>".
								"<div class='tabs_txt'>".$email."</div>".
									"<div class='tabs_txt'>".$direccion."</div>".
									"<li class='tabs_borrar' onclick='borrarElemento(".$nombre.")'><a href='#'alt='borrar reserva'>borrar</a></li>"."</div>";									
									
									}
									?>