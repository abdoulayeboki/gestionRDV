<?php
session_start();
 define("WEBROOT",dirname(dirname(dirname(__FILE__))));
 define("DS",DIRECTORY_SEPARATOR);
 include_once (WEBROOT.DS."model/GestionSecretaire.php" );
 include_once (WEBROOT.DS."model/Secretaire.php" );

 $idUtilisateur=isset($_GET['id'])?$_GET['id']:null;
$tab=array();
$gestionSecretaire=new GestionSecretaire($tab,1);
$secretaire=$gestionSecretaire->unSecretaire($idUtilisateur);
foreach ($secretaire as $m){
    $matricule=$m['matricule'];
    $prenom=$m['prenom'];
    $nom=$m['nom'];
    $adresse=$m['adresse'];
    $tel=$m['tel'];
    $dateNaissance=$m['dateNaissance'];
    $email=$m['email'];
    $idService=$m['idService'];
}



?>
<!DOCTYPE html>  
<html lang="fr">
    <head>
        <title> gestionnaire    </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../librairie/css/style.css"/>
        <script> type="text/javascript" src="../../librairie/js/scripte.js"</script> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../../librairie/fontawesome/css/all.min.css">
      </head>
    <body>
    <div class="container-fluid">  
     <?php include_once("menu.php"); ?>
    <div class=" col-lg-s9 col-md-8 col-sm-8 col-xs-8 ">
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite la bienvenue  </marquee>
      <form method="post" action="../../controller/gestionnaire/updateSecretaire.php?id=<?php echo  $idUtilisateur; ?>" class=" offset-lg-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
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
      <label for="specialite" >Services</label>
      <select id="specialite" name="idService" class="form-control">
        <?php $service= $gestionSecretaire->selectService();
          foreach($service as $s){?>
            <option value="<?php echo $s['idService']  ?>" <?php if($idService == $s['idService']){
                echo selected;
            }?> > <?php echo $s['nomService']; ?> </option>
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
