<?php

class LoginController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $uName = $_POST['userName'];
        $uPass = $_POST['userPass'];
        $user = new UsersModel;

        if($user->isAuth($uName, $uPass)){
            session_start();
            $_SESSION['user'] = $uName;
            $data['title'] = 'PRIVATE PAGE';
            header("Location: home");
            exit;
        }
        else {
            echo '<h1>You are NOT logged in!</h1>';
            header("Refresh: 3; url = home");
            exit;
        }    
    }
}