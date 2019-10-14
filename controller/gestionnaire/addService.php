<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionService.php" ;
include_once WEBROOT.DS."model/Service.php" ;
$nomService=trim($_POST['nomService']);
$description=trim($_POST['description']);

$services=array(
    'nomService'=>$nomService,
    'description'=>$description,
);
$service=new Service($services);
$gestionService=new GestionService(array());
$gestionService->addService($service);
header("location:../../view/gestionnaire/addService.php");
