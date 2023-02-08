<?php
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
//requete de liste
$reponse=mysqli_query($db,"SELECT DISTINCT semestre.libelle_semestre,libelle_groupe,id_groupe, section.id_section, formation.nom_formation AS formation, section.lib_section AS lib_sec, semestre.libelle_semestre AS semestre
FROM section, semestre, formation,groupe
WHERE section.id_formation = formation.id_formation
AND section.id_semestre = semestre.id_semestre
AND groupe.id_section=section.id_section
AND section.id_semestre = semestre.id_semestre
ORDER BY `formation`.`nom_formation` ASC ,semestre,libelle_groupe");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>gestion des groupes </title>
</head>
<body style="background-color: rgb(219,226,226);">
  <div class="container" style="margin-bottom: 90px;">
<?php 
//requete qui permet de la suppression
if(isset($_GET['id_groupe']))
{
	$id_groupe=$_GET['id_groupe'];
mysqli_query($db,"DELETE FROM groupe WHERE id_groupe='$id_groupe'");
mysqli_query($db,"DELETE FROM seance WHERE id_gr='$id_groupe'");
?><SCRIPT LANGUAGE="Javascript">alert("Suppresion avec succés");</SCRIPT><?php
}
?> <br><br>
 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Groupes.
              </h2>
          </div>
    </div>
    <br><br>
 <!-- fin de centre --> 

<table class="table table-hover table-dark table-striped table-responsive-md">
<thead><tr> 
 <th scope="col" >Formation</th>
 <th scope="col" >semestre</th>
 <th scope="col" >Section</th>
 <th scope="col" >Groupe</th>
 <th scope="col" >Action </th>
  </tr>
</thead>
 
 <?php $var1=""; ?>
 <?php while($a=mysqli_fetch_array($reponse))
  { 
 $var=$a['formation'];
 
 if($var1!=$var) { 	 
 $var1=$var;
 ?>
 <!--  -->
  <tr>  
 <td style="letter-spacing:2px;background: #0F1520; color: white;"><b><?php  echo  $a['formation'];?></b></td>
 <td colspan="4" style="background: #0F1520"></td>
 </tr>
 <?php } ?>
 <!--  -->
 <tr> 
 <td></td>
 <td><b><?php  echo  $a['semestre']; ?></b></td>
 <td><b><?php echo $a['lib_sec']; ?></b></td>
 <td><b><?php echo $a['libelle_groupe']; ?></b></td>

<td style=" ">
  <a href="modifier_groupe.php?modif=<?php echo $a['id_groupe'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30"/></a>
   <a href="gestion_des_groupes.php?id_groupe=<?php echo $a['id_groupe'];?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a>
  </td>
  </tr>
 <!--  -->
     <?php   }?>
  </table>
</div> 
<a name="haut" id="haut"></a>
 <div><a id="cRetour" class="cInvisible" href="#"></a></div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});
</script>
</body>
</html>
 
 