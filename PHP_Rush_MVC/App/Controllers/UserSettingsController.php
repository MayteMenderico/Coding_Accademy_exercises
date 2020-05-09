<?php
/*
** EPITECH PROJECT, 2020:
** MVC_Rush_PHP
**
** AuthController.php
** File description:
**  This file is in charge of manage the data introduced/showed in register.html.twig
**
*/
namespace App\Controllers;

use WebFramework\AppController;
use WebFramework\Router;
use WebFramework\Request;

use App\Models\User;

class UserSettingsController extends AppController {
  public function settings_view(Request $request) {

    $userList = $this->orm->select("User");
    session_start();

    $sessionUsername = $_SESSION["username"];
    if(empty($_SESSION["username"])){
      $sessionUsername = $_COOKIE['username'];
    }



    // Render the settings_view in userSettings.html.twig
    return $this->render('userSettings.html.twig', ['base' => $request->base, 'sessionUsername' => $sessionUsername]);
  }

  public function settings(Request $request) { 

  }
}
