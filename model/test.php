<?php
// include_once("charger.php");
include_once("Gestionnaire.php");
include_once("Secretaire.php");
include_once("Service.php");
include_once("Specialite.php");
include_once("Patient.php");
include_once("DossierMedical.php");
include_once("Medecin.php");
include_once("Rdv.php");
include_once("Connexion.php");
//$m=new Gestionnaire(array("nom"=>"safrrs","prenom"=>"abdoulaye"));
//$m=new Secretaire(array("nom"=>"safrrs","prenom"=>"abdoulaye"),1);
//$m=new Service(array("nomService"=>"ba","description"=>"wjfjdj"));
//$m=new Specialite(array("nomSpecialite"=>"ba","description"=>"wjfjdj","idService"=>23));
//$m=new Patient(array("nom"=>"safrrs","prenom"=>"abdoulaye"));
//$m=new DossierMedical(array("nomExamen"=>"safrrs","idUtilisateur"=>1));
//$m=new Rdv(array("motifRdv"=>"safrrs"));
//$m=Connexion::getInstance();
$m=new Secretaire (array("nom"=>"safrrs","prenom"=>"abdoulaye"),1);
//$a=new DossierMedical(array("idDossier"=>1,"nomExamen"=>"safrrs","resultatExamen"=>"pas cool","ordonnance"=>"para",
     //"dateExamen"=>"1998-12-25", "idUtilisateur"=>1,"idPatient"=>2));
     $tab=array(
         'nom'=>"mass",
         'prenom'=>'baba',
         'adresse'=>"camara",
         'dateNaissance'=>'1998-12-25',
         'tel'=>'baba',
         'matricule'=>"camar",
     );
    // $p=new Patient($tab);
$m->deletePatient(6);
$a=$m->unPatient(4);
//echo $a->getResultatExamen();
echo var_dump($a);
// echo $m->getNom();
// echo $m->getPrenom();
// echo $m->getNiveauStatut();
// echo $m->getIdService();
//echo $m->getNomSpecialite();

?>
