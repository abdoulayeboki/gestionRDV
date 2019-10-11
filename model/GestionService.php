<?php
include_once("Gestionnaire.php");
class GestionService extends Gestionnaire{
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
    //editer d'un service
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
    
    
    
}