<?php
class specialite{
    private $nomSpecialite;
    private $description;
    private  $idService;
    public function __construct($n,$d,$id){
        $this->nomSpecialite=$n;
        $this->description=$d;
        $this->idService=$id;
        
    }
    
    /**
     * @return mixed
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }

    /**
     * @param mixed $idSpecialite
     */
    public function setIdSpecialite($idSpecialite)
    {
        $this->idSpecialite = $idSpecialite;
    }

    /**
     * @return mixed
     */
    public function getNomSpecialite()
    {
        return $this->nomSpecialite;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getIdService()
    {
        return $this->idService;
    }

    /**
     * @param mixed $nomSpecialite
     */
    public function setNomSpecialite($nomSpecialite)
    {
        $this->nomSpecialite = $nomSpecialite;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $idService
     */
    public function setIdService($idService)
    {
        $this->idService = $idService;
    }

   
    
}