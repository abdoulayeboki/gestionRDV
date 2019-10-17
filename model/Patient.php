<?php
class Patient{
    private $idPatient;
    private $nom;
    private $prenom;
    private $adresse;
    private  $dateNaissance;
    private $tel;
    private $matricule;
    



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
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    /**
     * @return mixed
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }
    
    /**
     * @param mixed $idPatient
     */
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }
    
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    
}