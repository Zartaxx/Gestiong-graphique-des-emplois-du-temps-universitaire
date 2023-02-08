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

if(isset($_GET['modif_dip'])){//modif_el qu'on a recupérer de l'affichage (modifier)
$id_section=$_GET['modif_dip'];

$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT libelle_semestre,section.id_section,section.lib_section as lib_sec,formation.id_formation,semestre.id_semestre FROM section,groupe,formation,semestre where section.id_section='$id_section' and section.id_semestre=semestre.id_semestre and section.id_formation=formation.id_formation"));

$id_formation=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_formation']));
$id_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_semestre']));
$libelle_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_semestre']));

$for=mysqli_query($db,"select * from formation");
$sem=mysqli_query($db,"select * from semestre");
$groupe=mysqli_query($db,"select * from groupe");
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne['lib_sec']));
$id_section=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_section']));
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
     <title>Modifier section</title>
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
                    <h1 class="display-4 py-2 text-truncate">Modifier une section.</h1><br>
                    <h1 class="display-5 py-2 text-truncate"> Semestre : <?php echo $libelle_semestre; ?> </h1>
                    <div class="px-5">
                        <form name="ajout_sec" method="post" onSubmit="return test(this);" class="justify-content-center">
                            <div class="form-group">                              
                                <input class="form-control local" required type="hidden" maxlength="30" name="id_section" readonly  value="<?php echo $id_section; ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local" type="hidden" maxlength="30" name="id_semestre" readonly  value="<?php echo $id_semestre; ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local" type="text" placeholder="libelle de section" maxlength="30" name="lib_section" required value="<?php echo $lib_sec; ?>">
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="id_formation" required>
                                    <option selected disabled>formarion</option>
                                    <?php while($a=mysqli_fetch_array($for)){
                                    echo '<option value="'.$a['id_formation'].'" '.choixpardefault2($a['id_formation'],$ligne['id_formation']).'>'.$a['nom_formation'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <button value="Modifier" name="modifier" type="submit" class="btn btn-primary btn-lg local">Modifier</button><br><br>
                            <a href="gestion_des_section.php"><input type="button" value="Précedent" class="btn btn-warning btn-lg local"></a><br><br>
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
if(isset($_POST['lib_section'])){//s'il a cliquer sur le bouton modifier
	if($_POST['lib_section']!=""){
		$id_section=$_POST['id_section'];
		$lib_section=addslashes(Htmlspecialchars($_POST['lib_section']));
		$id_formation=addslashes(Htmlspecialchars($_POST['id_formation']));
		$id_semestre=addslashes(Htmlspecialchars($_POST['id_semestre']));
mysqli_query($db,"update section set lib_section='$lib_section',id_formation='$id_formation'
 where id_section='$id_section'");
		?> <script langage='javascript'>
alert('la Modification de la section est terminée ...');
</script> 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_section.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
 }
?>

</center></pre>
</div>
</div>
</body>
</html>