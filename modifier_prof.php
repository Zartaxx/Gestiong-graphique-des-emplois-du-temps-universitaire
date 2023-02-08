<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");

Function choixpardefault2($var1,$var2)
{
if($var1==$var2)
return 'selected="selected"';
else
return "";
}
if(isset($_GET['modif_dip'])){
$id_prof=$_GET['modif_dip'];
$donnees=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM prof,login where id_prof=$id_prof and login.Num=prof.id_prof"));
$civilite=mysqli_real_escape_string($db,htmlspecialchars($donnees['civilite']));
 ?>

<!doctype html>
<html>
<head>
<script type="text/javascript">  
function test(f)  
 {  
 if(f.civilite.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner une civilité!');  
 return false;  
 }  
  else
 {return true;} 
 }  
 </script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>modifier prof</title>
</head>
<body style="background-color:#07415f;">
<div class="container">
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">MODIFIER UN ENSEIGNANT</p>
<form class="form1" method="post" onSubmit="return test(this);">
<input type="hidden" name="id_prof" value="<?php echo $donnees['id_prof']; ?>" required>
 <select name="civilite">
  <option selected>Civilité</option>
  <?php 
echo '<option value="'.$civilite.'" '.choixpardefault2($var1,$var2).'>'.$civilite.'</option>';?>
<?php if ($civilite=='M'){ ?>
       <option value="Me">Me</option>
      <option value="Mlle">Mlle</option>
      <?php } else if ($civilite=='Me'){  ?>
      <option value="M">M</option>
       <option value="Mlle">Mlle</option>
      <?php } else {  ?>
      <option value="M">M</option>
       <option value="Me">Me</option>
      <?php }   ?>
</select><br>
<input type="text" placeholder="Nom" maxlength="15" name="nom" value="<?php echo $donnees['nom']; ?>" required><br>
<input type="text" placeholder="Prénom" maxlength="15" name="prenom" value="<?php echo $donnees['prenom']; ?>" required><br>
<input type="tel" placeholder="tel" maxlength="15" name="tel" value="<?php echo $donnees['tel']; ?>" required><br>
<input type="email" placeholder="email" maxlength="15" name="email" value="<?php echo $donnees['email']; ?>" required><br>
<input type="text" placeholder="Login" maxlength="15" name="pseudo" value="<?php echo $donnees['pseudo']; ?>" required><br>
<input type="password" placeholder="Password" maxlength="15" name="passe" value="<?php echo $donnees['passe']; ?>" required>

   <br>
<input type="submit" value="Modifier" name="modifier" class="btn_mod" style="width:110px">
<a href="gestion_des_prof.php"><input value="Retour" class="btn_mod" style="width:100px; height:26px;"></a>
</form>
<?php
}
if(isset($_POST['civilite']))
{
	if($_POST['civilite']!="" and $_POST['nom']!="" and $_POST['prenom']!="" and $_POST['tel']!="" and $_POST['email']!="" and $_POST['pseudo']!="" and $_POST['passe']!=""){
		$id_prof=$_POST['id_prof'];
		$civilite=addslashes(Htmlspecialchars($_POST['civilite']));
		$nom=addslashes(Htmlspecialchars($_POST['nom']));
		$prenom=addslashes(Htmlspecialchars($_POST['prenom']));
		$tel=addslashes(Htmlspecialchars($_POST['tel']));
		$email=addslashes(Htmlspecialchars($_POST['email']));
		$pseudo=addslashes(Htmlspecialchars($_POST['pseudo']));
		$passe=addslashes(Htmlspecialchars($_POST['passe']));
 		
		mysqli_query($db,"UPDATE prof,login SET civilite='".$_POST['civilite']."',nom='".$_POST['nom']."',prenom='".$_POST['prenom']."',tel='".$_POST['tel']."',email='".$_POST['email']."',pseudo='".$_POST['pseudo']."',passe='".$_POST['passe']."' WHERE id_prof='$id_prof' and login.Num=prof.id_prof");
		
 		?> <script langage='javascript'>
alert('Modification du prof terminée ...');
</script>" 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_prof.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
 }
?>
</div>
</body>
</html>