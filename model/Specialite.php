<?php

class Specialite{
    private $nomSpecialite;
    private $description;
    private $idService;
   

    /**
     * @return mixed
     */
    public function getNomSpecialite()
    {
        return $this->nomSpecialite;
    }

    /**
     * @param mixed $nomSpecialite
     */
    public function setNomSpecialite($nomSpecialite)
    {
        $this->nomSpecialite = $nomSpecialite;
    }

    public function __construct(array $donnes) {
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
    
 
    
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    
 
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
  
    
}