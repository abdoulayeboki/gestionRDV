<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/Medecin.php" ;
include_once WEBROOT.DS."model/DossierMedical.php" ;
$nomExamen=trim($_POST['nomExamen']);
$resultatExamen=trim($_POST['resultatExamen']);
$dateExamen=trim($_POST['dateExamen']);
$ordonnance=trim($_POST['ordonnance']);
$idPatient=trim($_POST['idPatient']);
$idUtilisateur=trim($_POST['idUtilisateur']);
$dossierMedicals=array(
    'nomExamen'=>$nomExamen,
    'resultatExamen'=>$resultatExamen,
    'dateExamen'=>$dateExamen,
    'ordonnance'=>$ordonnance,
    'idPatient'=>$idPatient,
    'idUtilisateur'=>$idUtilisateur
);

$dossierMedical=new DossierMedical($dossierMedicals);
$medecin=new Medecin(array(),1);
$medecin->addDossierMedical($dossierMedical);
header("location:../../view/medecin/listDossier.php");