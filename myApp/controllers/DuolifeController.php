<?php

class DuolifeController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){

        session_start();
        if(isset($_SESSION['user'])){
            $data['title'] = 'private HOMEPAGE';
            $data['mainContent'] = '<h2>Hello, <i>' . $_SESSION['user'] . '</i></h2>';
            echo $this->render(APP_PATH.VIEWS.'paginaPrivata.html', $data);
        }
        else{
            $data['title'] = 'Home';
            $user = new UsersModel;
            $data['mainContent'] = $user->displayData();
            echo $this->render(APP_PATH.VIEWS.'duolife.html', $data);
        }

    }
}