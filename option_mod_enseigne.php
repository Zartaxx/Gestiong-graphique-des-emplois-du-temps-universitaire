<?php 
// appelle au code de connexion à la BDD
require_once("bdd.php");
if(isset($_GET['supp'])){
	
$reponse = mysqli_query($db,"DELETE FROM enseignement WHERE id='".$_GET['id']."'");?>
<SCRIPT LANGUAGE="Javascript">alert("Suppresion avec succés !");</SCRIPT><?php
echo "<meta http-equiv='refresh' content='0; module_enseigne.php' />";
}
//select enseignement.id,prof.id_prof,prof.nom,prof.prenom,module.libelle_module,formation.nom_formation,semestre.libelle_semestre from prof,module,formation,semestre,enseignement where prof.id_prof=enseignement.id_prof and module.id_module=enseignement.id_module and formation.id_formation=enseignement.id_formation and semestre.id_semestre=enseignement.id_semestre and enseignement.id_prof=$id
if(isset($_GET['module']))
{
$id=$_GET['module'];
$data=mysqli_query($db,"SELECT DISTINCT enseignement.id, prof.id_prof, prof.nom as nom, prof.prenom, module.libelle_module, volume_horaire,formation.nom_formation, semestre.libelle_semestre
FROM prof, module, formation, semestre, enseignement
WHERE prof.id_prof = enseignement.id_prof
AND module.id_module = enseignement.id_module
AND formation.id_formation = enseignement.id_formation
AND enseignement.id_prof =$id
AND enseignement.id_semestre= semestre.id_semestre ORDER BY `enseignement`.`id_formation` DESC
");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>module enseigne</title>
 <link rel="stylesheet" type="text/css" media="screen" href="CSS/table.css">

</head>
<body>
      <?php include("menu_principale.php")?>
      <br><br>
      <?php  
 $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count( * ) AS nb ,nom ,prenom
FROM enseignement, prof
WHERE enseignement.id_prof = '$id'
AND enseignement.id_prof = prof.id_prof "));
$nom=mysqli_real_escape_string($db,htmlspecialchars($compte['nom']));
$prnom=mysqli_real_escape_string($db,htmlspecialchars($compte['prenom']));

  if($compte['nb']>0){ ?>
 <center>
<table id="rounded-corner" style="width:900px;">
<thead>
<p style="color:#FFF; font-size:22px; text-align:center;">Modules enseignées </p>
<tr> 
 <th scope="col" class="rounded-q2">nom</th>
 <th scope="col" class="rounded-q2">prenom</th>
 <th scope="col" class="rounded-q2">Module</th>
 <th scope="col" class="rounded-q2">Volume Horaire</th>
 <th scope="col" class="rounded-q2">specialité</th>
 <th scope="col" class="rounded-q2">Semestre</th>
 <th scope="col"  width="270"   class="rounded-q4"> Action</th>
 </tr>
 </thead>
  <tbody>
 	  
	  <?php while($a=mysqli_fetch_array($data)) { ?>
 <tr bgcolor="#CCFFFF";>
 <td><?php echo $a['nom']; ?></td>
 <td><?php echo $a['prenom']; ?></td>
 <td><?php echo $a['libelle_module']; ?></td>
 <td><?php echo $a['volume_horaire']; ?></td>
 <td><?php echo $a['nom_formation']; ?></td>
 <td><?php echo $a['libelle_semestre']; ?></td> 
 
<td><a href="option_mod_enseigne.php?id=<?php echo $a['id'];?> &supp=ok" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront supprimé'));"> <img src="image/delet2.png" height="30" width="30"></a></td>
  <?php } ?>
  </tr> 
</table>
  </center>
   <?php } else { 	?><script language="JavaScript">alert("Aucun module enseignées par  <?php echo $nom.'  '.$prnom ?>  !");</script><?php 		echo "<meta http-equiv='refresh' content='0; module_enseigne.php' />";
	
    }}?>
</body>
</html>


 