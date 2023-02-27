<div class="container col-4 p-5 bg-light">
    <h1 class="text-center">Ingreso</h1>
    <form method="POST">
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

        <?php 
            $ingreso = new ControladorFormularios();
            $ingreso->ctrIngreso();
        ?>

        </div>
            <button type="submit" class="btn btn-primary d-inline w-100">Ingresar</button>
        </div>
    </form>
</div>
