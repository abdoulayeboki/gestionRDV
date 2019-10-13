<?php
session_start();
 include_once "../../model/GestionMedecin.php" ;
 
 $tab=array();
  $gestionMedecin=new GestionMedecin($tab,1);
  $unMedecin=$gestionMedecin->unMedecin(2);
?>
<!DOCTYPE html>  
<html lang="fr">
    <head>
        <title> gestionnaire    </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../librairie/bootstrap/dist/css/bootstrap.css"/>
        <script> src="../librairie/bootstrap/js/jquery/dist/jquery.js"</script>
        <script> src="../librairie/bootstrap/dist/js/bootstrap.js"</script> 
        <link rel="stylesheet" href="../../librairie/css/style.css"/>
        <script> type="text/javascript" src="../librairie/js/scripte.js"</script> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../../librairie/fontawesome/css/all.min.css">

       
    </head>


    <body>
    <div class="container-fluid">
   
     
    <nav class="navbar navbar-light bg-light navbar-fixed row">
    <div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>
      <div class="">
    <div class="">
    <button type="button"  class="btn btn-light   btn-md "><a href="index.php">Accueil</a></button>
    <div class="btn-group">
  <button type="button"  class="btn btn-light   btn-block dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Medecin</button> 
  <div class="dropdown-menu">
    <a class="dropdown-item" href="addMedecin.php">Add Medecin</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="listMedecin.php">List  Medecin</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" 
  aria-haspopup="true" aria-expanded="false">GestionSecretaire</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Secretaire</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Secretaire</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split"
   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Specialite</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Specialite</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Specialite</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" 
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Service</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Service</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Service</a>
  </div>
</div>
<a href="#"><button class="btn btn-danger btn-sm"  >Deconexion</button></a>
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
      <td><?php foreach($unMedecin as $m){
        echo $m['nom']; 
      } ?></td>
    </tr>  
    <tr>
      <td>Prenom</td>
      <td><?php foreach($unMedecin as $m){
        echo $m['prenom']; 
      } ?></td>
    </tr>  
    <tr>
      <td>Adresse</td>
      <td><?php foreach($unMedecin as $m){
        echo $m['adresse']; 
      } ?></td>
    </tr>    
    </table>
    </div>
    <div class=" col-lg-9 col-md-8 col-sm-8 col-xs-8 ">
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite la bienvenue  </marquee>

    </div>
  </div>
  <footer class="row"><p class="offset-md-5 offset-sm-5 offset-xs-8">copy right 2019<br>Abdoulaye Sarr <br>Aly lY</p> <footer>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</div>
    </body>
</html>
