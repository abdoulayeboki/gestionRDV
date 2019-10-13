<?php
include_once("Gestionnaire.php");
include_once("Connexion.php");
class GestionMedecin extends Gestionnaire{
    
    //recuperer tous les medecin
    public function selectMedecin(){
        $bdd=Connexion::getInstance();
        $req="select * from utilisateur where idStatus=".self::NIVEAU_1;
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
    
      //recuperer le nombre de médecin medecin
      public function countMedecin(){
        $bdd=Connexion::getInstance();
        $req="select count(matricule) as nbr from utilisateur ";
        $rep= $bdd->query($req);
        
        return $rep->fetch();
        
    }
    

    //recuperer un medecin
    public function unMedecin($id){
        $bdd=Connexion::getInstance();
        $req="select * from utilisateur where idUtilisateur=$id ";
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
        $req="delete  from utilisateur where idUtilisateur=$id ";
        $rep=$bdd->prepare($req);
        $rep->execute();
        
    }

    //recuperer tous les service

    public function selectSpecialite(){
        $bdd=Connexion::getInstance();
        $req="select * from specialite ";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
    
}