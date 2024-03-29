<?php
session_start();
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
 include_once "../../model/GestionMedecin.php" ;
  $gestionMedecin=new GestionMedecin(array(),1);
  $medecins=$gestionMedecin->selectMedecin();
  
?>
<!DOCTYPE html>  
<html lang="fr">
    <head>
        <title> gestionnaire    </title>
        <meta charset="utf-8"/>
        <!-- <link rel="stylesheet" href="../librairie/bootstrap/dist/css/bootstrap.css"/>
        <script> src="../librairie/bootstrap/js/jquery/dist/jquery.js"</script>
        <script> src="../librairie/bootstrap/dist/js/bootstrap.js"</script>  -->
        <link rel="stylesheet" href="../../librairie/css/style.css"/>
        <script> type="text/javascript" src="../../librairie/js/scripte.js"</script> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../../librairie/fontawesome/css/all.min.css">       
    </head>


    <body>
    <div class="container-fluid"> 
    <?php include_once 'menu.php';?>
    <div class=" col-lg-9 col-md-8 col-sm-8 col-xs-8 ">
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite 
        la bienvenue  </marquee>
        <h5 class="offset-md-1 remplir">Ajout d'un rendez-vous</h5>
        <p class="offset-md-3 remplir">Veuillez choisir le médecin </p>
      <div class=" row">
      <?php foreach($medecins as $m) { ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
             <div class="row">
              <img src="../../librairie/image/m2.png" class="img-fluid  rounded-circle img2" alt="en charge"/>
              </div>
              <div class="medecin">
              <table class="table-light ">
                <tr>
                  <td> Prenom et Nom :</td>
                  <td><?php echo $m["prenom"]."  ". $m["nom"] ;?></td>
                </tr>
                <tr>
                  <td> Email :</td>
                  <td><?php echo $m["email"] ?></td>
                </tr>
                <tr>
                  <td> Tel :</td>
                  <td><?php echo $m["tel"] ?></td>
                </tr>
                <tr>
                  <td>Adresse :</td>
                  <td><?php echo $m["adresse"] ?></td>
                </tr>
                <tr>
                  <td> Service :</td>
                  <td><?php echo $m["nomService"] ?></td>
                </tr>
                <tr>
                  <td> Specialite :</td>
                  <td><?php echo $m["nomSpecialite"] ?></td>
                </tr>
              </table>
              <a href="enregistrerRdv.php?id=<?php echo $m['idUtilisateur'] ?>">
              <button class="btn btn-outline-primary btn-block">
               Prendre un RDV
              </button></a>
              </div>
              <br>
        </div>
        <?php } ?>
      </div>
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
