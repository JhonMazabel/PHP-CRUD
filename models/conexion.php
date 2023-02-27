<?php 

class Conexion {

    static public function conectar() {
        #PDO("nombre_server; nombre_db", "usuario", "password");
        $link = new PDO("mysql:host=localhost;dbname=curso-php","root","");
        $link -> exec("set names utf8");
        return $link;
    }

}

?>