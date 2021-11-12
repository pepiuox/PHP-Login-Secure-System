<?php
include '../elements/alerts.php';
?>
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo $base; ?>index.php"><b><?php echo SITE_NAME; ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Regístrese para iniciar su sesión </p>
            <form action="login.php" method="post" class="form-inline d-flex justify-content-center">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off"
                               required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" autocomplete="off"
                               required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="PIN" id="PIN" placeholder="PIN"  maxlength="6" autocomplete="off"
                               required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="icheck-primary">
                            <input class="form-control" type="checkbox" id="remember" name="remember" value=”Yes”>
                            <label for="remember">
                                Recuérdame
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- /.col -->                    
                        <button type="submit" name="signin" id="signin" class="btn btn-primary btn-block">Iniciar sesión</button>
                        <!-- /.col -->
                    </div>
                </div>

            </form>
            <hr>
            <p class="mb-1">
                <a href="<?php echo $base; ?>signin/forgot-password.php">Olvidé mi contraseña.</a>
            </p>
            <p class="mb-1">
                <a href="<?php echo $base; ?>signin/forgot-password.php">Olvidé mi PIN. </a>
            </p>
            <p class="mb-0">
                <a href="<?php echo $base; ?>signin/register.php" class="text-center">Registrar una nueva membresía.</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
