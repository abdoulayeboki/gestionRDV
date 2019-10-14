<?php
include_once("Utilisateur.php");
include_once("Connexion.php");
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
        $req="select * from dossierMedical d,patient p 
        where d.idPatient=p.idPatient and idUtilisateur=".$this->idUtilisateur;
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
   }

//recuperer un dossier
   public function unDossierMedical($id){
    $bdd=Connexion::getInstance();
    $req="select * from dossierMedical where idDossier=$id";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
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
    $req="select  * from rdv r,utilisateur u ,patient p
    where r.idMedecin=".$this->idUtilisateur." and u.idUtilisateur=r.idMedecin and r.idPatient=p.idPatient";
    $rep=$bdd->query($req);
    return $rep->fetchAll();
    
}
 //recuperer tous les patients
 public function selectPatient(){
    $bdd=Connexion::getInstance();
    $req="select * from patient";
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