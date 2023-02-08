<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
?>
<!DOCTYPE html >
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>Ajouter utilisateur</title>
<head>
</head>
<body style="background-color:#07415f;;">
<div class="container" style="width:500px;">
<p style="font-family: monospace;  letter-spacing:0px; color:#FFF; text-transform:uppercase; font-size:20px">AJOUTER UN UTILISATEUR</p>
<form name="utilisateur" method="post" action="ajout_utilisateur.php">
 <select required name="civilite" >
  <option selected disabled value="">Civilité</option>
  <option value="M">M</option>
  <option value="Mme">Mme</option>
  <option value="Mlle">Mlle</option>
</select><br>
 <input type="text" placeholder="Nom" maxlength="15" name="nom" required value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"></label><br>
 <input type="text" placeholder="Prénom" maxlength="15" name="prenom" required value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>"></label><br>
 <input type="tel" placeholder="Tel" maxlength="10" name="tel" required value="<?php if (isset($_POST['tel'])){echo $_POST['tel'];} ?>"></label><br>
 <input type="email" placeholder="E mail" maxlength="30" name="email" required value="<?php if (isset($_POST['email'])){echo $_POST['email'];} ?>"></label><br>
 <input type="text" placeholder="Login" maxlength="15" name="login" required value="<?php if (isset($_POST['login'])){echo $_POST['login'];} ?>"></label><br>
 <input type="password" placeholder="Password" maxlength="15" name="password" required value="<?php if (isset($_POST['password'])){echo $_POST['password'];} ?>"></label><br>
<select required name="profile">
   <option selected disabled value="">Profil</option>
  <option value="Admin">Administrateur</option>
  <option value="Etudiant">Etudiant</option>
</select><br>
<hr width="100%" style="height:2px; color:rgba(255,255,255,.7);"/>
<input type="submit" value="Ajouter" name="Ajouter" class="btn_mod" style="width:110px">
<a href="gestion_des_utilisateurs.php" style="text-decoration:none"><input type="button" value="Retour" class="btn_mod" style="width:100px; height:31px"></a>
</form></div>
<?php
if(isset($_POST['civilite'])){ 
if($_POST['nom']!="" and $_POST['prenom']!="" and $_POST['login']!="" and $_POST['password']!="" and $_POST['tel']!="" and $_POST['email']!="" and $_POST['profile']!="" ){
$nom=addslashes($_POST['nom']);
$prenom=addslashes($_POST['prenom']); 
$civilite=addslashes(Nl2br(Htmlspecialchars($_POST['civilite'])));
$login=$_POST['login'];
$password=$_POST['password'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$profile=$_POST['profile'];
}
$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from utilisateur where nom='$nom' and prenom='$prenom'")); 
$compte1=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nbr from login where pseudo='$login' "));
$bool=true;
if($compte['nb']>0){
$bool=false;
?><SCRIPT LANGUAGE="Javascript">alert("erreur  !  Cet utilisateur existe déja ");</SCRIPT><?php
 } 
else if ($compte1['nbr']>0 ){
$bool=false;
?><SCRIPT LANGUAGE="Javascript">alert(" le login existe déja , essayer un autre"); </SCRIPT> <?php
 }
   if($bool==true){
// ----pair---------eviter la collision des ( id ) entre prof et utlisateur------------ 
$cpt=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb_user from utilisateur"));	
if($cpt['nb_user']!=0 )
   {
   $pair=mysqli_fetch_array(mysqli_query($db,"SELECT MAX(id_user) as maxuser from utilisateur")); 
   $id_pair=$pair['maxuser']+2; 
   }
else
   {
   $id_pair=2; 
   } 
// ----------------------------------------fin de pair --------------------------------
 mysqli_query($db,"INSERT into utilisateur(id_user,civilite,nom,prenom,tel,email) values('$id_pair','$civilite','$nom','$prenom','$tel','$email')");
	/*		Ajouter le num dans le login    */
$id_user=mysqli_fetch_array(mysqli_query($db,"select id_user from utilisateur where nom='$nom' and prenom='$prenom'"));
$id_user=$id_user['id_user'];
mysqli_query($db,"INSERT into login(Num,pseudo,passe,statut) values('$id_user','$login','$password','$profile')");
?><SCRIPT LANGUAGE="Javascript">alert("Ajout avec succés!");</SCRIPT><?php
echo "<meta http-equiv='refresh' content='0; gestion_des_utilisateurs.php' />";
}}
 ?>
</body>
</html>
