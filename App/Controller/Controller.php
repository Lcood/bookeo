<?php

namespace App\Controller;

class Controller
{
    /* analyse the route and call the corresponding method (controller
    le controller principal recupère les informations contenues dans l'URL et  appelle les méthodes correspondantes 
    */
    public function route(): void
    {
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    //charger controleur page
                    $pageController = new PageController();
                    $pageController->route();
                    break;

                case 'book':
                    //charger controleur book

                    break;
                default:
                    //Erreur 404
                    break;
            }
        } else {
            // charger la page d'accueil
        }
    }
    protected function render(string $path, array $params = []): void
    {
        // rendre l'affichage dynamique 
        $filePath = _ROOTPATH_ . '/templates/' . $path . '.php';
        //require_once _ROOTPATH_ . '/templates/page/about.php';

        // try catch : gestion des erreurs
        try {
            if (!file_exists($filePath)) {
                //spécifier le fichier non trouvé  avec la concaténation chemin du fichier
                throw new \Exception('Fichier non trouvé: ' . $filePath);
            } else {
                //extrait chaque ligne du tableau et crée des variables pour chaque ligne
                extract($params);
                require_once $filePath;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
