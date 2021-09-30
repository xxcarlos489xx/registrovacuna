<?php 
    $ruta=Ruta::ctrRuta();
    $vacunas = ControladorVacunas::verVacunas();
?>
<div class="container-registro">
    <h1 style="color:blue; font-size: 35px;"  class="pagr">Registro de vacunas</h1>
</div>
<div class="container-registro">
    <div class="box-registro">
        <form id="registro-vacuna" method="post" onSubmit="validateRegistro(event)">
            <div class="form-group">
                <legend>Seleccione vacuna:</legend>
                <select name="vacuna" class="select-vacunas w-100">
                    <?php 
                        foreach ($vacunas as $v){
                            echo "<option value=".$v['siglas'].">".$v['nombre']." - ".$v['siglas']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <legend>Seleccione fecha:</legend>
                <input type="date" name="fecha" id="date" class="form-vacunas">
            </div>
            <div class="form-group">
                <legend>Seleccione nro de dosis:</legend>
                <select name="dosis" id="dosis" class="select-vacunas dosis">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <legend>Ingrese lugar:</legend>
                <input class="w-100 form-vacunas" type="text" name="direccion" id="direccion">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="w-100 button blue medium radius">Registrar</button>
            </div>
            <?php
                $registro = new ControladorVacunas();
                $registro -> ctrRegistroUsuario();
            ?>
        </form>
        

    </div>
</div>
