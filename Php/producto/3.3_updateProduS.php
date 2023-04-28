<?php


   if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) &&  isset($_REQUEST['iva'])
    && isset($_REQUEST['precio'])&& isset($_REQUEST['presentacion'])) {

    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $iva=$_REQUEST['iva'];
    $precio=$_REQUEST['precio'];
    //$stock=$_REQUEST['stock'];
    //$marca=$_REQUEST['marca'];
    $presentacion=$_REQUEST['presentacion'];
    //$proveedor=$_REQUEST['proveedor'];
    //$bodega=$_REQUEST['bodega'];
    
    
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
    if ($id==null) {
        
        $var = "ACTUALIZACION FALLIDA";
        echo "<script> 
        alert('".$var."'); 
        window.location.href = '../../php/producto/1.1.4_productosActivosS.php';
        </script>";
    }
    else{
        $query="UPDATE producto SET id_presentacion=$presentacion,nombre_produ='$nombre', precio_produ=$precio,iva_produ=$iva
        WHERE id_producto = '$id' ";
        $actualizar=pg_query($dbconn3,$query);

        $var = "REGISTRO ACTUALIZADO";
        echo "<script> 
        alert('".$var."'); 
        window.location.href = '../../php/producto/1.1.4_productosActivosS.php';
        </script>";
     
    }
}
   
?>