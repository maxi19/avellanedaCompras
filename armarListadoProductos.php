<?php
    
    include ('funciones.php' );

		$productos = dameProductos();

		while ($row=mysqli_fetch_assoc($productos)){
		$nombre = $row['nombre'];	
		$descripcion = $row['descripcion'];
		$precio= $row['precio'];
		$email = $row['email'];
		$direccion = $row['direccion'];
		
		echo "<tr'>".
		"<td>".$nombre."</td>".
				"<td>".$descripcion."</td>".
						"<td>".$precio."</td>".
								"<td>".$email."</td>".
									"<td>".$direccion."</td></tr>";						
									
									}
									?>