<?php

namespace SquidStellar;

use PDOException;
use PDO;

class Database {

    public $mysql;

    public function __construct(){

        try{
            $this->mysql = $this->getConnection();
            echo "Transmisión realizada con éxito a la base";
        }
        catch(PDOException $e){
            echo "Transmisión interceptada: " . $e->getMessage();
        }
    }

    private function getConnection(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "stellarcommander";

        //el nombre de base de datos habría que revisar si es correcto
        
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host={$host};dbname={$database};charset{$charset}", $user, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    }
}

?>