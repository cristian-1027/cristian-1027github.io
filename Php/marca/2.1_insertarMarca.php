<?php 

$id=$_REQUEST['id_marca'];
$nombre=$_REQUEST['nombre_marca'];


/*echo "id:",$id,"nombre:",$nombre,"telefono:",$telefono,"direccion:",$direccion,"ciudad:",$ciudad;*/

$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");

if($id==null){

   $var = "LA MARCA YA ENCUENTRA REGISTRADO EN LA BASE DE DATOS";
   echo "<script> 
   alert('".$var."'); 
   window.history.back();
   </script>";

}else{
   
	  
  $query=("INSERT INTO marca ( id_marca, nombre_marca)
             VALUES ('$id','$nombre');");
   
    $crear=pg_query($dbconn3,$query);

   $var = "REGISTRO EXITOSO";
   echo "<script> 
   alert('".$var."'); 
   window.location.href = '../../Php/marca/1.1.1_marcaActivosS.php';
   </script>";

};

?>