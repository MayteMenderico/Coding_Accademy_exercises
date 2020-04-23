<?php
//data threatment (create is in between our front ND Back end)


require_once("../../framework.php");

$session = new SessionManager();
$user_management = new UserManagement();

//validate the user creation
//isset =verifies if the information exists (name, password, email)
if(isset($_POST)){
    $user_create = $user_management->handleCreateUser($_POST['name'], $_POST['email'], $_POST['password'], $_POST['password_confirmation']);

    if($user_create['success']) {
        $user_select = $user_management->handleGetUser($_POST['email'], $_POST['password']);

        if($user_select) {
            $session->setSMUser([
                "uuid" => $user_select['data'][0]['id'],
                "name" => $user_select['data'][0]['username']
            ]);
            header("Location: ../../../step_1/index.php");
        }
    } else {
        $validation_message = "<ul>";
        foreach($user_create['error'] as $error) {
            $validation_message .= "<li>".$error."</li>";
        }

        $validation_message .= "</ul>";

        $session->setSMError('register', $validation_message);
        header("Location: ../../../step_1/inscription.php");
    }
}

?>