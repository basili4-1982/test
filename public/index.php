<?php

use inc\Events;

require "../bootstrap.php";


if (empty($_GET['q'])) {
    $class = 'Site';
    $action = 'index';
} else {
    list($class, $action) = explode('/', $_GET['q']);
}


try {
    if (file_exists(__DIR__ . "/../controllers/" . $class . ".php")) {
        $class = "controllers\\" . $class;
        $c = new $class;
        
        if (method_exists($c, $action)) {
            call_user_func([$c, $action]);
        } else {
            Events::trigger('error404');
        }
    } else {
        Events::trigger('error404');
    }
} catch (Exception $e) {
    /**
     * @var $route \inc\Route
     */
    $route->toPage($route->error($e));
}