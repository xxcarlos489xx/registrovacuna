<?php
require_once 'conexion.php';

class ModeloVacunas{
    public static function mostrarVacunas($tabla,$siglas=null){
        if (!$siglas) {
            $consulta = Conexion::conectar()->prepare("SELECT id,nombre,siglas,detalle FROM $tabla ORDER BY nombre ASC");
            $consulta->execute();
            return $consulta->fetchAll();
        }else{
            $consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE siglas = :siglas");
            $consulta -> bindParam(":siglas", $siglas, PDO::PARAM_STR);
            $consulta->execute();
            return $consulta->fetchObject();
        }
        

        $consulta->close();
		
		$consulta = null;
    }
    public static function registroUsuario($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla   (usuario_id, vacuna_id, dosis, direccion, fecha_vacuna) VALUES   (:usuario_id, :vacuna_id, :dosis, :direccion, :fecha_vacuna)");

		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_INT);
		$stmt->bindParam(":vacuna_id", $datos["vacuna_id"], PDO::PARAM_INT);
		$stmt->bindParam(":dosis", $datos["dosis"], PDO::PARAM_INT);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_vacuna", $datos["fecha_vacuna"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();
		
		$stmt = null;
    }
    public static function verificarRegistro($tabla,$usuario_id,$vacuna_id){
        $consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario_id = :usuario_id AND vacuna_id = :vacuna_id ORDER BY dosis DESC");
            $consulta -> bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
            $consulta -> bindParam(":vacuna_id", $vacuna_id, PDO::PARAM_INT);

            $consulta->execute();
            return $consulta->fetchObject();

    }
    public static function misVacunas($tabla,$usuario_id){
        $consulta = Conexion::conectar()->prepare("SELECT   uv.*,
                                                            u.nom_completos, u.nro_documento, 
                                                            v.nombre AS nombrevacuna ,v.dosis AS dosistotal, v.siglas
                                                    FROM $tabla AS uv
                                                    INNER JOIN usuarios AS u ON uv.usuario_id = u.id 
                                                    INNER JOIN vacunas AS v ON uv.vacuna_id = v.id 
                                                    WHERE usuario_id = :usuario_id ");
            $consulta -> bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetchAll();

    }
}