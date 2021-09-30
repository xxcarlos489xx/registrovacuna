<?php 
    $ruta=Ruta::ctrRuta();
    $vacunas = ControladorVacunas::verVacunas();
?>
<div>
    <h1 style="color:blue; font-size: 50px; font-weight: 900;" class="pagr">Información de vacunas</h1>
    <div class="subcontenido">
        <?php
            foreach ($vacunas as $key => $v){
            echo "<div class='card card-info'>
                    <img src='vistas/imagenes/imagen10.jpg'>
                    <h4>".$v['nombre']."</h4>
                    <p>".$v['detalle']."</p>
                </div>";
            }
        ?>
    </div>
</div>