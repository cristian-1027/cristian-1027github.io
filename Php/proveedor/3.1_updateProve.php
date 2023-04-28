<?php


if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) &&  isset($_REQUEST['telefono']) &&  isset($_REQUEST['ciudad']) &&  isset($_REQUEST['direccion'])) {
    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $telefono=$_REQUEST['telefono'];
    $ciudad=$_REQUEST['ciudad'];
    $direccion=$_REQUEST['direccion'];
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
    if ($id==null) {
        
        $var = "ACTUALIZACION FALLIDA";
        echo "<script> 
        alert('".$var."'); 
        window.location.href = '../../php/proveedor/1.1.1_proveedorActivosS.php';
        </script>";
    }
    else{

    $update=pg_update($dbconn3, 'proveedor', ['id_prove' => $id, 'descripcion_prove'=>$nombre, 'telefono_prove'=>$telefono, 'ciudad_prove'=>$ciudad, 'direccion_prove'=>$direccion, ], ['id_prove' => $id]);
    $var = "PROVEEDOR ACTUALIZADO";
    echo "<script> 
    alert('".$var."'); 
    window.location.href = '../../php/proveedor/1.1.1_proveedorActivosS.php';
    </script>";     
}
}


?>