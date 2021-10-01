<?php

class ControladorVacunas{
    public static function verVacunas(){
        $tabla = 'vacunas';
        $respuesta = ModeloVacunas::mostrarVacunas($tabla);
        return $respuesta;
    }
    public function ctrRegistroUsuario(){
        $tabla_one = 'vacunas';
        $tabla_two = 'usuario_vacunas';

        if (isset($_POST['vacuna'])) {
            $siglas = $_POST['vacuna'];
            $usuario_id = $_SESSION['id'];
            $dosis = $_POST['dosis'];
            $lugar = $_POST['direccion'];
            $fecha_vacuna = $_POST['fecha'];
            $vacuna = ModeloVacunas::mostrarVacunas($tabla_one,$siglas);
            $vacuna_id = $vacuna->id;
 
            $exist = ModeloVacunas::verificarRegistro($tabla_two,$usuario_id,$vacuna_id);
            //CREAR NUEVO REGISTRO
            if ($exist) {
                $dosis_correcta = ($exist->dosis)+1;
                if(intval($dosis) > intval($vacuna->dosis)){
                    echo    '<div class="restringed">
                                Ya tiene todas las dosis completas para esta vacuna.
                            </div>';
                    return;
                }
                if (intval($exist->dosis)>=$dosis || intval($dosis_correcta) != $dosis) {
                    echo    '<div class="restringed">
                                La dosis correcta que le toca es la número '.$dosis_correcta.', por favor seleccione la correcta y vuelva a intentarlo.
                            </div>';
                    return;
                }
                $datos = array();
                $datos["usuario_id"] = $usuario_id;
                $datos["vacuna_id"] = $vacuna_id;
                $datos["dosis"] = $dosis_correcta;
                $datos['direccion'] = $lugar;
                $datos['fecha_vacuna'] = $fecha_vacuna;
                $insert = ModeloVacunas::registroUsuario($tabla_two,$datos);
                if ($insert == 'ok') {
                    // unset($_POST['vacuna']);
                    unset($_POST);
                    unset($_REQUEST);
                    echo    '<div class="success">
                                Registro  creado con éxito
                                
                            </div>';
                    return;
                }
            //VACUNA POR PRIMERA VEZ
            }else{
                if (intval($dosis)!=1) {
                    echo    '<div class="restringed">
                                Debe registrar su primera dosis
                            </div>';
                    return;
                }
                
                $datos = array();
                $datos["usuario_id"] = $usuario_id;
                $datos["vacuna_id"] = $vacuna_id;
                $datos["dosis"] = 1;
                $datos['direccion'] = $lugar;
                $datos['fecha_vacuna'] = $fecha_vacuna;
                $insert = ModeloVacunas::registroUsuario($tabla_two,$datos);
                if ($insert == 'ok') {
                    echo    '<div class="success">
                                Registro  creado con éxito
                            </div>';
                    return;
                }
                
            }
        }
    }
    public static function ctrMisVacunas($id){
        $tabla = 'usuario_vacunas';
        $respuesta = ModeloVacunas::misVacunas($tabla,$id);
        return $respuesta;
    }
}