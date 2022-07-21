<?php

//front controller


//1. general settings
ini_set ('display_errors',1);
error_reporting(E_ALL);

//2.connection of system files
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/../framework/components/Router.php');

//3.connection to DB


//4.call Router
$router= new Router();
$router->found();

