<?php

class ControladorAcceso{
    public function ctrIngreso(){
        if(isset($_POST["doc"])){
            $encriptar = crypt($_POST["pass"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $tabla = "usuarios";
            $item = "nro_documento";
            $valor = $_POST["doc"];
            
            $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
            if($respuesta){
                if($respuesta["nro_documento"] == $_POST["doc"] && $respuesta["password"] == $encriptar){
                    $_SESSION["validarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["nro_documento"] = $respuesta["nro_documento"];
                    $_SESSION["perfil"] = $respuesta["perfil"];

                    echo    '<script>
                                window.location = "inicio";
                            </script>';
                }
            }else{
                echo '<br>
                <div class="restringed">Error al ingresar vuelva a intentarlo</div>';
            }
            
        }
    }
}