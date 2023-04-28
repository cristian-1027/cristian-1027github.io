<?php 


$cedula=$_REQUEST['cedula_usu'];
$contrasena=$_REQUEST['password_usu'];
$fecha_actual = getdate();
$fecha=$fecha_actual['mday']."/".$fecha_actual['mon']."/".$fecha_actual['year'];
$rol=$_REQUEST['cargo_usu'];

//echo $cedula.$contrasena.$fecha.$rol;

$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");

$query=(" SELECT * FROM empleado WHERE estado_emp=true AND cedula_emp=$cedula");
$query2=(" SELECT * FROM usuario WHERE cedula_emp=$cedula");
$consulta=pg_query($dbconn3,$query);
$consulta2=pg_query($dbconn3,$query2);
$EmpCantidad=pg_num_rows($consulta);
$UsuCantidad2=pg_num_rows($consulta2);
echo $EmpCantidad.$UsuCantidad2;

if ($EmpCantidad==0) {
  //header("Location: http://localhost/Proyecto%20Final/MIPF/Php/usuario/2_crearusuario.html");  
  $var = "EL EMPLEADO NO SE ENCUENTRA REGISTRADO EN LA BASE DE DATOS";
  echo "<script> 
  alert('".$var."'); 
  window.history.back();
  </script>";
  
  //echo ('ing1');
}elseif($UsuCantidad2==1) {
  $var = "EL EMPLEADO YA TIENE UN USUARIO";
  echo "<script> 
  alert('".$var."'); 
  window.history.back();
  </script>";
  
}else{
  
//elseif($EmpCantidad==1 && $UsuCantidad==0) {
  $query=("INSERT INTO usuario(cedula_emp,contrasena_usu,fechacreacion_usu,cargo_usu)
        VALUES ('$cedula','$contrasena','$fecha','$rol');");
   
  $crear=pg_query($dbconn3,$query);
  $var = "Usuario creado con exito";
  echo "<script> 
  alert('".$var."');
  window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/usuario/1.1_usuActivos.php';
   </script>";
}

?>