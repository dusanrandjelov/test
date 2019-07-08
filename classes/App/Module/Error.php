<?php namespace App\Module;

use App\Core;

class Error extends Core {
    
    public function error(){

        $data = [
            'title' => 'Error 404',
            'message' => 'This page isn\'t available.Soory about that<br> Try searching  for something else.'
        ];

        return $this->load_view('error/404', $data);
    }
    
}