<?php

/**
 * description - start page
 */

/**
 * general settings about errors
 */
ini_set ('display_errors',1);
error_reporting(E_ALL);

/**
 * start session
 */
session_start();

/**
 * attach files
 */
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/../framework/components/Router.php');
require_once(ROOT . '/../framework/DataBase/DataBase.php');

spl_autoload_register(function ($v) {
    include ROOT . '/../app/models/' . $v . '.php';
});

spl_autoload_register(function ($v) {
    include ROOT . '/../framework/config/' . $v . '.php';
});

/**
 * call Router
 */
$router= new Router();
$router->found();

