<?php

namespace App\Controller;

class PageController
{
    // Dans les class, les fonction sont appelé Méthode
    public function home():void
    {
        $this->render("pages/home");
    }

    public function about():void
    {
        $this->render("pages/about");
    }

    protected function render(string $path):void
    {
        // Charger la page demandé
        $filePath = APP_ROOT."/templates/$path.php";

        // On vérifie si le fichier existe
        if(!file_exists($filePath)){
            echo "Le fichier $filePath n'existe pas";
        }
        else{
            require_once $filePath;
        }
    }
}
