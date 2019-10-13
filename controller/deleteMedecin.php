<?php
define("WEBROOT",dirname(dirname(__FILE__)));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionMedecin.php" ;
$gestionMedecin=new GestionMedecin(array());
//suppression d'un médecin
$id=$_GET['id'];
if($id!=null){
    $gestionMedecin->deleteMedecin($id);
    header("location:../view/gestionnaire/listMedecin.php");
}