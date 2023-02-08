<?php
include("menu_principale.php");
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
$id_formation=$_GET['modif_dip'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM formation where id_formation=$id_formation"));
$cycle=mysqli_real_escape_string($db,htmlspecialchars($ligne['cycle']));
 ?>
<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Modifier formation</title>
<script type="text/javascript">  
function test(f)  
 {  
 if(f.cycle.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner un cycle!');  
 return false;  
 }  
  else
 {return true;} 
 }  
 </script>
</head>
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<body class="h-100" style="background-color:rgb(219,226,226);">
  <br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Modifier une formation.</h1>
                    <div class="px-5">
                        <form method="post" class="justify-content-center" name="form_modif" onSubmit="return test(this);">
                            <div class="form-group">                                
                                <select class="form-control local" name="cycle" required>
                                    <option selected disabled>Cycle</option>
                                    <?php 
                                    echo '<option value="'.$cycle.'" '.choixpardefault2($var1,$var2).'>'.$cycle.'</option>';?>
                                    <?php if ($cycle=='Licence'){ ?>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                    <?php } else if ($cycle=='Master'){  ?>
                                    <option value="Licence">Licence</option>
                                     <option value="Doctorat">Doctorat</option>
                                    <?php } else {  ?>
                                    <option value="Licence">Licence</option>
                                     <option value="Master">Master</option>
                                    <?php }   ?>
                                </select>
                            </div>
                            <div class="form-group">                              
                                <input type="hidden" class="form-control local" name="id_formation" required value="<?php echo $ligne['id_formation']; ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local" type="text" placeholder="Libellé du formation " maxlength="30" name="nom_formation" required value="<?php echo $ligne['nom_formation']; ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local" type="number" min="1" max="6" placeholder=" Nombre du semestre " maxlength="30" name="nbre_semestre" required value="<?php echo $ligne['nbre_semestre']; ?>">
                            </div>
                            <button value="Modifier" name="modifier" type="submit" class="btn btn-primary btn-lg local">Modifier</button><br><br>
                            <a href="gestion_formation.php"><input type="button" value="Précedent" name="annuler" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- ^============================= -->
<?php }
if(isset($_POST['nom_formation']))
{
	if($_POST['nom_formation']!="" and $_POST['cycle']!="" and $_POST['nbre_semestre']!=""){
		$id_formation=$_POST['id_formation'];
		$nom_formation=addslashes(Htmlspecialchars($_POST['nom_formation']));
		$nbre_semestre=addslashes(Htmlspecialchars($_POST['nbre_semestre']));
		$cycle=addslashes(Htmlspecialchars($_POST['cycle']));
 		
		mysqli_query($db,"UPDATE formation SET id_formation='".$_POST['id_formation']."',nom_formation='".$_POST['nom_formation']."',cycle='".$_POST['cycle']."',nbre_semestre='".$_POST['nbre_semestre']."' WHERE  id_formation='$id_formation'");
		
 		?> <script langage='javascript'>
alert('la Modification de formation est terminée ...');
</script> 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_formation.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champs"); </SCRIPT> <?php
	}
 }
?>
</div>
</body>
</html>