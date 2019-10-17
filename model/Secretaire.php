<?php
include_once("Utilisateur.php");
include_once("Connexion.php");
class Secretaire extends Utilisateur{
    private $idService;
    public function __construct($donnes,$id){
    parent::__construct($donnes);
    $this->idStatus=Utilisateur::NIVEAU_2;
    $this->idService=$id;
    }
    
    //ajout d'un patient
    public function addPatient(Patient $patient){
        $bdd=Connexion::getInstance();
        $req="insert into patient (nomPatient,prenomPatient,adressePatient,dateNaissancePatient,telPatient
        ,matriculePatient) 
        values (:nom,:prenom,:adresse,:dateNaissance,:tel,:matricule)";
        $rep=$bdd->prepare($req);
        $rep->execute(array(
            'nom'=>$patient->getNom(),
            'prenom'=>$patient->getPrenom(),
            'adresse'=>$patient->getAdresse(),
            'dateNaissance'=>$patient->getDateNaissance(),
            'tel'=>$patient->getTel(),
            'matricule'=>$patient->getMatricule()
        ));
    }
    //recuperer tous les patients
    public function selectPatient(){
        $bdd=Connexion::getInstance();
        $req="select * from patient  ";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
    
    //recuperer un patient
    public function unPatient($id){
        $bdd=Connexion::getInstance();
        $req="select * from patient where idPatient=$id";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
    
    //supprimer un patient
    public function deletePatient($id){
        $bdd=Connexion::getInstance();
        $req="delete  from patient where idPatient=$id";
        $rep=$bdd->prepare($req);
        $rep->execute();
        
    }
    
    //editer patient
    public function updatePatient(Patient $patient){
        $bdd=Connexion::getInstance();
        $req="update  patient set nomPatient=:nom,prenomPatient=:prenom,adressePatient=:adresse,
        dateNaissancePatient=:dateNaissance,telPatient=:tel,matriculePatient=:matricule 
        where idPatient=".$patient->getIdPatient();
        $rep=$bdd->prepare($req);
        $rep->execute(array(
            'nom'=>$patient->getNom(),
            'prenom'=>$patient->getPrenom(),
            'adresse'=>$patient->getAdresse(),
            'dateNaissance'=>$patient->getDateNaissance(),
            'tel'=>$patient->getTel(),
            'matricule'=>$patient->getMatricule()
        ));
    }
    
       
    public function addRdv(Rdv $rdv){
        $bdd=Connexion::getInstance();
        $req="insert into rdv (motifRdv,heureDebut,heureFin,dateRdv,idSecretaire,
         idPatient,idMedecin) values (:motifRdv,:heureDebut,:heureFin,:dateRdv,:idSecretaire,:idPatient,:idMedecin)";
        $rep=$bdd->prepare($req);
        $rep->execute(array(
           'motifRdv'=>$rdv->getMotifRdv(),
           'heureDebut'=>$rdv->getHeureDebut(),
           'heureFin'=>$rdv->getHeureFin(),
           'dateRdv'=>$rdv->getDateRdv(),
           'idSecretaire'=>$rdv->getIdSecretaire(),
           'idPatient'=>$rdv->getIdPatient(),
           'idMedecin'=>$rdv->getIdMedecin()
       ));
   }
    
   public function updateRdv(Rdv $rdv){
    $bdd=Connexion::getInstance();
    $req="update  rdv set motifRdv=:motifRdv,heureDebut=:heureDebut,heureFin=:heureFin,
    dateRdv=:dateRdv,idSecretaire=:idSecretaire,idPatient=:idPatient,idMedecin=:idMedecin where idRdv=". $rdv->getIdRdv();
    $rep=$bdd->prepare($req);
    $rep->execute(array(
       'motifRdv'=>$rdv->getMotifRdv(),
       'heureDebut'=>$rdv->getHeureDebut(),
       'heureFin'=>$rdv->getHeureFin(),
       'dateRdv'=>$rdv->getDateRdv(),
       'idSecretaire'=>$rdv->getIdSecretaire(),
       'idPatient'=>$rdv->getIdPatient(),
       'idMedecin'=>$rdv->getIdMedecin()
   ));
}

 //supprimer un rdv
 public function deleteRdv($id){
    $bdd=Connexion::getInstance();
    $req="delete  from rdv where idRdv=$id";
    $rep=$bdd->prepare($req);
    $rep->execute();
    
}

 //recuperer tous les Rdv
 public function selectRdv(){
    $bdd=Connexion::getInstance();
    $req="select  * from rdv r ,patient p
    where  r.idPatient=p.idPatient
    ORDER BY r.dateRdv DESC, r.heureDebut,r.heureFin ASC";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}
 //recuperer un Rdv
 public function unRdv($id){
    $bdd=Connexion::getInstance();
    $req="select * from rdv where idRdv=$id ";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}

   //recuperer le nombre de patient
   public function countUser(){
    $bdd=Connexion::getInstance();
    $req="select count(matriculePatient) as nbr from patient ";
    $rep= $bdd->query($req);
    
    return $rep->fetch();
    
}
 //recuperer mes Rdv
 public function mesRdv(){
    $bdd=Connexion::getInstance();
    $req="select  * from rdv r,utilisateur u ,patient p
    where r.idSecretaire=".$this->idUtilisateur." 
    and u.idUtilisateur=r.idSecretaire and r.idPatient=p.idPatient
    ORDER BY r.dateRdv DESC , r.heureDebut,r.heureFin ASC
    ";
    $rep=$bdd->query($req);
    return $rep->fetchAll();
    
}
  public function selectHeure(){
    $bdd=Connexion::getInstance();
    $req="select  * from heure";
    $rep=$bdd->query($req);
    return $rep->fetchAll();
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

    
}