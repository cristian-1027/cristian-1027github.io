
<?php
/*
require_once('../../login/conexion.php');
echo $prueba;
*/

$data['data'] = false;
	
	require_once('../conexion.php');
	$sql = 'SELECT * FROM usuario  WHERE estado_usu = true ;';
			
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    

		
	foreach ($alumnos as $alumno) {

		$dni = $alumno->cedula_emp;
		$contrasena = $alumno->contrasena_usu;
		$fecha = $alumno->fechacreacion_usu;
		$cargo = $alumno->cargo_usu;
			
		$data['data'][] = array($dni,$cargo,$fecha);
	}
	echo json_encode($data);
	exit;



?>
