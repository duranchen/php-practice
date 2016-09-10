<?php

/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/19/16
 * Time: 10:34 PM
 */
class App
{
    protected $routes = [];
    protected $responseStatus = '200 OK';
    protected $responseContentType = 'text/html';
    protected $responseBody = 'Hello world';

    public function addRoute($routePath, \Closure $routeCallback)
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this,__CLASS__);

    }

    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath === $currentPath) {
                $callback();
            }
        }

        header('HTTP/1.1'.$this->responseStatus);
        header('Conten  t-type: '.$this->responseContentType);
        header('Content-length: '.mb_strlen($this->responseBody));
        echo $this->responseBody;
    }
}

$app = new App();
$app->addRoute(
    '/users/josh',
    function () {
        $this->responseContentType = 'application/json;charset=utf8';
        $this->responseBody = '{"name":"Josh"}';
    }
);

$app->dispatch('/users/josh');