<?php
session_start();
//  include_once ("../../model/GestionMedecin.php" );
//  include_once ("../../model/Medecin.php") ;
 define("WEBROOT",dirname(dirname(dirname(__FILE__))));
 define("DS",DIRECTORY_SEPARATOR);
 include_once (WEBROOT.DS."model/GestionMedecin.php" );
 include_once (WEBROOT.DS."model/Medecin.php" );

$idUtilisateur=isset($_GET['id'])?$_GET['id']:null;
// echo $idUtilisateur;
// die();
$tab=array();
$gestionMedecin=new GestionMedecin($tab,1);
$unMedecin=$gestionMedecin->unMedecin(2);
$medecin=$gestionMedecin->unMedecin($idUtilisateur);
//var_dump($medecin);
foreach ($medecin as $m){
    $matricule=$m['matricule'];
    $prenom=$m['prenom'];
    $nom=$m['nom'];
    $adresse=$m['adresse'];
    $tel=$m['tel'];
    $dateNaissance=$m['dateNaissance'];
    $email=$m['email'];
    $idSpecialite=$m['idSpecialite'];
}



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
        <script> type="text/javascript" src="../../librairie/js/scripte.js"</script> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../../librairie/fontawesome/css/all.min.css">

       
    </head>


    <body>
    <div class="container-fluid">  
    <nav class="navbar navbar-light bg-light navbar-fixed row">
    <div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>

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
<a href="#"><button class="btn btn-danger btn-md"  >Deconexion</button></a>
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
    <div class=" col-lg-s9 col-md-8 col-sm-8 col-xs-8 ">
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite la bienvenue  </marquee>
      <form method="post" action="../../controller/updateMedecin.php?id=<?php echo  $idUtilisateur; ?>" class=" offset-lg-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
      <div class="form-group ">
      <label for="matricule">Matricule</label>
      <input type="text" class="form-control" id="matricule"  readonly="true" name="matricule"
      value="<?php  echo $matricule; ?>"/>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" required name="nom" value="<?php echo $nom?>">
    </div>
    <div class="form-group col-md-6">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control" id="prenom"  name="prenom" required placeholder="prenom"
       value="<?php echo $prenom?>">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse"  value="<?php echo $adresse?>" name="adresse" required placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-6">
    <label for="telephon">Telephon</label>
    <input type="text" class="form-control" id="telephon" value="<?php echo $tel?>" name="tel" required placeholder="77 895 45 22">
  </div>
  </div>
  <div class="form-group ">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" value="<?php echo $email?>" name="email" required placeholder="sarr@gmail.com">
    </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="dateNaissance">Date de naissance</label>
      <input type="text" class="form-control"  name="dateNaissance" value="<?php echo $dateNaissance?>" required id="dateNaissance">
    </div>
    <div class="form-group col-md-4">
      <label for="specialite" >Specialite</label>
      <select id="specialite" name="idSpecialite" class="form-control">
        <?php $specialite= $gestionMedecin->selectSpecialite();
          foreach($specialite as $s){?>
            <option value="<?php echo $s['idSpecialite']  ?>" <?php if($idSpecialite == $s['idSpecialite']){
                echo selected;
            }?> > <?php echo $s['nomSpecialite']; ?> </option>
         <?php }
        ?>
      </select>
    </div>
  </div>

  <button type="submit"  class="btn btn-primary row btn-block">Enregistrer</button>
    </form>

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
