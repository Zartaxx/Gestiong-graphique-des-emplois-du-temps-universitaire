<?php 
// appelle au code de connexion à la BDD
require_once("bdd.php");
$donnee=mysqli_query($db,"select distinct nom_formation from formation");
$data1=mysqli_query($db,"select  distinct libelle_semestre from semestre");
if(isset($_GET['modif']))
{
$id_section=$_GET['modif'];
$var=$id_section;
$ligne1=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT groupe.id_groupe, prof.nom, prof.prenom, module.id_module, libelle_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, section.id_section AS section
FROM groupe, formation, semestre, section, prof, module, enseignement, utilisateur
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND module.id_formation = formation.id_formation
AND enseignement.id_module = module.id_module
AND section.id_section ='$var'"));
$formation=mysqli_real_escape_string($db,htmlspecialchars($ligne1['formation']));
$section=mysqli_real_escape_string($db,htmlspecialchars($ligne1['section']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['semestre']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['lib_sec']));
$session=mysqli_real_escape_string($db,htmlspecialchars($ligne1['session']));
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/special.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> creer un emplois du temps</title>
<script>
function test_annee(f)  
 {  
 if(f.annee_uni.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner une annee universitaire!');  
 return false;  
 }  
  else 
 {return true;} 
 }  </script>
<script type="text/javascript" src="CSS/emploi_chekbox.js"></script>
</head>
<body style="background-color:#07415f; margin-top:-60px;">
<br /><br /><br /><br /><br /><br />
<div class="container" style="	background-color:rgba(255,255,255,.08);
">
<br />
 <center>
 <p style=" text-align:center;letter-spacing:2px;font-style:italic; word-spacing:3px;; margin-top:-10px; font-size:24px;color:#FFF;   font-family:'Comic Sans MS', cursive; " > Creer Un Emploi Du Temps  </p>
     <br />
     
<form action="emploi_de_temp 1.php?modif1=<?php echo $section;?>" method="POST" onSubmit="return test_annee(this);">  

<select class="aqw" name="annee_uni">
    <option >Annee Universitaire</option>
    <option value="2019-2020">2019-2020</option>
    <option value="2020-2021">2020-2021</option>
    <option value="2021-2022">2021-2022</option>
  </select><br /><br />
  
<input type="text" readonly style="font-size:24px;width:240px ; border-radius:3px;" value="<?php  echo ' FORMATION : '.$ligne1['formation'];?>"/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" readonly style="font-size:24px;width:240px ; border-radius:3px;" value="<?php  echo ' SEMESTRE : '.$ligne1['semestre'];?>"/><br><br />

<input type="text" readonly style="font-size:24px;width:240px ; border-radius:3px;" value="<?php  echo ' SESSION : '.$ligne1['session'];?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input readonly style="font-size:24px; width:240px;border-radius:4px;" value="<?php  echo ' SECTION :  '.$ligne1['lib_sec'];?>"><br /><br /><br />
<input class="aqx" type="submit"   name="Valider"  value="valider"/>&nbsp;&nbsp;&nbsp;
<a href="gestion_des_emplois_de_temps.php" style="text-decoration:none;"><input type="button" value="Fermer" name="Fermer" class="aqx" style="width:95px"></a><br /> <br /> 
</form>
</center>
</div>
</body>
</html>