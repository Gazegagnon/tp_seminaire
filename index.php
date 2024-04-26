<?php

include "classes/Intervenant.php";
include "classes/Seminaire.php";
include "model/Model.php";
include "model/IntervenantModel.php";
include "model/SeminaireModel.php";
include "controller/Controller.php";
include "controller/IntervenantController.php";

$interController = new IntervenantController();
$interController->interhttps();


// $intre = new Intervenant(0, "BANCE", "Hamidou", "www.google.com");
// $interModel = new IntervenantModel();
// $interModel->create($inter);