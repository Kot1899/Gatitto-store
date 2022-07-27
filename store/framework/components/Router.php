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
//        echo 'my route is - '.$uri.'<br>'.'<br>';


//check in routes
        foreach ($this->routes as $uriPattern => $path) {
            //check uri
            if (preg_match("~$uriPattern~", $uri)) {

                //get inroute from outroute by my rules from route.php
                $internalRoute=preg_replace("*$uriPattern*", $path, $uri);
                    // echo 'internal route- '.$internalRoute. "<br>". "<br>";

                //set controller, action
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments)); //create action
                $param=$segments;

//                    echo 'controller which do now - '.$controllerName . "<br>";
//                    echo 'action which do now - '.$actionName. "<br>". "<br>";

                //connection my controller
                $controllerFile =ROOT. '/../app/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
//                    echo' controller '.   $controllerFile .' was connection';
                }else
                {
                    echo '<br>'.'Vitali, u do not  include your controller, was some problem';
                }

                //create obj and call method
                $controllerObj = new $controllerName;
                $result = call_user_func_array(array($controllerObj,$actionName), $param);
                if ($result = !null) {
                    break;
                }

            }
        }
    }
}


//echo 'hello test';
