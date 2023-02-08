<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
include("menu_principale.php");
 ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Gestion des profs.</title>
</head>
<body style="background-color: rgb(219,226,226);">
<?php 
if(isset($_GET['id_prof']))
{
$id_prof=$_GET['id_prof'];
mysqli_query($db,"DELETE FROM prof WHERE id_prof='$id_prof'");
mysqli_query($db,"DELETE FROM enseignement WHERE id_prof='$id_prof'");
mysqli_query($db,"DELETE FROM login WHERE Num='$id_prof'");
mysqli_query($db,"DELETE FROM disponibilite WHERE id_prof='$id_prof'");
mysqli_query($db,"DELETE FROM seance WHERE id_pr='$id_prof'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
 }

//requete de liste
$reponse=mysqli_query($db,"SELECT * FROM prof,login where login.Num=prof.id_prof ORDER BY `prof`.`nom` ASC,prenom");?><br>
 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Enseignants.
              </h2>
          </div>
     </div>
     <br>
 <!-- fin de centre -->
<?php $compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb  from prof"));
  if($compte['nb']>0){ ?>

<div class="container" style="margin-bottom: 90px;">
<table class="table table-hover table-dark table-striped table-responsive-md">
<thead>
<tr> 
 <th width="110px;">Civilité</th>
 <th width="130px;">nom</th>
 <th width="130px;">prenom</th>
 <th width="140px;"> Tel</th>
 <th width="180px;"> @mail</th>
 <th width="130px;"> Login</th>
 <th width="130px;"> Password</th>
 <th colspan="2" scope="col" width="140px;" style="text-align: center;"> Action </th>   
 </tr> </thead> 
   
 <?php while($donnees=mysqli_fetch_array($reponse))
	{ ?>
 <tr>
 <td><?php echo $donnees['civilite']; ?></td>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
 <td><?php echo '0'.$donnees['tel']; ?></td>
 <td><?php echo $donnees['email']; ?></td>
 <td><?php echo $donnees['pseudo']; ?></td>
 <td><?php echo $donnees['passe']; ?></td> 
  <td>
 <a href="option_prof.php?id_prof=<?php echo $donnees['id_prof'];?>"><img src="image/consulter2.png" width="30" height="30" title="Consulter"; /></a>
 <a href="modifier_prof.php?modif_dip=<?php echo $donnees['id_prof'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30"/></a>  
     
  <a href="emplois_du_temps_prof.php?id_prof=<?php echo $donnees['id_prof'];?>"><img src="image/EDT2.png" width="30" height="30"/></a>

  <a href="gestion_des_prof.php?id_prof=<?php echo $donnees['id_prof'];?> "onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer" /></a>
             <?php }?>
  </td>
 </tr>
</table>
</div>
<?php } else { 	?><script language="JavaScript">alert("la table prof est vide!");</script><?php	
		echo "<meta http-equiv='refresh' content='0; ajouter_prof.php' />";
} ?>

</body>
</html>