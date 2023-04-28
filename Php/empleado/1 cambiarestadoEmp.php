<?php


$dbconnX = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");


if(isset($_GET['desactivar']) && isset($_GET['usuario'])) {

    $usuario = $_GET['usuario'];
    $update=pg_update($dbconnX, 'empleado', ['estado_emp' => false], ['cedula_emp' => $usuario]);

}
if(isset($_GET['activar']) && isset($_GET['usuario'])) {

    $usuario = $_GET['usuario'];
    $update=pg_update($dbconnX, 'empleado', ['estado_emp' => true], ['cedula_emp' => $usuario]);

}

?>