<?php $changepass = new ChangePass; ?>
<div class="container">
    <div class="row">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body ">
                <p class="login-box-msg">Estás a solo un paso de tu nueva contraseña </p>

                <form method="post">
                    <label class="form-label" for="recoveryphrase">Ingrese su frase de recuperación <span class="red">*</span>:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="recoveryphrase" id="recoveryphrase" class="form-control" placeholder="Frase de recuperación">
                        <div class="input-group-append">
                            <div class="input-group-text">                                
                                <span class="fas fa-user-lock"></span>
                            </div>
                        </div>
                    </div>
                    <label class="form-label" for="email">Ingrese su nueva contraseña <span class="red">*</span>:</label>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <label class="form-label" for="email">Confirme sus nueva contraseña <span class="red">*</span>: </label>
                    <div class="input-group mb-3">                       
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirmar contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="changePassword" class="btn btn-primary btn-block">Cambiar contraseña</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
