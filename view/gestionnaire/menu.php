<?php
include_once "../../model/Gestionnaire.php" ;
include_once "../../model/Utilisateur.php" ;
$idSession=$_SESSION['id'];
$gestionnaire=Gestionnaire::unUtilisateur($idSession);
foreach($gestionnaire as $g){
    $nom=$g['nom'];
    $prenom=$g['prenom'];
    $matricule=$g['matricule'];
    $status=$g['nomStatus'];
}?>
<nav class="navbar navbar-light bg-light navbar-fixed row">
<div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>
<div class="">
<button type="button"  class="btn btn-light   btn-md "><a href="index.php">Accueil</a></button>
<div class="btn-group">
<button type="button"  class="btn btn-light   btn-block dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Medecin</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="addMedecin.php">Add Medecin</a>
<a class="dropdown-item" href="listMedecin.php">List  Medecin</a>
</div>
</div>

<div class="btn-group">
<button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Gestion Secretaire</button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="addSecretaire.php">Add Secretaire</a>
    <a class="dropdown-item" href="listSecretaire.php">List  Secretaire</a>
    </div>
    </div>
    
    <div class="btn-group">
    <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Specialite</button>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="addSpecialite.php">Add Specialite</a>
        <a class="dropdown-item" href="listSpecialite.php">List  Specialite</a>
        </div>
        </div>
        
        <div class="btn-group">
        <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Service</button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="addService.php">Add Service</a>
            <a class="dropdown-item" href="listService.php">List  Service</a>
            </div>
            </div>
                   <div class="btn-group">
      <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false"><?php echo $nom." ".$prenom?></button>
    <div class="dropdown-menu">
     <a class="dropdown-item" href="../../controller/gestionnaire/deconnexion.php"><button class="btn btn-danger btn-sm"  >Deconexion</button></a>
    </div>
     </div>
     
            </div>
            </nav>
            
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 menu-lateral">
            <h1>Espace Gestionnaire</h1>
            <img src="../../librairie/image/hopital.jpeg" class="img-fluid img-thumbnail img1" alt="en charge"/>
            <h1>Profil</h1>
            <img src="../../librairie/image/m1.jpg" class="img-fluid img-thumbnail img2" alt="en charge"/>
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
      <td>Matricule</td>
      <td><?php echo $matricule; ?></td>
    </tr>   
    <tr>
      <td>Status</td>
      <td><?php echo $status; ?></td>
    </tr>       
    </table>
    </div>
    