<?php
require_once("ConexionProdu.php");
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
       
       <script src="http://localhost/Proyecto%20Final/MIPF/js/javascript.js"></script>
       <link rel="stylesheet" href="http://localhost/Proyecto%20Final/MIPF/css/style_Conteo.css">

    </head>

   <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h2>CONTEO DE PRODUCTO</h2>    



                <form action="" method="post" target="mainframe" >
                   <table class="tabla" > 
                    <tr>
                        <th>ID</th> 
                        <td><input type="number" readonly name='id' value="<?=$data->id_producto;?>" required></td>
                    </tr>
                    <tr><th>NOMBRE</th>
                        <td><input type="text" readonly name='id' value="<?=$data->nombre_produ;?>"></td>
                    </tr>
                    <tr>    <th>STOCK</th>
                        <th><input type="number" readonly name="stock" value="<?=$data->stock_produ;?>" ></th>
                            
                    </tr>

                                                        
                    </table>
                    <br>
        <Button class="submit" type="submit" name="bt1">ACTUALIZAR</Button>
        <td><button class="submit" type="button" onclick="volver()">VOLVER</button> </td>

        </form> 
        </section>
        
        </div>      
        </div>
        </div>   
      </body>
        
</html>