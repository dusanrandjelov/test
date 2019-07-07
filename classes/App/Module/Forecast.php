<?php namespace App\Module;

use App\Core;

class Forecast extends Core {

    public function __construct(){
        parent::__construct();
    }

    public function today(){
        $data = [
            'title' => 'Vremenska prognoza',
            'message' => 'Danasnja vremneska prognoza'
        
        ];

        return $this->load_view('forecast/today', $data);

    }
    // public function fivedays(){
    //     $data=[
    //         'title' => 'Vremenska prognoza',
    //         'message' => 'Vremneska prognoza za 5 dana'
            
    //     ];
    //     return $this->load_view('forecast/fivedays',$data);
    // }
    // public function thirtydays(){
    //     $data=[
    //         'title' => 'Vremenska prognoza',
    //         'message' => 'Vremneska prognoza za 30 dana'
            
    //     ];
    //     return $this->load_view('forecast/thirtydays',$data);
    // }
    // public function seasonal(){
    //     $data=[
    //         'title' => 'Vremenska prognoza',
    //         'message' => 'Sezonska vremenska prognoza',
    //         'url' =>'http://localhost/test/classes/App/View/forecast/seasonal.phtml'
    //     ];
    //     return $this->load_view('forecast/seasonal',$data);
    // }
    // public function uvindex(){
    //     $data=[
    //         'title' => 'Vremenska prognoza',
    //         'message' => 'UV Index'
    //     ];
    //     return $this->load_view('forecast/uvindex',$data);
    // }
}
