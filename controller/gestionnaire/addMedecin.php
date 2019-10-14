<?php
include_once "../../model/GestionMedecin.php" ;
include_once "../../model/Medecin.php" ;
$matricule=trim($_POST['matricule']);
$prenom=trim($_POST['prenom']);
$nom=trim($_POST['nom']);
$adresse=trim($_POST['adresse']);
$tel=trim($_POST['tel']);
$dateNaissance=trim($_POST['dateNaissance']);
$email=trim($_POST['email']);
$idSpecialite=trim($_POST['idSpecialite']);
$medecins=array(
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
$gestionMedecin->addMedecin($medecin);
header("location:../../view/gestionnaire/addMedecin.php");
