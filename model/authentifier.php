<?php
session_start();
include "Connexion.php";
$bdd=Connexion::getInstance();
$matricule=$_POST['matricule'];
$code=$_POST['code'];
$req="select * from utilisateur u,status s where u.matricule='$matricule' 
and s.codeAcces='$code'
and u.idStatus=s.idStatus";
$rep=$bdd->query($req);
$users=$rep->fetchall();
//var_dump ($users);

if($users !=null){
foreach($users as $user)  {
    if($user['niveauStatus']==3){
    $_SESSION['id']=$user['IdUtilisateur'];
        header("location:../view/gestionnaire.php");
    }elseif($user['niveauStatus']==2){
        header("location:../view/secretaire.php");
    }elseif($user['niveauStatus']==1){
        header("location:../view/medecin.php");
    }
      
    
} 
} else{
    header("location:../view/index.php"); 
}

