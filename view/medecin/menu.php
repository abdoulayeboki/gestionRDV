<?php
if(!(isset($_SESSION['id']))){
  header("location:../../index.php");
}
include_once "../../model/GestionMedecin.php";
$idSession = $_SESSION['id'];
$gestionMedecin = new GestionMedecin(array(), 1);
$unMedecin = $gestionMedecin->unMedecin($idSession);

foreach ($unMedecin as $m) {
    $nom = $m['nom'];
    $prenom = $m['prenom'];
    $specialite = $m['nomSpecialite'];
    $matricule = $m['matricule'];
    $status = $m['nomStatus'];
}

?>

<nav class="navbar navbar-light bg-light navbar-fixed row">
<div class="col-lg-2 col-md-4 col-sm-6 ">SunuClinic</div>
<button type="button"  class="btn btn-light   btn-md "><a href="index.php">Accueil</a></button>
<div class="btn-group">
<button type="button"  class="btn btn-light   btn-block dropdown-toggle dropdown-toggle-split" 
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion dossier médical</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="addDossier.php">Add dossier médical</a> 
<a class="dropdown-item" href="listDossier.php">List dossier médical</a>
</div>

<div class="btn-group">
<button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Gestion rendez-vous</button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="listRdv.php">Mes rendez-vous</a>
    </div>
    </div>
    
      <div class="btn-group">
      <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false"><?php echo $nom." ".$prenom?></button>
    <div class="dropdown-menu">
     <a class="dropdown-item" href="../../controller/gestionnaire/deconnexion.php"><button class="btn btn-danger btn-sm"  >Deconexion</button></a>
    </div>
     </div>
           
      </div>
       </nav>
       
       

<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 menu-lateral">
		<h1>Espace Medecin</h1>
		<img src="../../librairie/image/hopital.jpeg"
			class="img-fluid  img1" alt="en charge" />
		<h1>Profil</h1>
		<img src="../../librairie/image/m1.jpg"
			class="img-fluid img2" alt="en charge" />
		<table class="table">
            
            <tr>
				<td>Nom</td>
				<td><?php echo $nom ?></td>
			</tr>
			<tr>
				<td>Prenom</td>
				<td><?php echo $prenom ?></td>
			</tr>
			<tr>
				<td>Specialite</td>
				<td><?php echo $specialite; ?></td>
			</tr>
			<tr>
				<td>Matricule</td>
				<td><?php echo $matricule; ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $status; ?></td>
			</tr>
		</table>
	</div>