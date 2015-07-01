<?php

class AppRouter
{
        public function __construct()
        {
                $url = empty($_GET['url']) ? 'dashboard' : $_GET['url'];
                $urlParts = explode('/', $url);

                $controllerClass = ucfirst($urlParts[0]) . 'Controller';
                $filename = PATH_CONTROLLER . '/' . $controllerClass . '.php';

                if (file_exists($filename)) {
                        $controller = new $controllerClass;
                        $controller->run();
                } else {
                        trigger_error('Can not find file: ' . $filename, E_USER_NOTICE);
                }
        }

}