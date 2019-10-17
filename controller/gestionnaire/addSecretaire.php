<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionSecretaire.php" ;
include_once WEBROOT.DS."model/Secretaire.php" ;
$matricule=trim($_POST['matricule']);
$prenom=trim($_POST['prenom']);
$nom=trim($_POST['nom']);
$adresse=trim($_POST['adresse']);
$tel=trim($_POST['tel']);
$dateNaissance=trim($_POST['dateNaissance']);
$email=trim($_POST['email']);
$idService=trim($_POST['idService']);
$secretaires=array(
    'matricule'=>$matricule,
    'nom'=>$nom,
    'prenom'=>$prenom,
    'adresse'=>$adresse,
    'tel'=>$tel,
    'dateNaissance'=>$dateNaissance,
    'email'=>$email,
    'idService'=>$idService
);
$secretaire=new Secretaire($secretaires,$idService);
$gestionSecretaire=new GestionSecretaire(array());
$gestionSecretaire->addSecretaire($secretaire);
header("location:../../view/gestionnaire/listSecretaire.php");
