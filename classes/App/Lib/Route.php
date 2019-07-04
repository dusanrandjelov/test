<?php namespace App\Lib;

class Route {

    private $routes = [];

    private $uri = '';

    private $route = null;

    public function __construct(){
       $this->routes = include (__DIR__.'/../configs/routes.php');
    }


    public function resolve_url(){

        $uri = ($_SERVER['REQUEST_URI']);
        $n = str_replace('index.php','',$_SERVER['PHP_SELF']);
        $s = \substr($uri, strlen($n)-1);

        $this->uri = $s;

        foreach($this->routes as $key => $route){
            if($key === $this->uri){
                $this->route = $route;
                break;
            }
        }

        if(! $this->route){
            $this->route = $this->routes['/error'];
        }

        return $this->route;
    }

    public function getUri(){ return $this->uri; }
} 

