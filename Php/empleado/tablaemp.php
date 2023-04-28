<!DOCTYPE html>
<html> 
    <head >
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <title>LISTA DE EMPLEADOS</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/d43f4bbf1e.js" crossorigin="anonymous"></script>

       <link rel="stylesheet" href="http://localhost/Proyecto%20Final/MIPF/css/style_emp.css">
       <script src="http://localhost/Proyecto%20Final/MIPF/js/javascript.js"></script>

    </head>
    
    <body>
    <br>
        <nav>
            <center><div id='search-box'>
                <form id='search-form'>
                    <input id="searchTerm" placeholder="Buscar" type="text" onkeyup="doSearch()" autocomplete="off"/>
                </form>
            </div></center>
        </nav>


        <section id="section">
            <div id="imprimir" class="print">
                    <p>
                        <center><table id="tablausuarios" class="visualemp" border="1px">
                            <thead> <tr>
                                <th>#</th>
                                <th>CEDULA</th>
                                <th>NOMBRE </th>
                                <th>APELLIDO       </th>
                                <th>TELEFONO</th>
                                <th>DIRECCION</th>
                                <th>FECHA NACIMIENTO</th>
                                <th>CORREO</th>
                                <th>SEXO</th>
                                <th><button class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></button></th>
                            </tr></thead>
          <?php require 'conexionemp.php';
            while($obj=pg_fetch_object($consulta)){?>
          <tbody>  
            <tr> 
               
                <td><?php echo $obj->cedula_emp ?></td>   
                <td><?php echo $obj->nombre_emp ?></td>
                <td><?php echo $obj->apellido_emp ?></a></td>
                <td><?php echo $obj->telefono_emp?></td>
                <td><?php echo $obj->dirreccion_emp?></td>  
                <td><?php echo $obj->fechanacim_emp?></td>   
                <td><?php echo $obj->correo_emp ?></td>
                <td><?php echo $obj->sexo_emp ?></a></td>
                <td>
                    <form action="modificaremp.php?usuario=<?=$obj->cedula_emp;?>" method="post">
                        <button class="btnupdate" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button>
                    </form>
                </td>
            </tr>
              <?php }?>
            <tr class='noSearch hide'>
              <td colspan="5"></td>
           </tr>
        </tbody>

        <table></center>
        </p>
        </div>
    </section>  
    
    <footer>
        <div id="botonera">
        <table class="botonera">
            <tr>
                <th>
                    <div><button class="botons" onclick="imprSelec()">Imprimir</button></div>
                </th>
                <th></th>
                <th>
                    <div><button class="botons" onclick="loadPageCrearEmp()">Crear Usuario</button></div>
                </th>
            </tr>
        </table>
        </div>
    </footer>

</body>
</html>