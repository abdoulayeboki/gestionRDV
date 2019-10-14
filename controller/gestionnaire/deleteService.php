<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionService.php" ;
$gestionService=new GestionService(array());
//suppression d'un médecin
$id=$_GET['id'];
if($id!=null){
    $gestionService->deleteService($id);
    header("location:../../view/gestionnaire/listService.php");
}