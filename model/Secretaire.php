<?php
include_once("Utilisateur.php");
class Secretaire extends Utilisateur{
    private $idService;
    public function __construct($donnes,$id){
    parent::__construct($donnes);
    $this->niveauStatut=Utilisateur::NIVEAU_2;
    $this->idService=$id;
    }
    
    //ajout d'un patient
    public function addPatient(Patient $patient){
        $bdd=Connexion::getInstance();
        $req="insert into patient (nom,prenom,adresse,dateNaissance,tel,matricule) 
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
        $req="select * from patient";
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
        $req="update  patient set nom=:nom,prenom=:prenom,adresse=:adresse,
        dateNaissance=:dateNaissance,tel=:tel,matricule=:matricule 
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