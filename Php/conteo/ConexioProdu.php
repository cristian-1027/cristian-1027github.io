<?php


   if(isset($_REQUEST['id']) && isset($_REQUEST['stock'])) {

    $id=$_REQUEST['id'];
    //$nombre=$_REQUEST['nombre'];
    $stock=$_REQUEST['stock'];
   
    
    $dbconn3 = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
    
    $query="UPDATE producto SET stock_produ=$stock WHERE id_producto = '$id' ";

    $actualizar=pg_query($dbconn3,$query);

/*
UPDATE public.producto
SET id_producto=?, id_marca=?, id_presentacion=?, id_prove=?, id_zona=?, nombre_produ=?, precio_produ=?, stock_produ=?, iva_produ=?, estado_produ=?, img_produ=?
WHERE <condition>;


    /*$update=pg_update($dbconn3, 'producto', ['id_presentacion'=>$presentacion, 
                                             'nombre_produ'=>$nombre,
                                             'iva_produ'=>$iva,
                                             'precio_produ'=>$precio
                                            ],['id_producto' => $id]);
	*/
    //$update=pg_update($dbconn3, 'producto', ['precio_produ'=>$precio,'id_presentacion'=>$presentacion,'nombre_produ'=>$nombre, 'stock_produ'=>$stock],['id_producto' => $id]);
	//'id_zona'=>$bodega, 'precio_produ'=>$precio, 'stok_produ'=>$stock, 'iva_produ'=>$iva],['id_producto' => $id]);
	
    //header("Location: http://localhost/Proyecto%20Final/MIPF/Php/producto/1.1.1_productosActivosJF.php");
                    
    
   
   
    }
   
?>