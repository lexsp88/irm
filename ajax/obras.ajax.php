<?php

require_once "../controladores/obras.controlador.php";
require_once "../modelos/obras.modelo.php";

class AjaxObras{

	/*=============================================
	EDITAR USUARIO
	=============================================*/	

	public $idObra;

	public function ajaxEditarObra(){

		$item = "id";
		$valor = $this->idObra;

		$respuesta = ControladorUsuarios::ctrMostrarObras($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ACTIVAR USUARIO
	=============================================*/	

	public $activarObra;
	public $activarId;


	public function ajaxActivarObra(){

		$tabla = "usuarios";

		$item1 = "estado";
		$valor1 = $this->activarObra;

		$item2 = "id";
		$valor2 = $this->activarId;

		$respuesta = ModeloObras::mdlActualizarObra($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*=============================================
	VALIDAR NO REPETIR USUARIO
	=============================================*/	

	public $validarObra;

	public function ajaxValidarObra(){

		$item = "obra";
		$valor = $this->validarObra;

		$respuesta = ControladorObras::ctrMostrarObras($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR USUARIO
=============================================*/
if(isset($_POST["idObra"])){

	$editar = new AjaxUsuarios();
	$editar -> idUsuario = $_POST["idObra"];
	$editar -> ajaxEditarObra();

}

/*=============================================
ACTIVAR USUARIO
=============================================*/	

if(isset($_POST["activarUsuario"])){

	$activarObra = new AjaxObras();
	$activarObra -> activarObra = $_POST["activarObra"];
	$activarObra -> activarId = $_POST["activarId"];
	$activarObra -> ajaxActivarObra();

}

/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

if(isset( $_POST["validarObra"])){

	$valObra = new AjaxObras();
	$valObra -> validarObra = $_POST["validarObra"];
	$valObra -> ajaxValidarObra();

}