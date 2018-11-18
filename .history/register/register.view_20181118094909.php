<?php
    require_once '../setup.php';
    require_once '../includes/header.php'; 
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="offset-3 col-6 pt-4 pb-4">
            <h1>Formulario de registro</h1>
            <form action="" method="POST">

            <!--NOMBRE USUARIO-->
            <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control <?=(isset($errores["username"]))?"is-invalid":"";?>"id="username" name="username" aria-describedby="nameHelp" placeholder="Introduce tu nombre de usuario">
                        <small id="userHelp" class="form-text text-muted">Debe tener como mínimo 8 caracteres con números y letras minúsculas.</small>
                        <!-- MENSAJE DE ERROR -->
                        <?php if(isset($errores["username"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["username"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?> 
                    </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control <?=($errors['email'])?"is-invalid":""?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduce un email"  value="<?=($email??'')?>">
                <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con nadie.</small>
                <?php if( !empty($errors['email']) ): ?> 
                <div class="invalid-feedback">
                    <?php foreach ($errors['email'] as $error): ?>
                        <?=$error?><br>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control <?=($errors['password'])?"is-invalid":""?>" id="password" name="password" aria-describedby="passwordHelp" placeholder="Password">
                <small id="passwordHelp" class="form-text text-muted">Debe tener 6 caracteres como mínimo</small>
                <?php if( !empty($errors['password']) ): ?> 
                <div class="invalid-feedback">
                    <?php foreach ($errors['password'] as $error): ?>
                        <?=$error?><br>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Password</label>
                <input type="password" class="form-control <?=($errors['password_confirmation'])?"is-invalid":""?>" id="password_confirmation" name="password_confirmation" placeholder="Password">
                <?php if( !empty($errors['password_confirmation']) ): ?> 
                <div class="invalid-feedback">
                    <?php foreach ($errors['password_confirmation'] as $error): ?>
                        <?=$error?><br>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <button type="submit" name="registro" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>