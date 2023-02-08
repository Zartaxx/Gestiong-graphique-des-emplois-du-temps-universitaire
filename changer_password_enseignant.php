<?php
 $eml=1;$mdc=2;$md=3;
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
if(isset($_POST['Valider']))
{
$reponse1 = $bdd->query("UPDATE login SET passe='".$_POST['nouveau_mdp']."' WHERE pseudo='".$_POST['pseudo']."'");
}
$reponse2 = $bdd->query("SELECT  id FROM login");
//requete de la fiche modif
$reponse2 = $bdd->query("SELECT * FROM login");
$donnees=$reponse2 ->fetch();
//fin de requete
//verification
if((isset($_POST['pseudo']))&& ($_POST['confirmer_mdp'])&&(isset($_POST['nouveau_mdp'])))
	{
	if(preg_match("#([a-zA-Z0-9]{4,})#",$_POST['pseudo']))
	{$eml=1;}
		else{$eml=0;}
		if(preg_match("#([a-zA-Z0-9]{4,})#",$_POST['nouveau_mdp']))
	{$md=3;}
		else{$md=0;}
	if((preg_match("#([a-zA-Z0-9]{4,})#",$_POST['nouveau_mdp']))&&($_POST['nouveau_mdp']==$_POST['confirmer_mdp']))
	{$mdc=2;
	?>
<?php
echo "<meta http-equiv='refresh' content='0; espace_prof.php' />";

	}
		else{$mdc=0;}	
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="CSS/menu.inc.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>changer password prof</title>
<script language="javascript">
 function validation(f)
 {
	 if(f.nouveau_mdp.value !=  f.confirmer_mdp.value )
	 {alert('veuillez confirmer le nouveau mot de passe');
	 f.nouveau_mdp.focus();
	 return false;
	 }
	 alert("Modification avec succés");
	 }</script>
</head>
<body>
<?php include("espace_prof.php")?>
<br style="margin-top:280px;">
<div class="container">
<form name="boite3" action="changer_password_enseignant.php" style="margin-left:70px;" method="POST"    onSubmit="return validation(this)">
 <table width="400" style="margin-right:-100px; color:#fff;">
<tr>
<td colspan="2" style="font-size:24px;color:#FFF;font-family: monospace;letter-spacing:-1px;"><p style=" margin-left:20px;"> Modification Password </p> 
</td>
</tr><tr>
<td  style="width:60px;" ><label <?php if($eml==0){?>style="color:#FF0000;"<?php }?>><span style="font-size:18px;color:#FFF;font-family: monospace;letter-spacing:-1px;">Login</span></label>
</td>             
<td><input style="margin-bottom:0px" name="pseudo" type="text" id="pseudo" required size="30" maxlength="30" <?php if(isset($_POST['pseudo'])) {echo 'value="'.$_POST['pseudo'].'"';} if($eml==0){ echo 'style="border: 1px solid #FF0000;"';}?>></td>
<tr></tr><br>
<td  style="width:180px;"><label for="nouveau_mdp" <?php if($md==0){?>style="color:#FF0000;"<?php }?>><span style="font-size:18px;color:#FFF;font-family: monospace;letter-spacing:-1px;">Nouveau Mot de passe</span></label></td>            
<td><input style="margin-bottom:0px" name="nouveau_mdp" type="password" required id="nouveau_mdp" size="30" maxlength="30"<?php if(isset($_POST['nouveau_mdp'])) {echo 'value="'.$_POST['nouveau_mdp'].'"';} if($md==0){ echo 'style="border: 1px solid #FF0000;"';}?>></td>
</tr>
<tr>
<td><label for="confirmer_mdp" <?php if($mdc==0){?>style="color:#FF0000;"<?php }?>><span style="font-size:18px;color:#FFF;font-family: monospace;letter-spacing:-1px;">Confirmer mot de passe</span></label></td><td><input style="margin-bottom:0px" name="confirmer_mdp" required type="password" id="confirmer_mdp" size="30" maxlength="30"<?php if(isset($_POST['confirmer_mdp'])) {echo 'value="'.$_POST['confirmer_mdp'].'"';} if($mdc==0){ echo 'style="border: 1px solid #FF0000;"';}?>></td>
</tr>
  <tr>
    <td colspan="2">
    <input class="btn_mod" type="submit" name="Valider" value="Valider" style="margin-left:120px ; width:115px; padding-left:6px;"></td>
  </tr>
</table>
</form>
</div>
</body>
</html>