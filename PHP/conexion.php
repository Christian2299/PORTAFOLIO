<?php
class Cconexion{

    function ConexionBD(){
            $host ="localhost";
            $dbname0= "bdmysql";
            $username="root";
            $pasword="";

            try {
               $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$pasword);
               echo "Se conecto correctamente a la base de datos";

            } catch (PDOException $exp) {
               echo("No se logro conectar correctamente con la base de datos:$dbname, error:$exp");
            }
            return $conn;
    }
}
?>