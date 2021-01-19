<?php

require_once "conexion.php";

class ModeloEmpleados{
		/*=============================================
	CONTAR CLIENTES
	=============================================*/

	static public function mdlContarEmpleados($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> rowCount();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR Empleados
	=============================================*/

	static public function mdlMostrarEmpleados($tabla, $item, $valor){

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
	REGISTRO DE EMPLEADO
	=============================================*/

	static public function mdlIngresarEmpleado($tabla, $datos){
		
	
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_emp,nombre_emp,apellidop_emp,apellidom_emp,alias_emp,nss_emp,rfc_emp,curp_emp,id_depto,categ_emp,     
		espc_emp,f_n_emp,edad_emp,c_ine_emp,calle_emp,num_call_emp,c_p_emp,id_localidades,correo_emp,tel_emp,bene_emp,telemer_emp,pasaporte_emp,vigencia_emp,id_tipo_sangre,alergias_emp,id_ecivil,id_cargos, 
		banco_emp,clabe_emp,cuenta_emp,calif_emp,obser_emp,padec_emp,sueldo1_emp,sueldo2_emp,fecha_emp,baja_emp,sexo_emp ) VALUES (DEFAULT,:nuevoNombre,:nuevoApellidoP,:nuevoApellidoM
		 :nuevoAlias,:nuevoNss,:nuevoRfc,:nuevoCurp,:nuevoDepartamento,:nuevoCategoria,:nuevaEspecialidad,:fechaNacimiento,:nuevaEdad,
		 :nuevaCE,:nuevoCalle,:nuevoNumero,:nuevoCp,:nuevaLocalidad,:nuevoCorreo,:nuevoTelefono,:nuevoPerEmer,:nuevoTelEMer,:nuevoPasaporte,:fechaVigencia,
		 :nuevoTipoS,:empAlergias,:nuevoEstadoC,:nuevoPuesto,:nuevoBanco,:nuevoClabe,:nuevoCuenta,null,:empObservaciones,:empPadecimientos,
		 :nuevoSueldo,:nuevoSueldo2,:fechaContrato,1,:nuevoSexo)");


		$stmt->bindParam(":nuevoNombre",$datos["nuevoNombre"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoApellidoP" ,$datos["nuevoApellidoP"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoApellidoM" ,$datos["nuevoApellidoM"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoAlias" ,$datos["nuevoAlias"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoTipoS" ,$datos["nuevoTipoS"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoEstadoC" ,$datos["nuevoEstadoC"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevaEdad" ,$datos["nuevaEdad"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevaCE" ,$datos["nuevaCE"],PDO::PARAM_STR);
		$stmt->bindParam(":fechaNacimiento" ,$datos["fechaNacimiento"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevaEspecialidad" ,$datos["nuevaEspecialidad"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoSexo" ,$datos["nuevoSexo"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoDepartamento" ,$datos["nuevoDepartamento"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoPuesto" ,$datos["nuevoPuesto"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoSueldo" ,$datos["nuevoSueldo"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoSueldo2" ,$datos["nuevoSueldo2"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoNss" ,$datos["nuevoNss"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoRfc" ,$datos["nuevoRfc"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCurp" ,$datos["nuevoCurp"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCategoria" ,$datos["nuevoCategoria"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCp" ,$datos["nuevoCp"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevaLocalidad" ,$datos["nuevaLocalidad"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCalle" ,$datos["nuevoCalle"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoNumero" ,$datos["nuevoNumero"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCorreo" ,$datos["nuevoCorreo"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoTelefono" ,$datos["nuevoTelefono"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoBanco" ,$datos["nuevoBanco"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCuenta" ,$datos["nuevoCuenta"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoClabe" ,$datos["nuevoClabe"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoPerEmer" ,$datos["nuevoPerEmer"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoTelEMer" ,$datos["nuevoTelEMer"],PDO::PARAM_STR);
		$stmt->bindParam(":fechaContrato" ,$datos["fechaContrato"],PDO::PARAM_STR);
		$stmt->bindParam(":nuevoPasaporte" ,$datos["nuevoPasaporte"],PDO::PARAM_STR);
		$stmt->bindParam(":fechaVigencia" ,$datos["fechaVigencia"],PDO::PARAM_STR);
		$stmt->bindParam(":empAlergias" ,$datos["empAlergias"],PDO::PARAM_STR);
		$stmt->bindParam(":empObservaciones" ,$datos["empObservaciones"],PDO::PARAM_STR);
		$stmt->bindParam(":empPadecimientos" ,$datos["empPadecimientos"],PDO::PARAM_STR);


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

	static public function mdlEditarEmpleado($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_irm = :nuevoIdIrm, nombre_emp = : nuevoNombreEmpleado, apellidop_emp = :nuevoApellidoPaternoEmpleado , apellidom_emp = :nuevoApellidoMaternoEmpleado, alias_emp = :nuevoAlias, sexo_emp, id_depto, puesto_emp, sueldo_emp, sueldo emp2, puesto_emp2, espc_emp, nss_emp, rfc_emp, curp_emp, calle_emp, 
		num_call_emp, c_p_emp, id_localidades, correo_emp, tel_emp, banco_emp, clabe_emp, cuenta_emp, foto, ine_emp");
		$stmt->bindParam(":nuevoIdIrm", $datos["nuevoIdIrm"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoNombreEmpleado", $datos["nuevoNombreEmpleado"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoApellidoPaternoEmpleado", $datos["nuevoApellidoPaternoEmpleado"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoApellidoMaternoEmpleado", $datos["nuevoApellidoMaternoEmpleado"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoAlias", $datos["nuevoAlias"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoSexo", $datos["nuevoSexo"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoDepartamento", $datos["nuevoDepartamento"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoPuesto", $datos["nuevoPuesto"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoSueldo", $datos["nuevoSueldo"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoPuesto2", $datos["nuevoPuesto2"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoSueldo2", $datos["nuevoSueldo2"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoEspecialidadEmpleado", $datos["nuevoEspecialidadEmpleado"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoNss", $datos["nuevoNss"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoRfc", $datos["nuevoRfc"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCurp", $datos["nuevoCurp"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCalle", $datos["nuevoCalle"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoNumero", $datos["nuevoNumero"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCp", $datos["nuevoCp"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoIdLocalidades", $datos["nuevoIdLocalidades"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCorreo", $datos["nuevoCorreo"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoTelefono", $datos["nuevoTelefono"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoBanco", $datos["nuevoBanco"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoClabe", $datos["nuevoClabe"], PDO::PARAM_STR);
		$stmt->bindParam(":nuevoCuenta", $datos["nuevoCuenta"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":NuevaIne", $datos["NuevaIne"], PDO::PARAM_STR);

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

	static public function mdlActualizarEmpleado($tabla, $item1, $valor1, $item2, $valor2){

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
	BORRAR Empleado
	=============================================*/

	static public function mdlBorrarEmpleado($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_empleado = :id");

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