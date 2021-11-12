<?php
include '../elements/alerts.php';
?>
<div class="register-box">
    <div class="register-logo">
        <a href="<?php echo $base; ?>index.php"><b><?php echo SITE_NAME; ?></b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Registrar una nuevo usuario</p>

            <form action="register.php" method="post" class="form-inline d-flex justify-content-center">
                <div class="input-group mb-3">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>                    
                <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="agreeTerms" value="agree">
                        <label for="agreeTerms">
                            Estoy de acuerdo con los <a href="#">los términos</a>
                        </label>
                    </div>
                </div>

                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->

            </form>
            <hr>
            <div class="col-12">
                <a href="login.php" class="text-center">Ya tengo un usuario</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
