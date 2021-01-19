<?php

require_once "conexion.php";

class ModeloClientes{

	/*=============================================
	CONTAR CLIENTES
	=============================================*/

	static public function mdlContarClientes($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> rowCount();

		$stmt -> close();

		$stmt = null;

	}
	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre_cli, estr_juridica, rfc_cli, 
		calle_cli, num_call_cli, c_p_cli, id_localidades, correo_cli, tel_cli, banco_cli, clabe_cli, 
		cuenta_cli, baja_cli, desc_cli, foto_cli) VALUES (:nuevoNombreCliente, :nuevoEstructuraJuridica, 	
		:nuevoRfc, :nuevoCalle, :nuevoNumero, :nuevoCp, :nuevoIdLocalidades, :nuevoCorreo, :nuevoTelefono, :nuevoBanco, 
		:nuevoClabe, :nuevoCuenta, :nuevoBajaCli, :nuevoDescCli, :foto)");

		$stmt->bindParam(":nuevoNombreCliente", $datos["nuevoNombreCliente"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoEstructuraJuridica", $datos["nuevoEstructuraJuridica"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoRfc", $datos["nuevoRfc"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCalle", $datos["nuevoCalle"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoNumero", $datos["nuevoNumero"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCp", $datos["nuevoCp"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoIdLocalidades", $datos["nuevoIdLocalidades"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCorreo", $datos["nuevoCorreo"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoTelefono", $datos["nuevoTelefono"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoBanco", $datos["nuevoBanco"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoClabe", $datos["nuevoClabe"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCuenta", $datos["nuevoCuenta"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoBajaCli", $datos["nuevoBajaCli"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoDescCli", $datos["nuevoDescCli"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarCliente($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cliente = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}

}