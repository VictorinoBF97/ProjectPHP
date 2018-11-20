<?php
//Recibe un servidor, el usuario,contraseña
$db = mysqli_connect(DB_HOST, DB_USER);

// if(mysqli_connect_errno()){
//     die("No hemos realizado correctamente la conexión a la BD");
// }else{
//     die("La conexión ha sido un éxito Houston");
// }


mysqli_query($db, "SET NAMES 'utf8'"); //Lanza una consulta
?>