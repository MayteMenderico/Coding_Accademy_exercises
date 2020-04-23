<?php

// Validate the user selection

require_once("../../framework.php");

$session = new SessionManager();
$user_management = new UserManagement();

if(isset($_POST)){

    $user_select = $user_management->handleGetUser($_POST['email'], $_POST['password']);

    var_dump($user_select);
    if($user_select['success']) {
        $session->setSMUser([
            "uuid" => $user_select['data'][0]['id'],
            "name" => $user_select['data'][0]['username']
        ]);
        //header("Location: ../../../step_1/index.php");
    } else {
        $validation_message = "<ul>";
        foreach($user_select['error'] as $error) {
            $validation_message .= "<li>".$error."</li>";
        }

        $validation_message .= "</ul>";

        $session->setSMError('login', $validation_message);
        //header("Location: ../../../step_1/login.php");
    }
}


?>