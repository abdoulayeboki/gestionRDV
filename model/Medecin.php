<?php
include_once("Utilisateur.php");
class Medecin extends Utilisateur{
    private $idSpecialite;
    public function __construct( $donnes, $id) {
        parent::__construct($donnes);
        $this->idStatus=Utilisateur::NIVEAU_1;
        $this->idSpecialite=$id;
    }

    
    
    public function addDossierMedical(DossierMedical $dossier){
         $bdd=Connexion::getInstance();
         $req="insert into dossierMedical (nomExamen,resultatExamen,ordonnance,dateExamen,idUtilisateur,
          idPatient) values (:nomExamen,:resultatExamen,:ordonnance,:dateExamen,:idUtilisateur,:idPatient)";
         $rep=$bdd->prepare($req);
         $rep->execute(array(
            'nomExamen'=>$dossier->getNomExamen(),
            'resultatExamen'=>$dossier->getResultatExamen(),
            'ordonnance'=>$dossier->getOrdonnance(),
            'dateExamen'=>$dossier->getDateExamen(),
            'idUtilisateur'=>$dossier->getIdUtilisateur(),
            'idPatient'=>$dossier->getIdPatient()
        ));
    }
//recuperer tous les dossiers
    public function selectDossierMedical(){
        $bdd=Connexion::getInstance();
        $req="select * from dossierMedical";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
   }

//recuperer un dossier
   public function unDossierMedical($id){
    $bdd=Connexion::getInstance();
    $req="select * from dossierMedical where idDossier=$id";
    $rep=$bdd->query($req);
    return $rep->fetch();
    
}

//supprimer dossier 
public function deleteDossierMedical($id){
    $bdd=Connexion::getInstance();
    $req="delete  from dossierMedical where idDossier=$id";
    $rep=$bdd->prepare($req);
    $rep->execute();
    
}

//editer un dossier
public function updateDossierMedical(DossierMedical $dossier){
    $bdd=Connexion::getInstance();
    $req="update dossierMedical set nomExamen=:nomExamen,resultatExamen=:resultatExamen
    ,ordonnance=:ordonnance,dateExamen=:dateExamen,idUtilisateur=:idUtilisateur,
     idPatient=:idPatient  where idDossier=".$dossier->getIdDossier();
    $rep=$bdd->prepare($req);
    $rep->execute(array(
       'nomExamen'=>$dossier->getNomExamen(),
       'resultatExamen'=>$dossier->getResultatExamen(),
       'ordonnance'=>$dossier->getOrdonnance(),
       'dateExamen'=>$dossier->getDateExamen(),
       'idUtilisateur'=>$dossier->getIdUtilisateur(),
       'idPatient'=>$dossier->getIdPatient()
   ));
}
 //recuperer mes Rdv
 public function mesRdv(){
    $bdd=Connexion::getInstance();
    $req="select * from rdv where idMedecin=".$this->idUtilisateur;
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}
    

    /**
     * @return mixed
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }

    /**
     * @param mixed $idSpeciaite
     */
    public function setIdSpecialite($idSpecialite)
    {
        $this->idSpecialite =$idSpecialite;
    }

  
    
}