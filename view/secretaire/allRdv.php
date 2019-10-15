<?php
session_start();
include_once "../../model/Secretaire.php" ;
$secretaire=new Secretaire(array(),423);
$rdv=$secretaire->selectRdv();

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
    <?php include_once 'menu.php';?>
    <div class=" col-lg-9 col-md-8 col-sm-8 col-xs-8 ">
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite la bienvenue  </marquee>
      <table class="table table-condensed table-responsive table-hover table-striped ">
        <caption>Liste des rendez-vous </caption>
       <thead class="thead">
         <tr>
           <th>Motif</th>
           <th>Heure début</th>
           <th>Heure fin</th>
           <th>Date du Rdv</th>
           <th>patient</th>
           <th>Matricule patient</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach($rdv as $r) { ?>
          <tr>
            <td><?php echo $r["motifRdv"] ?></td>
            <td><?php echo $r["heureDebut"] ?></td>
            <td><?php echo $r["heureFin"] ?></td>
            <td><?php echo $r["dateRdv"] ?></td>
            <td><?php echo $r["nomPatient"]." ".$r['prenomPatient'] ;?></td>
            <td><?php echo $r["matriculePatient"];?></td>
            <td><a href="updateAllRdv.php?id=<?php echo $r['idRdv']?>">
            <i class="fas fa-pencil-alt"></i></a>
                  <a href="../../controller/secretaire/deleteAllRdv.php?id=<?php echo $r['idRdv'] ?>">
                  <i class="fas fa-trash"></i></a></td>
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
