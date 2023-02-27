<?php 
    if(isset($_GET["id"])) {
        $item = "id";
        $valor = $_GET["id"];
        $usuario = ControladorFormularios::ctrObtenerUsuarios($item, $valor);
    }

?>

<div class="container col-4 p-5 bg-light">
    <h1 class="text-center">Actualizar</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario["id"] ?>" />
        <div class="mb-3 mt-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" value="<?php echo $usuario["nombre"] ?>">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" name="email" value="<?php echo $usuario["correo"] ?>">
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese su contraseña" name="pswd">
            </div>
        </div>

        <?php
            $actualizar = ControladorFormularios::ctrActualizarUsuario();

            if($actualizar) {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>";

                echo "<div class='alert alert-success'>
                    <strong>Usuario actualizado</strong>
                </div>";

                echo "<script>
                    setTimeout(function(){
                        window.location = 'index.php?pagina=inicio';
                    }, 3000);
                </script>";
            }
        ?>

        <div>
            <button type="submit" class="btn btn-primary d-inline w-100">Actualizar</button>
        </div>
    </form>
</div>