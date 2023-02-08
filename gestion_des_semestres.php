 <?php
 include("menu_principale.php");
 // appelle au code de connexion à la BDD
require_once("bdd.php");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Gestion Des Semestre.</title>
</head>
<body style="background-color: rgb(219,226,226);">
    <?php 
	/*	Supprimier tous les entres en relation		*/
if(isset($_GET['id_semestre']))
{
$id_semestre=$_GET['id_semestre'];
mysqli_query($db,"DELETE FROM semestre WHERE id_semestre='$id_semestre'");
mysqli_query($db,"DELETE FROM enseignement WHERE id_semestre='$id_semestre'");
mysqli_query($db,"DELETE FROM seance WHERE id_sem='$id_semestre'");
mysqli_query($db,"DELETE FROM module WHERE id_semestre='$id_semestre'");
mysqli_query($db,"DELETE FROM section WHERE id_semestre='$id_semestre'");
mysqli_query($db,"DELETE FROM groupe WHERE id_semestre='$id_semestre'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
 }
//requete de liste
$donnee=mysqli_query($db,"SELECT * FROM semestre,formation where semestre.id_formation=formation.id_formation ORDER BY `semestre`.`id_formation` ASC,libelle_semestre");?> <br>
 <br>
 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Semestre.
              </h2>
          </div>
    </div>
    <br>
     <!-- fin de centre -->
   <?php $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb  from semestre"));
  if($compte['nb']>0){ ?>
  <div class="container" style="margin-bottom: 90px;">
 <table class="table table-hover table-dark table-striped table-responsive-md">
<thead><tr> 
 <th scope="col">Session</th>
 <th scope="col">Libelle du semestre</th>
 <th scope="col">Formation</th>
 <th scope="col">Date debut du semestre</th>
 <th scope="col">Date fin du semestre</th>
 <th scope="col">Action</th>
 </tr></thead>
  <tbody>
  <?php 
while($donnees=mysqli_fetch_array($donnee)){?>
 <tr>
 <td><?php echo $donnees['session']; ?></td>
 <td><?php echo $donnees['libelle_semestre']; ?></td>
 <td><?php echo $donnees['nom_formation']; ?></td>
 <td><?php echo $donnees['date_debut_sem']; ?></td>
 <td><?php echo $donnees['date_fin_sem']; ?></td>


 <td><a href="modifier_semestre.php?modif_dip=<?php echo $donnees['id_semestre'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30" /></a>
 
  <a href="gestion_des_semestres.php?id_semestre=<?php echo $donnees['id_semestre'];?> " onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));" ><img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a>
  
    </td>
    <?php }?>
 </tr>
 </table>
</div>
 <?php } else { 	?><script language="JavaScript">alert("la table semestre est vide!");</script><?php	
		echo "<meta http-equiv='refresh' content='0; ajouter_semestre.php' />";
} ?>
</body>
</html>
