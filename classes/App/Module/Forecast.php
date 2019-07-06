<?php namespace App\Module;

use App\Core;

class Forecast extends Core {

    public function __construct(){
        parent::__construct();
    }

    public function today(){
        $data = [
            'title' => '',
            'message' => ''
        ];

        return $this->load_view('forecast/today', $data);123

    }
    
}
