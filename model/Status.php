<?php
class Status implements  Iterator{
    private $nomStatus;
    private $valeurStatus;
    private $codeAcces;
    /**
     * @return mixed
     */
    public function getNomStatus()
    {
        return $this->nomStatus;
    }

    /**
     * @return mixed
     */
    public function getValeurStatus()
    {
        return $this->valeurStatus;
    }

    /**
     * @return mixed
     */
    public function getCodeAcces()
    {
        return $this->codeAcces;
    }

    /**
     * @param mixed $nomStatus
     */
    public function setNomStatus($nomStatus)
    {
        $this->nomStatus = $nomStatus;
    }

    /**
     * @param mixed $valeurStatus
     */
    public function setValeurStatus($valeurStatus)
    {
        $this->valeurStatus = $valeurStatus;
    }

    /**
     * @param mixed $codeAcces
     */
    public function setCodeAcces($codeAcces)
    {
        $this->codeAcces = $codeAcces;
    }


   
    
}