<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
$data=mysqli_query($db,"SELECT * from prof");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>Ajouter prof</title>
</head>
<body style="background-color:#07415f;">
<div class="container" style="width:400px;">
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">AJOUTER UN ENSEIGNANT</p>
<form name="form_ajout" method="post" action="ajouter_prof_ds_espc_utilisateur.php" >
<select required name="civilite">
  <option selected disabled value="">Civilité</option>
  <option>M</option>
  <option>Me</option>
  <option>Mlle</option>
</select><br>
<input type="text"  placeholder="Nom" maxlength="15" name="nom" required value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"><br>
<input type="text" placeholder="Prénom" maxlength="15" name="prenom" required value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>"><br>
<input type="tel" placeholder="tel" maxlength="10" name="tel" required value="<?php if (isset($_POST['tel'])){echo $_POST['tel'];} ?>"><br>
<input type="email" placeholder="email" maxlength="40" name="e_mail" required value="<?php if (isset($_POST['e_mail'])){echo $_POST['e_mail'];} ?>"><br>
<input type="text" placeholder="Login" maxlength="20" name="login" required value="<?php if (isset($_POST['login'])){echo $_POST['login'];} ?>"><br>
<input type="password" placeholder="Password" maxlength="20" name="password" required value="<?php if (isset($_POST['password'])){echo $_POST['password'];} ?>"><br>

<input type="submit" value="Ajouter" name="Ajouter" class="btn_mod" style="width:110px">
<a href="gestion_des_utilisateurs.php" style="text-decoration:none"><input type="button" value="Retour" class="btn_mod" style="width:100px; height:31px;"></a>
<br>
</form>
</div>
<?php
if(isset($_POST['nom'])){//s'il a cliquer sur ajouter la 2eme fois
$civilite=$_POST['civilite'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$login=$_POST['login'];
$password=$_POST['password'];
$pass = sha1($password);
$tel=$_POST['tel'];
$e_mail=$_POST['e_mail'];

$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from prof where nom='$nom' and prenom='$prenom'"));
$compte1=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nbr from login where pseudo='$login' "));

$bool=true;
if($compte['nb']>0 ){
$bool=false;
?><SCRIPT LANGUAGE="Javascript">alert("Erreur d\'insertion, le prof existe déja"); </SCRIPT>
<?php
} else  if ($compte1['nbr']>0 ){
$bool=false;
?><SCRIPT LANGUAGE="Javascript">alert(" le login existe déja , essayer un autre"); </SCRIPT> <?php
 } else if($bool==true){
mysqli_query($db,"INSERT into prof(civilite,nom,prenom,tel,email) values ('$civilite','$nom','$prenom','$tel','$e_mail')"); 
 $id_prof=mysqli_fetch_array(mysqli_query($db,"SELECT id_prof from prof where nom='$nom' and prenom='$prenom'"));
$id_prof=$id_prof['id_prof'];
 $id_prof=mysqli_fetch_array(mysqli_query($db,"SELECT id_prof from prof where nom='$nom' and prenom='$prenom'"));
$id_prof=$id_prof['id_prof'];
mysqli_query($db,"INSERT into login (Num,pseudo,passe,statut) values('$id_prof','$login','$password','prof')");?> 
<?php echo "<meta http-equiv='refresh' content='0; gestion_des_prof.php' />";?>
<SCRIPT LANGUAGE="Javascript">	alert("Ajouté avec succés!"); </SCRIPT> 
<?php
}
}
 ?>
 </body>
</html>