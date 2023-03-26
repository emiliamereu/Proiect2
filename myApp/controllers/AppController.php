<?php

class AppController extends Controller
{

    protected $routes = ['home' => 'HomeController',
                        'produse' => 'ProduseController',
                        'ghid' => 'GhidController',
                        'duolife' => 'DuolifeController',
                        'afacere' => 'AfacereController',
                        'login' => 'LoginController',
                        'logout' => 'LogoutController',
                        'signup' => 'SignupController'
                        ];

    public function __construct(){
        $this->init();
    }

    public function init(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else {
            $page = 'home';
        }

        if(array_key_exists($page, $this->routes)){
            $className = $this->routes[$page];
        }
        else {
            $className = $this->routes['home'];
        }
        new $className;
    }
}