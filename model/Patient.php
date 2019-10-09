<?php
class Patient{
    private $nom;
    private $prenom;
    private  $dateNaissance;
    private $tel;
    private $matricule;
    public function __construct($n,$p,$d,$t,$m){
        $this->nom=$n;
        $this->prenom=$p;
        $this->dateNaissance=$d;
        $this->tel=$t;
        $this->matricule=$m;
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
     * @return multitype:
     */
    public function getDossiers()
    {
        return $this->dossiers;
    }

    /**
     * @return mixed
     */
    public function getSecretaire()
    {
        return $this->secretaire;
    }

    /**
     * @return multitype:
     */
    public function getRdv()
    {
        return $this->rdv;
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