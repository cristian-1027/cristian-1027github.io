<?php


if(isset($_REQUEST['id']) && isset($_REQUEST['nombre'])) {
    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
   
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
    if ($iod==null) {
        
        $var = "ACTUALIZACION FALLIDA";
        echo "<script> 
        alert('".$var."'); 
        window.history.back();
        </script>";
    }
    else{

        
    $update=pg_update($dbconn3, 'marca', ['id_marca' => $id, 'nombre_marca'=>$nombre ], ['id_marca' => $id]);
  
    $var = "MARCA ACTUALIZADA";
    echo "<script> 
    alert('".$var."'); 
    window.location.href = '../../Php/marca/1.1.1_marcaActivosS.php';
    </script>";
}

}



?>