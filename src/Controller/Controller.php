<?php

namespace App\Controller;

class Controller
{
    protected function render(string $path, array $params = []):void
    {
        // Charger le fichier demandé
        $filePath = APP_ROOT."/templates/$path.php";

        // On vérifie si le fichier existe
        if(!file_exists($filePath)){
            echo "Le fichier $filePath n'existe pas.";
        }
        else{
            // On transforme chaque clé tu tableau en variable
            extract($params);

            require_once $filePath;
        }
    }
}
