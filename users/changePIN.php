<?php $changePIN = new changePIN;
?>
<div class="container">
    <div class="row">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h4>Cambiar PIN de acceso.</h4>

                <form method="post" class="form">
                    <div class="mb-3">
                        <label class="form-label" for="email">Ingrese su frase de recperación <span class="red">*</span>:
                        </label> 
                        <input type="text" name="recoveryphrase" id="recoveryphrase" class="form-control" placeholder="Recover phrase"  autocomplete="off"
                               required autofocus>

                    </div>     
                    <div class="mb-3">
                        <label class="form-label" for="email">Ingrese su antiguo PIN <span class="red">*</span>:
                        </label> 
                        <input type="password" name="pin" id="pin"
                               placeholder="PIN" class="form-control" autocomplete="off"
                               required autofocus>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">

                            <button type="submit" name="changePIN" class="btn btn-primary btn-block">Cambio de PIN</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>
