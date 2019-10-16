<?php
session_start();
include_once "../../model/Medecin.php" ;
$idSession=$_SESSION['id'];
$tab=array(
    'idUtilisateur'=>$idSession,
 );
  $medecin=new Medecin($tab,9);
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
      <form method="post" action="../../controller/medecin/addDossier.php" class="needs-validation offset-lg-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
 
    <div class="form-group ">
      <label for="nomExamen">Examen</label>
      <input type="text" class="form-control" id="nomExamen" required name="nomExamen">
    </div>
    <div class="form-group ">
      <label for="resultatExamen">Resultat examen</label>
      <textarea class="form-control" id="resultatExamen"  name="resultatExamen" required placeholder="resultatExamen" ></textarea>
    </div>

    <div class="form-group ">
      <input type="dateTime" class="form-control" id="dateExamen" 
      value="<?php  echo date("Y-m-d H:i:s");  ?>"  
      name="dateExamen" required hidden  />
    </div>
    <div class="form-group ">
      <label for="ordonnance">Ordonnance</label>
      <input type="text" class="form-control" id="ordonnance"  name="ordonnance" required />
    </div>
    <div class="form-group ">
      <input type="text" id="idUtilisateur"  name="idUtilisateur" required hidden value="<?php 
      echo $medecin->getIdUtilisateur() ;?>"/>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Patient </label>
         </div>   
        <div class="form-group  col-md-6 ">
       <select name="idPatient">
         <?php 
            $patient=$medecin->selectPatient();
            foreach ($patient as $p) { ?>
                <option value="<?php echo $p['idPatient'] ;?>"><?php echo $p['matriculePatient'] ;?></option>
          <?php  }
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
