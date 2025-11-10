<?php

// importation de l'autoload
require_once __DIR__ . "/../vendor/autoload.php";

use App\Controller\PageController;

// instanciation : un objet est créé avec la class PageController()
$pageController = new PageController();

// appel de la methode test de la class PageController()
$pageController->test();
