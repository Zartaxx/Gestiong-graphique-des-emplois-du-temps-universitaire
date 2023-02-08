<?php
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
?>
<!DOCTYPE>
<html>
<head>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Gestion des sections.</title>
</head>
<body style="background-color: rgb(219,226,226);">
   <?php 
   
   //requete qui permet de la suppression
if(isset($_GET['id_section']))
{
$id_section=$_GET['id_section'];
mysqli_query($db,"DELETE FROM section WHERE id_section='$id_section'");
mysqli_query($db,"DELETE FROM seance WHERE id_sec='$id_section'");
mysqli_query($db,"DELETE FROM groupe WHERE id_section='$id_section'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
 }
//requete de liste
$reponse=mysqli_query($db," SELECT DISTINCT semestre.libelle_semestre, section.id_section, formation.nom_formation AS formation, section.lib_section AS lib_sec, semestre.libelle_semestre AS semestre
FROM section, semestre, formation
WHERE section.id_formation = formation.id_formation
AND section.id_semestre = semestre.id_semestre
AND section.id_semestre = semestre.id_semestre
ORDER BY `formation`.`nom_formation` ASC ,semestre");?> <br>
 <br>
 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Sections.
              </h2>
          </div>
    </div>
    <br>
     <!-- fin de centre -->
<?php $compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb  from section"));
  if($compte['nb']>0){ ?>
<div class="container" style="margin-bottom: 90px;">
<table class="table table-hover table-dark table-striped table-responsive-md">
  <thead>
    <tr> 
  <th scope="col">Formation </th>
  <th scope="col">Semestre  </th>
  <th scope="col">Libellé section</th>
  <th scope="col">Action</th>
   </tr>
  </thead>
 
 <?php $var1=""; ?>
 <?php while($a=mysqli_fetch_array($reponse))
  { 
 $var=$a['formation'];
 
 if($var1!=$var) { 	 
 $var1=$var;
 ?>
 <tr> 
 <td style="letter-spacing:2px; width: 300px"><b><?php echo $a['formation'];?></b></td><?php }?>
 <td style="width: 300px"><b><?php  echo  $a['semestre']; ?></b></td>
 <td style=" width: 340px;"><b><?php echo $a['lib_sec']; ?></b></td>
<td >
  <a href="modifier_section.php?modif_dip=<?php echo $a['id_section'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30"/></a>
  <a style="font-family: arial,sans-serif;font-size:16px;font-weight:200;" href="emplois_du_temps_section.php?id_section=<?php echo $a['id_section'];?>"><img src="image/EDT2.png" width="30" height="30" title="afficher EDT"/></a>
   <a href="gestion_des_section.php?id_section=<?php echo $a['id_section'];?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront modifier'));">  <img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a>
</td>
  </tr>
<td style="background-color:transparent; border-color:transparent;padding:0px;" ></td>
     <?php   }?>
      
</table> 
</div>
<?php } else {?><script language="JavaScript">alert("la table section est vide!");</script><?php	echo "<meta http-equiv='refresh' content='0; ajouter_section.php' />";} ?>
</body>
</html>
