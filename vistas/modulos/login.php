<?php
$ruta = Ruta::ctrRuta();
?>
<div class="caja-login">
    <div class="section-formulario">
        <div>
            <img align="center" width="10%" src="<?php echo $ruta?>vistas/imagenes/imagen0.jpg">
            <img align="center" width="20%" src="<?php echo $ruta?>vistas/imagenes/imagen1.jpg">
        </div>
        <h2>Ingrese nro de documento <br> y contraseña</h2>

        <form id="login" method="post" onSubmit="validar(event)">

            <label>Tipo de documento</label><br><br>
                <select documento name="tipoDoc" class="items-form">
                    <option>DNI</option>
                    <option>C.E</option>
                    <option>Pasaporte</option>
                </select><br><br>
            <label>Numero de documento</label><br>
            <input class="items-form" type="number" name="doc" id="doc"><br><br>
            <label>Contraseña</label><br>
            <input class="items-form" type="password" name="pass" id="pass"><br><br>
            <!-- <label>Fecha de nacimiento</label><br>
            <label>(dd/mm/yyyy)</label><br>
            <input class="items-form" type="text" name="apellidos"><br><br>
            <label>Fecha de emision</label><br>
            <label>(dd/mm/yyyy)</label><br>
            <input class="items-form" type="text" name="apellidos"><br><br> -->
            <button type="submit" class="btn" name="btn">Iniciar sesion</button><br><br>
            <?php
                $login = new ControladorAcceso();
                $login -> ctrIngreso();
            ?>
        </form>
    </div>
</div>