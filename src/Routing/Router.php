<?php

namespace App\Routing;

class Router
{
    // On charge toutes les routes dans un tableau routes
    private $routes;

    public function __construct()
    {
        $this->routes = require_once APP_ROOT."/config/routes.php";
    }

    // Methode qui va analiser le fichier et voir si on a une route qie correspond a l'url
    public function handleRequeste(string $uri)
    {
        echo $uri;
    }
}
