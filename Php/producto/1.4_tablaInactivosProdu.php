
<?php

$data['data'] = false;
	require_once('0 conection.php');
	$sql = 'SELECT * FROM producto INNER JOIN marca ON producto.id_marca=marca.id_marca 
	INNER JOIN presentacion ON producto.id_presentacion=presentacion.id_presentacion
	INNER JOIN proveedor ON producto.id_prove=proveedor.id_prove
	INNER JOIN zona ON producto.id_zona=zona.id_zona
	WHERE estado_produ = false;';
	
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	foreach ($alumnos as $alumno) {
		
		$dni = $alumno->id_producto;
		$nombre = $alumno->nombre_produ;
		$iva = $alumno->iva_produ;
		$precio = $alumno->precio_produ;
		$stock = $alumno->stock_produ;
		$marca = $alumno->nombre_marca;
		$presentacion = $alumno->descripcion;
		$proveedor = $alumno->descripcion_prove;
		$bodega = $alumno->nombrebodega_zona;



		
		
		$data['data'][] = array($dni, $nombre,$iva,$precio,$stock,$marca,$presentacion,$proveedor,$bodega);
	}
	echo json_encode($data);
	exit;



?>
