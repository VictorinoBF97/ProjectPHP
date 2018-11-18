<?php

if(isset($_POST['register'])){
    // Cargar datos del formulario
    $username = $_POST['username'] ?? null;
    $name = $_POST['name'] ?? null;
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $cuenta = $_POST['password'] ?? null;
    $username = $_POST['username'] ?? null;
    $password_confirmation = $_POST['password_confirmation'] ?? null;

    $errores=[];

    //Validar los datos
            // username:
            if ( empty($name) ){
                $errors['name']['empty'] = "Debes introducir un nombre.";
                $name = null;
            }
            if ( strlen($name) < 8 ) {
                $errors['username']['length'] = "El nombre de usuario debe tener al menos 8 caracteres.";
                $name = null;
            }
            if ( !preg_match("/[0-9a-z]+/",$name) ){
                $errors['username']['format'] = "La contraseña solo admite números y letras minúsculas.";
                $name = null;
            }
        
            // email:
            if ( empty($email) ){
                $errors['email']['empty'] = "Debes introducir un email.";
                $email = null;
            }
            if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $errors['email']['format'] = "Debes introducir un email válido.";
                $email = null;
            }
        
            // password:
            if ( empty($password) ){
                $errors['password']['empty'] = "Debes facilitar una contraseña.";
            }
        
            if ( strlen($password) < 6 ) {
                $errors['password']['length'] = "La contraseña debe tener al menos 6 caracteres.";
            }
            if ( empty($password_confirmation) ){
                $errors['passwordconf']['empty'] = "Debes confirmar la contraseña.";
            }
            if ( $password != $password_confirmation ){
                $errors['password_confirmation']['match'] = "Las contraseñas no coinciden.";
            }

    if (!empty($errores)){
        var_dump($errores);
        require_once 'register.view.php';
    }
}else{

    //Mostrar el formulario
    require_once 'register.view.php';
}