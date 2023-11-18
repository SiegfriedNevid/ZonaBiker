<?php 

class Cconexion{

  public function conexionBD(){

        $host="localhost";
        $dbnom="ZONABIKER";
        $usuario="zonabiker";
        $contra="root";
        $puerto=1433;

        try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbnom",$usuario,$contra);
            echo "¡Conexion exitosa!";
        }
        catch (PDOException $exp){

            echo ("No se logro contar con la BD: $dbname, error: $exp");
        }
        return $conn;
    }
}

?>