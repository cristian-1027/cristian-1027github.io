<?php
$conex = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$usuario = $_GET['usuario'];
$query = "SELECT * FROM reporte WHERE id_reporte = $usuario";
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
       
       <script src="../../JS/javascript.js"></script>
       <link rel="stylesheet" href="../../CSS/style_Conteo.css">

    </head>

   <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h2>REPORTE DE PRODUCTOS</h2>    



                <form action="" method="post" target="mainframe" >
                   <table id="Reporte" class="tabla" > 
                    <tr>
                        <th>ID</th> 
                        <td><input class="id" type="number" readonly id="id" name='id' value="<?=$data->id_producto;?>"></td>
                        <th>NOMBRE</th>
                        <td><input type="text" readonly id="nombre" name='nombre' value="<?=$data->nombre_produ;?>"></td>
                    </tr>
                    <tr>
                        <th>STOCK SISTEMA</th>
                        <td><input type="number" readonly id="stock" name="stock" value="<?=$data->stock_produ;?>" ></td>
                        <th>STOCK ENCONTRADO</th>
                        <td><input type="number" readonly name="stockEnc" id="stockEnc" value="<?=$data->stock_reporte;?>"  ></td>
                      
                    </tr>
                    <tr>
                        <th>OBSERVACIONES</th>
                    </tr>
                    <tr>
                        <td colspan="4"><textarea name="observacion" id="observacion" cols="40" rows="7" readonly><?=$data->observacion_reporte;?></textarea></td>
                    </tr>
                   
                    
                                                                            
                    </table>
                    <br>
        <button class="submit" type="button" onclick="volver()">VOLVER</button>

        </form> 
        </section>
        
        </div>      
        </div>
        </div>   
      </body>
        
</html>