<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/Secretaire.php" ;
include_once WEBROOT.DS."model/Patient.php" ;
$idPatient=trim($_GET['id']);
$matricule=trim($_POST['matricule']);
$prenom=trim($_POST['prenom']);
$nom=trim($_POST['nom']);
$adresse=trim($_POST['adresse']);
$tel=trim($_POST['tel']);
$dateNaissance=trim($_POST['dateNaissance']);
$patients=array(
    'idPatient'=>$idPatient,
    'matricule'=>$matricule,
    'nom'=>$nom,
    'prenom'=>$prenom,
    'adresse'=>$adresse,
    'tel'=>$tel,
    'dateNaissance'=>$dateNaissance,
);
$patient=new Patient($patients);
$secretaire=new Secretaire(array(),1);
$secretaire->updatePatient($patient);
header("location:../../view/secretaire/listPatient.php");
