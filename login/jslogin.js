
function verificar(){
    var cedula = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
    
    if(cedula=="" && password==""){
        alert ('Digite la cedula y Contrsaeña');
    }    
    else{
        
        if(cedula==""){
            alert ('Digeta la cedula');
        }else if(password==""){
            alert ('Digeta la contraseña');
        }else{
            //document.loginfor.submit();
            alert ('HOLA34');
            }
        }
    }


    $("loginfor").submit(function(evt){
        evt.preventDefault();
        $.ajax({
        //la url en la que esté tu php
        url  :"http://localhost/proyecto%20final/MIPF/login/conexion.php",
        //(aquí GET o POST)
        method :  "POST",
        data : {
          "nombreUsuario": $("#usuario").val(),
          "pass" : $("#password").val()
          }
        }).done(function(response){
          //Aquí te devuelve el OK o KO dependiendo de lo que hagas en PHP
          //En php recibes en este caso concreto $_POST['nombreUsuario'] y $_POST['pass']
        });
      });