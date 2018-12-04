<?php
require_once '../setup.php';
require_once '../database/conexion.php';
require_once '../database/helpers.php';
$list_id = $_GET['id'];
if( isset($_GET['id'])  ){
    
    if( isset($_POST['listName']) ) {
        // Editar item
        $listName = trim($_POST['listName']) ?? null;
        $listDesc = trim($_POST['listdesc']) ?? null;
        
        // Validaciones
        if ( empty($listName) ){
            $errors['lists']['empty'] = "Debes introducir un texto para el nuevo nombre de la lista.";
            
        }
        if ( empty($listDesc) ){
            $errors['lists']['empty'] = "Debes introducir una nueva descripción para la lista.";
            
        }
        if( empty($errors) ){
            // Guardar item en la base de datos
            // Insertar usuario en la base de datos
            $sql = "UPDATE lists SET name = '$listName' WHERE id = $list_id;";
            $sqlDesc = "UPDATE lists SET description = '$listDesc' WHERE id = $list_id";
            $result = mysqli_query($db, $sql);
            $resultDesc = mysqli_query($db, $sqlDesc);
            if( $result && $resultDesc){
                header("Location: ".BASE_URL.'my_lists/?id='.$list_id);
                die();
            }
            echo "Error";
            die();   
        }
    }
        // Mostrar form con la información actual del item
        $sql = "SELECT lists.id as 'list_id', lists.name as 'list_name', items.description as 'item_text' FROM items INNER JOIN recambios ON items.list_id = lists.id WHERE items.id_items = $list_id LIMIT 1";
        $result = mysqli_query($db, $sql);
        $listName = mysqli_fetch_assoc($result);
    
}else{
    header("Location: ".BASE_URL);
}
require_once 'edit_list.view.php';