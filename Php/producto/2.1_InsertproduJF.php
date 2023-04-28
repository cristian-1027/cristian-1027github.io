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
 
$query=(" SELECT * FROM producto WHERE estado_produ=true AND id_producto=$id");

$consulta=pg_query($dbconn3,$query);
$cantidad=pg_num_rows($consulta);
//echo $cantidad;


if ($cantidad>0) {
  //header("Location: http://localhost/Proyecto%20Final/MIPF/Php/usuario/2_crearusuario.html");  
  $var = "EL PRODUCTO YA SE ENCUENTRA REGISTRADO EN LA BASE DE DATOS";
  echo "<script> 
  alert('".$var."'); 
  window.location.href = 'Location: http://localhost/Proyecto%20Final/MIPF/Php/producto/2_crearproduJF.html';
  </script>";
    
}elseif( $cantidad==0){


    $query=("INSERT INTO producto(id_producto, nombre_produ,precio_produ, stock_produ, iva_produ,id_presentacion, id_zona,id_marca,id_prove)
    VALUES ('$id','$nombre','$precio','$stock','$iva','$presentacion','$zona','$marca','$proveedor')");
      

    //$query=("INSERT INTO producto(id_producto, id_marca, id_presentacion, id_prove, id_zona, nombre_produ, precio_produ, stok_produ, iva_produ)
    //VALUES ('$id','$marca',,'$proveedor','$zona','$nombre',$precio,$stock,$iva)");
   

    $crear=pg_query($dbconn3,$query);
    $var = "Producto creado con exito";
    echo "<script> 
    alert('".$var."');
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/producto/1.1.1_productosActivosJF.php';
    </script>";
    
};

    
?>