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
     <title>gestion des formations </title>
</head>
<body style="background-color: rgb(219,226,226);">
	<div class="container" style="margin-bottom: 90px;">
 <?php
 /*	Supprimier tous les entres en relation		*/
if(isset($_GET['id_formation']))
{
$id_formation=$_GET['id_formation'];
mysqli_query($db,"DELETE FROM formation WHERE id_formation='$id_formation'");
mysqli_query($db,"DELETE from semestre where id_formation='$id_formation'");
mysqli_query($db,"DELETE FROM enseignement WHERE id_formation='$id_formation'");
mysqli_query($db,"DELETE FROM seance WHERE id_for='$id_formation'");
mysqli_query($db,"DELETE from module where id_formation='$id_formation'");
mysqli_query($db,"DELETE from section where id_formation='$id_formation'");
mysqli_query($db,"DELETE from groupe where id_formation='$id_formation'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
 }
//requete de liste 
 $donnee=mysqli_query($db,"SELECT * FROM formation ORDER BY `formation`.`nom_formation` ASC");
 
 ?> 
 <br>
 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Formations
              </h2>
          </div>
    </div>
    <br>
     <!-- fin de centre -->
 <?php $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb  from formation"));
  if($compte['nb']>0){ ?>
   
 
<table class="table table-hover table-dark table-striped table-responsive-md">
<thead><tr> 
 <th scope="col" style="font-variant:normal; font-size:125%">Nom de formation </th>
 <th scope="col" style="font-variant:normal; font-size:125%">Cycle</th>
 <th scope="col" style="font-variant:normal; font-size:125%; text-align: center;">Nombre du semestre</th>
 <th scope="col" style="font-variant:normal; font-size:125%"> Action </th>
  
 </tr></thead>
  <tbody>
  <?php 
while($a=mysqli_fetch_array($donnee)){?>
 <tr> 
 <td><?php echo $a['nom_formation']; ?></td>
 <td><?php echo $a['cycle']; ?></td>
 <td style="text-align: center;"><?php echo $a['nbre_semestre']; ?></td>
 <td>
  
 <a href="modifier_formation.php?modif_dip=<?php echo $a['id_formation'];?>"><img src="image/modifier3.png" title="modifier" width="35" height="30" style="padding-right:10px;  "/></a>
     
    
  <a href="gestion_formation.php?id_formation=<?php echo $a['id_formation'];?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a>
             <?php }?>

  </td>
 </tr>
 </tbody>
</table>
</div>
 <?php } else { 	?><script language="JavaScript">alert("la table formation est vide!");</script><?php	
		echo "<meta http-equiv='refresh' content='0; ajouetr_formation.php' />";
} ?>
 </body>
 </html>