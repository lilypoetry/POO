<?php

/**
 * Permet de rediriger l'utilisateur selon une adresse
 * personnalisée
 */
class Router 
    {
        public function dispatch(string $uri = '/')
            {
                // var_dump("Mon URI est : $uri");

                /**
                 * Enregistre la position du point interrogation si celui-ci 
                 * existe '..../delete?id=3'
                 */
                $position = strpos($uri, '?');

                // Si $position est égal à false, alors on nettoie l'URI
                if ($position)
                    {
                        // Ex : /mon/uri?id=12
                        // Le nettoyage rendra ceci : /mon/uri 
                        $uri = substr($uri, 0, $position); // part de 0 jusqu'à la position
                    }
                // var_dump($uri);

                // Si l'URI est différent d'un simple slash
                // "/" = page d'accueil
                if ($uri !== '/')
                    {
                        // Récupère le dernier caractère de l'URI avant le '?'
                        $lastChar = substr($uri, -1, iconv_strlen($uri));

                        // var_dump($lastChar);

                        if ($lastChar === '/')
                        {
                            // Récupère la chaîne sans le dernier caractère
                            $uri = substr($uri, 0, iconv_strlen($uri) -1);

                            // var_dump($uri);
                        }
                    }

                

                // Chargement du fichier de configuration des routes
                require_once '../config/routes.php';
            }
    }