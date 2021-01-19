<?php
	include ('datosConexion.php');

	class Conexion{

		function conectar(){
			try {
				$link = new PDO("pgsql:host=".SERVER.";dbname=".DBNAME, USER, PASS);

				$link -> exec("set names utf8");

				return $link;
			}
			catch (Exception $error){
				die("El error de conexion es: ".$error->getMessage());
			}
		}

	}
?>
