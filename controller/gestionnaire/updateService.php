<?php
define("WEBROOT",dirname(dirname(dirname(__FILE__))));
define("DS",DIRECTORY_SEPARATOR);
include_once WEBROOT.DS."model/GestionService.php" ;
include_once WEBROOT.DS."model/Service.php" ;
$idService=trim($_GET['id']);
$nomService=trim($_POST['nomService']);
$description=trim($_POST['description']);

$services=array(
    'idService'=>$idService,
    'nomService'=>$nomService,
    'description'=>$description,
    
);
$service=new Service($services);
$gestionService=new GestionService(array());
$gestionService->updateService($service);
header("location:../../view/gestionnaire/listService.php");
