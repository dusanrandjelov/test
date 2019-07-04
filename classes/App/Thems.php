<?php namespace App;


use App\Bootstrap;

class Thems{

    public $content = "Ucitavanje..";
    public $header;
    public $footer;
    public $index;
    //public $fivedays;

    public function __construct(){
        $bootstrap=Bootstrap::__instance();
        $module = new $bootstrap->module['module'];
        $this->content = $module->{$bootstrap->module['method']}();
    } 

    public function load(){

        $this->load_header();
        $this->load_footer();
        $this->load_index();
        //$this->load_fivedays();

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

    public function load_index(){

        $this->load_view('index');

    }

   /* public function load_fivedays(){

        $this->load_view('fivedays');
    }
*/

    private function load_view($name){
        
        $path=realpath(__DIR__.'/Themes/'.THEME.'/view/'.$name.'.phtml');
        if(!$path){
            die("Theme view: ".$name." not found.");
        }

        \ob_start(); include $path; $this->{$name} =  ob_get_clean();
    }

}
