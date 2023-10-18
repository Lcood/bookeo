<?php
// on définit le chemin d'origine  grâce à une constante pour le réutilser pour faire référence à des dossiers/ fichiers 
define('_ROOTPATH_', __DIR__);
spl_autoload_register();

use App\Controller\Controller;

$controller = new Controller();
$controller->route();
