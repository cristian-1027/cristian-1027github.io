<?php
require_once("1 cambiarestadoEmp.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="http://localhost/Proyecto%20Final/MIPF/Imagenes/lodosoftware.png">
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css"/>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"  referrerpolicy="no-referrer"/>
    
    <link type="text/css" rel="stylesheet" href="http://localhost/Proyecto%20Final/MIPF/css/styleEmpInactivo.css">
    <script type="text/javascript" src="http://localhost/Proyecto%20Final/MIPF/js/javascript.js"></script>
    
    <title>Empleados</title>


  </head>
  <body>
    
    <h1 class="text-center mt-3">INACTIVOS</h1>
    <div class="container my-5">
      <div class="row">
        <table id="EmpInactivos" class="table table-striped" style="width: 100%">
          
          <thead>
            <tr>         
												<th>CEDULA</th>
												<th>NOMBRE </th>
												<th>APELLIDO       </th>
												<th>TELEFONO</th>
												<th>CORREO</th>
												<th>FECHA NACIMIENTO</th>
                        <th id="EmpInactivosS_opciones">OPCIONES</th>
												
            </tr>
          </thead>
          <tbody id="table_users"></tbody>
        </table>
      </div>

      <div id="footer" class="footer">
        <div id="botonera" name="botonera">
            <table class="botonera">
                <tr>
                    <th>
                        <div><button class="botons" onclick="loadPageEmpActivosS()">Empleados Activos</button></div>
                    </th>
                    
                </tr>
            </table>
        </div>
    </div>



    </div>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- DataTable -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js" ></script>
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/proyecto%20final/MIPF/js/lista.js"></script>
  </body>
</html>
