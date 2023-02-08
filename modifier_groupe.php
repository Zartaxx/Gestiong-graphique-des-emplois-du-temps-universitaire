<?php
include("menu_principale.php");
Function choixpardefault2($var1,$var2)//pour selection l'element à modifier par defautl
{
if($var1==$var2)
return 'selected="selected"';
else
return "";
}
// appelle au code de connexion à la BDD
require_once("bdd.php");

if(isset($_GET['modif'])){
$id_groupe=$_GET['modif'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT section.lib_section,semestre. libelle_semestre,groupe.id_groupe,groupe.libelle_groupe as lib_group,formation.nom_formation,formation.id_formation,semestre.id_semestre,section.id_section from groupe,formation,semestre,section where formation.id_formation=groupe.id_formation and semestre.id_semestre=groupe.id_semestre and id_groupe='$id_groupe' and section.id_section=groupe.id_section"));

$id_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_semestre']));
$libelle_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_semestre']));
$lib_section=mysqli_real_escape_string($db,htmlspecialchars($ligne['lib_section']));
$id_section=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_section']));
$id_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_groupe']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne['lib_group']));
 
$sec=mysqli_query($db,"SELECT * from section");
$nom_formation=mysqli_real_escape_string($db,htmlspecialchars($ligne['nom_formation']));
$for=mysqli_query($db,"SELECT * from formation");
$sem=mysqli_query($db,"SELECT * from semestre");
?>

<!doctype html>
<html>
<head>
	 <!-- Required meta tags -->
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Modifier groupe</title>
<script type="text/javascript">  
function test(f)  
 {  
 if(f.id_formation.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner une formation!');  
 return false;  
 }  
  else
  {
  if(f.id_semestre.selectedIndex == 0) 
  alert('Vous devez selectionner un semestre!');  
 return false; 
 }
 {return true;} 
 }  
 </script>
</head>
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<body class="h-100" style="background-color:rgb(219,226,226);">
  <br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Modifier un groupe.</h1>
                    <h1 class="display-5 py-2 text-truncate"> Formation : <?php echo $nom_formation; ?> </h1>
                    <h1 class="display-5 py-2 text-truncate"> Semestre : <?php echo $libelle_semestre; ?> </h1>
                    <div class="px-5">
                        <form name="ajout_group" method="post" onSubmit="return test(this);" class="justify-content-center">
                            <div class="form-group">                              
                                <input class="form-control local" required type="hidden" maxlength="30" readonly name="id_groupe" value="<?php echo $id_groupe; ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local" type="text" maxlength="30" name="lib_section" required  placeholder="libelle de groupe" maxlength="15" name="libelle_groupe" required value="<?php echo $libelle_groupe; ?>">
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="id_section" required>
                                    <option selected disabled>Section</option>
                                    <?php while($a=mysqli_fetch_array($sec)){
                                    echo '<option value="'.$a['id_section'].'" '.choixpardefault2($a['id_section'],$ligne['id_section']).'>'.$a['lib_section'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <button value="Modifier" name="modifier" type="submit" class="btn btn-primary btn-lg local">Modifier</button><br><br>
                            <a href="gestion_des_groupes.php"><input type="button" value="Précedent" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- ^============================= -->


<?php
}
if(isset($_POST['libelle_groupe'])){//s'il a cliquer sur le bouton modifier
	if($_POST['libelle_groupe']!=""){
		$id_groupe=$_POST['id_groupe'];
		$libelle_groupe=addslashes(Htmlspecialchars($_POST['libelle_groupe']));
		$id_section=addslashes(Htmlspecialchars($_POST['id_section']));
mysqli_query($db,"UPDATE groupe set libelle_groupe='$libelle_groupe',
id_section='$id_section' where id_groupe='$id_groupe'");
		?> 
<script langage='javascript'>
alert('la Modification du groupe est terminée ...');
</script>" 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_groupes.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champs"); </SCRIPT> <?php
	}
 }
?>
</div>
</body>
</html>