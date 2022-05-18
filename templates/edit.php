<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit avis !</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body class="w-50 mx-auto pt-5">
    <p>
        <a href="/contact">Page contact</a>
    </p>    

    <form method="post">

        <!-- Affiche un message de succès -->
        <?php if(isset($success) && $success): ?>
            <div class="alert alert-success">
                Eddition avec success !
            </div>
        <?php endif; ?>

        <div class="mb-3">
            <label for="avis" class="form-label">Votre avis</label>
            <textarea class="form-control" id="avis" rows="6" name="avis"><?php echo $editAvis->getContent(); ?></textarea>
        </div>
        <button class="btn btn-outline-primary">Editer</button>
    </form>    
</body>
</html>