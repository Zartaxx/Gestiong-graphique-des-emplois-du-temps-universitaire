<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");

Function choixpardefault2($var1,$var2)
{
if($var1==$var2)
return 'selected="selected"';
else
return "";
}
if(isset($_GET['modif_salle'])){
$id_salle=$_GET['modif_salle'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM salle where id_salle='$id_salle'"));
$type=mysqli_real_escape_string($db,htmlspecialchars($ligne['type']));
$bloc=mysqli_real_escape_string($db,htmlspecialchars($ligne['bloc']));
  ?>

<!doctype html>
<html>
<head>
<script type="text/javascript">  
function test(f)  
 {  
 if(f.type.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner un Type!');  
 return false;  
 }  
 else if(f.bloc.selectedIndex == 0)   
 {  
 alert('Vous devez selectionner un Bloc!');  
 return false;  
 } 
 else
 {return true;} 
 }  
 </script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>modifier salle</title>
</head>
<body style="background-color:#07415f;">
<div class="container" style="width:350px;">
<form  name="form_modif"  method="POST" onSubmit="return test(this);"> 
<p style="font-family: monospace;letter-spacing:2px; text-align:center; font-size:20px; color:#FFF">MODIFIER UNE SALLE</p>
  <input type="hidden"    maxlength="15" name="id_salle" value="<?php echo $ligne['id_salle']; ?>"><br>
         
     <input type="text" placeholder=" libelle de salle " maxlength="15" name="libelle_salle" value="<?php echo $ligne['libelle_salle']; ?>" required><br>


<select name="type">
      <option selected>Type</option>
     <?php 
echo '<option value="'.$type.'" '.choixpardefault2($var1,$var2).'>'.$type.'</option>';?>
<?php if ($type=='Cours'){ ?>
       <option value="TD">TD</option>
      <option value="TP">TP</option>
      <?php } else if ($type=='TD'){  ?>
      <option value="TP">TP</option>
       <option value="Cours">Cours</option>
      <?php } else {  ?>
      <option value="TD">TD</option>
       <option value="Cours">Cours</option>
      <?php }   ?>
      </select>                  
  <br>
     <select name="bloc">
      <option selected>bloc</option>
     <?php 
echo '<option value="'.$bloc.'" '.choixpardefault2($var1,$var2).'>'.$bloc.'</option>';?>
<?php if ($bloc=='A'){ ?>
      <option value="B">B</option>
      <option value="C">C</option>
       
      <?php } else if ($bloc=='B'){  ?>
      <option value="A">A</option>
       <option value="C">C</option>
              

      <?php } else {  ?>
      <option value="A">A</option>
       <option value="B">B</option>
 
      <?php }   ?>
      </select><br>
     <input type="text" placeholder="Nombre de Place " maxlength="15" name="capacite" value="<?php echo $ligne['capacite']; ?>" required><br>

   <hr width="100%" color="white"/>
  
<input type="submit" value="Modifier" name="modifier" class="btn_mod" style="width:110px">
<a href="gestion_des_salles.php"><input value="Retour" class="btn_mod" style="width:100px; height:26px;"></a>
</form>
<?php
}
if(isset($_POST['libelle_salle']))
{
	if($_POST['libelle_salle']!="" and $_POST['type']!="" and $_POST['bloc']!="" and $_POST['capacite']!=""){
		$id_salle=$_POST['id_salle'];
		$libelle_salle=addslashes(Htmlspecialchars($_POST['libelle_salle']));
		$type=addslashes(Htmlspecialchars($_POST['type']));
		$bloc=addslashes(Htmlspecialchars($_POST['bloc']));
		$capacite=addslashes(Htmlspecialchars($_POST['capacite']));
 		
		mysqli_query($db,"UPDATE salle SET id_salle='".$_POST['id_salle']."',libelle_salle='".$_POST['libelle_salle']."',type='".$_POST['type']."',bloc='".$_POST['bloc']."',capacite='".$_POST['capacite']."' WHERE  id_salle='$id_salle'");
		
 		?> <script langage='javascript'>
alert('la Modification de la salle est terminée ...');
</script>" 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_salles.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
 }
?>
</div>
</body>
</html>