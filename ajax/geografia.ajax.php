<?php
require_once "../modelos/catalogo.modelo.php";

class AjaxMunicipio{

	/*=============================================
	Leer Municipio
	=============================================*/	

	public $idEstado;

	public function ajaxLeerMunicipio(){
        $idEstado = $_POST["id_estado"];
        $tabla = "municipios";
		$item = "id_estado";
		$valor = $this->idEstado;
		$respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

        $resultado = '<option value="">Selecionar Municipio</option>';
        foreach ($respuesta as $opciones){

            $resultado = $resultado.'<option value="'.$opciones['id_municipio'].'">'.$opciones['nombre'].'</option>';

        }
        echo $resultado;

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["id_estado"])){
	$municipio = new AjaxMunicipio();          
	$municipio -> idEstado = $_POST["id_estado"];
	$municipio -> ajaxLeerMunicipio();
}
