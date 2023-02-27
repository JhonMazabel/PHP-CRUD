<?php 

class ControladorFormularios {

    /* Registro */
    static public function ctrRegistro() {

        if(isset($_POST["nombre"])) {
            $tabla = "usuarios";
            $datos = array("nombre" => $_POST["nombre"],
                            "correo" => $_POST["email"],
                            "clave" => $_POST["pswd"]);

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    /* Obtener usuarios */
    static public function ctrObtenerUsuarios($item, $valor) {
        $tabla = "usuarios";
        $respuesta = ModeloFormularios::mdlObtenerUsuarios($tabla, $item, $valor);

        return $respuesta;
    }


    public function ctrIngreso() {
        if(isset($_POST["email"])) {

            $tabla = "usuarios";
            $item = "correo";
            $valor = $_POST["email"];

            $respuesta = ModeloFormularios::mdlObtenerUsuarios($tabla, $item, $valor);

            if($respuesta["correo"] == $_POST["email"] && $respuesta["clave"] == $_POST["pswd"]) {
                
                $_SESSION["Logueado"] = true;

                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }

                    window.location = 'index.php?pagina=inicio';
                </script>";

            } else {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>";

                echo "<div class='alert alert-danger'>
                    <strong>Error al ingresar, revise sus credenciales</strong>
                </div>";
            }
        }
    }

    static public function ctrActualizarUsuario() {
        if(isset($_POST["nombre"])) {
            
            $tabla = "usuarios";
            $datos = array("id" => $_POST["id"],
                            "nombre" => $_POST["nombre"],
                            "correo" => $_POST["email"],
                            "clave" => $_POST["pswd"]);

            return $respuesta = ModeloFormularios::mdlActualizar($tabla, $datos);

        }
    }

    public function ctrEliminar() {
        if(isset($_POST["id"])) {
            
            $tabla = "usuarios";
            $id = $_POST["id"];

            $respuesta = ModeloFormularios::mdlEliminar($tabla, $id);

            if ($respuesta) {
                echo "<script>
                    if(window.history.replaceState) {
                        window.history.replaceState( null, null, window.location.href );
                    }

                    window.location = 'index.php?pagina=inicio';
                </script>";
            }
        }
    }

}

?>