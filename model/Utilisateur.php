<?php
abstract class Utilisateur{
    protected $idUtilisateur;
    protected $nom;
    protected  $prenom;
    protected  $dateNaissance;
    protected $tel;
    protected $matricule;
    protected $niveauStatut;
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
    public function getNiveauStatut()
    {
        return $this->niveauStatut;
    }

    /**
     * @param mixed $niveauStatut
     */
    public function setNiveauStatut($niveauStatut)
    {
        $this->niveauStatut = $niveauStatut;
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