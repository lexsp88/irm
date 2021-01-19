<?php

require_once "../controladores/empleados.controlador.php";
require_once "../modelos/empleados.modelo.php";

class AjaxEmpleados{

	/*=============================================
	EDITAR USUARIO
	=============================================*/	

	public $idEmpleado;

	public function ajaxEditarEmpleado(){

		$item = "id_irm";
		$valor = $this->idEmpleado;

		$respuesta = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ACTIVAR USUARIO
	=============================================*/	

	public $activarEmpleado;
	public $activarId;


	public function ajaxActivarEmpleado(){

		$tabla = "empleados";

		$item1 = "estado";
		$valor1 = $this->activarEmpleado;

		$item2 = "id_irm";
		$valor2 = $this->activarId;

		$respuesta = ModeloEmpleados::mdlActualizarEmpleado($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*=============================================
	VALIDAR NO REPETIR USUARIO
	=============================================*/	

	public $validarEmpleado;

	public function ajaxValidarEmpleado(){

		$item = "id_irm";
		$valor = $this->validarEmpleado;

		$respuesta = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR USUARIO
=============================================*/
if(isset($_POST["idEmpleado"])){

	$editar = new AjaxEmpleados();
	$editar -> idEmpleado = $_POST["idEmpleado"];
	$editar -> ajaxEditarEmpleado();

}

/*=============================================
ACTIVAR USUARIO
=============================================*/	

if(isset($_POST["activarEmpleado"])){

	$activarUsuario = new AjaxUsuarios();
	$activarUsuario -> activarEmpleado = $_POST["activarEmpleado"];
	$activarUsuario -> activarId = $_POST["activarId"];
	$activarUsuario -> ajaxActivarEmpleado();

}

/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

if(isset( $_POST["validarEmpleado"])){

	$valUsuario = new AjaxEmpleados();
	$valUsuario -> validarEmpleado = $_POST["validarEmpleado"];
	$valUsuario -> ajaxValidarEmpleado();

}