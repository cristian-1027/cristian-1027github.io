<?php


$dbconnX = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");


if(isset($_GET['desactivar']) && isset($_GET['usuario'])) {

    $usuario = $_GET['usuario'];
    $update=pg_update($dbconnX, 'reporte', ['estado_reporte' => false], ['id_reporte' => $usuario]);

}
if(isset($_GET['activar']) && isset($_GET['usuario'])) {

    $usuario = $_GET['usuario'];
    $update=pg_update($dbconnX, 'reporte', ['estado_reporte' => true], ['id_reporte' => $usuario]);

}

?>