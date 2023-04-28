<?php


if(isset($_REQUEST['cedula']) && isset($_REQUEST['nombre']) &&  isset($_REQUEST['apellido']) 
    && isset($_REQUEST['telefono']) && isset($_REQUEST['direccion']) &&  isset($_REQUEST['correo'])
    && isset($_REQUEST['sexo']) && isset($_REQUEST['fechanacim'])) {

    $cedula=$_REQUEST['cedula'];
    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $telefono=$_REQUEST['telefono'];
    $direccion=$_REQUEST['direccion'];
    $correo=$_REQUEST['correo'];
    $sexo=$_REQUEST['sexo'];
    $fechanacim=$_REQUEST['fechanacim'];
    
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
   
    if ($cedula==null) {
        
        $var = "ACTUALIZACION FALLIDA";
        echo "<script> 
        alert('".$var."'); 
        window.location.href = '../../Php/empleado/3.1_updateemp.php';
        </script>";
    }
    else{

        
    $update=pg_update($dbconn3, 'empleado', [
    'cedula_emp' => $cedula, 'nombre_emp' => $nombre,'apellido_emp' => $apellido,
    'telefono_emp'=>$telefono, 'dirreccion_emp'=>$direccion, 
    'fechanacim_emp'=>$fechanacim , 'correo_emp' => $correo, 'sexo_emp' => $sexo ], ['cedula_emp' => $cedula]);
       
    $var = "REGISTRO ACTUALIZADO";
    echo "<script> 
    alert('".$var."'); 
    window.location.href = '../../php/empleado/1.1.1_EmpActivosS.php';
    </script>";
}
    }

?>