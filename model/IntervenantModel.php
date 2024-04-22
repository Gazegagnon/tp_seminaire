<?php
class IntervernantModel extends Model{
    public function create($inter){
        $sql="INSERT INTO intervenant VALUES(NULL,:nom,:prenom,:affectation,:url)";
        $this->excecuteReq($sql,[
            "nom"=>$inter->getNom(),
            "prenom"=>$inter->getPrenom(),
            "affectation"=>$inter->getAffectation(),
            "url"=>$inter->getUrl()
        ]);
    }
    public function delete($id){
        $sql="DELETE FROM intervenant WHERE id_=:id";
        $this->excecuteReq($sql,[
            "id"=>$id
        ]);
    }
    public function modifier($inter){
        $sql="UPDATE intervenant SET nom=:nom, prenom=:prenom, affectation=:affectation, url_de_la_page_web=:url WHERE id_=:id";
        $this->excecuteReq($sql,[
            "id"=>$inter->getId(),
            "nom"=>$inter->getNom(),
            "prenom"=>$inter->getPrenom(),
            "affectation"=>$inter->getAffectation(),
            "url"=>$inter->getUrl()
        ]);
    }
    public function consulter(){
        $stmt=$this->getAll("intervenant");
        $tab=[];
        while($resultat=$stmt->fetch()){
            extract($resultat);
            $tab=new Intervenant($id_, $nom, $prenom, $affectation, $url_de_la_page_web);
            // $tab=new Intervenant($resultat["id_"],$resultat["nom"],$resultat["prenom"],$resultat["affectation"],$resultat["url_de_la_page_web"]);
        }
        return $tab;

    }


}
