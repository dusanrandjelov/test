<?php namespace App;

class Core {

    public function __construct(){
        
    }


    public function load_view($path, $data){

        foreach ($data as $key => $value) {
            ${$key} = $value;
        }

        $view_path=realpath( __DIR__ . '/View/' .$path. '.phtml');
        if(!$view_path){
            die("View: ".$path." not found.");
        }


        \ob_start();
        include $view_path;

        return ob_get_clean();
    }
}