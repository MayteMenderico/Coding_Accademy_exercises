<?php

require_once("SystemConnect.php");

class UserManagement extends SystemConnect {

    public function handleCreateUser(string $name, string $email, string $password, string $confirm_password):array {
        $succeed = true;
        $errorList = [];
        
        if(strlen($name) < 3 || strlen($name) > 10){
            array_push($errorList, "Invalid name. Name must contain a minium of 3 characters and max 10 characters");
            $succeed = false;
        }
    
        if(!preg_match('/[a-z0-9._]+@[a-z0-9_]+\.[a-z]+[.a-z]*/', $email)){
            array_push($errorList, "Invalid email. Example: teste@teste.com");
            $succeed = false;
        }
        if(strlen($password) < 3 || strlen($password) > 10){
            array_push($errorList, "Invalid password. Password must contain a minium of 3 characters and max 10 characters");
            $succeed = false;
        }
        
        if(strlen($confirm_password) < 3 && strlen($confirm_password) > 10 || $password != $confirm_password){
            array_push($errorList, "Invalid password confirmation. Password Confirmation must contain a minium of 3 characters and max 10 characters and must be equal with Password");
            $succeed = false;
        }

        if($succeed) {
            $create_user = $this->createUser($name, $email, $password, $confirm_password);
            return ["success" => True, "message" => "Soon"];
        } else{ 
            return ["success" => false, "message" => "Validation error.", "error" => $errorList];
        }
    }

    private function createUser(string $name, string $email, string $password, string $confirm_password):array {

        $query = "INSERT INTO users(username, email, password, admin) VALUES (:NAME, :EMAIL, :PASS, :ADMIN)";

        $params = [
            ":NAME" => $name,
            ":EMAIL" => $email,
            ":PASS" => $password,
            ":ADMIN" => 0
        ];

        $create_user = $this->insert($query, $params);

        return [];

    }

    public function handleGetUser(string $email, string $password):array {
        $succeed = true;
        $errorList = [];

        if(isset($email)){
            if(!preg_match('/[a-z0-9._]+@[a-z0-9_]+\.[a-z]+[.a-z]*/', $email)){
                array_push($errorList, "Invalid email. Example: teste@teste.com");
                $succeed = false;
            }
        }
    
        if(isset($password)){
            if(strlen($password) < 3 || strlen($password) > 10){
                array_push($errorList, "Invalid password. Password must contain a minium of 3 characters and max 10 characters");
                $succeed = false;
            }
        }

        if($succeed) {
            return $get_user = $this->getUser($email, $password);
        } else{
            return ["success" => false, "message" => "Validation error.", "error" => $errorList];
        }        
    }

    private function getUser(string $email, string $password):array {
        $query = "SELECT * FROM users WHERE email=:EMAIL AND password=:PASS";

        $params = [
            ":EMAIL" => $email,
            ":PASS" => $password
        ];

        $get_user = $this->select($query, $params);

        var_dump( $get_user->fetchAll(PDO::FETCH_ASSOC) );

        if(intval($get_user->fetchColumn()) > 0){
            return ["success" => true, "data" => $get_user->fetchAll((PDO::FETCH_ASSOC))];
        } else{
            return ["success" => false, "error" => ["Email or Password wrong!"]];
        }

    }
}

?>