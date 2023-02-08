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

if(isset($_GET['modif_dip'])){
$id_semestre=$_GET['modif_dip'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT semestre.session as ses,date_debut_sem,date_fin_sem,semestre.libelle_semestre,formation.nom_formation,formation.id_formation, semestre.id_semestre from formation,semestre where semestre.id_formation=formation.id_formation and id_semestre='$id_semestre'"));
$date_debut_sem=mysqli_real_escape_string($db,htmlspecialchars($ligne['date_debut_sem']));
$date_fin_sem=mysqli_real_escape_string($db,htmlspecialchars($ligne['date_fin_sem']));
$session=mysqli_real_escape_string($db,htmlspecialchars($ligne['ses']));
$libelle_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_semestre']));
$id_formation=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_formation']));
$id_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_semestre']));



$for=mysqli_query($db,"SELECT * from formation");
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
     <title>Modifier semestre</title>
     <!-- appelle aux fichiers BT js et jquery.js - popper.js inclu -  -->
     <script src="CSS/bootstrap.bubdle.min.js"></script>
     <script src="CSS/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="CSS/jquery-ui.css">
     <script src="JS/jquery-ui.min.js"></script>
<script type="text/javascript">  
function test(f)  
 {  
 if(f.id_formation.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner une formation!');  
 return false;  
 }  
  else
 {return true;} 
 }  
 </script>
<title>modifier semestre</title>
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
		<br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Modifier un semestre.</h1>
                    <div class="px-5">
                        <form name=formu method="POST" class="justify-content-center" onSubmit="return test(this);">
                        	<div class="form-group">                              
                                <input class="form-control local text-center" type="hidden"   name="id_semestre" value="<?php echo $id_semestre; ?>">
                            </div>
                            <div class="form-group">                              
                                <input type="text" class="form-control local text-center" maxlength="30" placeholder=" Session " name="session" value="<?php echo $session; ?>">
                            </div>
                             <div class="form-group">                              
                                <input type="text" class="form-control local text-center" placeholder=" libelle du semestre " maxlength="30" name="libelle_semestre" required value="<?php echo $libelle_semestre; ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local text-center" readonly="readonly" placeholder="date debut du semestre" value="<?php echo $date_debut_sem; ?>" maxlength="10" name="date_debut_sem" id="txtFrom" required>
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local text-center" readonly="readonly" placeholder="date  fin du semestre" value="<?php echo $date_fin_sem; ?>" maxlength="10" name="date_fin_sem" id="txtTo" required>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="id_formation" required>
                                    <option selected disabled value="">formation</option>
                                    <?php while($a=mysqli_fetch_array($for)){
                                    echo '<option value="'.$a['id_formation'].'" '.choixpardefault2($a['id_formation'],$ligne['id_formation']).'>'.$a['nom_formation'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <button value="Modifier" name="modifier" type="submit" class="btn btn-primary btn-lg local">Modifier</button><br><br>
                            <a href="gestion_des_semestres.php"><input type="button" value="Précedent" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- script jQuery qui verifier que la date de fin est superieur à la date de début -->
<script>
$(function(){
$("#txtFrom").datepicker({
numberOfMonths:1,
dateFormat:'yy/mm/dd',
onSelect:function(selectdate){
var dt = new Date(selectdate);
dt.setDate(dt.getDate()+1)
$("#txtTo").datepicker("option","minDate",dt);
}
});
$("#txtTo").datepicker({
numberOfMonths:1,
dateFormat:'yy/mm/dd',
onSelect:function(selectdate){
var dt = new Date(selectdate);
dt.setDate(dt.getDate()-1)
$("#txtFrom").datepicker("option","maxDate",dt);
}
});
});
</script>
<!-- ----------------------------------fin de script jQuery ----------------------------->
<?php }
if(isset($_POST['session']))
{
	if($_POST['session']!="" and $_POST['libelle_semestre']!="" and $_POST['date_debut_sem']!="" and $_POST['date_fin_sem']!="" and $_POST['id_formation']!=""){
		$id_semestre=$_POST['id_semestre'];
		$session=addslashes(Htmlspecialchars($_POST['session']));
		$id_formation=addslashes(Htmlspecialchars($_POST['id_formation']));
		$libelle_semestre=addslashes(Htmlspecialchars($_POST['libelle_semestre']));
		$date_debut_sem=addslashes(Htmlspecialchars($_POST['date_debut_sem']));
		$date_fin_sem=addslashes(Htmlspecialchars($_POST['date_fin_sem'])); 
mysqli_query($db,"UPDATE semestre set session='$session',id_formation='$id_formation',
libelle_semestre='$libelle_semestre',
date_debut_sem='$date_debut_sem',date_fin_sem='$date_fin_sem' where id_semestre='$id_semestre'");

		?> <script langage='javascript'>
alert('la Modification du semestre est terminée ...');
</script>" 
		<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_semestres.php' />";
 	}
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
 }
?>		
</div>
</body>
</html>