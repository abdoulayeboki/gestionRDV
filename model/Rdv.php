<?php
class Rdv{
    private  $idRdv,
    $motifRdv,
    $heureDebut,
    $heureFin,
    $dateRdv,
    $idSecretaire,
    $idPatient,
    $idMedecin;

    public function __construct(array $donnes){
        $this->hydrater($donnes);
    }
    function hydrater(array $donnes ){
        foreach($donnes as $cle=>$value){
            $methode="set".ucfirst($cle);
            if(method_exists($this,$methode)){
                $this-> $methode("$value");
            }
        }
    }
    
    /**
     * @return mixed
     */
    public function getIdRdv()
    {
        return $this->idRdv;
    }
    
    /**
     * @param mixed $idRdv
     */
    public function setIdRdv($idRdv)
    {
        $this->idRdv = $idRdv;
    }
    
    /**
     * @return mixed
     */
    public function getMotifRdv()
    {
        return $this->motifRdv;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @return mixed
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }



    /**
     * @return mixed
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * @param mixed $motifRdv
     */
    public function setMotifRdv($motifRdv)
    {
        $this->motifRdv = $motifRdv;
    }

    /**
     * @param mixed $heureDebut
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    /**
     * @param mixed $heureFin
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    }

    /**
     * @param mixed $dateRdv
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;
    }

    
    /**
     * @return mixed
     */
    public function getIdSecretaire()
    {
        return $this->idSecretaire;
    }
    
    /**
     * @return mixed
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }
    
    /**
     * @param mixed $idSecretaire
     */
    public function setIdSecretaire($idSecretaire)
    {
        $this->idSecretaire = $idSecretaire;
    }
    
    /**
     * @param mixed $idMedecin
     */
    public function setIdMedecin($idMedecin)
    {
        $this->idMedecin = $idMedecin;
    }

    /**
     * @param mixed $idPatient
     */
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }

    
    
    
}