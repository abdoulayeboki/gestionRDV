<?php
include_once("Gestionnaire.php");
class GestionSpecialite extends Gestionnaire{
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
    //editer un Specialite
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
    
    
    
    //recuperer un Specialite
    public function unSpecialite($id){
        $bdd=Connexion::getInstance();
        $req="select * from specialite where idSpecialite=$id ";
        $rep=$bdd->query($req);
        return $rep->fetchall();
        
    }
    
}