<?php namespace App;

use App\Lib\Route;
use App\Thems;

class Bootstrap {

    /**
     * @var Route
     */
    public $Route;


    public $module;

    private static $instance;


    private function __construct(){
        
    }

    public static function __instance(){
        if(!self::$instance){
            self::$instance = new Bootstrap();
        }
        return self::$instance;
    }

    public function engage()
    {
        
        $this->Route = new Route();

        $this->module = $this->Route->resolve_url();
        
        $this->loadtheme();

    }

    public function loadtheme(){
        $Thems=new Thems();
        $Thems->load();

    }
   
    

}