<?php
define('BASE_URL', $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".'project/');
define('BASE_PATH', __DIR__);

// Conexión a la BD
define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "projectdb");

// Iniciar Sesión
session_start();

?>