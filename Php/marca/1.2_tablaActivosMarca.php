
<?php

$data['data'] = false;
	require_once('0_conection.php');
	$sql = 'SELECT * FROM marca ;';
	
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	foreach ($alumnos as $alumno) {
		
		$id = $alumno->id_marca;
		$nombre = $alumno->nombre_marca;
	
			
		
		$data['data'][] = array($id, $nombre);
	}
	echo json_encode($data);
	exit;



?>
