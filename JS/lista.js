//tabla de reportes Inactivos VENDEDOR
$(document).ready(function() {
	$('#reporteInactivosJF').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: "Productos Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		{
			title: "Productos Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			download: 'open',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
	], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"../../php/reporte/1.4_tablaInactivosReporteJF.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][6] = 
			   '<form id="visualizarReporte" class="form1" action="3_visualizarReporte.php?usuario='+json.data[i][0]+' "method="post" target="_self"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-eye"></i></button></form>' 
			   
			   
			
			}
			
			return json.data;
		  }
		}
	  });
	});




//tabla de reportes activos VENDEDOR
$(document).ready(function() {
	$('#reporteActivosJF').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: "Productos Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		{
			title: "Productos Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			download: 'open',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
	], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"../../php/reporte/1.2_tablaActivosReporte.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][6] = 
			   '<form id="visualizarReporte" class="form1" action="3_visualizarReporte.php?usuario='+json.data[i][0]+' "method="post" target="_self"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-eye"></i></button></form>' 
			   +
			   '<form id="reporteActivos_desactivar" action="?desactivar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="desactivarReporte(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				
			
			}
			
			return json.data;
		  }
		}
	  });
	});


//tabla de reportes activos VENDEDOR
$(document).ready(function() {
	$('#reporteActivos').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: "Productos Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		{
			title: "Productos Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			download: 'open',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
	], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"../../php/reporte/1.2_tablaActivosReporte.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][6] = 
			   '<form id="visualizarReporte" class="form1" action="3_visualizarReporte.php?usuario='+json.data[i][0]+' "method="post" target="_self"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-eye"></i></button></form>' 
			}
			
			return json.data;
		  }
		}
	  });
	});

//tabla marcas////
$(document).ready(function() {
	$('#marca').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Marcas ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1]
				}
			},
			{
				title: "Marcas",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1]
				}
			},
			/*{
				title: "Marcas ",
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},*/
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"../../php/marca/1.2_tablaActivosMarca.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][2] = 
			   '<form id="marca_modificar" class="form1" action="3_modificarMarca.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   ;
			   
			}
			return json.data;
		  }
		}
	  });
	});




//tabla Bodegas Activos////
$(document).ready(function() {
	$('#bodegaActivos').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Bodega Activas ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			{
				title: "Bodegas Activas",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			/*{
				title: "Bodegas Activas ",
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},*/
		], "destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/bodega/1.2_tablaActivosBodega.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][5] = 
			   '<form id="bodegaActivos_modificar" class="form1" action="3_modificarBodega.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   +
				'<form id="bodegaActivos_desactivar" action="?desactivar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="desactivarBodega(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			return json.data;
		  }
		}
	  });
	});


//tabla Bodegas Inactivas////
$(document).ready(function() {
	$('#bodegaInactivos').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Bodegas Inactivas",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			{
				title: "Bodegas Inactivas",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			/*{
				title: "Bodegas Inactivas ",
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},*/
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/bodega/1.4_tablaInactivosBodega.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][5] = 
			   '<form id="bodegaActivos_modificar" class="form1" action="3_modificarBodega.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   +
				'<form id="bodegaActivos_activar" action="?activar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="activarBodega(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			return json.data;
		  }
		}
	  });
	});




//tabla Proveedores Activos////
$(document).ready(function() {
	$('#proveActivos').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: "Proveedores Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4]
			}
		},
		{
			title: "Proveedores Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			download: 'open',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4]
			}
		},
		
	], 

		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"../../php/proveedor/1.2_tablaActivosProve.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][5] = 
			   '<form id="proveActivos_modificar" class="form1" action="3_modificarProve.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   +
				'<form id="produActivos_desactivar" action="?desactivar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="desactivarProveedor(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			return json.data;
		  }
		}
	  });
	});


//tabla Proveedores Inactivos////
$(document).ready(function() {
	$('#proveInactivos').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Provedor Inactivos ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4]
				}
			},
			{
				title: "Proveedor Inactivos ",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4]
				}
			},
			/*{
				title: "Proveedor Inactivos ",
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},*/
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/proveedor/1.4_tablaInactivosProve.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][5] = 
			   '<form id="proveActivos_modificar" class="form1" action="3_modificarProve.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   +
				'<form id="produActivos_activar" action="?activar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="activarProveedor(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			return json.data;
		  }
		}
	  });
	});

	//tabla Productos Activos Auxiliar de Bodega////
$(document).ready(function() {
	$('#produActivosAuxiliarB').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Productos Activos ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			{
				title: "Productos Activos ",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			/*{
				title: "Productos Activos ",
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},*/
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/producto/1.2_tablaActivosProdu.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][9] = 
			   '<form id="usuActivos_conteo" class="form1" action="4_conteoProdu.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-file-lines"></i></button></form>' 
			   ;
			   
			}
			return json.data;
		  }
		}
	  });
	});



//tabla Productos Activos JEFE DE BODEGA////
$(document).ready(function() {
	$('#produActivosJF').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Productos Activos ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			{
				title: "Productos Activos ",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/producto/1.2_tablaActivosProdu.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][9] = 
			   '<form id="produActivos_modificar" class="form1" action="3_modificarProdu.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   	;
			   
			}
			return json.data;
		  }
		}
	  });
	});


//tabla Productos Inactivos SECRETARIA////
$(document).ready(function() {
	$('#produInactivosS').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Productos Inactivos ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			{
				title: "Productos Inactivos ",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/producto/1.4_tablaInactivosProdu.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][9] = 
			   '<form id="produInactivos_modificar" class="form1" action="3.2_modificarProduS.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   ;
			   
			}
			return json.data;
		  }
		}
	  });
	});

//tabla Productos Activos SECRETARIA////
$(document).ready(function() {
	$('#produActivosS').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: "Productos Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5,6,7,8]
			}
		},
		{
			title: "Productos Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			download: 'open',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5,6,7,8]
			}
		},
		/*{
			title: "Productos Activos ",
			extend:    'print',
			text:      '<i class="fa fa-print"></i> ',
			titleAttr: 'Imprimir',
			className: 'btn btn-info',
			exportOptions: {
				columns: [ 0,1,2,3,4,5,6,7,8]
			}
		},*/
	], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"../../php/producto/1.2_tablaActivosProdu.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][9] = 
			   '<form id="produActivos_modificar" class="form1" action="3.2_modificarProduS.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			  ;
			   
			}
			
			return json.data;
		  }
		}
	  });
	});
	


//tabla Productos Activos////
$(document).ready(function() {
	$('#produActivos').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: "Productos Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5,6,7,8]
			}
		},
		{
			title: "Productos Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			download: 'open',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5,6,7,8]
			}
		},
		/*{
			title: "Productos Activos ",
			extend:    'print',
			text:      '<i class="fa fa-print"></i> ',
			titleAttr: 'Imprimir',
			className: 'btn btn-info',
			exportOptions: {
				columns: [ 0,1,2,3,4,5,6,7,8]
			}
		},*/
	], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/producto/1.2_tablaActivosProdu.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][9] = 
			   '<form id="produActivos_modificar" class="form1" action="3_modificarProdu.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   +
			   '<form id="usuActivos_conteo" class="form1" action="4_conteoProdu.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-calculator"></i></button></form>' 
				+
				'<form id="produActivos_desactivar" action="?desactivar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="desactivarProducto(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			
			return json.data;
		  }
		}
	  });
	});



	//tabla Productos Inactivos////
$(document).ready(function() {
	$('#produInactivos').dataTable( {
		"dom": 'Bfrtilp', 
		buttons:[ 
			{
				title: "Productos Inactivos ",
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			{
				title: "Productos Inactivos ",
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				download: 'open',
					  exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},
			/*{
				title: "Productos Inactivos ",
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				exportOptions: {
					columns: [ 0,1,2,3,4,5,6,7,8]
				}
			},*/
		], 
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/producto/1.4_tablaInactivosProdu.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][9] = 
			   '<form id="produInactivos_modificar" class="form1" action="3_modificarProdu.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
			   +
			   '<form id="produActivos_conteo" class="form1" action="4_conteoProdu.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-calculator"></i></button></form>' 
				+
				'<form id="produInactivos_activar" action="?activar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="activarProducto(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			return json.data;
		  }
		}
	  });
	});












//tabla Usuarios Inactivos////
$(document).ready(function() {
	$('#usuInactivos').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 		
		{
			title: "Usuarios Inactivos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2]
			}
		},
		{
			title: "Usuarios Inactivos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			className: 'btn btn-danger',
			download: 'open',
				  exportOptions: {
				columns: [ 0,1,2]
			}
		},
		/*{
			extend:    'print',
			text:      '<i class="fa fa-print"></i> ',
			titleAttr: 'Imprimir',
			className: 'btn btn-info',
			title: "Usuarios Inactivos ",
			//messageTop: "Título de mi PDF ", //Coloca el título dentro del PDF,
			exportOptions: {
				columns: [ 0,1,2]
			}
		},*/
	],
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/usuario/1.4_tablaInactivos.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
				
						
	
			   json.data[i][3] = 
			   '<form id="usuInactivos_modificar" class="form1" action="3_modificarusuario.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
				+
				'<form id="usuInactivos_activar" action="?activar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="activarUsuario(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
				
			   
			}
			return json.data;
		  }
		}
	  });
	});




//tabla Usuarios Activos////
$(document).ready(function() {
	$('#usuActivos').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 		
		{
			title: "Usuarios Activos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2]
			}
		},
		{
			title: "Usuarios Activos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			className: 'btn btn-danger',
			download: 'open',
				  exportOptions: {
				columns: [ 0,1,2]
			}
		},
		/*{
			extend:    'print',
			text:      '<i class="fa fa-print"></i> ',
			titleAttr: 'Imprimir',
			className: 'btn btn-info',
			title: "Usuarios Activos ",
			//messageTop: "Título de mi PDF ", //Coloca el título dentro del PDF,
			exportOptions: {
				columns: [ 0,1,2]
			}
		},*/
	],
		"destroy": true,
		"processing": true,
		"ajax": {
		"url":"1.2_tablaActivos.php",
		
		"dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
			   json.data[i][3] = 
			   '<form id="usuActivos_modificar" class="form1" action="3_modificarusuario.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
				+
				'<form id="usuActivos_desactivar" action="?desactivar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="desactivarUsuario(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
				
							   
			}
			return json.data;
		  }
		}
	  });
	});






//tabla empleados activo////
$(document).ready(function() {
$('#EmpActivos').dataTable( {
	"dom": 'Bfrtilp', 
	buttons:[ 
		{
			title: 'Ferreteria Central Vale NIT:24.852.268-1 Cel:310.394.7287 PALESTINA-CALDAS CORREGIMIENTO DE ARAUCA Cra 4 # 9 - 14 Empleados Activos',
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		{
			title: 'Ferreteria Central Vale NIT:24.852.268-1 ',
			messagetop:'NIT:24.852.268-1',
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			className: 'btn btn-danger',
			download: 'open',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		/*{
			//title: "Empleados Activos ",
			title: " Ferreteria Central Vale",
			extend:    'print',
			text:      '<i class="fa fa-print"></i> ',
			titleAttr: 'Imprimir',
			className: 'btn btn-info',
			download: 'open',
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},*/
	], 
	"destroy": true,
	"processing": true,
	"ajax": {
	  "url":"http://localhost/proyecto%20final/MIPF/php/empleado/1.2 tablaActivos.php",
	  "dataSrc": function ( json ) {
		for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
			
     		   
	    json.data[i][6] = 
		   '<form id="EmpActivos_modificar" class="form1" action="3_modificaremp.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
		    +
			'<form id="EmpActivos_desactivar" action="?desactivar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="desactivarEmpleado(this)"></div></label><button type="submit" style="display: none;"></button></form>'
			;
        }
		return json.data;
	  }
	}
  });
});


//tabla emppleados Inactivos////
$(document).ready(function() {
	$('#EmpInactivos').dataTable( {
		"dom": 'Bfrtilp', 
	buttons:[ 
		
		{
			title: "Empleados Inactivos ",
			extend:    'excelHtml5',
			text:      '<i class="fas fa-file-excel"></i> ',
			titleAttr: 'Exportar a Excel',
			className: 'btn btn-success',
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		{
			title: "Empleados Inactivos ",
			extend:    'pdfHtml5',
			text:      '<i class="fas fa-file-pdf"></i> ',
			titleAttr: 'Exportar a PDF',
			className: 'btn btn-danger',
				  exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},
		/*{
			extend:    'print',
			text:      '<i class="fa fa-print"></i> ',
			titleAttr: 'Imprimir',
			className: 'btn btn-info',
			title: "Empleados Inactivos ",
			//messageTop: "Título de mi PDF ", //Coloca el título dentro del PDF,
			exportOptions: {
				columns: [ 0,1,2,3,4,5]
			}
		},*/
	],
		"destroy": true,
		"processing": true,
		"ajax": {
		  "url":"http://localhost/proyecto%20final/MIPF/php/empleado/1.4 tablaInactivos.php",
		  "dataSrc": function ( json ) {
			for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
	
				
	
			   json.data[i][6] = 
			   '<form id="EmpInactivos_modificar" class="form1" action="3_modificaremp.php?usuario='+json.data[i][0]+' "method="post"><button class="btn btn-sm btn-primary" type="submit" style="cursor: pointer;"><i class="fa-solid fa-pencil"></i></button></form>' 
				+
				'<form id="EmpInactivos_desactivar" action="?activar=1&usuario='+json.data[i][0]+' "method="post" target="mainframe"><label class="switch"><input type="checkbox" id="estado" name="estado"><div class="slider round" onclick="activarEmpelado(this)"></div></label><button type="submit" style="display: none;"></button></form>'
				;
			   
			}
			return json.data;
		  }
		}
	  });
	});












function recuperarDatosFormulario() {
	let registro = {
	  codigo: $('#Codigo').val(),
	  descripcion: $('#Descripcion').val(),
	  precio: $('#Precio').val()
	};
	return registro;
  }

function modificarRegistro(registro) {
	$.ajax({
	  type: 'POST',
	  url: 'datos.php?accion=modificar&codigo=' + registro.codigo,
	  data: registro,
	  success: function(msg) {
		tabla1.ajax.reload();
	  },
	  error: function() {
		alert("Hay un problema");
	  }
	});
  }




function verfoto(foto){
	$("#verfotomodal").html("");
	$('#modalfoto').modal('show');
	$("#verfotomodal").append('<img src="foto/'+foto+'" class="img-responsive" style="width: 100%;">');
}



