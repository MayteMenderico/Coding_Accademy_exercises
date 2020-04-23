<?php



//will control all session areas
class SessionManager {
    public $message = "";
    
    public function __construct() {
        $this->startSession();
    }

    public function startSession():bool {
        if(!isset($_SESSION)){
            session_start();
            $this->message = "Session started with success!";
            return true;
        } else{
            $message = "Something went wrong with session manager";
            return false;
        }
    }
    //sm=session manager - controls all session parts of our user
    public function getSMUser(string $index):array {
        if(isset($_SESSION['user'])){
            return ["success" => true, "data" => $_SESSION['user'][$index] ];
        }

        return ["success"=>false, "message"=>"Something went wrong with User Session. Please try again!"];
    }

    public function setSMUser(array $data):array {
        try {
            $_SESSION['user'] = $data;
            return ["success"=>true, "data"=> $_SESSION['user']];
        } catch(Exception $err) {
            return ["success"=>false, "message"=>"User session doesn't exist. Please contact the suport!"];
        }
    }

    public function getSMError(string $service=""):array {
        if(isset($_SESSION['error'])){
            if($service == ""){
                return ["success" => true, "data" => $_SESSION['error'] ];
            } else {
                return ["success" => true, "data" => $_SESSION['error'][$service] ];
            }
        }

        return ["success"=>false, "message"=>"Something went wrong with User Session. Please try again!"];
    }

    public function setSMError(string $service, $data):array {
        try {
            $_SESSION['error'][$service] = $data;
            return ["success"=>true, "data"=> $_SESSION['error']];
        } catch(Exception $err) {
            return ["success"=>false, "message"=>"Error session doesn't exist. Please contact the suport!"];
        }
    }
}

?>