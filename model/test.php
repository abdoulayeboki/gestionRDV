<?php
// include_once("charger.php");
include_once("Gestionnaire.php");
include_once("Secretaire.php");
include_once("Service.php");
include_once("Specialite.php");
include_once("Patient.php");
include_once("DossierMedical.php");
include_once("Rdv.php");
//$m=new Gestionnaire(array("nom"=>"safrrs","prenom"=>"abdoulaye"));
//$m=new Secretaire(array("nom"=>"safrrs","prenom"=>"abdoulaye"),1);
//$m=new Service(array("nomService"=>"ba","description"=>"wjfjdj"));
//$m=new Specialite(array("nomSpecialite"=>"ba","description"=>"wjfjdj","idService"=>23));
//$m=new Patient(array("nom"=>"safrrs","prenom"=>"abdoulaye"));
$m=new DossierMedical(array("nomExamen"=>"safrrs","idUtilisateur"=>1));
//$m=new Rdv(array("motifRdv"=>"safrrs"));
echo var_dump($m);
// echo $m->getNom();
// echo $m->getPrenom();
// echo $m->getNiveauStatut();
// echo $m->getIdService();
//echo $m->getNomSpecialite();

?>
