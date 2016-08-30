<?php

class Router
{
    //масив з маршрутами
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    //Метод який приймає управління від Front Controler
    public function run()
    {
        $uri = $this->getUri();
        //Перевірка такого запиту в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            //Отримуємо внутрішній путь із зовнішнього згідно правила(регулярного виразу)
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //Оприділяємо контролер і екшен з параметрами
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                //Підключаємо файл класа-контролера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Створюємо обєкт визваного метода(тобто екшен)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result !== null) {
                    break;
                }
            }
        }
    }
}