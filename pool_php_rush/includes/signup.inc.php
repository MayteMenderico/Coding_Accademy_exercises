<?php
 require_once("dbh.inc.php");

$succeed = true;
$error = [];

if(isset($_POST)){
    if(strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10){
        array_push($error, "Invalid name. Name must contain a minium of 3 characters and max 10 characters");
        $succeed = false;
    }

    if(!preg_match('/[a-z0-9._]+@[a-z0-9_]+\.[a-z]+[.a-z]*/', $_POST['email'])){
        array_push($error, "Invalid email. Example: teste@teste.com");
        $succeed = false;
    }
    if(strlen($_POST['password']) < 3 || strlen($_POST['password']) > 10){
        array_push($error, "Invalid password. Password must contain a minium of 3 characters and max 10 characters");
        $succeed = false;
    }
    
    if(strlen($_POST['confirm_password']) < 3 && strlen($_POST['confirm_password']) > 10 || $_POST['password'] != $_POST['confirm_password']){
        array_push($error, "Invalid password confirmation. Password Confirmation must contain a minium of 3 characters and max 10 characters and must be equal with Password");
        $succeed = false;
    }

    if($succeed) {
        $dbConn = new DbConnection();

        $query = "SELECT * FROM users WHERE email=:EMAIL";

        $params = [
            ":EMAIL" => $_POST['email']
        ];

        $stmt = $dbConn->conn->prepare($query);

        foreach($params as $key => &$value){
            $stmt->bindParam($key, $value);
        }

        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            $query = "INSERT INTO users(username, email, password, admin) VALUES (:NAME, :EMAIL, :PASS, :ADMIN)";
    
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
            $params = [
                ":NAME" => $_POST['name'],
                ":EMAIL" => $_POST['email'],
                ":PASS" => $password,
                ":ADMIN" => 0
            ];
    
            $stmt = $dbConn->conn->prepare($query);
    
            foreach($params as $key => &$value){
                $stmt->bindParam($key, $value);
            }
    
            $stmt->execute();

            if($_POST['stay_logged'] == "on") {
                setcookie('token', session_id(), time() + 5 * 365 * 24 * 60 * 60, "/");
            }

            header("Location: ../index.php");
        } else {
            session_start();
            $_SESSION['error']['register'] = ['User email already exist.'];
            header("Location: ../inscription.php");
        }

    } else{
        session_start();
        $_SESSION['error']['register'] = $error;
        header("Location: ../inscription.php");
    }
    
}
?>