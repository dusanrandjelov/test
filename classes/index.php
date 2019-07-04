<?php 

define('ENVIRONMENT','development');


if(ENVIRONMENT === 'development'){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

define('THEME','MyTheme');

include __DIR__ . '/App/__autoloader.php';

$bootsrap = App\Bootstrap::__instance();

$bootsrap->engage();