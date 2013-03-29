/**
 * @author Positivo
 */
var ruta = "/workspace/ecliptico/";


function cargarProducto(){
	
   var params = Form.serialize('formularioProductos')
   var url   = ruta+"armarListado.php";
   var ajax = new Ajax.Updater('listaReservas',url,
    	                                            {
        	                                        method:"GET",
            	                                    parameters:params													    
                	                                }
                                        );
}

