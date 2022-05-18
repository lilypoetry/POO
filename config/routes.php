<?php

require_once __DIR__.'../../src/Controller/AvisController.php';
/**
 * Fichier de configuration des routes
 */

switch($uri)
    {
        // Accueil
        case '/': 
            $controller = new AvisController(); 

            // Charge le méthode correspondant à la vue souhaitée
            $controller->insert();
            break;

        // case '/contact':
        //     $controller = new AvisController();
        //     $controller->contact();
        //     break;

        // Affiche tous les avis
        case '/liste':
            $controller = new AvisController();
            $controller->liste();
            break;

        // Supprimer un avis
        case '/delete/avis':
            $controller = new AvisController();
            $controller->delete();
            break;

        // Editer un avis
        case '/edit/avis':
            $controller = new AvisController();
            $controller->edit();
            break;    
        
        default:
            echo '<h1>Erreur 404</h1>';
    }