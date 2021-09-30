<?php
require_once "conexion.php";

class ModeloUsuarios{
    public static function mdlMostrarUsuarios($tabla, $item, $valor){
        
        if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}

		$stmt-> close();

		$stmt = null;
    }
}