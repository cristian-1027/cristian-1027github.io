
<?php

$data['data'] = false;
	require_once('../conexion.php');
	$sql = 'SELECT * FROM reporte  WHERE estado_reporte = true;';
	
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	foreach ($alumnos as $alumno) {
		
		$id2 = $alumno->id_producto;
		$nombre = $alumno->nombre_produ;
		$stock = $alumno->stock_produ;
		$stockEnc = $alumno->stock_reporte;
		$observacion = $alumno->observacion_reporte;
		$fecha = $alumno->horafecha_reporte;
		$id = $alumno->id_reporte;
		
		$data['data'][] = array($id,$id2,$nombre,$stock,$stockEnc,$fecha);
	}
	echo json_encode($data);
	exit;



?>
