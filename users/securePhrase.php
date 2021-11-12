<?php $recoveryphrase = new RecoveryPhrase;
?>

<div class="container">
    <div class="row pt-2">
        <div class="card">
            <div class="card-body">
                <form method="post" role="form">
                    <h3 class="cnt">Crea tu frase de recuperación ? </h3>
                    <hr class="colorgraph">
                    <p class="">Ingrese su frase de seguridad. Guarde esta frase en un lugar seguro ya que se le pedirá en los casos de seguridad. </p>
                    <div class="mb-3">
                        <label class="form-label" for="email">Introduce tu PIN <span class="red">*</span>:
                        </label> <input type="password" name="pin" id="pin"
                                        placeholder="PIN" class="form-control" autocomplete="off"
                                        required autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Frase de recuperación <span class="red">*</span>:
                        </label> <input type="text" name="rvphrase" id="rvphrase"
                                        placeholder="Frase de recuperación" class="form-control" autocomplete="off"
                                        required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="makerecoveryphrase"
                               value="Guardar frase de recuperación " class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
