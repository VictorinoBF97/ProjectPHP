<?php 
    require_once 'database/conexion.php';
    require_once 'setup.php';
    require_once 'includes/header.php';
?>

 if( password_verify( $password,$password_segura)){
     $_SESSION['userdata'] = $usuario;
     
 }

<!--Body-->
<h1>Página Principal</h1>
<!--End Body -->

<?php 
require_once 'includes/footer.php';
?>