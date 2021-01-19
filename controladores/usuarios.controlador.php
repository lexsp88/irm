<?php

    require_once "sha_seguridad.php";

    class ControladorUsuarios {

       static public function ctrIngresoUsuario() {

            if(isset($_POST["ingUsuario"])) {

                if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingPassword"])) {

                    $encriptar = encryption($_POST["ingPassword"]);

                    $tabla = "usuarios";
                    $item = "usuario";
                    $valor = $_POST["ingUsuario"];

                    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);

                    if(rtrim($respuesta["usuario"]) == $_POST["ingUsuario"] && rtrim($respuesta["password"]) == $encriptar) {

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["usuario"];
                        $_SESSION["foto"] = $respuesta["avatar"];

                        echo '<script>
                            window.location = "inicio";
                        </script>';

                    } else {
                        echo '<div class="alert alert-danger">Error al Ingresar</div>';
                    }

                }
            }
        }


        static public function ctrCrearUsuario() {
            if(isset($_POST["id_usuario"]) ) {

                if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["id_usuario"])){


				$ruta = "";

				if(isset($_FILES["nuevaFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					$directorio = "vistas/img/usuarios/".$_POST["usuario"];

					mkdir($directorio, 0755);
                    
                    // var_dump($_FILES["nuevaFoto"]["type"]);

					 if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){


					$aleatorio = mt_rand(100,999);

                    $ruta = "vistas/img/usuarios/".$_POST["usuario"]."/".$aleatorio.".jpg";


                    $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);	
                    

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

                     }
                     
                     if($_FILES["nuevaFoto"]["type"] == "image/png"){


                        $aleatorio = mt_rand(100,999);
    
                        $ruta = "vistas/img/usuarios/".$_POST["usuario"]."/".$aleatorio.".png";
    
    
                        $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);	
                        
    
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                        imagepng($destino, $ruta);
    
                         }

                }	

                    $tabla = "usuarios";

                    $datos = array(
                        "iduser" => $_POST["id_usuario"],
                        "idrol" => $_POST["id_roles"],
                        "idemp" => $_POST["id_emp"],
                        "user" => $_POST["usuario"],
                        "pass" => encryption($_POST["password"]),
                        "activo" => $_POST["activo"],
                        "finicio" => $_POST["finicio"],
                        "ffinal" => $_POST["ffinal"],
                        "ulogeo" => $_POST["ulogeo"],
                        "avatar" => $ruta  
                    );

                    $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla,$datos);

                    if($respuesta == "ok"){

                        echo '<script>
    
                        swal({
    
                            type: "success",
                            title: "¡El usuario ha sido guardado correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
    
                        }).then(function(result){
    
                            if(result.value){
                            
                                window.location = "usuarios";
    
                            }
    
                        });
                    
    
                        </script>';
    
    
                    }
            } else {
                echo '<script>

                    swal({
                    
                        type: "error",
                        title: "El usuario no puede ir vacio o con caracteres especiales",
                        showConfirmButton:true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "usuarios";
                        }
                    });
                
                </script>';
            }
        
        }
    }

    static public function ctrMostrarUsuarios($item,$valor) {

        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);

        return $respuesta;
    }



    // Editar Usuario

    public function ctrEditarUsuario() {

        if(isset($_POST["editarusuario"])) {

            if(preg_match('/^[0-9]+$/', $_POST["editarid_usuario"])){

                // Validar Imagen

                $ruta = $_POST["fotoActual"];

                if(isset($_FILES["editarFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

                    $directorio = "vistas/img/usuarios/".$_POST["editarusuario"];
                    
                    if(!empty($_POST["fotoActual"])) {

                        unlink($_POST["fotoActual"]);

                    } else {

                        mkdir($directorio, 0755);
                    }

					
                    
                    // var_dump($_FILES["nuevaFoto"]["type"]);

					 if($_FILES["editarFoto"]["type"] == "image/jpeg"){


					$aleatorio = mt_rand(100,999);

                    $ruta = "vistas/img/usuarios/".$_POST["editarusuario"]."/".$aleatorio.".jpg";


                    $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);	
                    

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

                     }
                     
                     if($_FILES["editarFoto"]["type"] == "image/png"){


                        $aleatorio = mt_rand(100,999);
    
                        $ruta = "vistas/img/usuarios/".$_POST["editarusuario"]."/".$aleatorio.".png";
    
    
                        $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);	
                        
    
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                        imagepng($destino, $ruta);
    
                         }

                }	

                $tabla = "usuarios";

                if($_POST["editarpassword"] != "") {

                    if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarpassword"])) {


                        $encriptar = encryption($_POST["editarpassword"]);


                    } else {
                        echo '<script>

                    swal({
                    
                        type: "error",
                        title: "La contraseña no puede ir vacio o con caracteres especiales",
                        showConfirmButton:true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "usuarios";
                        }
                    });
                
                </script>';
                    }
                } else {
                    $encriptar = $passwordActual;
                }

                $datos = array(
                    "iduser" => $_POST["id_usuario"],
                    "idrol" => $_POST["id_roles"],
                    "idemp" => $_POST["id_emp"],
                    "user" => $_POST["usuario"],
                    "pass" => $encriptar,
                    "activo" => $_POST["activo"],
                    "finicio" => $_POST["finicio"],
                    "ffinal" => $_POST["ffinal"],
                    "ulogeo" => $_POST["ulogeo"],
                    "avatar" => $ruta  
                );

                $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla,$datos);

                if($respuesta == "ok") {
                    echo '<script>
    
                        swal({
    
                            type: "success",
                            title: "¡El usuario ha sido modificado correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
    
                        }).then(function(result){
    
                            if(result.value){
                            
                                window.location = "usuarios";
    
                            }
    
                        });
                    
    
                        </script>';
                }

        } else {
            echo '<script>

            swal({
            
                type: "error",
                title: "El nombre no puede ir vacio o con caracteres especiales",
                showConfirmButton:true,
                confirmButtonText: "Cerrar",
                closeOnConfirm: false
            }).then((result)=>{
                if(result.value){
                    window.location = "usuarios";
                }
            });
        
        </script>';
        }
    }
}
    }