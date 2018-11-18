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

            <!-- NOMBRE DEL CLIENTE-->
            <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control <?=(isset($errores["name"]))?"is-invalid":"";?>"id="name" name="name" aria-describedby="nameHelp" placeholder="Introduzca su nombre">
                        <small id="nameHelp" class="form-text text-muted">Su nombre debe contener al menos 3 carácteres </small>

                        <!-- MENSAJE DE ERROR -->
                        <?php if(isset($errores["name"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["name"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?> 
                    </div>

            <!-- APELLIDO DEL CLIENTE-->
            <div class="form-group">
                        <label for="surname">Apellido</label>
                        <input type="text" class="form-control <?=(isset($errores["surname"]))?"is-invalid":"";?>"id="surname" name="surname" aria-describedby="nameHelp" placeholder="Introduzca su apellido">
                        <small id="emailHelp" class="form-text text-muted">Su apellido debe contener como mínimo 3 caracteres </small>

                        <!-- MENSAJE DE ERROR -->
                        <?php if(isset($errores["surname"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["surname"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?> 
                    </div>

            <!-- EMAIL DE CONTACTO -->
            <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control <?=(isset($errores["email"]))?"is-invalid":"";?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduzca su email @">
                        <small id="emailHelp" class="form-text text-muted">Debe introducir un email válido</small>

                        <!-- MENSAJE DE ERROR -->
                        <?php if(isset($errores["email"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["email"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
            <!-- TIPO DE CUENTA -->
            <div class="form-group">
                        <label for="cuenta">Tipo de Cuenta</label>
                        <select class="form-control <?=(isset($errores["cuenta"]))?"is-invalid":"";?>" id="cuenta" name="cuenta" aria-describedby="cuentaHelp">
                            <option value="">- selecciona -</option>
                            <option value="E">Usuario normal</option>
                            <option value="C">Cliente</option>
                        </select>
                        <small id="cuentaHelp" class="form-text text-muted">Empleado = Buscas trabajo/Cliente = Proporcionas trabajo)</small>
                        <?php if(isset($errores["cuenta"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["cuenta"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>











            <!--<div class="form-group">
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
</div>-->
<!-- END BODY -->
<?php require_once '../includes/footer.php'; ?>