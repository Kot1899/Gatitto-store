<?php


class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/../framework/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     *
     * get uri request
     */
    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], "/");
    }
    }

    public function found()
    {
        //get uri
        $uri = $this->getUri();
        echo $uri;


//check in routes
        foreach ($this->routes as $uriPattern => $path) {
            //check uri
            if (preg_match("~$uriPattern~", $uri)) {


                $segments = explode('/', $path);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments)); //create action

                echo $controllerName . "<br>";
                echo $actionName;

                //connection my controller
                $controllerFile = ROOT . '/../../app/controllers' . $controllerName . 'php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //create obj and call method
                $controllerObj = new $controllerName;
                $result = $controllerObj->$actionName();
                if ($result = !null) {
                    break;
                }
            }
        }
    }
}


echo 'hello test';
