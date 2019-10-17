<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/Secretaire.php" ;
include_once WEBROOT.DS."model/Rdv.php" ;
$idRdv=trim($_GET['id']);
$motifRdv=trim($_POST['motifRdv']);
$dateRdv=trim($_POST['dateRdv']);
$heureDebut=trim($_POST['heureDebut']);
$heureFin=trim($_POST['heureFin']);
$idPatient=trim($_POST['idPatient']);
$idMedecin=trim($_POST['idMedecin']);
$idSecretaire=trim($_POST['idSecretaire']);
$rdvs=array(
    'idRdv'=>$idRdv,
    'motifRdv'=>$motifRdv,
    'dateRdv'=>$dateRdv,
    'heureDebut'=>$heureDebut,
    'heureFin'=>$heureFin,
    'idPatient'=>$idPatient,
    'idMedecin'=>$idMedecin,
    'idSecretaire'=>$idSecretaire
);
$rdv=new Rdv($rdvs);
$secretaire=new Secretaire(array(),1);
$secretaire->updateRdv($rdv);
header("location:../../view/secretaire/listRdv.php");
