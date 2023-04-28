function captura(){

//alert('prueba12345');
    var uno = document.getElementById('id').value;

    alert (uno);
 
    var frame = $('#frame');
    var url = 'http://localhost/Proyecto%20Final/MIPF/php/usuario/1.1_usuActivos.php';
    frame.attr('src', url).show();
    
}

function navigate() {
    document.getElementById("frameConteo").src
        = "https://www.geeksforgeeks.org/";
}

function loadPageConteoAuxiliarB() {

    var text = 'CONTEO';
    var uno = document.getElementById('titulo_pagina');
    uno.innerText = text;

    var frame = $('#frame');
    var url = 'http://localhost/proyecto%20final/MIPF/php/conteo/conteo.php';
    frame.attr('src', url).show();
}

function volver() {
    window.history.back();
 }