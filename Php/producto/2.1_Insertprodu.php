<?php

$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$iva=$_REQUEST['iva'];
$precio=$_REQUEST['precio'];
$stock=$_REQUEST['stock'];
$marca=$_REQUEST['marca'];
$presentacion=$_REQUEST['presentacion'];
$proveedor=$_REQUEST['proveedor'];
$zona=$_REQUEST['bodega'];

//echo "id:",$id,"nombre:",$nombre,"iva:",$iva,"precio:",$precio,"stock:",$stock,$marca,$presentacion,$proveedor,$zona;


$dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
 
if($id==null){

    echo "mal registro";
    header("Location: http://localhost/Proyecto%20Final/MIPF/Php/producto/2_crearprodu.html");
    exit;

}else{

    
         

    $query=("INSERT INTO producto(id_producto, id_marca, id_presentacion, id_prove, id_zona, nombre_produ, precio_produ, stok_produ, iva_produ)
    VALUES ('$id','$marca','$presentacion','$proveedor','$zona','$nombre','$precio','$stock','$iva')");
   

    $crear=pg_query($dbconn3,$query);
    print "Registro Exitoso";
    header("Location: http://localhost/Proyecto%20Final/MIPF/Php/producto/1.1_productosActivos.php");

};

    
?>