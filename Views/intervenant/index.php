<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid text-center">
    <!-- <a class="navbar-brand" href="#">Interface de Gestion des Séminaires et Conférences</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown"><h2>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admin</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Intervenant
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?action=consultation">Liste de intervenants</a></li>
            <li><a class="dropdown-item" href="?action=inscrire">Ajouter un intervenant</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Seminaire
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Liste de seminaires</a></li>
            <li><a class="dropdown-item" href="">Ajouter un seminaire</a></li>
          </ul>
        </li>
      </ul></h2>
    </div>
  </div>
</nav>
<!-- <header class="bg-light p-4">
        <a href="?action=intervenant" class="btn btn-outline-success">Intervenants</a>
        <a href="?action=seminaire" class="btn btn-outline-success">Séminaire</a> -->
        <!-- <a href="?action=#" class="btn btn-outline-success"></a>
        <a href="?action=#" class="btn btn-outline-success"></a> -->
    <!-- </header> -->
   
    <!-- <h2 class="text-center">Location de véhicules</h2> -->
<!-- <br>
    <a href="?action=intervenantAdd">Ajouter</a>
    <br>
<br> -->
    <section class="section">
        <h2 class="text-center">liste de tous les intervenants</h2>
        <table class="table table-striped m-3">
            <tr class="table-dark">

                <th>nom</th>

                <th>prenom</th>

                <th>affectation</th>

                <th>url</th>
                <th>photo</th>
                <th>Action</th>
            </tr>
            <?php 
            foreach($intervenants as $intervenant){?>
                    
                <tr>
                    <td ><a href="?action=gallerie&id=<?= $intervenant->getId()?>"><?= $intervenant->getNom()?></a></td>
                        
                        
                    <td ><?= $intervenant->getPrenom()?></td>
                    
                        
                    <td ><?= $intervenant->getAffectation()?>  </td>
            
            
                    <td ><a href="<?= $intervenant->getUrlPageWeb()?>" target="_blank"><?= $intervenant->getUrlPageWeb()?></a></td>
                    <td><a href="?action=ajouter_photo&id=<?= $intervenant->getId()?>">ajouter une photo</a></td>
                    <td >
                        <a href="#" target="_blank">mod</a>
                        <a href="?action=delete_inter&id=<?= $intervenant->getId()?>" >supprimer</a>
                        <a href="?action=detail&id=<?= $intervenant->getId()?>">detail</a>
                    </td>
                </tr>
                    
            <?php }?>

        </table>

    </section>

    

    <?php
    // $content = ob_get_clean();
    // include "Views/template.php";?>


    
<!-- </body>
</html> -->