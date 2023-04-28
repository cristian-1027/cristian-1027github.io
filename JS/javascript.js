



$(document).ready(function(){
    $("#cedula_usu").blur(function(){
      var Ced=document.getElementById('cedula_usu').value;
      //alert (Ced);
          
});
});


function imprSelec() {


    var ficha = document.getElementById('section');
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write("<p><img src='http://localhost/Proyecto%20Final/MIPF/Imagenes/Logo.jpeg' width='150' height='100' float: left /> </p>");
    ventimp.document.write("<center><h1>LISTADO DE USUARIOS</h1></center>");
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}

function reset() {
    document.getElementById('crear').reset();
}









//////////////// FUNCION DE PAGINA MAIN /////////////////////////////////


function loadPageReportesJF() {

    var text = 'REPORTES';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/proyecto%20final/MIPF/php/reporte/1.1_reporteActivosJF.php';
    frame.attr('src', url).show();
}

function loadPageReportes() {

    var text = 'REPORTES';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/proyecto%20final/MIPF/php/reporte/1.1_reporteActivos.php';
    frame.attr('src', url).show();
}

function loadPageMarca() {

    var text = 'LISTA DE MARCAS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/marca/1.1_marcaActivos.php';
    frame.attr('src', url).show();
}

function loadPageMarcaS() {

    var text = 'LISTA DE MARCAS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/marca/1.1.1_marcaActivosS.php';
    frame.attr('src', url).show();
}


function loadPageConteo() {

    var text = 'CONTEO DE PRODUCTOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/conteo/conteo.html';
    frame.attr('src', url).show();
}


// Cargar Pagina de Bodegas en el iframe
function loadPageBodega(){

    //alert ('pagina prove');
    
        var text = 'LISTA DE BODEGAS';
        var uno = document.getElementById('titulo_pagina');
        uno.innerText = text;
    
        var frame = $('#frame');
        var url = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1_bodegaActivos.php';
        frame.attr('src', url).show();
        
    }

    // Cargar Pagina de Bodegas en el iframe SECRETARIA
function loadPageBodegaS(){

    //alert ('pagina prove');
    
        var text = 'LISTA DE BODEGAS';
        var uno = document.getElementById('titulo_pagina');
        uno.innerText = text;
    
        var frame = $('#frame');
        var url = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1.1_bodegaActivosS.php';
        frame.attr('src', url).show();
        
    }

        // Cargar Pagina de Bodegas en el iframe AB
function loadPageBodegaAuxiliarB(){

    //alert ('pagina prove');
    
        var text = 'LISTA DE BODEGAS';
        var uno = document.getElementById('titulo_pagina');
        uno.innerText = text;
    
        var frame = $('#frame');
        var url = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1.2_bodegaActivosAB.php';
         frame.attr('src', url).show();                             
       
    }

// Cargar Pagina de proveedor en el iframe
function loadPageProve(){

//alert ('pagina prove');

    var text = 'LISTA DE PROVEEDORES';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/Php/proveedor/1.1_proveedorActivos.php';
    frame.attr('src', url).show();
    
}


// Cargar Pagina de proveedor en el iframe SECRETARIA
function loadPageProveS(){

    //alert ('pagina prove');
    
        var text = 'LISTA DE PROVEEDORES';
        var uno = document.getElementById('titulo_pagina');
        uno.innerText = text;
    
        var frame = $('#frame');
        var url = 'http://localhost/Proyecto%20Final/MIPF/Php/proveedor/1.1.1_proveedorActivosS.php';
        frame.attr('src', url).show();
        
    }



// Cargar Pagina de usuarios en el iframe
function loadPageUsu() {

    var text = 'LISTA DE USUARIOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/usuario/1.1_usuActivos.php';
    frame.attr('src', url).show();
}


// Cargar Pagina de empleado en el iframe
function loadPageEmp() {

    var text = 'LISTA DE EMPLEADOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/proyecto%20final/MIPF/php/empleado/1.1 EmpActivos.php';
    frame.attr('src', url).show();
}

// Cargar Pagina de empleado activos SECRETARIA en el iframe
function loadPageEmpS() {
        
    var text = 'LISTA DE EMPLEADOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/proyecto%20final/MIPF/php/empleado/1.1.1_EmpActivosS.php';
    frame.attr('src', url).show();
}


// Cargar Pagina de Producto en el iframe
function loadPagePro() {

    var text = 'LISTA DE PRODUCTOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/Php/producto/1.1_productosActivos.php';
    frame.attr('src', url).show();
}

// Cargar Pagina de Producto en el iframe JEFE DE BODEGA
function loadPageProJF() {

    var text = 'LISTA DE PRODUCTOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/producto/1.1.1_productosActivosJF.php';
    frame.attr('src', url).show();
}

// Cargar Pagina de Producto en el iframe VENDEDOR
function loadPageProV() {

    var text = 'LISTA DE PRODUCTOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/producto/1.1.2_productosActivosVendedor.php';
    frame.attr('src', url).show();
}

// Cargar Pagina de Producto en el iframe SECRETARIA
function loadPageProduS() {
         
    var text = 'LISTA DE PRODUCTOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/proyecto%20final/MIPF/php/producto/1.1.4_productosActivosS.php';
    frame.attr('src', url).show();
}



// Cargar Pagina de Producto en el iframe AUXILIAR DE BODEGA
function loadPageProAuxiliarB() {

    var text = 'LISTA DE PRODUCTOS';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/producto/1.1.3_productosActivosAuxiliarB.php';
    frame.attr('src', url).show();
}


//Botonera de Redes
function btnFacebook(){
    window.location.href ="https://www.facebook.com/ferreteria.centralvale?mibextid=ZbWKwL";
}
function btnInstagram(){
    window.location.href ="https://instagram.com/ferreteriacentralvale?igshid=ZDdkNTZiNTM=";
}


//funcion para salir
function prueba3() {
    document.cerrar.submit();
    //window.location.href = "http://localhost/Proyecto%20Final/MIPF";
}

/////////////////////////////////////////FIN MAIN//////////////////////////////////////////////////////





//////////////// FUNCION DE PAGINA PRODUCTOS /////////////////////////////////


//redirecionar a la pagina de productos
function crearProducto() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/producto/2_crearprodu.html';
}

//redirecionar a la pagina de productos
function crearProductoJF() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/producto/2_crearproduJF.html';
}

//Cambiar estado de productos
//activar producto
function activarProducto(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}
//desativar producto
function desactivarProducto(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}

//Funcion para impirmir pagina de producto
function imprimirProductos(){
     print();
}

//se redireciona a la pagina productos activos e inativos
function loadPageProduInativos() {
         
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/producto/1.3_productosInactivos.php';

}
function loadPageProduActivos() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/producto/1.1_productosActivos.php';
}

function loadPageProduInativosS()  {
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/producto/1.3.4_productosInactivosS.php';
}

function loadPageProduActivosS() {
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/producto/1.1.4_productosActivosS.php';
}



/////////////////////////////////////////FIN Productos//////////////////////////////////////////////////////




//////////////// FUNCION DE PAGINA USUARIOS /////////////////////////////////
//verificar usuario no repetido
function veriusu() {
    var cedula = document.getElementById("cedula_usu").value;
    var password = document.getElementById("password_usu").value;
    var cargo = document.getElementById("cargo_usu").value;

    if (cedula == "" && password == "" && cargo == "0") {
        alert('Digite la cedula ,Contrsaeña y elija un rol');
    }
    else {

        if (cedula == "") {
            alert('Digeta la cedula');
        } else if (password == "") {
            alert('Digeta la contraseña');
        } else if (cargo == 0) {
            alert('selecione un rol');
        }
        else {
            document.crearusuario.submit(ingresar());
        }
    }
}


//imprimir la tabla de usuarios activos e inactivos
function imprimirUsuarios(){
    print();
}

//Cambiar estado de usuario
//activar usuario
function activarUsuario(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}
//desativar usuario
function desactivarUsuario(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}

// Pagina usuarios Inactivos
function loadPageUsuInativos() {

    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/usuario/1.3_usuInactivos.php';
}


// Pagina usuarios Activos
function loadPageUsuActivos() {
            window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/usuario/1.1_usuActivos.php';
}

//enviar formular de actualizacion de Usuario
function submitformUsu(){
    //alert("Usuario Actualizado");
    document.getElementById('Form-ActualizarUsu').submit();
  }



/////////////////////////////////////////FIN USUARIO//////////////////////////////////////////////////////







//////////////// FUNCION DE PAGINA EMPLEADOS /////////////////////////////////

//redirecionar a la pagina para crear un empleado
function crearEmpleado() {
    window.location.href ="http://localhost/proyecto%20final/MIPF/php/empleado/2_crearemp.html";
}

//imprimir la tabla de empleados activos e inactivos

//redirecionar a la pagina de crear usuario
function crearUsuario() {
    window.location.href = "http://localhost/Proyecto%20Final/MIPF/Php/usuario/2_crearusuario.html";
}
function imprimirEmpActivos(){
    print();
}
function imprimirEmpInactivos(){
    print();
}

// Boton de volver a la pagina anterior
function volver() {
   window.history.back();
}

function volver1() {
    alert ('hola123');
 }

/// Cargar Pagina de empleados Activos e Inactivos
function loadPageEmpActivos(){
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/empleado/1.1 EmpActivos.php';
}
function loadPageEmpInativos(){
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/empleado/1.3 EmpInactivos.php';
}


/// Cargar Pagina de empleados Activos e Inactivos SECRETARIA
function loadPageEmpActivosS(){
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/empleado/1.1.1_EmpActivosS.php';
}
function loadPageEmpInativosS(){
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/empleado/1.3.1_EmpInactivosS.php';
}

//Cambiar estado de Empleado
//activar Empleado
function activarEmpelado(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}
//desativar Empleado
function desactivarEmpleado(elem, id) {
    
    elem.parentElement.parentElement.querySelector("button").click()
}

//enviar formular de actualizacion de empleados
function submitform(){
    document.getElementById('Form-Actualizar').submit();
  }
/////////////////////////////////////////FIN EMPLEADO//////////////////////////////////////////////////////




//////////////// FUNCION DE PAGINA PROVEEDORES /////////////////////////////////

//Funcion para impirmir pagina de proveedores
function imprimirProveedores(){
    print();
    }

//redirecionar a la pagina de crear proveedor
function crearProveedor() {
    window.location.href = "http://localhost/Proyecto%20Final/MIPF/Php/proveedor/2_crearProveedor.html";
}


//se redireciona a la pagina proveedor activos e inativos
function loadPageProveActivos(){
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/proveedor/1.1_proveedorActivos.php';
}

function loadPageProveInativos() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/proveedor/1.3_proveedorInactivos.php';
}

//se redireciona a la pagina proveedor activos e inativos SECRETARIA
function loadPageProveActivosS(){
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/proveedor/1.1.1_proveedorActivosS.php';
}
function loadPageProveInativosS() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/proveedor/1.3.1_proveedorInactivosS.php';
}

//Cambiar estado de Proveedor
//activar Proveedor
function activarProveedor(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}
//desativar Proveedor
function desactivarProveedor(elem, id) {
    
    elem.parentElement.parentElement.querySelector("button").click()
}
    


/////////////////////////////////////////FIN PROVEEDOR//////////////////////////////////////////////////////



//////////////// FUNCION DE PAGINA BODEGA /////////////////////////////////

//redirecionar a la pagina de crear proveedor
function RegistrarBodega(){
    window.location.href = "http://localhost/Proyecto%20Final/MIPF/Php/bodega/2_crearBodega.html";
}



//Funcion para impirmir pagina de proveedores
function imprimirBodega(){
    print();
}

//redirecionar a la pagina de crear proveedor
function crearBodega() {
    window.location.href = "http://localhost/Proyecto%20Final/MIPF/Php/bodega/2_crearBodega.html";
}


//se redireciona a la pagina productos activos e inativos
function loadPageBodegaActivos(){
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1_bodegaActivos.php';
}

function loadPageBodegaInativos() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.3_bodegaInactivos.php';
}

//se redireciona a la pagina productos activos e inativos SECRETARIA
function loadPageBodegaActivosS(){
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.1.1_bodegaActivosS.php';
}

function loadPageBodegaInativosS() {
    window.location.href = 'http://localhost/Proyecto%20Final/MIPF/Php/bodega/1.3.1_bodegaInactivosS.php';
}

//Cambiar estado de Proveedor
//activar Bodega
function activarBodega(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}
//desativar Bodega
function desactivarBodega(elem, id) {
    
    elem.parentElement.parentElement.querySelector("button").click()
}

/////////////////////////////////////////FIN PROVEEDOR//////////////////////////////////////////////////////


function crearMarca() {
    window.location.href = '../../Php/marca/2_crearMarca.html';
}


//Cambiar estado de Proveedor
//activar reporte
function activarReporte(elem, id) {
    elem.parentElement.parentElement.querySelector("button").click()
}
//desativar reporte
function desactivarReporte(elem, id) {
    
    elem.parentElement.parentElement.querySelector("button").click()
}



function loadPageReporteInactivos() {
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/reporte/1.3%20reporteInactivos.php';
}

function loadPageReporteActivos() {
    window.location.href = 'http://localhost/proyecto%20final/MIPF/php/reporte/1.1_reporteActivosJF.php';
}