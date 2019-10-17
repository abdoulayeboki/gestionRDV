<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionSpecialite.php" ;
include_once WEBROOT.DS."model/Specialite.php" ;
$nomSpecialite=trim($_POST['nomSpecialite']);
$description=trim($_POST['description']);
$idService=trim($_POST['idService']);
$specialites=array(
    'nomSpecialite'=>$nomSpecialite,
    'description'=>$description,
    'idService'=>$idService
);
$specialite=new Specialite($specialites);
$gestionSpecialite=new GestionSpecialite(array());
$gestionSpecialite->addSpecialite($specialite);
header("location:../../view/gestionnaire/listSpecialite.php");
