<?php
require_once("3.1_updateemp.php");
$conex = pg_connect("host=localhost port=5432 dbname=Inventario user=postgres password=cristian1027");
$usuario = $_GET['usuario'];
$query = "SELECT * FROM empleado WHERE cedula_emp = $usuario";
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
             
        <script type="text/javascript" src="http://localhost/Proyecto%20Final/MIPF/js/javascript.js"></script>
    
       <link rel="stylesheet" href="http://localhost/Proyecto%20Final/MIPF/css/style_modiusu.css">

    </head>

   <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h2>Actualizar Empleado</h2>    

                <form action="" id="Form-Actualizar" method="post" target="mainframe" >
                   <table class="tabla"> 
                    <tr>
                        <th>CEDULA</th>
                        <th>NOMBRE </th>
                        <th>APELLIDO       </th>
                        <th>TELEFONO</th>
                    </tr>
                    <tr>
                        <th><input type="number" name="cedula" readonly value="<?=$data->cedula_emp;?>"></th>
                        <th><input type="text" name="nombre" value="<?=$data->nombre_emp;?>" ></th>
                        <th><input type="text" name="apellido" value="<?=$data->apellido_emp;?>"></th>
                        <th><input type="number" name="telefono" value="<?=$data->telefono_emp;?>" ></th>
                    </tr>
                    <tr>
                        <th>DIRECCION</th>
                        <th>FECHA NACIMIENTO</th>
                        <th>CORREO</th>
                        <th>SEXO</th>

                    </tr>
                    <tr>
                        
                        <th><input type="text" name="direccion" value="<?=$data->dirreccion_emp;?>"></th>
                        <th><input type="date" name="fechanacim" value="<?=$data->fechanacim_emp;?>" ></th>
                        <th><input type="mail" name="correo" value="<?=$data->correo_emp;?>"></th>
                        <th>
                        <select name="sexo" id="sexo"  >
                        <option value="<?=$data->sexo_emp;?>">--<?=$data->sexo_emp;?>--</option>
                        <option value="Masculino">Masculino</option>    
                        <option value="Femenino">Femenino</option>
                        </select></p></th>

                    </tr>
                    </table>
        </form> 
        <Button class="submit" type="Button" name="bt1" onclick="submitform()">ACTUALIZAR</Button>
        <Button class="submit" type="Button" name="bt2" onclick="volver()">VOLVER</Button>
       
        </section>
        
        </div>      
        </div>
        </div>   
      </body>
        
</html>