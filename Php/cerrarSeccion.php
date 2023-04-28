<?php   
//destruir la seccion
session_start();
session_destroy();

//redirigir a la pagina de login
header("Location: http://localhost/Proyecto%20Final/MIPF");
exit();
?>