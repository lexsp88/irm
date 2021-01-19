<?php

class ControladorEmpleados{

	/*=============================================
    REGISTRO DE empleado
	=============================================*/

	static public function ctrCrearEmpleado(){
		//error_reporting(0);
		//if(isset($_POST["nuevoIdIrm"])){

			if(1==1){

				$tabla = "empleados";
				
				$datos = array(
					            "nuevoNombre" => $_POST["nuevoNombre"],
								"nuevoApellidoP" => $_POST["nuevoApellidoP"],
								"nuevoApellidoM" => $_POST["nuevoApellidoM"],
								"nuevoAlias" => $_POST["nuevoAlias"],
								"nuevoTipoS" => $_POST["nuevoTipoS"],
								"nuevoEstadoC" => $_POST["nuevoEstadoC"],
								"nuevaEdad" => $_POST["nuevaEdad"],
								"nuevaCE" => $_POST["nuevaCE"],
								"fechaNacimiento" => $_POST["fechaNacimiento"],
								"nuevaEspecialidad" => $_POST["nuevaEspecialidad"],
								"nuevoSexo" => $_POST["nuevoSexo"],
								"nuevoDepartamento" => $_POST["nuevoDepartamento"],
								"nuevoPuesto" => $_POST["nuevoPuesto"],
								"nuevoSueldo" => $_POST["nuevoSueldo"],
								"nuevoSueldo2" => $_POST["nuevoSueldo2"],
								"nuevoNss" => $_POST["nuevoNss"],
								"nuevoRfc" => $_POST["nuevoRfc"],
								"nuevoCurp" => $_POST["nuevoCurp"],
								"nuevoCategoria" => $_POST["nuevoCategoria"],
								"nuevoCp" => $_POST["nuevoCp"],
								"nuevaLocalidad" => $_POST["nuevaLocalidad"],
								"nuevoCalle" => $_POST["nuevoCalle"],
								"nuevoNumero" => $_POST["nuevoNumero"],
								"nuevoCorreo" => $_POST["nuevoCorreo"],
								"nuevoTelefono" => $_POST["nuevoTelefono"],
								"nuevoBanco" => $_POST["nuevoBanco"],
								"nuevoCuenta" => $_POST["nuevoCuenta"],
								"nuevoClabe" => $_POST["nuevoClabe"],
								"nuevoPerEmer" => $_POST["nuevoPerEmer"],
								"nuevoTelEMer" => $_POST["nuevoTelEMer"],
								"fechaContrato" => $_POST["fechaContrato"],
								"nuevoPasaporte" => $_POST["nuevoPasaporte"],
								"fechaVigencia" => $_POST["fechaVigencia"],
								"empAlergias" => $_POST["empAlergias"],
								"empObservaciones" => $_POST["empObservaciones"],
								"empPadecimientos" => $_POST["empPadecimientos"]
							);
							var_dump($datos);
				$respuesta = ModeloEmpleados::mdlIngresarEmpleado($tabla, $datos);
							
				//"nuevaObraEmp" => $_POST["nuevaObraEmp"],
				//"foto"=>$ruta,
							   //"NuevaIne"=>$ruta;

				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El empleado ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "empleados";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El empleado no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "empleados";

						}

					});
				

				</script>';

			}


		


	}

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarEmpleados($item, $valor){

		$tabla = "empleados";

		$respuesta = ModeloEmpleados::MdlMostrarEmpleados($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarEmpleado(){

		if(isset($_POST["editarEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActual"];

				if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/empleados/".$_POST["editarEmpleado"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActual"])){

						unlink($_POST["fotoActual"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/empleados/".$_POST["editarEmpleado"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/empleados/".$_POST["editarEmpleado"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "empleados";

				if($_POST["editarPassword"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result){
										if (result.value) {

										window.location = "usuarios";

										}
									})

						  	</script>';

					}

				}else{

					$encriptar = $_POST["passwordActual"];

				}

				$datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "password" => $encriptar,
							   "perfil" => $_POST["editarPerfil"],
							   "foto" => $ruta);

				$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR EMPLEADO
	=============================================*/

	static public function ctrBorrarEmpleado(){

		if(isset($_GET["idEmpleado"])){

			$tabla ="empleados";
			$datos = $_GET["idEmpleado"];

			if($_GET["fotoEmpleado"] != ""){

				unlink($_GET["fotoEmpleado"]);
				rmdir('vistas/img/empleados/'.$_GET["empleado"]);

			}

			$respuesta = ModeloEmpleados::mdlBorrarEmpleado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El empleado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "empleados";

								}
							})

				</script>';

			}		

		}

	}


}
	


