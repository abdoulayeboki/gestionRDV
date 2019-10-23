<?php
session_start();
include "../model/Connexion.php";
include "../model/Utilisateur.php";
include "../model/Medecin.php";
include "../model/Secretaire.php";
$bdd=Connexion::getInstance();
$matricule=$_POST['matricule'];
$code=$_POST['code'];
$req="select * from utilisateur u,status s where u.matricule='$matricule' 
and s.codeAcces='$code'
and u.idStatus=s.idStatus";
$rep=$bdd->query($req);
$users=$rep->fetchall();

//var_dump($users); die;
if($users !=null){
foreach($users as $user)  {
    if($user['niveauStatus']==Utilisateur::NIVEAU_3){
    $_SESSION['id']= $user['idUtilisateur'];
        header("location:../view/gestionnaire");
    }elseif($user['niveauStatus']==Utilisateur::NIVEAU_2){
        $_SESSION['id']= $user['idUtilisateur'];
        header("location:../view/secretaire");
    }elseif($user['niveauStatus']==Utilisateur::NIVEAU_1){
        $_SESSION['id']= $user['idUtilisateur'];
        header("location:../view/medecin");
    }
      
    
} 
} else{
    header("location:../index.php?id=erreur"); 
}

