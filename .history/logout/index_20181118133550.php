<?php
    require_once '../setup.php';
    
        session_unset();
        session_destroy();

    header("Location: http://localhost/project/);
?>