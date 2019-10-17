<?php 
session_start();
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
include_once "../../model/GestionSecretaire.php" ;
$idSession=$_SESSION['id'];
$gestionSecretaire=new GestionSecretaire(array(),1);
$unSecretaire=$gestionSecretaire->unSecretaire($idSession);
 foreach($unSecretaire as $s){
    $nom=$s['nom'];
    $prenom=$s['prenom'];
    $service=$s['nomService'];
    $matricule=$s['matricule'];
    $status=$s['nomStatus'];
}

?>
<nav class="navbar navbar-light bg-light navbar-fixed row">
<div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>
<button type="button"  class="btn btn-light   btn-md "><a href="index.php">Accueil</a></button>
<div class="btn-group">
<button type="button"  class="btn btn-light   btn-block dropdown-toggle dropdown-toggle-split" 
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Patient</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="addPatient.php">Add Patient</a>
<a class="dropdown-item" href="listPatient.php">List  Patient</a>
</div>

<div class="btn-group">
<button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Gestion rendez-vous</button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="addRdv.php">Enregistrer un rendez-vous</a>
    <a class="dropdown-item" href="allRdv.php">Tous les rendez-vous</a>
    <a class="dropdown-item" href="listRdv.php">Mes  rendez-vous</a>

    </div>
    </div>
    
      <div class="btn-group">
      <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false"><?php echo $nom." ".$prenom ?></button>
    <div class="dropdown-menu">
     <a class="dropdown-item" href="../../controller/gestionnaire/deconnexion.php"><button class="btn btn-danger btn-sm"  >Deconexion</button></a>
    </div>
     </div>
           
      </div>
       </nav>
            
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 menu-lateral">
            <h1>Espace Secretaire</h1>
            <img src="../../librairie/image/hopital.jpeg" class="img-fluid  img1" alt="en charge"/>
            <h1>Profil</h1>
            <img src="../../librairie/image/m3.jpeg" class="img-fluid img2" alt="en charge"/>
            <table class="table">
          
            <tr>
            <td>Nom</td>
            <td><?php echo $nom ?></td>
            </tr>  
     <tr>
      <td>Prenom</td>
      <td><?php echo $prenom ?></td>
    </tr>  
    <tr>
      <td>Service</td>
      <td><?php echo $service; ?></td>
    </tr>
    <tr>
      <td>Matricule</td>
      <td><?php echo $matricule; ?></td>
    </tr>     
    <tr>
      <td>Status</td>
      <td><?php echo $status; ?></td>
    </tr>     
    </table>
    </div>
    