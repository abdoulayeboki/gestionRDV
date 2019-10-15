
<nav class="navbar navbar-light bg-light navbar-fixed row">
<div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>
<div class="">
<div class="">
<button type="button"  class="btn btn-light   btn-md "><a href="index.php">Accueil</a></button>
<div class="btn-group">
<button type="button"  class="btn btn-light   btn-block dropdown-toggle dropdown-toggle-split" 
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Patient</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="addPatient.php">Add Patient</a>
<a class="dropdown-item" href="listPatient.php">List  Patient</a>
</div>

<div class="btn-group">
<button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Gestion rendez-vous</button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="allRdv.php">Tous les rendez-vous</a>
    <a class="dropdown-item" href="listRdv.php">Mes  rendez-vous</a>
    <a class="dropdown-item" href="addRdv.php">Add rendez-vous</a>
    </div>
    </div>
    
   
            <a href="#"><button class="btn btn-danger btn-sm"  >Deconexion</button></a>
            </div>
            </nav>
            
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 menu-lateral">
            <h1>Espace Medecin</h1>
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
    