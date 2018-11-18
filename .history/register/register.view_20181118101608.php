<!--REQUERIMIENTOS-->
<?php
    require_once '../setup.php';
    require_once '../includes/header.php'; 
?>
<!--FIN DE REQUERIMIENTOS-->

<!--BODY-->
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
                        <label for="email">Correo electrónico</label>
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
                        <label for="cuenta">Tipo de Cliente</label>
                        <select class="form-control <?=(isset($errores["cuenta"]))?"is-invalid":"";?>" id="cuenta" name="cuenta" aria-describedby="cuentaHelp">
                            <option value="">- Seleccionar -</option>
                            <option value="N">Usuario normal</option>
                            <option value="E">Empresa</option>
                        </select>
                        <small id="cuentaHelp" class="form-text text-muted">Escoja que tipo de cliente eres ( USUARIO NORMAL | EMPRESA )</small>

                        <!-- MENSAJE DE ERROR -->
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

            <!-- CONTRASEÑA -->
            <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control <?=(isset($errores["password"]))?"is-invalid":"";?>" id="password" name="password" placeholder="Introduzca su contraseña">
                        <small id="passwordHelp" class="form-text text-muted">Su contraseña debe tener 6 caracteres como mínimo</small>

                        <!-- MENSAJE DE ERROR -->
                        <?php if(isset($errores["password"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["password"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

            <!-- CONFIRMACION DE LA CONTRASEÑA -->
            <div class="form-group">
                        <label for="password_confirmation">Confirmar Contraseña</label>
                        <input type="password" class="form-control <?=(isset($errores["password_confirmation"]))?"is-invalid":"";?>" id="password_confirmation" name="password_confirmation" placeholder="Introduzca nuevamente la contraseña">

                        <!-- MENSAJE DE ERROR -->
                        <?php if(isset($errores["password_confirmation"])): ?>
                            <div class="invalid-feedback">
                                <ul>
                                    <?php foreach($errores["password_confirmation"] as $message): ?>
                                        <li><?=$message?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

            <!--ENVÍO DEL FORMULARIO -->
                <button type="submit" name="registro" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
</div>

<!-- END BODY -->

<!--FOOTER -->
<?php require_once '../includes/footer.php'; ?>
