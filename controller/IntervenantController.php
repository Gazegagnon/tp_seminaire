<?php
class IntervenantController extends Controller{
    public function interhttps(){
        $interModel = new IntervernantModel();
        if (isset($_GET["action"])){
            $action=$_GET["action"];
            switch($action){
                case "consultation":
                    $intervenants=$interModel->consulter();
                    // var_dump( $intervenants);
                    $this->render("intervenant/index",[
                        "intervenants"=>$intervenants
                    ]);
                    break;
                case "inscrire":
                    if(isset($_POST["ajouInter"])){
                        extract($_POST);
                        var_dump($_POST);
                        $inter=new Intervenant(0, $nom,$prenom,$affectation,$url);
                        $interModel->create($inter);

                        header("Location: ?action=consultation");
                        exit;
                    }
                    $this->render("intervenant/new");
                    break;
            }

        }else{
            $intervenants=$interModel->consulter();
                    var_dump( $intervenants);
                    $this->render("intervenant/index",[
                        "intervenants"=>$intervenants]);
        }

    }

}