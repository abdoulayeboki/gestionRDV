<?php
session_start();
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
 include_once "../../model/GestionSpecialite.php" ;
  $gestionSpecialite=new GestionSpecialite(array(),1);
  $specialites=$gestionSpecialite->selectSpecialite();
  
  
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
        <caption>Liste des specialites disponibles </caption>
       <thead class="thead">
         <tr>
           <th scope="col">Nom du specialite</th>
           <th scope="col">description</th>
           <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach($specialites as $s) { ?>
          <tr>
            <td><?php echo $s["nomSpecialite"] ?></td>
            <td><?php echo $s["description"] ?></td>
            <td><a href="updateSpecialite.php?id=<?php echo $s['idSpecialite']?>">
             <em class="fas fa-pencil-alt"></em></a>
      <a onclick="return confirm('Etes vous sûr de vouloir supprimer. Vous risquez de supprimer toutes   les informations liées à cette spécialité')"
                   href="../../controller/gestionnaire/deleteSpecialite.php?id=<?php echo $s['idSpecialite'] ?>">
                  <em class="fas fa-trash"></em></a></td>
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
  
    </body>
</html>
