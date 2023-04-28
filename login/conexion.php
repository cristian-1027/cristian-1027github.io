<?php
session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['password'];

$prueba=1;

$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$query=(" SELECT * FROM usuario WHERE estado_usu=true AND cedula_emp=$usuario AND contrasena_usu='$clave' ");

$consulta=pg_query($dbconn3,$query);
$obj=pg_fetch_object($consulta);
$cantidad=pg_num_rows($consulta);
$muestra =$obj->cargo_usu;
$cedulaUsu= $obj->cedula_emp;

//echo $muestra;
//echo $cantidad;

if($cantidad>0){
 
  
    if($muestra == 'Administrador'){
        header('Location: http://localhost/proyecto%20final/MIPF/php/mainAdmin.html');
        exit();
       
     }elseif ($muestra == 'Jefe de Bodega'){
        header('Location: http://localhost/proyecto%20final/MIPF/php/mainJefeBodega.html');
        exit();
     }elseif($muestra == 'Auxiliar de Bodega'){
        header('Location: http://localhost/proyecto%20final/MIPF/php/mainAuxiliarB.html');
        exit();
     }elseif ($muestra == 'Secretaria'){
        header('Location: http://localhost/proyecto%20final/MIPF/php/mainSecretaria.html');
        exit();
     }elseif ($muestra == 'Vendedor'){
        header('Location: http://localhost/proyecto%20final/MIPF/php/mainVendedor.html');
        exit();
     } 
    
}
elseif ($cantidad==0) {
	header('Location:http://localhost/proyecto%20final/MIPF');
}
     
?>