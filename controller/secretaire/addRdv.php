<?php
include_once "../../model/Secretaire.php" ;
include_once "../../model/Patient.php" ;
$matricule=trim($_POST['matricule']);
$prenom=trim($_POST['prenom']);
$nom=trim($_POST['nom']);
$adresse=trim($_POST['adresse']);
$tel=trim($_POST['tel']);
$dateNaissance=trim($_POST['dateNaissance']);
$patients=array(
    'matricule'=>$matricule,
    'nom'=>$nom,
    'prenom'=>$prenom,
    'adresse'=>$adresse,
    'tel'=>$tel,
    'dateNaissance'=>$dateNaissance,
    'email'=>$email,
);
$patient=new Patient($patients);
$secretaire=new Secretaire(array(),1);
$secretaire->addPatient($patient);
header("location:../../view/secretaire/addPatient.php");
