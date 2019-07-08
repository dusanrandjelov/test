<?php

$route = [];


$route['/'] = [
    'module' => 'App\Module\Home',
    'method' => 'index'
];
$route['/error'] = [
    'module' => 'App\Module\Error',
    'method' => 'error'
];
$route['/danas']= [
    'module' =>'App\Module\Forecast',
    'method' =>'today'
];
$route['/petdana']= [
    'module' =>'App\Module\Forecast', 
    'method' =>'fiveday'
];
$route['/tridesetdana']= [
    'module' =>'App\Module\Forecast',
    'method' =>'thirtydays'
];
$route['/sezonska']= [
    'module' =>'App\Module\Forecast',
    'method' =>'seasonal'
];
$route['/uvindex']= [
    'module' =>'App\Module\Forecast',
    'method' =>'uvindex'
];

return $route;