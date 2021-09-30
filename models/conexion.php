<?php

class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=172.16.2.48;dbname=db_vacuna",
						"siip3",
						"siip3",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}

}