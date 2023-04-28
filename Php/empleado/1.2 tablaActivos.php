
<?php

$data['data'] = false;
	require_once('0 conection.php');
	$sql = 'SELECT * FROM empleado  WHERE estado_emp = true;';
	
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	foreach ($alumnos as $alumno) {
		
		$dni = $alumno->cedula_emp;
		$nombre = $alumno->nombre_emp;
		$apellido = $alumno->apellido_emp;
		$correo = $alumno->correo_emp;
		$telefono = $alumno->telefono_emp;
		$direccion = $alumno->dirreccion_emp;
		$correo = $alumno->correo_emp;
		$fecha = $alumno->fechanacim_emp;
		$cargo = $alumno->cargo_emp;
		$sexo = $alumno->sexo_emp;
		
		$data['data'][] = array($dni, $nombre, $apellido,$telefono,$correo,$fecha);
	}
	echo json_encode($data);
	exit;



?>
