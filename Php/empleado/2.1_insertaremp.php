<?php 
$cedula=$_REQUEST['cedula_usu'];
$nombre=$_REQUEST['nombre_emp'];
$apellido = $_REQUEST['apellido_emp'];
$telefono=$_REQUEST['telefono_emp'];
$direccion=$_REQUEST['direccion_emp'];
$fecha=$_REQUEST['fechanacim_emp'];
$correo=$_REQUEST['correo_emp'];
$sexo=$_REQUEST['sexo_emp'];


if (isset($cedula) && isset($nombre) && isset($apellido) && isset($telefono)
      && isset($direccion) && isset($fecha) && isset($correo) && isset($sexo)) {
   
 $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");

$query=(" SELECT * FROM empleado WHERE estado_emp=true AND cedula_emp=$cedula");

$consulta=pg_query($dbconn3,$query);
$cantidad=pg_num_rows($consulta);
//echo $cantidad;

if ($cantidad>0) {
   $var = "LA CEDULA YA ENCUENTRA REGISTRADO EN LA BASE DE DATOS";
   echo "<script> 
   alert('".$var."'); 
   window.history.back();
   </script>";
 }
 else{
 $query=("INSERT INTO empleado(cedula_emp,nombre_emp,apellido_emp,telefono_emp,dirreccion_emp,fechanacim_emp,correo_emp,sexo_emp)
          VALUES ('$cedula','$nombre','$apellido','$telefono','$direccion','$fecha','$correo','$sexo');");
   $crear=pg_query($dbconn3,$query);
   $var = "REGISTRO EXITOSO";
   echo "<script> 
   alert('".$var."'); 
   window.location.href = '../../Php/empleado/1.1.1_EmpActivosS.php';
   </script>";
 }
}

?>