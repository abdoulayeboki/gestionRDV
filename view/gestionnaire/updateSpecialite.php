<?php
session_start();
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
 define("WEBROOT",dirname(dirname(dirname(__FILE__))));
 define("DS",DIRECTORY_SEPARATOR);
 include_once (WEBROOT.DS."model/GestionSpecialite.php" );
 include_once (WEBROOT.DS."model/Specialite.php" );
 include_once (WEBROOT.DS."model/GestionService.php" );

$idSpecialite=isset($_GET['id'])?$_GET['id']:null;
$gestionSpecialite=new GestionSpecialite(array());
$specialite=$gestionSpecialite->unSpecialite($idSpecialite);
foreach ($specialite as $s){
    $nomSpecialite=$s['nomSpecialite'];
    $description=$s['description'];
    $idService=$s['idService'];
  
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
      <form method="post" action="../../controller/gestionnaire/updateSpecialite.php?id=<?php echo $idSpecialite; ?>"
       class="needs-validation offset-lg-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
 
    <div class="form-group ">
      <label for="nomSpecialite">Nom du specialite</label>
      <input type="text" class="form-control" id="nomSpecialite" required name="nomSpecialite"
       value="<?php echo $nomSpecialite; ?>" >
    </div>
    <div class="form-group ">
      <label for="description">description</label>
      <textarea class="form-control" id="description"  name="description" required> 
        <?php echo $description; ?>
      </textarea>
    </div>
    <div class="form-group">
    <label for="nomService">Service</label>
    <select id="idService" name="idService" class="form-control">
        <?php 
          $gestionService=new GestionService(array());
          $service= $gestionService->selectService();
          foreach($service as $s){?>
            <option value="<?php echo $s['idService']; ?>" <?php if($idService==$s['idService'] ) {
               echo "selected"; } ?> >
                <?php echo $s['nomService'] ?>
          </option>
         <?php }
        ?>
      </select>
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
