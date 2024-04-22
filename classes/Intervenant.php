<?php

class Intervenant{
    private $id; // int
    private $nom; // string
    private $prenom; // string
    private $affectation; // string
    private $urlPageWeb; // string


// Constructeur
    public function __construct( $id,  $nom,  $prenom,  $affectation,  $urlPageWeb){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->affectation = $affectation;
        $this->urlPageWeb = $urlPageWeb;
    }

	public function getId():int {return $this->id;}

	public function getNom():string {return $this->nom;}

	public function getPrenom():string {return $this->prenom;}

	public function getAffectation():string {return $this->affectation;}

	public function getUrlPageWeb():string {return $this->urlPageWeb;}
    

	public function setId(int $id): void {$this->id = $id;}

	public function setNom(string $nom): void {$this->nom = $nom;}

	public function setPrenom(string $prenom): void {$this->prenom = $prenom;}

	public function setAffectation(string $affectation): void {$this->affectation = $affectation;}

	public function setUrlPageWeb(string $urlPageWeb): void {$this->urlPageWeb = $urlPageWeb;}

	


}
	