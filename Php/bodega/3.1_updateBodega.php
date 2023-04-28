<?php


if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) &&  isset($_REQUEST['telefono']) &&  isset($_REQUEST['ciudad']) &&  isset($_REQUEST['direccion'])) {
    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $telefono=$_REQUEST['telefono'];
    $ciudad=$_REQUEST['ciudad'];
    $direccion=$_REQUEST['direccion'];
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
    $update=pg_update($dbconn3, 'zona', ['id_zona' => $id, 'nombrebodega_zona'=>$nombre, 'telefono_zona'=>$telefono, 'ciudad_zona'=>$ciudad, 'direccion_zona'=>$direccion, ], ['id_zona' => $id]);

    header("Location: http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1_bodegaActivos.php");
}



?>