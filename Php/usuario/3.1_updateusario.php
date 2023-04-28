<?php
/*
$cedula = $_REQUEST['cedula'];
$cargo = $_REQUEST['cargo_usu'];

echo $cedula;
echo $cargo;
*/

if(isset($_REQUEST['cedula'])  &&  isset($_REQUEST['cargo_usu'])) {
    $cedula=$_REQUEST['cedula'];
    $cargo=$_REQUEST['cargo_usu'];
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
    if ($cedula==null) {
        echo "mal registro";
        header("Location: http://localhost/Proyecto%20Final/MIPF/Php/usuario/3_updateusaurio.php");
        exit;
    }
    else{
    $update=pg_update($dbconn3, 'usuario', ['cedula_emp' => $cedula, 'cargo_usu' => $cargo], ['cedula_emp' => $cedula]);
    header("Location: http://localhost/Proyecto%20Final/MIPF/Php/usuario/1.1_usuActivos.php");
    exit;
}
}

?>