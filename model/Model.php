<?php

abstract class Model {
    private $pdo;
    public function __construct(){
        $this->pdo= new PDO("mysql:host=127.0.0.1;dbname=seminaire", "root", "", 
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

    }
    public function excecuteReq($request, array $param=[]){
        $stmt=$this->pdo->prepare($request);
        foreach($param as $cle=>$valeur){
            $param[$cle]=htmlentities($valeur);
        }
        $stmt->execute($param);
        return $stmt; 
    }
    public function getAll($tableau){
        $sql="SELECT * FROM ". $tableau;

        return $this->excecuteReq($query);
        
    }
    public function getConsultation($tab){
        $sql="SELECT * FROM ".$tab;
        return $this->excecuteReq($sql);

    }




}