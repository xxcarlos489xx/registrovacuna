<?php
require_once "controllers/plantilla.controlador.php";
require_once "controllers/acceso.controlador.php";
require_once "controllers/vacunas.controlador.php";



require_once "models/usuarios.modelo.php";
require_once "models/vacunas.modelo.php";


require_once "models/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();