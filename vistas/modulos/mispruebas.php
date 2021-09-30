<?php 

$ruta=Ruta::ctrRuta();
 ?>

   
    <meta charset="utf-8">
    <h1 style="color:blue; font-size: 70px; font-style: italic;" class="pagr">Mis pruebas</h1>
    <link rel="stylesheet"  href="vistas/css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalabl=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <div class="subcontenido">
        <div class="card">
                <img src="vistas/imagenes/imagen10.jpg">
                <h4>Prueba molecular</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#">Leer mas</a>    
        </div>

         <div class="card">
                <img src="vistas/imagenes/imagen11.jpg">
                <h4>Prueba de antigeno</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#">Leer mas</a>    
        </div>

         <div class="card">
                <img src="vistas/imagenes/imagen12.jpg">
                <h4>Prueba rapida</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#">Leer mas</a>  
        </div>
    </div><br><br>  


<div class="box" >
            <a href=" <?php echo $ruta?>inicio" class="button blue medium radius">
                <span class="icon-house"></span>MENU

            </a>
    </div>