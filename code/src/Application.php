<?php


namespace Gb\App;
class Application
{
    private const APP_NAMESPACE = 'Gb\App\Controllers\\';

    private string $controllerName;
    private string $methodName;


    public function Run()
    {
        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if (isset($routeArray[1]) && $routeArray[1] != '') {
            $controllerName = $routeArray[1];
        } else {
            $controllerName = "page";
        }
        $this->controllerName = Application::APP_NAMESPACE . ucfirst($controllerName) . "Controller";
        /**/
        //echo $this->controllerName;

        if (class_exists($this->controllerName)) {
            if (isset($routeArray[2]) && $routeArray[2] != '') {
                $methodName = $routeArray[2];
            } else {
                $methodName = 'index';
            }
            $this->methodName = "action" . ucfirst($methodName);


            if (method_exists($this->controllerName, $this->methodName)) {
                $controllerInstance = new $this->controllerName();
                return call_user_func(
                    [$controllerInstance, $this->methodName],
                    []
                );
            } else {
                echo "Метод не существует";
            }
        } else {
            echo "Класс не существует";
        }


    }


}