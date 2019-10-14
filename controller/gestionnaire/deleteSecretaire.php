<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionSecretaire.php" ;
$gestionSecretaire=new GestionSecretaire(array());
//suppression d'un médecin
$id=$_GET['id'];
if($id!=null){
    $gestionSecretaire->deleteSecretaire($id);
    header("location:../../view/gestionnaire/listSecretaire.php");
}