<?php 
require_once "conexion.php";

class ModeloFormularios {
    /* Registro */
    static public function mdlRegistro($tabla, $datos) {
        $query = "INSERT INTO $tabla(nombre,correo,clave) VALUES (:nombre, :correo, :clave)";
        $stmt = Conexion::conectar()->prepare($query);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }

    static public function mdlObtenerUsuarios($tabla, $item, $valor) {

        if ($item == null && $valor == null){
            $query = "SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC";
            $stmt = Conexion::conectar()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $query = "SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC";
            $stmt = Conexion::conectar()->prepare($query);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }

        $stmt->close();
        $stmt = null;
    }

    static public function mdlActualizar($tabla, $datos) {
        if($datos["clave"] != "") {
            $query = "UPDATE $tabla SET nombre = :nombre, correo = :correo, clave=:clave WHERE id = :id";
        } else {
            $query = "UPDATE $tabla SET nombre = :nombre, correo = :correo WHERE id = :id";
        }
        
        $stmt = Conexion::conectar()->prepare($query);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);

        if($datos["clave"] != "") {
            $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
        }
        
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }

    static public function mdlEliminar($tabla, $id) {

        $query = "DELETE FROM $tabla WHERE id = :id";
        
        $stmt = Conexion::conectar()->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }

}


?>