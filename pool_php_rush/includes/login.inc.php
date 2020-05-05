<?php
 require_once("dbh.inc.php");

$succeed = true;
$error = [];

if(isset($_POST)){
    if(!preg_match('/[a-z0-9._]+@[a-z0-9_]+\.[a-z]+[.a-z]*/', $_POST['email'])){
        array_push($error, "Invalid email. Example: teste@teste.com");
        $succeed = false;
    }
    if(strlen($_POST['password']) < 3 || strlen($_POST['password']) > 10){
        array_push($error, "Invalid password. Password must contain a minium of 3 characters and max 10 characters");
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

        session_start();

        if($user != false) {
            if(password_verify($_POST['password'], $user['password'])){
                $_SESSION['user']['id'] = $user['id'];
                $_SESSION['user']['name'] = $user['username'];
                $_SESSION['user']['email'] = $user['email'];
                $_SESSION['user']['admin'] = $user['admin'];

                if(!$_SESSION['user']['admin']){
                    header("Location: index.php");
                }

                if($_POST['stay_logged'] == "on") {
                    setcookie('token', session_id(), time() + 5 * 365 * 24 * 60 * 60);
                }

                header("Location: ../index.php");
            } else {
                $_SESSION['error']['login'] = ["Email or Password do not match!"];
                header("Location: ../login.php");
            }
        } else {
            $_SESSION['error']['login'] = ["Email or Password do not match!"];
            header("Location: ../login.php");
        }
    } else {
        
        $_SESSION['error']['login'] = ["Email or Password do not match!"];
        header("Location: ../login.php");
        session_start();
        $_SESSION['error']['login'] = $error;
        header("Location: ../login.php");
    }
}
?>
