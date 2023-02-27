<?php 

#Mostrar la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones al controlador
require_once "controllers/plantilla.controlador.php";

require_once "controllers/formularios.controlador.php";
require_once "models/formularios.modelo.php";




$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>