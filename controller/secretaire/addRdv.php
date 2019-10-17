<?php
include_once "../../model/Secretaire.php" ;
include_once "../../model/Rdv.php" ;
$motifRdv=trim($_POST['motifRdv']);
$dateRdv=trim($_POST['dateRdv']);
$heureDebut=trim($_POST['heureDebut']);
$heureFin=trim($_POST['heureFin']);
$idPatient=trim($_POST['idPatient']);
$idMedecin=trim($_POST['idMedecin']);
$idSecretaire=trim($_POST['idSecretaire']);
$rdvs=array(
    'motifRdv'=>$motifRdv,
    'dateRdv'=>$dateRdv,
    'heureDebut'=>$heureDebut,
    'heureFin'=>$heureFin,
    'idPatient'=>$idPatient,
    'idMedecin'=>$idMedecin,
    'idSecretaire'=>$idSecretaire,
);
$rdv=new Rdv($rdvs);
$secretaire=new Secretaire(array(),1);
$secretaire->addRdv($rdv);
header("location:../../view/secretaire/listRdv.php");
