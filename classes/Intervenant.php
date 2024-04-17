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
	public function getId() {return $this->id;}

	public function getNom() {return $this->nom;}

	public function getPrenom() {return $this->prenom;}

	public function getAffectation() {return $this->affectation;}

	public function getUrlPageWeb() {return $this->urlPageWeb;}
    

	public function setId( $id): void {$this->id = $id;}

	public function setNom( $nom): void {$this->nom = $nom;}

	public function setPrenom( $prenom): void {$this->prenom = $prenom;}

	public function setAffectation( $affectation): void {$this->affectation = $affectation;}

	public function setUrlPageWeb( $urlPageWeb): void {$this->urlPageWeb = $urlPageWeb;}

	


}
	