<?php

namespace App\Controller;

class PageController extends Controller
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
}
