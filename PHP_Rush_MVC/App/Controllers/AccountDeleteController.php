<?php
/*
** EPITECH PROJECT, 2020:
** MVC_Rush_PHP
**
** AccountDeleteController.php
** File description:
**  This file is in charge of manage the data introduced/showed in register.html.twig
**
*/
namespace App\Controllers;

use WebFramework\AppController;
use WebFramework\Router;
use WebFramework\Request;

use App\Models\User;

class AccountDeleteController extends AppController {
    public function account_delete(Request $request) {
        $session = new SessionController();
        
        $result = $this->orm->delete("User", "username='$session->sessionUsername'");
        $result = 1;
        
        
        if($result == 1){
            $success = true;
            $message = "You user has been deleted with success";
        } else{
            $success = false;
            $message = "Has encoutered an uknown error on deletion";
        }
        
        echo json_encode([
            "success" => $success,
            "message" => $message
        ]);
    }
}
    