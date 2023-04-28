
<?php

$data['data'] = false;
	require_once('0_conection.php');
	$sql = 'SELECT * FROM zona WHERE estado_zona = true;';
	
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	foreach ($alumnos as $alumno) {
		
		$id = $alumno->id_zona;
		$nombre = $alumno->nombrebodega_zona;
		$telefono = $alumno->telefono_zona;
		$ciudad = $alumno->ciudad_zona;
		$dirrecion = $alumno->direccion_zona;

	
				
		
		$data['data'][] = array($id, $nombre,$telefono,$ciudad,$dirrecion);
	}
	echo json_encode($data);
	exit;



?>
