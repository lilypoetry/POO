<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List des commentaire</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="w-50 mx-auto pt-5">
    <a href="/" class="btn btn-outline-primary">Ajouter un commentaire</a>

    <!-- Message de confirmation de suppression -->
    <?php if(isset($_GET['delete']) && $_GET['delete']): ?>
        <div class="alert alert success mt-5">
            <span class="text-danger fs-4">La suppression à bien été effectuée</span>
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['edit']) && $_GET['edit']): ?>
        <div class="alert alert-success mt-5">
            L'édition à bien été effectuée
        </div>
    <?php endif; ?>
        
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">AVIS</th>
                <th colspan="2">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listAvis as $avis): ?>
                <tr>
                    <th scope="row"><?php echo $avis->getId(); ?></th>
                    <td><?php echo $avis->getContent(); ?> </td>
                    <td>
                        <!-- http://avis.test/delete/avis?id=1 -->
                        <a href="/delete/avis?id=<?php echo $avis->getId(); ?>" class="btn btn-outline-danger">Supprimer</a> 
                    </td>
                    <td>
                        <!-- http://avis.test/edit/avis?id=1 -->
                        <a href="/edit/avis?id=<?php echo $avis->getId(); ?>" class="btn btn-outline-success">Editer</a> 
                    </td>
                </tr>      
            <?php endforeach; ?>  
        </tbody>
    </table>    
</body>
</html>