/**
 * @author Positivo
 */
var ruta = "/workspace/avellanedaCompras/";


function cargarProducto(){
	
   var params = Form.serialize('formularioProductos');
   params = params + "&accion=cargar";
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
   alert(url);
   var ajax = new Ajax.Updater('table table-hover',url,
    	                                            {
        	                                        method:"GET",
            	                                    parameters:params													    
                	                                }
                                        ); 
}
