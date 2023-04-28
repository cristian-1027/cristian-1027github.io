<?php 

$id=$_REQUEST['id_prove'];
$nombre=$_REQUEST['nombre_prove'];
$telefono=$_REQUEST['telefono_prove'];
$direccion=$_REQUEST['direccion_prove'];
$ciudad=$_REQUEST['ciudad_prove'];

/*echo "id:",$id,"nombre:",$nombre,"telefono:",$telefono,"direccion:",$direccion,"ciudad:",$ciudad;*/

$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$query=(" SELECT * FROM proveedor WHERE id_prove=$id");
$consulta=pg_query($dbconn3,$query);
$cantidad=pg_num_rows($consulta);

//echo($cantidad);

if ($cantidad >= 1) {
 
   $var = "LA PROVEEDOR YA ENCUENTRA REGISTRADO EN LA BASE DE DATOS";
   echo "<script> 
   alert('".$var."'); 
   window.history.back();
   </script>";
 }
else{
   
   $query=("INSERT INTO proveedor ( id_prove, descripcion_prove, telefono_prove, ciudad_prove, direccion_prove)
             VALUES ('$id','$nombre','$telefono','$direccion','$ciudad');");
   
   $crear=pg_query($dbconn3,$query);
   $var = "REGISTRO EXITOSO";
   echo "<script> 
   alert('".$var."'); 
   window.location.href = '../../Php/proveedor/1.1.1_proveedorActivosS.php';
   </script>";

   
}


?>