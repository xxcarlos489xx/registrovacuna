<?php 
    $ruta=Ruta::ctrRuta();
?>
<div class="container-close">
    <div class="row" >
        <a href=" <?php echo $ruta?>salir" class="button close medium radius">
            <span class="icon-house"></span>Cerrar sesión
        </a>
        <?php
            if ($_GET["ruta"] != 'inicio'){
                echo    '<a href="'.$ruta.'inicio" class="button blue medium radius">
                            <span class="icon-house"></span>MENU
                        </a>';
            }
        ?>
    </div>
</div>