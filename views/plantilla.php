<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo MVC</title>

    <!-- Plugins CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins JS -->
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/151e805c48.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Logotipo  -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!-- Botonera -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php 
                    if(isset($_GET["pagina"])) {
                        $pagina = $_GET["pagina"];
                ?>
                        <?php if($pagina == "registro") { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                            </li>
                        <?php } ?>

                        <?php if($pagina == "ingreso") { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                            </li>
                        <?php } ?>

                        <?php if($pagina == "inicio") { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
                            </li>
                        <?php } ?>

                        <?php if($pagina == "salir") {  ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=salir" class="nav-link active">Salir</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                            </li>
                        <?php } ?>

                <?php } else { ?>
                            <li class="nav-item">
                                <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                            </li>
                <?php } ?>

            </ul>
        </div>
    </div>

    <div class="container py-5">
        <?php
            if(isset($_GET["pagina"])){

                $pagina = $_GET["pagina"];

                if ($pagina == "registro" ||
                    $pagina == "ingreso" ||
                    $pagina == "inicio" || 
                    $pagina == "salir" ||
                    $pagina == "editar") {

                    include "pages/".$pagina.".php";

                } else {
                    
                    include "pages/error404.php";

                }

            } else {

                include "pages/registro.php";
            
            }

        ?>
    </div>

</body>
</html>