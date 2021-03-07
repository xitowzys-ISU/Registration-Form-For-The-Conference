<?php

use app\core\Router;

require 'app/lib/Dev.php';

spl_autoload_register(function ($class){
    // include 'classes/' . $class . '.class.php';
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path))
    {
        require $path;
    }
});

$router = new Router();

$router->run();