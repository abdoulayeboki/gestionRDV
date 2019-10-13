<?php
session_start();
 include_once "../model/GestionMedecin.php" ;
 

  $gestionSecretaire=new GestionMedecin(array(),1);
  $secretaires=$gestionMedecin->selectMedecin();
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
        <link rel="stylesheet" href="../css/style.css"/>
        <script> type="text/javascript" src="../js/scripte.js"</script> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../librairie/fontawesome/css/all.min.css">

       
    </head>


    <body>
    <div class="container-fluid">
    <!-- <menu>
      <a href="pre_rendez.php"> <button class="btn btn-danger" name="rdv" >Demander un rendez-Vous</button><a/>
      <a href="#"><button class="btn btn-danger" name="rdv" >Voir mon profile</button><a/>
      <a href="#"><button class="btn btn-danger" name="rdv" >RV en Attente</button><a/>
      <a href="../index.php"><button class="btn btn-danger" name="deconnexion" >Deconnexion</button><a/>
    </menu> -->
   
      
     
    <nav class="navbar navbar-light bg-light navbar-fixed row">
    <div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>
      <div class="">
    <div class="">
    <div class="btn-group">
  <button type="button"  class="btn btn-light   btn-block dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Medecin</button> 
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add Medecin</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">List  Medecin</a>
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
<a href="#"><button class="btn btn-danger btn-md"  >Deconexion</button></a>
    </div>
</nav> 

  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 menu-lateral">
      <h1>Espace Gestionnaire</h1>
    <img src="../image/hopital.jpeg" class="img-fluid img-thumbnail img1" alt="en charge"/>
    <h1>Profil</h1>
    <img src="../image/m1.jpg" class="img-fluid img-thumbnail img2" alt="en charge"/>
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
      <table class="table table-condensed table-responsive table-hover table-striped ">
       <thead class="thead">
         <tr>
           <th>Nom</th>
           <th>Prenom</th>
           <th>Email</th>
           <th>Adresse</th>
           <th>Date</th>
           <th>Tel</th>
           <th>Matricule</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach($medecins as $m) { ?>
          <tr>
            <td><?php echo $m["nom"] ?></td>
            <td><?php echo $m["prenom"] ?></td>
            <td><?php echo $m["email"] ?></td>
            <td><?php echo $m["adresse"] ?></td>
            <td><?php echo $m["dateNaissance"] ?></td>
            <td><?php echo $m["tel"] ?></td>
            <td><?php echo $m["matricule"] ?></td>
            <td><a href="#"> <i class="fas fa-pencil-alt"></i></a>
                  <a href="#"><i class="fas fa-trash"></i></a></td>
          </tr>
         <?php } ?>
       </tbody>
      </table>
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
