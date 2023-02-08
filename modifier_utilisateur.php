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
$id_user=$_GET['modif_dip'];
$donnee=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM utilisateur,login where id_user=$id_user and login.Num=utilisateur.id_user"));
$civilite=mysqli_real_escape_string($db,htmlspecialchars($donnee['civilite']));
$statut=mysqli_real_escape_string($db,htmlspecialchars($donnee['statut']));

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
 else if(f.profile.selectedIndex == 0)   
 {  
 alert('Vous devez selectionner un profile!');  
 return false;  
 } 
 else
 {return true;} 
 }  
 </script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>modifier utilisateur</title>
</head>
<body style="background-color:#07415f;">
<div class="container" style="width:500px;">
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">MODIFIER UN UTILISATEUR</p>
<form name="modifier_util"   method="post" onSubmit="return test(this);">
<input type="hidden" name="id_user" readonly value="<?php echo $id_user; ?>">
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

<input type="text" placeholder="Nom" maxlength="15" name="nom" value="<?php echo $donnee['nom']; ?>"  ></label><br>

<input type="text" placeholder="Prénom" maxlength="15" name="prenom" value="<?php echo $donnee['prenom']; ?>" ></label><br>

<input type="text" placeholder="Tel" maxlength="15" name="tel" value="<?php echo $donnee['tel']; ?>"  ></label><br>

<input type="text" placeholder="E mail" maxlength="15" name="email" value="<?php echo $donnee['email']; ?>"  ></label><br>

<input type="text" placeholder="Login" maxlength="15" name="pseudo" value="<?php echo $donnee['pseudo']; ?>" ></label><br>

<input type="text" placeholder="Password" maxlength="15" name="passe" value="<?php echo $donnee['passe']; ?>" ></label><br>

<select name="statut">
   <option selected >Profile</option>
 <?php 
echo '<option value="'.$statut.'" '.choixpardefault2($var1,$var2).'>'.$statut.'</option>';?>
<?php if ($statut=='Admin'){ ?>
  <option value="Etudiant">Etudiant</option>
       <?php } else  {  ?>
  <option value="Admin">Administrateur</option>
       <?php }    ?>
</select><br>
<input type="submit" value="Modifier" name="modifier" class="btn_mod" style="width:110px">
<a href="gestion_des_utilisateurs.php" style="text-decoration:none"><input type="button" value="Retour" class="btn_mod" style="width:100px; height:31px;"></a>
<br>
</form>
</div>
<?php
}
if(isset($_POST['civilite']))
{
	if($_POST['civilite']!="" and $_POST['nom']!="" and $_POST['prenom']!="" and $_POST['tel']!="" and $_POST['email']!="" and $_POST['pseudo']!="" and $_POST['passe']!="" and $_POST['statut']!=""){
		$id_user=$_POST['id_user'];
		$civilite=addslashes(Htmlspecialchars($_POST['civilite']));
		$nom=addslashes(Htmlspecialchars($_POST['nom']));
		$prenom=addslashes(Htmlspecialchars($_POST['prenom']));
		$tel=addslashes(Htmlspecialchars($_POST['tel']));
		$email=addslashes(Htmlspecialchars($_POST['email']));
		$pseudo=addslashes(Htmlspecialchars($_POST['pseudo']));
		$passe=addslashes(Htmlspecialchars($_POST['passe']));
		$statut=addslashes(Htmlspecialchars($_POST['statut']));
		
		mysqli_query($db,"UPDATE utilisateur,login SET civilite='".$_POST['civilite']."',nom='".$_POST['nom']."',prenom='".$_POST['prenom']."',tel='".$_POST['tel']."',email='".$_POST['email']."',pseudo='".$_POST['pseudo']."',passe='".$_POST['passe']."',statut='".$_POST['statut']."' WHERE id_user='$id_user' and login.Num=utilisateur.id_user");
		
 		?> <script langage='javascript'>
alert('Modification utilisateur terminée ...');
</script>" 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_utilisateurs.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
 }
?>
</body>
</html>