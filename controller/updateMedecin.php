<?php
define("WEBROOT",dirname(dirname(__FILE__)));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionMedecin.php" ;
include_once WEBROOT.DS."model/Medecin.php" ;
$idUtilisateur=trim($_GET['id']);
$matricule=trim($_POST['matricule']);
$prenom=trim($_POST['prenom']);
$nom=trim($_POST['nom']);
$adresse=trim($_POST['adresse']);
$tel=trim($_POST['tel']);
$dateNaissance=trim($_POST['dateNaissance']);
$email=trim($_POST['email']);
$idSpecialite=trim($_POST['idSpecialite']);
$medecins=array(
    'idUtilisateur'=>$idUtilisateur,
    'matricule'=>$matricule,
    'nom'=>$nom,
    'prenom'=>$prenom,
    'adresse'=>$adresse,
    'tel'=>$tel,
    'dateNaissance'=>$dateNaissance,
    'email'=>$email,
);
$medecin=new Medecin($medecins,$idSpecialite);
$gestionMedecin=new GestionMedecin(array());
$gestionMedecin->updateMedecin($medecin);
header("location:../view/gestionnaire/listMedecin.php");
