<?php
spl_autoload_register('myAutoLoder');

function myAutoLoder($className){
    $path="classes/";
    $extension=".class.php";
    $fullPath=$path . $className . $extension;

    include_once $fullPath;



}