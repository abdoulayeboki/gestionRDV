<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/Secretaire.php" ;
$secretaire=new Secretaire(array(),1);
//suppression d'un médecin
$id=$_GET['id'];
if($id!=null){
    $secretaire->deleteRdv($id);
    header("location:../../view/secretaire/allRdv.php");
}