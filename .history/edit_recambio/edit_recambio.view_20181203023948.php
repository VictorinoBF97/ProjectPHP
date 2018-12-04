<?php
    require_once '../setup.php';
    require_once '../includes/header.php'; 
    require_once '../functions/validation.php';
?>

<div class="container">
    <div class="offset-3 col-6 pt-4 pb-4">
        
        <h2>Editar Lista</h2>
        
        <hr>
        <form action="" method="POST" novalidate>
            <div class="form-group">
                <input type="text" class="form-control <?=($errors['lists'])?"is-invalid":""?>" id="listName" name="listName" aria-describedby="itemHelp" placeholder="Introduce un nuevo nombre para la lista" value="<?=($listName['listName']??'')?>">
                <small id="itemHelp" class="form-text text-muted">Debe introducir algo</small>
                <?=validationDiv('item', 'invalid-feedback')?>
                <textarea class="form-control" id="listdesc" name="listdesc" placeholder="Introduce una nueva descripción para la lista" rows="3"><?=($listdesc??'')?></textarea>
                <small id="itemHelp" class="form-text text-muted">Debe introducir algo</small>
                <?=validationDiv('item', 'invalid-feedback')?>
            </div>
            <?=validationDiv('login','alert')?>
            <button type="submit" name="edit_list" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>