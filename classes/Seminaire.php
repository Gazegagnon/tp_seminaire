<?php

class Seminaire{
    private $id_seminaire; // int
    private $identifiantIntervenant; // int
    private $titreIntervention; // string
    private $resumeIntervention; // string
    private $lieu; // string
    private $dateIntervention; // string (ou objet DateTime)
    private $dateDerniereMiseAJour; // string (ou objet DateTime)
    
    // Constructeur
    public function __construct($identifiantIntervenant, $titreIntervention, $resumeIntervention, $lieu, $dateIntervention, $dateDerniereMiseAJour) {
        $this->identifiantIntervenant = $identifiantIntervenant;
        $this->titreIntervention = $titreIntervention;
        $this->resumeIntervention = $resumeIntervention;
        $this->lieu = $lieu;
        $this->dateIntervention = $dateIntervention;
        $this->dateDerniereMiseAJour = $dateDerniereMiseAJour;
    }


    public function getIdentifiantIntervenant() {return $this->identifiantIntervenant;}

	public function getTitreIntervention() {return $this->titreIntervention;}

	public function getResumeIntervention() {return $this->resumeIntervention;}

	public function getLieu() {return $this->lieu;}

	public function getDateIntervention() {return $this->dateIntervention;}

	public function getDateDerniereMiseAJour() {return $this->dateDerniereMiseAJour;}


    public function setIdentifiantIntervenant( $identifiantIntervenant): void {$this->identifiantIntervenant = $identifiantIntervenant;}

	public function setTitreIntervention( $titreIntervention): void {$this->titreIntervention = $titreIntervention;}

	public function setResumeIntervention( $resumeIntervention): void {$this->resumeIntervention = $resumeIntervention;}

	public function setLieu( $lieu): void {$this->lieu = $lieu;}

	public function setDateIntervention( $dateIntervention): void {$this->dateIntervention = $dateIntervention;}

	public function setDateDerniereMiseAJour( $dateDerniereMiseAJour): void {$this->dateDerniereMiseAJour = $dateDerniereMiseAJour;}

	
}