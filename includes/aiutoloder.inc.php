<?php
spl_autoload_register('myAutoLoder');

function myAutoLoder($className){
    $path="classes/";
    $extension=".class.php";
    $fullPath=$path . $className . $extension;

    if(! file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;



}