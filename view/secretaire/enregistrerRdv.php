<?php
session_start();
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
 include_once "../../model/Secretaire.php" ;
 $idMedecin=$_GET['id'];
 $tab=array('idUtilisateur'=>$_SESSION['id']);
 $secretaire=new Secretaire($tab,45);
?>
<!DOCTYPE html>  
<html lang="fr">
    <head>
        <title> secretaire  </title>
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
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite 
        la bienvenue  </marquee>
        <h5 class="offset-md-1 remplir">Ajout d'un rendez-vous</h5>
        <p class="offset-md-3 remplir">Veuillez remplir les champs </p>
      <form method="post" action="../../controller/secretaire/addRdv.php" 
      class="needs-validation offset-lg-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="motifRdv">motifRdv</label>
      <input type="text" class="form-control" id="motifRdv" required name="motifRdv" >
    </div>
    
    <div class="form-group col-md-6">
      <label for="dateRdv">dateRdv</label>
      <input type="date" class="form-control" id="dateRdv"  name="dateRdv" required >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="heureDebut">heureDebut</label>
    <select name="heureDebut"  class="form-control">
         <?php $heure=$secretaire->selectHeure();
         foreach($heure as $h){ ?>
              <option value="<?php echo $h['heure']; ?>"><?php echo $h['heure'] ?></option>
       <?php
         }
         ?>
      </select>
  </div>
  <div class="form-group col-md-6">
    <label for="heureFin">heureFin</label>
    <select name="heureFin"  class="form-control">
         <?php $heure=$secretaire->selectHeure();
         foreach($heure as $h){ ?>
              <option value="<?php echo $h['heure']; ?>"><?php echo $h['heure'] ?></option>
       <?php
         }
         ?>
      </select>
  </div>
  </div>
    <div class="form-group ">
      <label for="idPatient">Matricule du Patient</label>
      <select name="idPatient"  class="form-control">
         <?php $patient=$secretaire->selectPatient();
         foreach($patient as $p){ ?>
              <option value="<?php echo $p['idPatient']; ?>"><?php echo $p['matriculePatient'] ?></option>
       <?php
         }
         ?>
      </select>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="idMedecin">Id Medecin</label>
      <input type="text"   name="idMedecin" readonly="true" value="<?php echo $idMedecin; ?>">
    </div>
    
    <div class="form-group col-md-6">
      <label for="idSecretaire"> Id Secretaire</label>
      <input type="text"   name="idSecretaire" readonly="true" value="<?php
          echo $secretaire->getIdUtilisateur(); ?>">
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
