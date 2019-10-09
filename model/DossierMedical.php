<?php
class DossierMedical{
    private $nomExamen,
            $resultatExamen,
            $ordonnance,
            $dateExamen,
            $idUtilisateur,
            $idPatient;
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
    public function getNomExamen()
    {
        return $this->nomExamen;
    }

    /**
     * @return mixed
     */
    public function getResultatExamen()
    {
        return $this->resultatExamen;
    }

    /**
     * @return mixed
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * @return mixed
     */
    public function getDateExamen()
    {
        return $this->dateExamen;
    }

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * @param mixed $nomExamen
     */
    public function setNomExamen($nomExamen)
    {
        $this->nomExamen = $nomExamen;
    }

    /**
     * @param mixed $resultatExamen
     */
    public function setResultatExamen($resultatExamen)
    {
        $this->resultatExamen = $resultatExamen;
    }

    /**
     * @param mixed $ordonnance
     */
    public function setOrdonnance($ordonnance)
    {
        $this->ordonnance = $ordonnance;
    }

    /**
     * @param mixed $dateExamen
     */
    public function setDateExamen($dateExamen)
    {
        $this->dateExamen = $dateExamen;
    }

    /**
     * @param mixed $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @param mixed $idPatient
     */
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }

    
    
            
    
}