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
include_once("GestionSecretaire.php");
include_once("GestionMedecin.php");
//feature/f1
//$m=new Secretaire(array("nom"=>"safrrs","prenom"=>"abdoulaye"),1);
//$m=new Service(array("nomService"=>"ba","description"=>"wjfjdj"));
//$m=new Specialite(array("nomSpecialite"=>"ba","description"=>"wjfjdj","idService"=>23));
//$m=new Patient(array("nom"=>"safrrs","prenom"=>"abdoulaye"));
//$m=new DossierMedical(array("nomExamen"=>"safrrs","idUtilisateur"=>1));
//$m=new Rdv(array("motifRdv"=>"safrrs"));
//$m=Connexion::getInstance();
//$m=new Secretaire (array("nom"=>"safrrs","prenom"=>"abdoulaye"),1);
//$a=new DossierMedical(array("idDossier"=>1,"nomExamen"=>"safrrs","resultatExamen"=>"pas cool","ordonnance"=>"para",
     //"dateExamen"=>"1998-12-25", "idUtilisateur"=>1,"idPatient"=>2));
     $tab=array(
        'idUtilisateur'=>44,
         'nom'=>"samba",
         'prenom'=>'baba',
         'adresse'=>"camara",
         'dateNaissance'=>'1998-12-25',
         'tel'=>'baba',
         'adress'=>"gediawaye",
         'email'=>"sarr@gmail.com",
         'matricule'=>"M-sl77"
     );
   $t=  array(
         "motifRdv"=>"safrrs",
         'heureDebut'=>"12:30",
           'heureFin'=>"13:00",
           'dateRdv'=>"1998-12-25",
           'idSecretaire'=>46,
           'idPatient'=>5,
           'idMedecin'=>48
     );

  $rdv=new Rdv($rdv);
  $secretaire=new Secretaire(array(),1);
  $secretaire->addRdv($rdv);
  die();
 // var_dump($rdv);  die();

   //  $r=new Rdv($t);
   $m=new GestionMedecin(array());
     $p=new Medecin($tab,9);
    // var_dump($p);  die();
     $a=$p->getIdUtilisateur(); 
     echo $a; die; 
   //  $m->updateMedecin($p);
     

  //  //  $r=new Rdv($t);
  //  $m=new GestionSecretaire(array("nom"=>"safrrs","prenom"=>"abdoulaye"));
  //    $p=new Secretaire($tab,2);  
  //    $m->addSecretaire($p);
     //echo var_dump($p);
    // $s=new Specialite(array("idSpecialite"=>1,"nomSpecialite"=>"Specialite 12444",
     //"description"=>"service sanitaire","idService"=>1));
     //$a=$m->updateSpecialite($s);
     //echo var_dump($a);

    // echo $p->getIdSpecialite();
   //  $a=$p->mesRdv();
// $a=  $m->unSecretaire(23);
 //$aa=  $m->deleteSecretaire(22);
//$a=$m->unPatient(4);
//echo $a->getResultatExamen();
//echo var_dump($aa);
//echo var_dump($aa);
// echo $m->getNom();
// echo $m->getPrenom();
// echo $m->getNiveauStatut();
// echo $m->getIdService();
//echo $m->getNomSpecialite();

?>
