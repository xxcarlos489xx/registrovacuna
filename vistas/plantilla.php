<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro | Vacunas</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <!--=====================================
    CSS PERSONALIZADO
    ======================================-->

    <link rel="stylesheet" href="vistas/css/estilos.css">

  </head>

  <body class="login-page">
  <?php
    if (isset($_SESSION["validarSesion"]) && $_SESSION["validarSesion"] === "ok") {

      echo '<div class="wrapper">';

      /*=============================================
      CABECERA
      =============================================*/

      include "modulos/head.php";

      /*=============================================
      CONTENIDO
      =============================================*/

      if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "inicio" || 
            $_GET["ruta"] == "carnetvacunacion" ||
            $_GET["ruta"] == "mimedicacion" ||
            $_GET["ruta"] == "mispruebas" || 
            $_GET["ruta"] == "registro-vacuna" ||
            $_GET["ruta"] == "salir"
          ){
            include "modulos/".$_GET["ruta"].".php";
        }
      }
      echo '</div>';
    }else{
      include "modulos/login.php";
    }
  ?>
<!--=====================================
            ARCHIVOS JS
======================================-->
<script src="vistas/js/login.js"></script>
<script src="vistas/js/registro_vacuna.js"></script>

</body>
</html>