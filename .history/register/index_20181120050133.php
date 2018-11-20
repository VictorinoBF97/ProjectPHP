<?php
    
    require_once '../setup.php';
    require_once '../database/conexion.php';

    //Si la sesión esta iniciada reevnia al usuario a la página principal
    if(!empty($_SESSION) ){
        header("Location: ".BASE_URL);
        die();
    }

    if(isset($_POST['register'])){
    // Cargar datos del formulario
        $username = $_POST['username'] ?? null;
        $name = $_POST['name'] ?? null;
        $surname = $_POST['surname'] ?? null;
        $email = $_POST['email'] ?? null;
        $cuenta = $_POST['cuenta'] ?? null;
        $password = $_POST['password'] ?? null;
        $password_confirmation = $_POST['password_confirmation'] ?? null;

        //var_dump($_POST);
        
    $errores=[];

    //Validar los datos

            // username
            if ( empty($username) ){
                $errors['username']['empty'] = "Debes introducir un nombre de usuario";
                $username = null;
            }
    
            if(!preg_match('/^[a-z0-9]{8,}$/',$username)){
                $errores["username"]["format"] = "<div>
                No se cumple lo siguiente:
                                    <ul>
                                        <li>Debe de tener mínimo 8 caracteres.</li>
                                        <li>Solo se admiten números y letras minúsculas</li>
                                    <ul>
                </div>";
            }

            //name
            if ( empty($name) ){
                $errors['name']['empty'] = "Debes introducir un nombre obligatorio";
                $name = null;
            }

    
        
            // email
            if ( empty($email) ){
                $errors['email']['empty'] = "Debes introducir un email.";
                $email = null;
            }
            if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $errors['email']['format'] = "Debes introducir un email válido.";
                $email = null;
            }
        
            // password
            if ( empty($password) ){
                $errors['password']['empty'] = "Debes facilitar una contraseña.";
            }
        
            if ( strlen($password) < 6 ) {
                $errors['password']['length'] = "La contraseña debe tener al menos 6 caracteres.";
            }
            if ( empty($password_confirmation) ){
                $errors['passwordconfirmation']['empty'] = "Debes confirmar la contraseña.";
            }
            if ( $password != $password_confirmation ){
                $errors['password_confirmation']['match'] = "Las contraseñas no coinciden.";
            }

            if( empty($errores)){
                // Guardar en la BD
                // Cifrar la contraseña
                $password_segura = password_hash($password, PASSWORD_BCRYPT);
                // Insertar usuario en la base de datos
                 $query = "INSERT INTO users VALUES(null,'$username','$email','$password_segura',NOW(),NOW())";

                $result = mysqli_query($db, $query);

                if($result){ //Si sale bien la acción que te redirija al índice
                    header("Location:".APP_URL);
                    }else{

                    die("La hemos liado guardando el usuario Houston");
                }   
            }
        }

    //Mostrar el formulario
    require_once 'register.view.php';
?>