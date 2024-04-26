<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body> -->
    
<?php ob_start(); $title = "ajoute d'intervenant";?>
<h2 class="text-center">Ajouter intervernant</h2>

<form action="" method="post">
<input type="hidden" name="id" class="form-control">
    <div class="mb-3">
        <label for="" class="form-label">Nom</label>
        <input type="text" name="nom"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">prenom</label>
        <input type="text" name="prenom"  class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">affectation</label>
        <input type="text" name="affectation" class="form-control">

    <div class="mb-3">
        <label for="" class="form-label">url</label>
        <input type="text" name="url" class="form-control">
    </div>

    <input type="submit" name="ajouInter" class="btn btn-primary">
</form>

<?php
// $content = ob_get_clean();
//     include "Views/template.php";?>
<!-- </body>
</html> -->