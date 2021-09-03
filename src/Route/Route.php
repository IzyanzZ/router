<?php

namespace Axos;

class Route
{
    var $route = [];

    static function get($action, $callback)
    {

        global $route;

        $action = trim($action, "/");

        $routes[$action] = $callback;
    }

    static function dispatch($action)
    {
        global $routes;

        $action = trim($action, '/');

        $callback = $routes[$action];

        call_user_func($callback);
    }
}
