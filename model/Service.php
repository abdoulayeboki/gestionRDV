<?php

class Service{
    private $nomService;
    private $idService;
    private $description;
   

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
    public function getNomService()
    {
        return $this->nomService;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $nomService
     */
    public function setNomService($nomService)
    {
        $this->nomService = $nomService;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    

   

    
    
}