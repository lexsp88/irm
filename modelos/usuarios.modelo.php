<?php

    require_once "conexion.php";

    class ModeloUsuarios {

        static public function MdlMostrarUsuarios($tabla,$item,$valor) {

            if($item != null) {

                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

                $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
    
                $stmt->execute();
    
                return $stmt->fetch();


            } else {

                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    
                $stmt->execute();
    
                return $stmt->fetchAll();

            }

           

            $stmt->close();

            $stmt = null;
        }


        static public function mdlIngresarUsuario($tabla,$datos) {

            $stmt = Conexion::conectar()->prepare("INSERT INTO 
            
            $tabla(id_usuario,id_roles,id_emp,usuario,password,activo,finicio,ffinal,ulogeo,avatar) VALUES(:iduser,:idrol,:idemp,:user,:pass,:activo,:finicio,:ffinal,:ulogeo,:avatar)");
           
            $stmt->bindParam(":iduser",$datos["iduser"]);
            $stmt->bindParam(":idrol",$datos["idrol"]);
            $stmt->bindParam(":idemp",$datos["idemp"]);
            $stmt->bindParam(":user",$datos["user"]);
            $stmt->bindParam(":pass",$datos["pass"]);

            $stmt->bindParam(":activo",$datos["activo"]);
            $stmt->bindParam(":finicio",$datos["finicio"]);
            $stmt->bindParam(":ffinal",$datos["ffinal"]);
            $stmt->bindParam(":ulogeo",$datos["ulogeo"]);
            $stmt->bindParam(":avatar",$datos["avatar"]);
           
    
            if($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }

            $stmt->close();

            $stmt = null;

        }


        // Editar Usuario

        static public function mdlEditarUsuario($tabla, $datos) {

            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
            id_usuario = :id_user, id_roles = :idrol, id_emp = :idemp, password = :pass,activo = :activo, finicio = :finicio, ffinal = :ffinal, ulogeo = :ulogeo, avatar = :avatar WHERE usuario = :user");

            $stmt->bindParam(":iduser",$datos["iduser"]);
            $stmt->bindParam(":idrol",$datos["idrol"]);
            $stmt->bindParam(":idemp",$datos["idemp"]);
            $stmt->bindParam(":pass",$datos["pass"]);

            $stmt->bindParam(":activo",$datos["activo"]);
            $stmt->bindParam(":finicio",$datos["finicio"]);
            $stmt->bindParam(":ffinal",$datos["ffinal"]);
            $stmt->bindParam(":ulogeo",$datos["ulogeo"]);
            $stmt->bindParam(":avatar",$datos["avatar"]);

            if($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }

            $stmt->close();

            $stmt = null;
        }
    }


?>