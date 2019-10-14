<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/Medecin.php" ;
$medecin=new Medecin(array(),94444);

//suppression d'un médecin
$id=$_GET['id'];
if($id!=null){
    $medecin->deleteDossierMedical($id);
    header("location:../../view/medecin/listDossier.php");
}