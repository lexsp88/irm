<?php

require_once "conexion.php";

class ModeloObras{
		/*=============================================
	CONTAR CLIENTES
	=============================================*/

	static public function mdlContarObras($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> rowCount();

		$stmt -> close();

		$stmt = null;

	}


}