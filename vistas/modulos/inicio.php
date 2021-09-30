<?php 
    $ruta=Ruta::ctrRuta();
 ?>
<div class="container">
    <div class="box" >
        <img width="20%" src="vistas/imagenes/imagen4.png"><br>
        <a href=" <?php echo $ruta?>carnetvacunacion" class="button blue medium radius">
            <span class="icon-house"></span>Tarjeta Sanitaria Virtual
        </a>
    </div>
    <div class="box">
        <img width="20%" src="vistas/imagenes/imagen7.png"><br>
        <a href="<?php echo $ruta?>registro-vacuna" class="button yellow medium radius">
            <span class="icon-warning"></span>Registrar vacuna
        </a>
    </div>
    
</div>
<div class="container">
    <div class="box" >
        <img width="20%" src="vistas/imagenes/imagen6.png"><br>
        <a href="<?php echo $ruta?>mispruebas" class="button blue medium radius">
            <span class="icon-house"></span>Información <br> de vacunas

        </a>
    </div>
    <div class="box">
        <img width="20%" src="vistas/imagenes/imagen5.png"><br>
        <a href="<?php echo $ruta?>mimedicacion" class="button yellow medium radius">
            <span class="icon-warning"></span>Mi medicacion
        </a>
    </div>    
</div>

