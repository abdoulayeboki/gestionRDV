<?php
include_once("Gestionnaire.php");
include_once("Connexion.php");
class GestionSecretaire extends Gestionnaire{
    
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
        $req="select * from utilisateur u,service s
         where u.idService=s.idService
         and idStatus=".self::NIVEAU_2;
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
    
    //recuperer un secretaire
    public function unSecretaire($id){
        $bdd=Connexion::getInstance();
        $req="select * from utilisateur u,service s,status st
         where idUtilisateur=$id 
        and u.idService=s.idService
        and u.idStatus=st.idStatus
        and u.idStatus=".self::NIVEAU_2;
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
    
    
}