<?php
include_once("Utilisateur.php");
class Medecin extends Utilisateur{
    private $idSpecialite;
    public function __construct( $donnes,$id) {
        parent::__construct($donnes);
        $this->niveauStatut=Utilisateur::NIVEAU_1;
        $this->idSpecialite=$id;
    }
    

    /**
     * @return mixed
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }

    /**
     * @param mixed $idSpeciaite
     */
    public function setIdSpecialite($idSpecialite)
    {
        $this->idSpecialite =$idSpecialite;
    }

  
    
}