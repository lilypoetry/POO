<?php

require_once __DIR__.'../../Repository/AvisRepository.php';
require_once __DIR__.'../../Entity/Avis.php';

class AvisController {

    public function insert()
    {
        // Si le formulaire est envoyé, la superglobale $_POST est
        // remplie des données du formulaire
        if (!empty($_POST)) {

            // Envoyer les infos du formulaire à la classe Avis
            // Instancier l'entité Avis            
            $entity = new Entity\Avis();
            $entity->setContent(htmlspecialchars(strip_tags($_POST['avis'])));

            // Insertion en BDD
            $avisRepository = new AvisRepository();
            $success = $avisRepository->add($entity);
        }

        // La vue correspondant à ce controller
        require_once __DIR__ .'../../../templates/index.php';
    }

    public function contact()
    {
        require_once __DIR__ .'../../../templates/contact.php';
    }

    /**
     * Affiche tous les avis
     * URL d'access : http://avis.test/liste
     */
    public function liste()
    {
        $avisRepository = new AvisRepository();
        $listAvis = $avisRepository->selectAll();

        require_once __DIR__.'../../../templates/liste.php';        
    }
    
    public function delete()
    {
        // var_dump($_GET['id']);

        // Appelle la méthode de suppression dans le repository en lui passant
        // l'ID de l'enregistrement à supprimer
        $avisRepository = new AvisRepository();

        // Receptionner en cas success
        $success = $avisRepository->remove($_GET['id']);

        // Redirige l'utilisateur vers la route "/liste"
        header('Location: /liste?delete='. $success);
    }

    public function edit()
    {     
        $avisRepository = new AvisRepository();
        $editAvis = $avisRepository->selectOne($_GET['id']);

        if (!empty($_POST))
        {
            // Ecrasse l'ancien contenu de l'objet "Avis" par celui du formulaire
            $editAvis->setContent(htmlspecialchars(strip_tags($_POST['avis'])));

            // Transmet objet à une méthode du repository pour mise à jour
            $success = $avisRepository->update($editAvis);

            // Redirige l'utilisateur vers le tableau
            header('Location: /liste?edit='.$success);
        }
        require_once __DIR__.'../../../templates/edit.php';

        
    }
}
