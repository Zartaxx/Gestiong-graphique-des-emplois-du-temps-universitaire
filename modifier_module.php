<?php
Function choixpardefault2($var1,$var2)//pour selection l'element à modifier par defautl
{
if($var1==$var2)
return 'selected="selected"';
else
return "";
}
// appelle au code de connexion à la BDD
require_once("bdd.php");

if(isset($_GET['modif_dip'])){//modif_el qu'on a recupérer de l'affichage (modifier)
$id_module=$_GET['modif_dip'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT id_module,module.libelle_module as lib_mod,volume_horaire,formation.nom_formation,semestre.id_semestre,formation.id_formation,libelle_semestre from module,formation,semestre where formation.id_formation=module.id_formation and semestre.id_semestre=module.id_semestre and id_module='$id_module'"));

$promo=mysqli_query($db,"SELECT distinct volume_horaire from module");
$for=mysqli_query($db,"SELECT * from formation");
$sem=mysqli_query($db,"SELECT * from semestre");
$libelle_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_semestre']));
$libelle_module=mysqli_real_escape_string($db,htmlspecialchars($ligne['lib_mod']));
$id_formation=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_formation']));
$id_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_semestre']));
$volume_horaire=mysqli_real_escape_string($db,htmlspecialchars($ligne['volume_horaire']));
?>

<!doctype html>
<html>
<head>
<script type="text/javascript">  
function test(f)  
 {  
 if(f.id_formation.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner une formation!');  
 return false;  
 }  
  else if(f.id_semestre.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner un semestre!');  
 return false;  
 }  else
 {return true;} 
 }  
 </script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>Modifier module</title>
</head>
<body style="background-color:#07415f;">
<div class="container" style="width:350px;">
<p style="font-family: monospace;  letter-spacing:-1px; color:#FFF; font-size:20px">MODIFIER UN MODULE<br><span style="color:#FFF"> SEMESTRE : <?php echo $libelle_semestre; ?></span></p>
<form  name="formulaire1"  method="POST" onSubmit="return test(this);">  
         
<input type="hidden"  name="id_module" value="<?php echo $id_module; ?>"><br>

<select name="id_formation"> 
<option selected> Formation</option> 
<?php while($a=mysqli_fetch_array($for)){
echo '<option value="'.$a['id_formation'].'" '.choixpardefault2($a['id_formation'],$ligne['id_formation']).'>'.$a['nom_formation'].'</option>';
}?></select><br>

<input type="text" placeholder=" libelle module " maxlength="30" name="libelle_module" required value="<?php echo $libelle_module; ?>"><br>
     
<input type="text" placeholder=" volume horaire " maxlength="5" name="volume_horaire" value="<?php echo $volume_horaire; ?>" required><br>

   <hr width="100%" color="white"/>
   
<input type="submit" value="Modifier" name="modifier" class="btn_mod" style="width:110px">
<a href="gestion_module.php"><input value="Retour" class="btn_mod" style="width:100px ; height:26px;"></a>
</form>
<?php
}
if(isset($_POST['libelle_module'])){//s'il a cliquer sur le bouton modifier
	if($_POST['libelle_module']!=""){
		$id_module=$_POST['id_module'];
		$libelle_module=addslashes(Htmlspecialchars($_POST['libelle_module']));
		$id_formation=addslashes(Htmlspecialchars($_POST['id_formation']));
 		$volume_horaire=addslashes(Htmlspecialchars($_POST['volume_horaire']));
mysqli_query($db,"update module set id_formation='$id_formation',libelle_module='$libelle_module',volume_horaire='$volume_horaire' where id_module='$id_module'");
		?> <script langage='javascript'>
alert('la Modification du module est terminée ...');
</script>" 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_module.php' />";
 	} }
?>
</div>
</body>
</html>