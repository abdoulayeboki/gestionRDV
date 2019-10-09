<?php

class Service{
    private $nomService;
    private $description;
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