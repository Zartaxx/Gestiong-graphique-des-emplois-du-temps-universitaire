<?php
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
$scripts = array();
$tri= " nom_formation DESC";
$liste_tri = array('nom_formation');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri))
{
switch($_GET['tri'])
{
	case 'nom_formation':
 	$tri = ' '.$_GET['tri'].' ASC';
	break; 
}}

 $scripts1 = array();
$tri1= " libelle_semestre ASC";
$liste_tri1 = array('libelle_semestre');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri1))
{
switch($_GET['tri'])
{
	case 'libelle_semestre':
 	$tri = ' '.$_GET['tri'].' DESC';
	break; 
}}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>gestion des emplois du temps</title>
</head>
<body style="background-color: rgb(219,226,226);">
     <br>
     <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion des Emplois Du Temps
              </h2>
          </div>
    </div>
    <br>
     <!-- fin de centre -->

    <div class="container" style="margin-bottom: 90px;">
<table class="table table-hover table-dark table-striped table-responsive-md">
<thead>
<tr> 
 <th scope="col">Formation <?php 
  foreach($liste_tri as $typetri)
  {
 	  
	  	  echo '<a style="font-size:18px; " href="gestion_des_emplois_de_temps.php?tri='.$typetri.'"><img src="image/t1.png" width="15" height="15"></a>';

  }?> </th>
 <th scope="col">   Semestre <?php  foreach($liste_tri1 as $typetri1)
  {
 	  
	  	  echo '<a style="font-size:18px; " href="gestion_des_emplois_de_temps.php?tri='.$typetri1.'"><img src="image/t2.png" width="15" height="15"></a>';

  }
  ?></th>
 <th scope="col" colspan="2"> Session</th> 
 <th scope="col"> Section</th> 
 <th scope="col"> Groupe</th> 
 <th scope="col" width="270" style="padding-left: 60px;"> Action</th>
 </tr>
 </thead>
  
 <?php
$reponse=mysqli_query($db,"SELECT DISTINCT nom_formation, libelle_semestre,
session , libelle_groupe, id_groupe, lib_section,section.id_section
FROM section, groupe, formation, module, semestre
WHERE section.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND groupe.id_formation = formation.id_formation ORDER BY $tri,libelle_semestre,libelle_groupe");
 
//requete qui permet de la suppression
if(isset($_GET['supp']))
{
$supprimer=mysqli_query($db,"DELETE FROM seance WHERE id_gr='".$_GET['id_groupe']."'");
?><SCRIPT LANGUAGE="Javascript">alert("Suppresion avec succés");</SCRIPT><?php
echo "<meta http-equiv='refresh' content='0; gestion_des_emplois_de_temps.php' />";
 }
  ?>
 <?php $var1=""; ?>
 <?php while($a=mysqli_fetch_array($reponse))
  { 
 $var=$a['nom_formation'];
 if($var1!=$var)
 {
	 $var1=$var;
 ?>
 <tr>  
 <td style="letter-spacing:2px;background: #0F1520; color: white;
"><b><?php  echo  $a['nom_formation'];?></b></td>
 <td colspan="6" style="letter-spacing:2px;background: #0F1520"></td>
  </td>
 </tr>
  <?php } ?>

<tr>
 <td colspan="1" style=" background-color:inherit; border:0px; "></td>
   <td><b><?php  echo  $a['libelle_semestre'];?></b></td>
  <td><b><?php  echo  $a['session']; ?></b></td>

 <td colspan="1"></td>
 <td><b><?php  echo  $a['lib_section'];?></b></td>
 <td><b><?php echo $a['libelle_groupe']; ?></b></td> 
  <td >
<a href="emploi_de_temp 1.php?groupe=<?php echo $a['id_groupe'];?>"><img src="image/ajouter2.png" width="30" height="30" title="Ajouter"; style="margin-left:50px"/></a>
  
<a href="consulter_emploi_du_temps.php?modif=<?php echo $a['id_groupe'];?>"><img src="image/EDT2.png" width="30" height="30" title="Consulter"; style="margin-left:px"/></a>
 
<a href="modifier_emploi_du_temps.php?groupe=<?php echo $a['id_groupe'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30" style="padding-right:0px; margin-left:0px;"/></a>
      
<a href="gestion_des_emplois_de_temps.php?id_groupe=<?php echo $a['id_groupe'];?> &supp=ok " onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a>
</td> 
    <?php   }?>
 </tr> 
  </table>
  </div>
   <a name="haut" id="haut"></a>
 <div><a id="cRetour" href="#"></a></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});
</script>
</body>
</html>