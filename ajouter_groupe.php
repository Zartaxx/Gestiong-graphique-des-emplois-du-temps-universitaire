<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
?>
<html>
<meta charset="UTF-8">
<head><title>ajouter groupe</title>
</head>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<body style="background-color:#07415f;">
<?php
if(isset($_POST['nom_formation']))
{
$_SESSION['nom_formation']=$_POST['nom_formation'];
$nom_formation=$_POST['nom_formation'];
$semestre=$_POST['semestre'];
$_SESSION['semestre']=$semestre; 
 $donnee=mysqli_query($db,"SELECT semestre.libelle_semestre,id_section,lib_section,formation.nom_formation from section,formation,semestre where  semestre.id_formation=section.id_formation and section.id_semestre=semestre.id_semestre and formation.id_formation=section.id_formation and formation.nom_formation='$nom_formation' and semestre.libelle_semestre='$semestre'");
 ?>
<div class="container" style="width:400px";>
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">AJOUTER UN GROUPE <br><span style="color:#FFF"> FORMATION :<?php echo $nom_formation;?> </span> <br><span style="color:#FFF">SEMESTRE : <?php echo $semestre;?> </span></p>
  <form action="ajouter_groupe.php" method="POST">
 <select name="nom_section" id="section" required>
<option selected disabled value="">Section</option>
<?php
while($a=mysqli_fetch_array($donnee)){
   echo '<option value="'.$a['id_section'].'">'.$a['lib_section'].'</option>';} ?>
</select><br>
<input type="text" placeholder="libelle de groupe" maxlength="30" name="libelle_groupe" required value="<?php if (isset($_POST['libelle_groupe'])){echo $_POST['libelle_groupe'];} ?>"><br>
<center><input type="submit" value="Ajouter" name="Ajouter" class="btn_mod" style="width:110px">
<a href="gestion_des_groupes.php" style="text-decoration:none"><input type="button" value="Retour" class="btn_mod" style="width:100px; height:31px;"></a>
</center>
</form>
</div>
<?php 
}
else if(isset($_POST['nom_section'])){//s'il a cliquer sur ajouter la 2eme fois
$id_section=$_POST['nom_section'];
$nom_formation=$_SESSION['nom_formation'];
$libelle_groupe=$_POST['libelle_groupe'];//Premier ou 2eme devoir -- 1 ou 2
$semestre=$_SESSION['semestre'];
$codeclasse=mysqli_fetch_array(mysqli_query($db,"SELECT formation.id_formation,semestre.id_semestre,formation.nom_formation from formation,semestre where nom_formation='$nom_formation' and libelle_semestre='$semestre'")) ;
$id_formation=$codeclasse['id_formation'];
$id_semestre=$codeclasse['id_semestre'];
 /*
 pour ne pas ajouter deux enseignements similaires
 */
$data=mysqli_query($db,"SELECT count(*) as nb from groupe where id_formation='$id_formation' and id_semestre='$id_semestre' and libelle_groupe='$libelle_groupe'");
/*
 pour verifier si l'enseignemet (codecl,nommat,numsem) existe ou deja
 */
$nb=mysqli_fetch_array($data);
$bool=true;
	/*
	pour ne pas ajouter deux controles similaire
	*/
	if($nb['nb']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("                Erreur d\'insertion\n\n le groupe <?php echo $libelle_groupe;?> existe deja dans cette formation <?php echo $nom_formation;?>");</SCRIPT><?php
	}
	if($bool==true){
mysqli_query($db,"INSERT into groupe(id_formation,libelle_groupe,id_semestre,id_section) values('$id_formation','$libelle_groupe','$id_semestre','$id_section')");
	?> <SCRIPT LANGUAGE="Javascript">	alert("Ajouté avec succés!"); </SCRIPT> <?php
	}
echo "<meta http-equiv='refresh' content='0; gestion_des_groupes.php' />";
}


 else {
$donnee=mysqli_query($db,"SELECT distinct nom_formation from formation");
$data1=mysqli_query($db,"SELECT distinct libelle_semestre from semestre"); ?>
 <div class="container" style=" width:400px;">
 <center>
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">Veuillez choisir la Formation et le Semestre</p>
<form action="ajouter_groupe.php" method="POST">    
<select name="nom_formation" required> 
<option selected disabled value="">Formation</option>
<?php while($a=mysqli_fetch_array($donnee)){
echo '<option value="'.$a['nom_formation'].'">'.$a['nom_formation'].'</option>';
}?></select><br/>
<select name="semestre" required>
<option selected disabled value=""> Semestre</option>
<?php while($a=mysqli_fetch_array($data1)){
echo '<option value="'.$a['libelle_semestre'].'">'.$a['libelle_semestre'].'</option>';
}?></select><br>
<input type="submit" value="Afficher" class="btn_mod" style="width:120px;">
</form>
<?php 
} 

?>
</center> 
</div>
</body>
</html>
