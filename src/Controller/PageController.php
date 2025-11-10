<?php

namespace App\Controller;

class PageController
{
    // Dans les class, les fonction sont appelé Méthode
    public function home()
    {
        // Charger le fichier
        $filePath = APP_ROOT."/templates/pages/home.php";

        require_once $filePath;
    }
}
