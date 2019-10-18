<?php
session_start();
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
 include_once "../../model/GestionMedecin.php" ;
 $idSession=$_SESSION['id'];

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
   
   <?php include_once 'menu.php';?>
    <div class=" col-lg-9 col-md-8 col-sm-8 col-xs-8 ">
      <marquee behavior="scroll" scrollamount="5">Bonjour, l'équipe de SunuClinic vous souhaite la bienvenue  </marquee>
     
      <div class="row offset-md-2 remplir"><h2> Bienvenue à la page d'accueil </h2>  </div>
      <div class="row">  
      <div class="col-md-4"> 
        <h4 class="remplir">Nos témoignages</h4>    
        <img src="../../librairie/image/h4.jpg" class="img-fluid  col-md-11 img2" alt="en charge"/>
        <p>
        Grâce à sunuClinic, j'optimise mon temps : mes patients indiquent leurs
         informations et me permettent ainsi de préparer le déroulement de la consultation.
         Les services SunuClinic me rendent énormément service au quotidien,
          cela me fait gagner un temps considérable sur mes consultations.  
          Dès que ma secrétaire ajoute un rendez-vous, je reçois une notification sur mon mobile. 
          Aujourd'hui, j'aurais du mal à me passer SunuClinic. 
        </p>
        </div>
        <div class="col-md-4"> 
        <h4 class="remplir">Actualité du jour </h4>    
        <img src="../../librairie/image/h3.jpg" class="img-fluid  col-md-11 img2" alt="en charge"/>
        <p>
        Grâce à sunuClinic, j'optimise mon temps : mes patients indiquent leurs
         informations et me permettent ainsi de préparer le déroulement de la consultation.
         Les services SunuClinic me rendent énormément service au quotidien,
          cela me fait gagner un temps considérable sur mes consultations.  
          Dès que ma secrétaire ajoute un rendez-vous, je reçois une notification sur mon mobile. 
          Aujourd'hui, j'aurais du mal à me passer SunuClinic. 
        </p>
        </div>
        <div class="col-md-4"> 
        <h4 class="remplir">Nos informations </h4>    
        <img src="../../librairie/image/h4.jpg" class="img-fluid  col-md-11 img2" alt="en charge"/>
        <p>
        Grâce à sunuClinic, j'optimise mon temps : mes patients indiquent leurs
         informations et me permettent ainsi de préparer le déroulement de la consultation.
         Les services SunuClinic me rendent énormément service au quotidien,
          cela me fait gagner un temps considérable sur mes consultations.  
          Dès que ma secrétaire ajoute un rendez-vous, je reçois une notification sur mon mobile. 
          Aujourd'hui, j'aurais du mal à me passer SunuClinic. 
        </p>
        </div>
        <div class="col-md-4"> 
        <h4 class="remplir">Nos Services</h4>    
        <img src="../../librairie/image/h3.jpg" class="img-fluid  col-md-11 img2" alt="en charge"/>
        <p>
        Grâce à sunuClinic, j'optimise mon temps : mes patients indiquent leurs
         informations et me permettent ainsi de préparer le déroulement de la consultation.
         Les services SunuClinic me rendent énormément service au quotidien,
          cela me fait gagner un temps considérable sur mes consultations.  
          Dès que ma secrétaire ajoute un rendez-vous, je reçois une notification sur mon mobile. 
          Aujourd'hui, j'aurais du mal à me passer SunuClinic. 
        </p>
        </div>
        <div class="col-md-4"> 
        <h4 class="remplir">Nos Services</h4>    
        <img src="../../librairie/image/h5.jpg" class="img-fluid  col-md-11 img2" alt="en charge"/>
        <p>
        Grâce à sunuClinic, j'optimise mon temps : mes patients indiquent leurs
         informations et me permettent ainsi de préparer le déroulement de la consultation.
         Les services SunuClinic me rendent énormément service au quotidien,
          cela me fait gagner un temps considérable sur mes consultations.  
          Dès que ma secrétaire ajoute un rendez-vous, je reçois une notification sur mon mobile. 
          Aujourd'hui, j'aurais du mal à me passer SunuClinic. 
        </p>
        </div>
        <div class="col-md-4"> 
        <h4 class="remplir">Nos Services</h4>    
        <img src="../../librairie/image/h6.jpeg" class="img-fluid  col-md-11 img2" alt="en charge"/>
        <p>
        Grâce à sunuClinic, j'optimise mon temps : mes patients indiquent leurs
         informations et me permettent ainsi de préparer le déroulement de la consultation.
         Les services SunuClinic me rendent énormément service au quotidien,
          cela me fait gagner un temps considérable sur mes consultations.  
          Dès que ma secrétaire ajoute un rendez-vous, je reçois une notification sur mon mobile. 
          Aujourd'hui, j'aurais du mal à me passer SunuClinic. 
        </p>
        </div>
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
