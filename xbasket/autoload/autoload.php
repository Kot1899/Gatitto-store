<?php

//function Autoload ($name)
//{
//    $filename=$name.'.php';
//    include_once $filename;
//}
//
//spl_autoload_register('Autoload');

spl_autoload_register(function($v) { include
//    'test/'. //string if we looking for from any DIR
    $v .'.php';});
$alex=new \man ('male', 'Alex2');
echo $alex->name;
