<?php
abstract class Utilisateur{
    protected $idUtilisateur;
    protected $nom;
    protected  $prenom;
    protected $adresse;
    protected  $dateNaissance;
    protected $tel;
    protected $email;
    protected $matricule;
    protected $idStatus;
    const NIVEAU_3=3;
    const NIVEAU_2=2;
    const NIVEAU_1=1;



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
      public function getIdStatus()
      {
          return $this->idStatus;
      }
      
      /**
       * @param mixed $idStatus
       */
      public function setIdStatus($idStatus)
      {
          $this->idStatus = $idStatus;
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
      public function getIdUtilisateur()
      {
          return $this->idUtilisateur;
      }
      
      /**
       * @param mixed $idUtilisateur
       */
      public function setIdUtilisateur($idUtilisateur)
      {
          $this->idUtilisateur = $idUtilisateur;
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
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    

   
}