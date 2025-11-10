<?php

// importation de l'autoload
require_once __DIR__ . "/../vendor/autoload.php";

// On définit une constante pour avoir le chemin racine de l'app
define('APP_ROOT', dirname(__DIR__));

use App\Routing\Router;

// instanciation : un objet est créé avec la class PageController()
$router = new Router();

// appel de la methode home de la class PageController()
$router->handleRequeste($_SERVER["REQUEST_URI"]);

