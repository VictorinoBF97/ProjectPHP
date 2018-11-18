<?php
//Recibe un servidor, el usuario,contraseña
$db = mysqli_connect("localhost", "root", "", "projectdb");
// if(mysqli_connect_errno()){
//     die("No hemos realizado correctamente la conexión a la BD");
// }else{
//     die("Todo");
// }
mysqli_query($db, "SET NAMES 'utf8'");
?>