<?php

namespace app\controllers;

use app\core\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $newUrl = 'registration';
        $routes = require 'app/config/routes.php';

        if (array_key_exists($newUrl, $routes)) {
            header('Location: /' . $newUrl);
            exit();
        } else {
            echo 'Route ' . $newUrl . 'is not found';
        }
    }
}
