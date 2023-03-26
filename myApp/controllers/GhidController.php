<?php

class GhidController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        session_start();
        if(isset($_SESSION['user'])){
            $data['title'] = 'private Ghid';
            $data['mainContent'] = '<h2>Hello, <i>' . $_SESSION['user'] . '</i></h2>';
            echo $this->render(APP_PATH.VIEWS.'paginaPrivata.html', $data);
        }
        else{
            $data['title'] = 'Ghid ';
            $data['mainContent'] = $this->render(APP_PATH.VIEWS.'ghid.html', array());
            echo $this->render(APP_PATH.VIEWS.'ghid.html', $data);
        }

    }
}