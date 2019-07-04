<?php


function autoload($ClassName)
{
    
    $ClassName = str_replace('\\', '/', $ClassName);

    $path=__DIR__.'/../'.$ClassName.'.php';

    $path = realpath($path);

    if(!$path){
        die($ClassName . ' is not found!');
    }

    include($path);
}

spl_autoload_register('autoload');