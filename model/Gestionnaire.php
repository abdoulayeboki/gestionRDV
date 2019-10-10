<?php
include_once("Utilisateur.php");
class Gestionnaire extends Utilisateur{
   
    public function __construct($donnes){
        parent::__construct($donnes);
        $this->idStatus=Utilisateur::NIVEAU_3;
        
    }
        //recuperer tous les medecin
        public function selectMedecin(){
            $bdd=Connexion::getInstance();
            $req="select * from utilisateur where idStatus=".self::NIVEAU_1;
            $rep=$bdd->query($req);
            return $rep->fetchall();
            
        }
        
        //recuperer un medecin
        public function unMedecin($id){
            $bdd=Connexion::getInstance();
            $req="select * from utilisateur where idUtilisateur=$id and idStatus=".self::NIVEAU_1;
            $rep=$bdd->query($req);
            return $rep->fetchall();
            
        }
        

      

     //ajout d'un medecin
     public function addMedecin(Medecin $medecin){
        $bdd=Connexion::getInstance();
        $req="insert into utilisateur (nom,prenom,adresse,dateNaissance,tel,email,matricule,idSpecialite,idStatus) 
        values (:nom,:prenom,:adresse,:dateNaissance,:tel,:email,:matricule,:idSpecialite,:idStatus)";
        $rep=$bdd->prepare($req);
        $rep->execute(array(
            'nom'=>$medecin->getNom(),
            'prenom'=>$medecin->getPrenom(),
            'adresse'=>$medecin->getAdresse(),
            'dateNaissance'=>$medecin->getDateNaissance(),
            'tel'=>$medecin->getTel(),
            'email'=>$medecin->getEmail(),
            'matricule'=>$medecin->getMatricule(),
            'idSpecialite'=>$medecin->getIdSpecialite(),
            'idStatus'=>$medecin->getIdStatus()
        ));
    }
 
       
   //editer un medecin
   public function updateMedecin(Medecin $medecin){
    $bdd=Connexion::getInstance();
    $req="update utilisateur set nom=:nom,prenom=:prenom,adresse=:adresse,dateNaissance=:dateNaissance,
    tel=:tel, email=:email,matricule=:matricule,idSpecialite=:idSpecialite,idStatus=:idStatus 
    where idUtilisateur=".$medecin->getIdUtilisateur(); 

    $rep=$bdd->prepare($req);
    $rep->execute(array(
        'nom'=>$medecin->getNom(),
        'prenom'=>$medecin->getPrenom(),
        'adresse'=>$medecin->getAdresse(),
        'dateNaissance'=>$medecin->getDateNaissance(),
        'tel'=>$medecin->getTel(),
        'email'=>$medecin->getEmail(),
        'matricule'=>$medecin->getMatricule(),
        'idSpecialite'=>$medecin->getIdSpecialite(),
        'idStatus'=>$medecin->getIdStatus()
    ));
}
  //supprimer un medecin
  public function deleteMedecin($id){
    $bdd=Connexion::getInstance();
    $req="delete  from utilisateur where idUtilisateur=$id and idStatus=".self::NIVEAU_1;
    $rep=$bdd->prepare($req);
    $rep->execute();
    
}

  //supprimer un secretaire
  public function deleteSecretaire($id){
    $bdd=Connexion::getInstance();
    $req="delete  from utilisateur where idUtilisateur=$id and idStatus=".self::NIVEAU_2;
    $rep=$bdd->prepare($req);
    $rep->execute();
    
}


   //recuperer tous les secretaire
   public function selectSecretaire(){
    $bdd=Connexion::getInstance();
    $req="select * from utilisateur where idStatus=".self::NIVEAU_2;
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}

//recuperer un secretaire
public function unSecretaire($id){
    $bdd=Connexion::getInstance();
    $req="select * from utilisateur where idUtilisateur=$id and idStatus=".self::NIVEAU_2;
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}
   //editer un secretaire
   public function updateSecretaire(Secretaire $secretaire){
    $bdd=Connexion::getInstance();
    $req="update utilisateur set nom=:nom,prenom=:prenom,adresse=:adresse,dateNaissance=:dateNaissance,
    tel=:tel, email=:email,matricule=:matricule,idService=:idService,idStatus=:idStatus 
    where idUtilisateur=".$secretaire->getIdUtilisateur(); 

    $rep=$bdd->prepare($req);
    $rep->execute(array(
        'nom'=>$secretaire->getNom(),
        'prenom'=>$secretaire->getPrenom(),
        'adresse'=>$secretaire->getAdresse(),
        'dateNaissance'=>$secretaire->getDateNaissance(),
        'tel'=>$secretaire->getTel(),
        'email'=>$secretaire->getEmail(),
        'matricule'=>$secretaire->getMatricule(),
        'idService'=>$secretaire->getIdService(),
        'idStatus'=>$secretaire->getIdStatus()
    ));
}

 //ajout d'un secretaire
 public function addSecretaire(Secretaire $secretaire){
    $bdd=Connexion::getInstance();
    $req="insert into utilisateur (nom,prenom,adresse,dateNaissance,tel,email,matricule,idService,idStatus) 
    values (:nom,:prenom,:adresse,:dateNaissance,:tel,:email,:matricule,:idService,:idStatus)";
    $rep=$bdd->prepare($req);
    $rep->execute(array(
        'nom'=>$secretaire->getNom(),
        'prenom'=>$secretaire->getPrenom(),
        'adresse'=>$secretaire->getAdresse(),
        'dateNaissance'=>$secretaire->getDateNaissance(),
        'tel'=>$secretaire->getTel(),
        'email'=>$secretaire->getEmail(),
        'matricule'=>$secretaire->getMatricule(),
        'idService'=>$secretaire->getIdService(),
        'idStatus'=>$secretaire->getIdStatus()
    ));
}
 //ajout d'un service
public function addService(Service $service){
    $bdd=Connexion::getInstance();
    $req="insert into service (nomService,description) values (:nomService,:description)";
    $rep=$bdd->prepare($req);
    $rep->execute(array(
       'nomService'=>$service->getNomService(),
       'description'=>$service->getDescription()
   ));
}
//ajout d'un service
public function updateService(Service $service){
    $bdd=Connexion::getInstance();
    $req="update  service set nomService=:nomService,description=:description where idService=".$service->getIdService();
    $rep=$bdd->prepare($req);
    $rep->execute(array(
       'nomService'=>$service->getNomService(),
       'description'=>$service->getDescription()
   ));
}


  //supprimer un service
  public function deleteService($id){
    $bdd=Connexion::getInstance();
    $req="delete  from service where idService=$id ";
    $rep=$bdd->prepare($req);
    $rep->execute();
    
}


   //recuperer tous les service
   public function selectService(){
    $bdd=Connexion::getInstance();
    $req="select * from service ";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}

//recuperer un service
public function unService($id){
    $bdd=Connexion::getInstance();
    $req="select * from service where idService=$id ";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}

//ajout d'un specialite
public function addSpecialite(Specialite $specialite){
    $bdd=Connexion::getInstance();
    $req="insert into specialite (nomSpecialite,description,idService) values (:nomSpecialite,:description,:idService)";
    $rep=$bdd->prepare($req);
    $rep->execute(array(
       'nomSpecialite'=>$specialite->getNomSpecialite(),
       'description'=>$specialite->getDescription(),
       'idService'=>$specialite->getIdService()
   ));
}
//ajout d'un Specialite
public function updateSpecialite(Specialite $specialite){
    $bdd=Connexion::getInstance();
    $req="update  specialite set nomSpecialite=:nomSpecialite,description=:description,idService=:idService
    where idSpecialite=".$specialite->getIdSpecialite();
    $rep=$bdd->prepare($req);
    $rep->execute(array(
       'nomSpecialite'=>$specialite->getNomSpecialite(),
       'description'=>$specialite->getDescription(),
       'idService'=>$specialite->getIdService()
   ));
}


  //supprimer un Specialite
  public function deleteSpecialite($id){
    $bdd=Connexion::getInstance();
    $req="delete  from specialite where idSpecialite=$id ";
    $rep=$bdd->prepare($req);
    $rep->execute();
    
}


   //recuperer tous les Specialite
   public function selectSpecialite(){
    $bdd=Connexion::getInstance();
    $req="select * from specialite ";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}

//recuperer un Specialite
public function unSpecialite($id){
    $bdd=Connexion::getInstance();
    $req="select * from specialite where idSpecialite=$id ";
    $rep=$bdd->query($req);
    return $rep->fetchall();
    
}

}