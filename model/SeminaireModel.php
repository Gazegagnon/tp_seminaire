<?php
class SeminaireModel extends Model{
    public function create($semi){
        $sql="INSERT INTO seminaire VALUES(NULL,:titre,:resume,:lieu,:intervention,:update,:id_int)";
        $this->excecuteReq($sql,[
            "titre"=>$semi->getTitre(),
            "resume"=>$semi->getResume(),
            "lieu"=>$semi->getLieu(),
            "intervention"=>$semi->getIntervention(),
            "update"=>$semi->getDateupdate(),
            "id_int"=>$semi->getIdInt(),
        ]);
    }
    public function delete($id_seminaire){
        $sql="DELETE FROM seminaire WHERE Id_seminaire=:id_seminaire";
        $this->excecuteReq($sql,[
            "id_seminaire"=>$id_seminaire
        ]);
    }
    public function modifier($semi){
        $sql="UPDATE seminaire SET titre=:titre, resume=:resume, lieu=:lieu, date_intervention=:intervention, date_update=:update WHERE Id_seminaire=:id_seminaire";
        $this->excecuteReq($sql,[
            "id_seminaire"=>$semi->getIdSeminaire(),
            "titre"=>$semi->getTitre(),
            "resume"=>$semi->getResume(),
            "lieu"=>$semi->getLieu(),
            "intervention"=>$semi->getIntervention(),
            "update"=>$semi->getDateupdate(),
            "id_int"=>$semi->getIdInt(),

        ]);
    }
    public function consulter(){
        $sql="SELECT * FROM seminaire";
        $this->excecuteReq($sql);
        $tab=[];
        while($resultat=$this->excecuteReq($sql)->fetch()){
            extract($resultat);
            $tab[]=new Seminaire($Id_seminaire, $titre, $resume, $lieu, $date_intervention, $date_update, $id);
            // $tab=new Intervenant($resultat["id_"],$resultat["nom"],$resultat["prenom"],$resultat["affectation"],$resultat["url_de_la_page_web"]);
        }
        return $tab;

    }


}