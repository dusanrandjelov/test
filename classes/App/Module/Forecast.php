<?php namespace App\Module;

use App\Core;

class Forecast extends Core {

    public function __construct(){
        parent::__construct();
    }

    public function today(){
        $data = [
            'title' => 'Error 404',
            'message' => 'This page isn\'t available.Soory about that<br> Try searching  for something else.'
        ];

        return $this->load_view('forecast/today', $data);

    }
    
}
