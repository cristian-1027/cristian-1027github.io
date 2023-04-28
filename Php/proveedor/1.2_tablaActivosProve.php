
<?php

$data['data'] = false;
	require_once('0_conection.php');
	$sql = 'SELECT * FROM proveedor WHERE estado_prove = true;';
	
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	foreach ($alumnos as $alumno) {
		
		$id = $alumno->id_prove;
		$nombre = $alumno->descripcion_prove;
		$telefono = $alumno->telefono_prove;
		$ciudad = $alumno->ciudad_prove;
		$dirrecion = $alumno->direccion_prove;

	
				
		
		$data['data'][] = array($id, $nombre,$telefono,$ciudad,$dirrecion);
	}
	echo json_encode($data);
	exit;



?>
