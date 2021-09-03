<?php

namespace Axos;

class Route
{
    var $routes = [];

    static function get($action, $callback)
    {

        global $routes;

        $action = trim($action, '/');

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
