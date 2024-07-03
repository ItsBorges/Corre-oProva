<?php
    class ConnectionFactory{
    static $connection;

     public static function getConnection(){
        if(!isset($connection)){
            $host = "localhost";
            $banco = "vista";
            $usuario = "root";
            $password = "";
            $port = 3307;

            try{
                $connection = new PDO("mysql:host=$host;dbname=$banco;port=$port",$usuario,$password);
                echo "Conectado";
            }catch(PDOException $ex){
                echo "ERRO: ",$ex->getMessage();
            }
        
            return $connection;
        }
    }
}

?>