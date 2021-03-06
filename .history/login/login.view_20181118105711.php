<?php

    require_once '../setup.php';
    require_once '../includes/header.php'; 

?>
<div class="container">
    <div class="offset-3 col-6 pt-4 pb-4">
        <form action="" method="POST" novalidate>
        <div class="form-group">

                <!-- NOMBRE DE USUARIO (USERNAME)-->
                <label for="username">Nombre de usuario</label>
                    <input type="text" class="form-control <?=($errors['username'])?"is-invalid":""?>" id="username" name="username" aria-describedby="usernameHelp" placeholder="Su nombre de usuario" value="<?=($username??'')?>">
                <small id="usernameHelp" class="form-text text-muted">El nombre de usuario debe tener mínimo 8 caracteres (números y solo letras minúsculas).</small>
                <!-- MENSAJE DE ERROR-->
                 <?php if( !empty($errors['username']) ): ?> 
                    <div class="invalid-feedback">
                        <?php foreach ($errors['username'] as $error): ?>
                            <?=$error?><br/>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- CONTRASEÑA (PASSWORD)-->
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

            <!-- MENSAJE DE ERROR -->
            <?php if(isset($errors["login"])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach($errors["login"] as $error): ?>
                        <?=$error?><br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <!-- BOTÓN DE INICIO DE SESIÓN (LOG IN)-->
            <button type="submit" name="login" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>