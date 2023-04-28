<?php


$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$stock=$_REQUEST['stock'];
$observacion=$_REQUEST['observacion'];
$stockEnc=$_REQUEST['stockEnc'];
$fecha_actual = getdate();
$fecha=$fecha_actual['mday']."/".$fecha_actual['mon']."/".$fecha_actual['year'];



if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && 
   isset($_REQUEST['stock']) && isset($_REQUEST['stockEnc']) && isset($_REQUEST['observacion'])) {

$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
$query=("INSERT INTO reporte( id_producto, nombre_produ, stock_produ, stock_reporte, 
                                observacion_reporte,horafecha_reporte)
	        VALUES ('$id','$nombre','$stock','$stockEnc','$observacion','$fecha');");
  
  $crear=pg_query($dbconn3,$query);
  $var = "Reporte creado con exito";
  echo "<script> 
  alert('".$var."');
  window.location.href = '../../php/producto/1.1.3_productosActivosAuxiliarB.php';
   </script>";


            
}
   
   
   
?>