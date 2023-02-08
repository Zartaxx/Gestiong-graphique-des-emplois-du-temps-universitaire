<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestion des module</title>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/table.css">
</head>
   <?php include("menu_principale.php")?><br><br>
<body> 
<br><br> 
<center>
    <?php
$com=$_POST['cher_module'];
$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb  from module,formation where module.libelle_module LIKE '%$com%' and formation.id_formation=module.id_formation"));
  if(isset($_POST['cher_module']) && ($compte['nb']>0)){
 	$cher_module=$_POST['cher_module'];
$cherche=mysqli_query($db,"SELECT formation.nom_formation as formation,module.libelle_module,module.volume_horaire from module,formation where module.libelle_module LIKE '%$cher_module%' and formation.id_formation=module.id_formation");
 ?>
<p style="font-size:25px; color:#FFF; letter-spacing:4px; word-spacing:6px; margin-top:-45px;">La Recherche Correspond au  module :   </p>
  <center>
<table id="rounded-corner" >
<thead><tr><th class="rounded-company">Module</th>
<th class="rounded-q1">Nom de Formation</th>
<th class="rounded-q3">Volume horaire</th>
<tbody>
 <?php
	while($a=mysqli_fetch_array($cherche)){
echo '<tr><td>'.$a['libelle_module'].'</td><td>'.$a['formation'].'</td><td >'.$a['volume_horaire'].'</td></tr>';
	}
	
	?>
</tbody>
</table>
</center>
</center><br>
<a style="text-decoration:none;" href="gestion_module.php" ><input value="Precédent" type="submit" class="img2"></a>
<?php
}  else {
	?><script language="JavaScript">alert("le module rechercher est introuvable...");</script><?php	
			echo "<meta http-equiv='refresh' content='0; gestion_module.php' />";


	
	
	
}
?>
</body>
</html>