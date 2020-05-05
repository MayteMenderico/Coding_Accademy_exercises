<?php 

class DbConnection {
    public $conn = NULL;

    public function __construct(){
        /*
        $dbServername = "localhost";
        $dbUsername = "MayteMenderico";
        $dbPassword = "vCpba1UaGEb8Twkw*";
        $dbName = "php_rush";*/
        $dbServername = "localhost";
        $dbUsername = "Client";
        $dbPassword = "Barcelona.20";
        $dbName = "php_rush";



        
        try {
            $this->conn = new PDO( sprintf("mysql:dbname=%s; host=%s", $dbName, $dbServername), $dbUsername, $dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $err){
            printf("Connection failed! %s", $err->getMessage());
        }
    }
}

?>