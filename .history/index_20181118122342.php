<?php
require_once 'setup.php';
require_once 'database/conexion.php';
require_once 'includes/header.php'; 

//--------BODY-----------
if( password_verify( $password, $password_segura)){
    $_SESSION['userdata'] = $usuario;
    header("Location: http://localhost/superlists/");
}else{
    echo "Contraseña incorrecta";
}

//-------END BODY--------
require_once 'includes/footer.php';

?>