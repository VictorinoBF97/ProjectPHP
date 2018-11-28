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
        //Consulta para comprobar las credenciales del usuario
        $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

        $login = mysqli_query($db, $sql);

        if($login && mysqli_num_rows($login) == 1){
            $usuario = mysqli_fetch_assoc($login);
            
            //Comprobar la contraseña
            if(password_verify($password,$usuario["password"]) ){

                //Guardar login
                guardarLogin($db,$username,'OK');

                //Utilizar una sesión para guardar los datos del usuario logueado
                $_SESSION['usuario'] = $usuario;
                header("Location:  ".BASE_URL);

            }else{

                //Guardar login
                guardarLogin($db,$username,'FAULT');

                //Si algo falla al enviar una sesión con el fallo
                $errors["login"]["password"] = "La contraseña no es correcta";
            }
        }else{
            guardarLogin
            $errors["login"]["data"] = "Los datosno son correctos";
        }
    }
}


require_once "login.view.php";

?>
