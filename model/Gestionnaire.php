<?php
include_once("Utilisateur.php");
class Gestionnaire extends Utilisateur{
   
    public function __construct($donnes){
        parent::__construct($donnes);
        $this->idStatus=Utilisateur::NIVEAU_3;
        
    }
       

}
