<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    //appeler la méthode about
                    $this->about();
                    break;

                case 'home':
                    //appeler la méthode home

                    break;
                default:
                    //Erreur 404
                    break;
            }
        } else {
            // charger la page d'accueil
        }
    }
    protected function about()
    {
        $params = [];

        $this->render('page/about.php', $params);
    }
}
