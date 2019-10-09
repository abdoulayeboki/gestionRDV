<?php
include_once("Utilisateur.php");
class Secretaire extends Utilisateur{
    private $idService;
    public function __construct($donnes,$id){
    parent::__construct($donnes);
    $this->niveauStatut=Utilisateur::NIVEAU_2;
    $this->idService=$id;
    }
    
    /**
     * @return mixed
     */
    public function getIdService()
    {
        return $this->idService;
    }

    /**
     * @param mixed $idService
     */
    public function setIdService($idService)
    {
        $this->idService = $idService;
    }

    
}