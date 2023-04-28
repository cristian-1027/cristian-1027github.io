<?php
require_once("3.1_updateProdu.php");
$conex = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$usuario = $_GET['usuario'];
$query = "SELECT * FROM producto INNER JOIN marca ON producto.id_marca=marca.id_marca 
                                 INNER JOIN presentacion ON producto.id_presentacion=presentacion.id_presentacion
                                 INNER JOIN proveedor ON producto.id_prove=proveedor.id_prove
                                 INNER JOIN zona ON producto.id_zona=zona.id_zona
                                 WHERE id_producto = $usuario";
$usuario_rs = pg_query($conex, $query);
$data = pg_fetch_object($usuario_rs);



?>
<!DOCTYPE html>
<html>
    <head >
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Productos</title>
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/d43f4bbf1e.js" crossorigin="anonymous"></script>
       
       <script src="../../JS/java.js"></script>
       <link rel="stylesheet" href="http://localhost/Proyecto%20Final/MIPF/css/style_modiprodu.css">

    </head>

   <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h2>Actualizar Producto</h2>    



                <form action="" method="post" target="mainframe" >
                   <table class="tabla" > 
                    <tr>
                        <th>ID</th> 
                        <td><input type="number" readonly name='id' value="<?=$data->id_producto;?>"></td>
                        <th>NOMBRE</th>
                        <th><input type="text" name="nombre" value="<?=$data->nombre_produ;?>" ></th>
                        <th>IVA = <?=$data->iva_produ;?>%</th>
                        <th><select name="iva">
                                <option value="<?=$data->iva_produ;?>">--<?=$data->iva_produ;?>%--</option>
                                <option value="19">19%</option>
                                <option value="5">5%</option>
                                <option value="0">Exento</option>
                        </select></th>
                    </tr>

                    
                     <tr>
                        <th>PRECIO</th>
                        <th><input type="text" name="precio" value="<?=$data->precio_produ;?>" ></th>
                        <th>STOCK</th>
                        <th><input type="number" name="stock" value="<?=$data->stock_produ;?>" ></th>
                        <th>PRESENTACION</th>
                        <th><select type="number" name="presentacion">
                            <option value="<?=$data->id_presentacion;?>">--<?=$data->descripcion;?>--</option>
                            <option value="1">Unidad</option>
                            <option value="2">Kilogramo</option>
                            <option value="3">gramo</option>
                            <option value="4">metro</option>
                            <option value="5">centimetro</option>
                            <option value="6">Litro</option>
                            <option value="7">Galon</option>
                        </select></th>
                    </tr>  
                    <tr>  
                        <th>BODEGA</th>
                        <td><select name="bodega">
                            <option value="<?=$data->id_zona;?>">-<?=$data->nombrebodega_zona;?>--</option>
                            <option value="1">Local Principal</option>
                            <option value="2">Bodega PasoNivel</option>
                            <option value="3">Bodega Estacion</option>
                        </select></td>
                    </tr>
                                     
                    </table>
                    <br>
        <Button class="submit" type="submit" name="bt1">ACTUALIZAR</Button>
        <Button class="submit" type="button" name="bt2" onclick="volver()">VOLVER</Button>
        <!--<a href="http://localhost/Proyecto%20Final/MIPF/php/producto/1.1.1_productosActivosJF.php">
        <input class="submit" type="button" value="Volver"></a>-->
        </form> 
        </section>
        
        </div>      
        </div>
        </div>   
      </body>
        
</html>