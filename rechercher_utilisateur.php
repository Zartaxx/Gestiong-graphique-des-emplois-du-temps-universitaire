<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="CSS/table.css">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>Cherche utilisateur </title>
</head>
<body style="background-color:#07415f;">   <br><br><br>
<div class="container" align="center" style="margin-top:10px;">
<form action="rechercher_utilisateur.php" method="post" name="rechercher">
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">chercher un utilisateur par son nom et prénom</p> 
<input type="text" placeholder="NOM" maxlength="15" name="nom_util" required><br/> 
<input type="text" placeholder="PRENOM" maxlength="15" name="prenom_util" required><br/> 
<input type="image" style=" margin-bottom:-8px;width:40px; height:30px;" src="image/rech.png"  >
<a href="gestion_des_utilisateurs.php" style="text-decoration:none;"> <input type="button"  class="btn_mod" value="Precédent"></a><br /></form>
</div>

<?php

 if(isset($_POST['nom_util']))
 {
	$nom_util=$_POST['nom_util'];
	$prenom_util=$_POST['prenom_util'];
	$cherche=mysqli_query($db,"select * from utilisateur,login where utilisateur.nom LIKE '%$nom_util%' and utilisateur.prenom LIKE '%$prenom_util%' and login.Num=utilisateur.id_user"); 
?>
<?php
	while ($a=mysqli_fetch_array($cherche))
	{
		?>
 <center><table class="responstable" style="width:830px; text-decoration:none; margin-left:4px;">
<thead><tr>
<th>Civilité</th>
<th>Nom</th>
<th>Prenom</th>
<th>tel</th>
<th>Email</th>
<th>Type</th>
   </tr></thead>
 
<tr><td><?php echo $a['civilite']  ?></td><td><?php echo $a['nom'] ?></td><td ><?php echo $a['prenom']?></td><td ><?php echo$a['tel']?></td><td ><?php echo $a['email']?></td><td ><?php echo $a['statut'] ?></td></tr>
	<?php }	
	} ?>
</table></center>
<?php

 if(isset($_POST['nom_util']))
 {
	$nom_util=$_POST['nom_util'];
	$prenom_util=$_POST['prenom_util'];
	$cherche2=mysqli_query($db,"select * from prof,login where prof.nom LIKE '%$nom_util%' and prof.prenom LIKE '%$prenom_util%' and login.Num=prof.id_prof"); 
?>
<?php
	while ($a=mysqli_fetch_array($cherche2))
	{
		?>
 <center><table class="responstable" style="width:830px; text-decoration:none; margin-left:4px;">
<thead><tr>
<th>Civilité</th>
<th>Nom</th>
<th>Prenom</th>
<th>tel</th>
<th>Email</th>
<th>Type</th>
   </tr></thead>
   <tr><td><?php echo $a['civilite']  ?></td><td><?php echo $a['nom'] ?></td><td ><?php echo $a['prenom']?></td><td ><?php echo$a['tel']?></td><td ><?php echo $a['email']?></td><td ><?php echo $a['statut'] ?></td></tr>
 <?php
 }	
	}  
?>
	</table></center>
</pre>
</div> 
</body>
</html>
