<div class="container col-4 p-5 bg-light">
    <h1 class="text-center">Registro</h1>
    <form method="POST">
        <div class="mb-3 mt-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" name="email">
            </div>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese su contraseña" name="pswd">
            </div>
        </div>

        <?php
            $registro = ControladorFormularios::ctrRegistro();
            if($registro) {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>";

                echo "<div class='alert alert-success'>
                    <strong>Registro Exitoso!</strong>
                </div>";
            }
        ?>

        <div>
            <button type="submit" class="btn btn-primary d-inline w-100">Registrarse</button>
        </div>
    </form>
</div>