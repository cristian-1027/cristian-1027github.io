<?php
require_once("3.1_updateusario.php");
$conex = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$usuario = $_GET['usuario'];
$query = "SELECT * FROM usuario WHERE cedula_emp = $usuario";
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
       <link rel="shortcut icon" href="../../Imagenes/lodosoftware.png">
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/d43f4bbf1e.js" crossorigin="anonymous"></script>
       
       <script src="../../JS/javascript.js"></script>
       <link rel="stylesheet" href="../../CSS/style_modiusu.css">

    </head>

   <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h2>Actualizar Usuario</h2>    



                <form action="" id="Form-ActualizarUsu" method="post" target="mainframe" >
                   <table class="tabla"> 
                        <thead>
                            <tr>
                                <th>CEDULA</th>
                                <th>CARGO</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input id="cedula_Usu" readonly type="text" name="cedula" value="<?=$data->cedula_emp;?>"></td>
                                <td><select name="cargo_usu" id="cargo_usu">
                                    <option value="<?=$data->cargo_usu;?>">--<?=$data->cargo_usu;?>--</option>
                                    <option value="Administrador">Administrador</option>    
                                    <option value="Jefe de Bodega">Jefe de Bodega</option>
                                    <option value="Auxiliar de Bodega">Auxiliar de Bodega</option>
                                    <option value="Secretaria">Secretaria</option>
                                    <option value="Vendedor">Vendedor</option>
                                </select></td>
                            </tr>
                        </tbody>
                    </table>
     
        </form> 
        <Button class="submit" type="Button" name="bt1" onclick="submitformUsu()">ACTUALIZAR</Button>
        <Button class="submit" type="Button" name="bt2" onclick="volver()">VOLVER</Button>
       
       
        </section>
        </div>      
        </div>
        </div>   
      </body>

   
        
</html>