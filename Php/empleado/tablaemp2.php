<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
	<title>Proyecta Bit - Listado de fotos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="http://localhost/Proyecto%20Final/MIPF/Imagenes/lodosoftware.png">

		
	<link rel="stylesheet" href="http://localhost/proyecto%20final/MIPF/CSS/cssB/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/proyecto%20final/MIPF/CSS/cssB/dataTables.bootstrap4.min.css">

	<!--CSS-->
	<link rel="stylesheet" href="http://localhost/proyecto%20final/MIPF/CSS/cssB/custom.css">


</head>

<body>

	<div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Listado de Registro</h1>
			<div class="col-lg-12">
				<a class="btn btn-success btn-sm float-right" type="button" href="index.html">Registrar Empleado</a><br><br>
				<div class="row">
					<div class="card-body pad table-responsive">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="tabla" class="table table-striped table-hover table-bordered" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>CEDULA</th>
												<th>NOMBRE </th>
												<th>APELLIDO       </th>
												<th>TELEFONO</th>
												<th>CORREO</th>
												<th>FECHA NACIMIENTO</th>
												<th>ESTADO</th>
												<TH>OPCIONES</TH>

											
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="modalfoto">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">VISUALIZAR FOTO</h4>
				</div>
				<div class="modal-body">
					<div id="verfotomodal"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> Cerrar</button>
				</div>
			</div>
		</div>
	</div>


	<script src="http://localhost/proyecto%20final/MIPF/JS/jsB/jquery.min.js"></script>
	<script src="http://localhost/proyecto%20final/MIPF/JS/jsB/bootstrap.min.js"></script>
	<script src="http://localhost/proyecto%20final/MIPF/JS/jsB/jquery.datatables.min.js"></script>
	<script src="http://localhost/proyecto%20final/MIPF/JS/jsB/dataTables.bootstrap4.min.js"></script>
	<script src="http://localhost/proyecto%20final/MIPF/js/lista.js"></script>

</body>
</html>
 
      