# POO

This is POO MVC for :
- creation comments 
- Edition
- Delete

Explications des dossiers :

- config/ (conserve les différents fichiers de configurations de l'application)
- core/ (contient les fichiers principaux de l'application, comme le router)
- public/ (le point d'entrée de l'application pour un visiteur et contient tous les différents assets)
- src / (contient la logique métier)
    - Controller/ (Traite les informations, communique avec les repository, éventuellement affiche la vue)
    - Entity/ (un fichier par table SQL, représente la structure de celles-ci)
    - Repository/ (un fichier par table SQL, contient toutes les requêtes SQL pour travailler avec la base de données)
- templates/ (contient les vues traitées par le controller et afficher au visiteur)
