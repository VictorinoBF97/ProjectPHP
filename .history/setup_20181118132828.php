<?php
//Construimos la URL
//TAREA: AÑADIR SOPORTE PARA EL PUERTO
$url = $_SERVER['REQUEST_SCHEME']."://";
$serverName = $_SERVER['SERVER_NAME']."/";
$urlParts = explode("/",$_SERVER['REQUEST_URI']);
    $request = $urlParts[1];

/** URL principal de la aplicación */
define ('APP_URL',$url.$serverName.$urlParts.$request);
//('APP_URL',$url.$serverName.$request);

/** Directorio principal de la aplicación en el servidor */
define ('APP_PATH', __DIR__);

/** Nombre de la aplicación */
define ('APP_NAME','AUTOPARTS');

// Iniciar la sesion
session_start();

?>