<?php

    require_once '../setup.php';
    require_once '../database/conexion.php';
    

//Si la sesion esta iniciada reenvia al usuario a la pagina principal
if(!empty($_SESSION) ){
    header("Location: ".BASE_URL);
    die();
}

    if(isset($_POST["login"])){
        //FORMULARIO HA SIDO ENVIADO
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        //Validamos
    if(empty($username)){
        $errors["username"]["empty"] = "Debes introducir un nombre de usuario";
        $username = null;
    }

    if(empty($password)){
        $errors["password"]["empty"] = "Debes introducir una contraseña";
        $password = null;
    }

    if(empty($error)){
        //Hemos recibido los datos
        //Haremos una consulta a la BASE DE DATOS
        //Consi
        $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

        $login = mysqli_query($db, $sql);

        if($login && mysqli_num_rows($login) == 1){
            $usuario = mysqli_fetch_assoc($login);
            
            if(password_verify($password,$usuario["password"])){

                //Creo una sesión de usuario
                $_SESSION['userdata'] = $usuario;
                header("Location:http://localhost/project/");
            }else{
                $errors["login"]["password"] = "La contraseña no es correcta";
            }
        }else{
            $errors["login"]["username"] = "El usuario no es correcto";
        }
    }


}


require_once "login.view.php";

?>
