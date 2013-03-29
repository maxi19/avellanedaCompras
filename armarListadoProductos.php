<?php
    
    include ("funciones.php");
	
	
		if (isset($_GET['accion'])) {
			if ($_GET['accion']=="crear") {
				
				$nombre = $_GET['nombre'];
				$descripcion = $_GET['descripcion'];
				$precio = $_GET['precio'];
				$direccion=$_GET['direccion'];
				$email = $_GET['email'];
				
				crearRegistro($nombre,$descripcion,$precio,$direccion,$email);
				
			} 
		} 
		
		$productos = dameProductos();
	
		?>
		<table  class='table table-hover'>
		<?php

		while ($row=mysqli_fetch_assoc($productos)){
		$nombre = $row['nombre'];	
		$descripcion = $row['descripcion'];
		$precio= $row['precio'];
		$email = $row['email'];
		$direccion = $row['direccion'];
		
		echo "<tr>".
		"<td>".$nombre."</td>".
				"<td>".$descripcion."</td>".
						"<td>".$precio."</td>".
								"<td>".$email."</td>".
									"<td>".$direccion."</td></tr>";						
									
									}
									?>
		</table>							