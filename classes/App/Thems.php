<?php namespace App;


use App\Bootstrap;

class Thems{

    public $content = "Ucitavanje..";
    public $header;
    public $footer;

    public function __construct(){
        $bootstrap=Bootstrap::__instance();
        $module = new $bootstrap->module['module'];
        $this->content = $module->{$bootstrap->module['method']}();
    } 

    public function load(){

        $this->load_header();
        $this->load_footer();
        
      

        $path=realpath(__DIR__.'/Themes/'.THEME.'/theme.phtml');
        if(!$path){
            die("Theme: ".THEME." not found.");
        }

        $resurce_path = './App/Themes/'.THEME.'/public/';

        require $path;

    }

    public function load_header(){

        $this->load_view('header');

    }


    public function load_footer(){

        $this->load_view('footer');

    }

  
    public function __get($key){
        $path = $path=realpath(__DIR__.'/Themes/'.THEME.'/view/'.$key.'.phtml');
        if(!$path){
            die("Theme view: ".$key." not found.");
        }

        \ob_start(); include $path; $this->{$key} =  ob_get_clean();

        return $this->{$key};
    }


    private function load_view($name){
        
        $path=realpath(__DIR__.'/Themes/'.THEME.'/view/'.$name.'.phtml');
        if(!$path){
            die("Theme view: ".$name." not found.");
        }

        \ob_start(); include $path; $this->{$name} =  ob_get_clean();
    }

}
