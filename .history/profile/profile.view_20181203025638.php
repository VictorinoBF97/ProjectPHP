<?php
    require_once '../setup.php';
    require_once '../includes/header.php'; 
    require_once '../functions/validation.php';
?>
<div class="container">
    <div class="offset-3 col-6 pt-4 pb-4">
        <form action="" method="POST" novalidate>
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control <?=($errors['username'])?"is-invalid":""?>" id="username" name="username" aria-describedby="usernameHelp" placeholder="Introduce un nuevo nombre de usuario" value="<?=($username??'')?>">
                <small id="usernameHelp" class="form-text text-muted">Debe tener como mínimo 8 caracteres con números y letras minúsculas.</small>
                <?=validationDiv('username','invalid-feedback')?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control <?=($errors['password'])?"is-invalid":""?>" id="password" name="password" aria-describedby="passwordHelp" placeholder="Introduzca una nueva contraseña">
                <small id="passwordHelp" class="form-text text-muted">Debe tener 6 caracteres como mínimo</small>
                <?=validationDiv('password','invalid-feedback')?>
            </div>
            <div class="form-group">
                <label for="password_conf">Confirmar Password</label>
                <input type="password" class="form-control <?=($errors['passwordconf'])?"is-invalid":""?>" id="password-conf" name="password-conf" placeholder="Confirme la nueva contraseña">
                <?=validationDiv('passwordconf', 'invalid-feedback')?>
            </div>
            <button type="submit" name="edit_profile" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>