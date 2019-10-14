<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionSpecialite.php" ;
$gestionSpecialite=new GestionSpecialite(array());
//suppression d'un médecin
$id=$_GET['id'];
if($id!=null){
    $gestionSpecialite->deleteSpecialite($id);
    header("location:../../view/gestionnaire/listSpecialite.php");
}