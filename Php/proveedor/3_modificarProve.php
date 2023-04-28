<?php
require_once("3.1_updateProve.php");
$conex = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$usuario = $_GET['usuario'];
$query = "SELECT * FROM proveedor WHERE id_prove = $usuario";
$usuario_rs = pg_query($conex, $query);
$data = pg_fetch_object($usuario_rs);

?>
<!DOCTYPE html>
<html>
    <head >
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Modificar Usuarios</title>
       <link rel="shortcut icon" href="http://localhost/Proyecto%20Final/MIPF/Imagenes/lodosoftware.png">
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/d43f4bbf1e.js" crossorigin="anonymous"></script>
       
       <script src="../../JS/javascript.js" defer type="tex/javascript"></script>
       <script src="../../JS/java.js"></script>
       <link rel="stylesheet" href="../../CSS/style_modiusu.css">

    </head>

   <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h2>Actualizar Proveedor</h2>    



                <form action="" method="post" target="mainframe" >
                   <table class="tabla"> 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>TELEFONO</th>
                                <th>CIUDAD</th>
                                <th>DIRRECION</th>
						      </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="text" name="id" readonly value="<?=$data->id_prove;?>"></td>
                                <td><input type="text" name="nombre" value="<?=$data->descripcion_prove;?>"></td>
                                <td><input type="number" name="telefono" value="<?=$data->telefono_prove;?>"></td>
                                <td><input type="text" name="ciudad" value="<?=$data->ciudad_prove;?>"></td>
                                <td><input type="text" name="direccion" value="<?=$data->direccion_prove;?>"></td>
                                <td></td>
                               
                            </tr>
                        </tbody>
                    </table>
        <Button class="submit" type="submit" name="bt1">ACTUALIZAR</Button>
        <Button class="submit" type="Button" name="bt2" onclick="volver()">VOLVER</Button>
      
        </form> 
        </section>
        
        </div>      
        </div>
        </div>   
      </body>
        
</html>