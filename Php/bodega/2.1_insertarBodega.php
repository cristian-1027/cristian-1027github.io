<?php 

$id=$_REQUEST['id_bodega'];
$nombre=$_REQUEST['nombre_bodega'];
$telefono=$_REQUEST['telefono_bodega'];
$direccion=$_REQUEST['direccion_bodega'];
$ciudad=$_REQUEST['ciudad_bodega'];

/*echo "id:",$id,"nombre:",$nombre,"telefono:",$telefono,"direccion:",$direccion,"ciudad:",$ciudad;*/



$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");

if($id==null){

   header("Location: http://localhost/Proyecto%20Final/MIPF/Php/bodega/2_crearBodega.html");
   exit;

}else{
 
   /* $query=("INSERT INTO zona(	id_zona, nombrebodega_zona)
   VALUES ('$id','$nombre');");*/
	  
 $query=("INSERT INTO zona(	id_zona, nombrebodega_zona, ciudad_zona, direccion_zona, telefono_zona)
	        VALUES ('$id','$nombre','$ciudad','$direccion','$telefono');");

        
   
    $crear=pg_query($dbconn3,$query);
    print "Registro Exitoso";
    header("Location: http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1_bodegaActivos.php");

};

?>