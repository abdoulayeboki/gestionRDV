<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/Medecin.php" ;
include_once WEBROOT.DS."model/DossierMedical.php" ;
$idDossier=trim($_GET['id']);
$nomExamen=trim($_POST['nomExamen']);
$resultatExamen=trim($_POST['resultatExamen']);
$dateExamen=trim($_POST['dateExamen']);
$ordonnance=trim($_POST['ordonnance']);
$idPatient=trim($_POST['idPatient']);
$idUtilisateur=trim($_POST['idUtilisateur']);


$dossiers=array(
    'idDossier'=>$idDossier,
    'nomExamen'=>$nomExamen,
    'resultatExamen'=>$resultatExamen,
    'dateExamen'=>$dateExamen,
    'ordonnance'=>$ordonnance,
    'idPatient'=>$idPatient,
    'idUtilisateur'=>$idUtilisateur
);
$dossier=new DossierMedical($dossiers);
$medecin=new Medecin(array(),1);
 $medecin->updateDossierMedical($dossier); 
header("location:../../view/medecin/listDossier.php");
