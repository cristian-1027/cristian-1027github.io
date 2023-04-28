<?php 

$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");

$query2="SELECT * FROM empleado ORDER BY cedula_emp ASC";

//$query2="SELECT * FROM usuario WHERE estado_usu = false ORDER BY cedula_emp ASC";

$consulta=pg_query($dbconn3,$query2);



?>