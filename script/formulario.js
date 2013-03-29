/**
 * @author Positivo
 */
var ruta = "/workspace/avellanedaCompras/";


function cargarProducto(){
	
   var params = Form.serialize('formAltaProductos');
   params = params + "&accion=crear";
   var url   = ruta + "armarListadoProductos.php";
   var ajax = new Ajax.Updater('listado',url,
    	                                            {
        	                                        method:"GET",
            	                                    parameters:params													    
                	                                }
                                        );
}


function dameReservas () {
	
   var params = "accion=listado";
   var url   = ruta + "armarListadoProductos.php";
   var ajax = new Ajax.Updater('listado',url,
    	                                            {
        	                                        method:"GET",
            	                                    parameters:params													    
                	                                }
                                        ); 
}
