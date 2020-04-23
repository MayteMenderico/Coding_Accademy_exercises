<?php
//creating class to connect with database
class SystemConnect {
    protected $conn = NULL;

    //db = database//
    protected $dbUrl = "localhost"; 
    protected $dbUsername = "MayteMenderico";
    protected $dbPassword = "vCpba1UaGEb8Twkw*";
    protected $dbDatabase = "php_rush";

    public function __construct() {
        try {
            $this->conn = new PDO( sprintf("mysql:dbname=%s; host=%s", $this->dbDatabase, $this->dbUrl), $this->dbUsername, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $err){
            printf("Connection failed! %s", $err->getMessage());
        }

        return $this->conn;
    }

    private function setParams($stmt, $params=array()){
        foreach($params as $key => $value){
            $this->setParam($stmt, $key, $value);
        }
    }

    private function setParam($stmt, $key, $value){
        $stmt->bindParam($key, $value);
    }

    public function query(string $rawQeury, array $params=array()){
        $stmt = $this->conn->prepare($rawQeury);

        $this->setParams($stmt, $params);

        $stmt->execute();
        
        return $stmt;
    }

    public function select(string $rawQuery, array $params=array()) {
        $stmt = $this->query($rawQuery, $params);

        return $stmt;
    }

    public function insert(string $rawQuery, array $params=array()) {
        $stmt = $this->query($rawQuery, $params);

        return $stmt;
    }
}

?>