<?php
ini_set('display_errors', 1);
class Database {
    
    function getConnection () {
        
        // variables de connection a la bdd
        $host = "localhost";
        $dbname = "socialNetwork";
        $username = "postgres";
        $password = "0000";
        $port = 5432;

        $connection = null;
        try {
            $connection = new PDO("pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname, $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Erreur de connexion:" . $exception->getMessage();
        }

        return $connection;
    }
}