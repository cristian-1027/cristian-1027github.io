<?php


$dbconnX = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");

//$query2="SELECT current_date"; 
//$query2="SELECT * FROM usuario ORDER BY cedula_emp ASC ";
if(isset($_GET['desactivar']) && isset($_GET['usuario'])) {

    $usuario = $_GET['usuario'];
    $update=pg_update($dbconnX, 'producto', ['estado_produ' => false], ['id_producto' => $usuario]);

}
if(isset($_GET['activar']) && isset($_GET['usuario'])) {

    $usuario = $_GET['usuario'];
    $update=pg_update($dbconnX, 'producto', ['estado_produ' => true], ['id_producto' => $usuario]);

}

?>