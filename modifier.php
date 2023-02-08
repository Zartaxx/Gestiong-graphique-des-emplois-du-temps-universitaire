<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
$idr = isset($_POST['module'])?$_POST['module']:false;
Function choixpardefault2($var1,$var2)
{
if($var1 == $var2)
return 'selected="selected"';
else
return "";
}
if(isset($_GET['id'])){
$id=$_GET['id'];
$ligne1=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT  prof.nom, prof.prenom,module.id_module as id_module , libelle_module, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section as lib_sec, semestre.id_semestre, formation.nom_formation as formation,seance.id, prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section,salle.id_salle as id_salle, id_gr, id_pr, id_mod, id_sal, id_sec, seance.type as type , heure, jour FROM   seance,  salle,groupe, formation, semestre, section, prof, module, enseignement WHERE formation.id_formation = groupe.id_formation AND groupe.id_semestre = semestre.id_semestre AND section.id_section = groupe.id_section AND enseignement.id_prof = prof.id_prof AND module.id_formation = formation.id_formation  AND enseignement.id_module = module.id_module  AND  seance.id_pr = prof.id_prof AND module.id_module = seance.id_mod AND groupe.id_groupe = seance.id_gr AND salle.id_salle = seance.id_sal  AND seance.id_for = formation.id_formation AND seance.id_sec = section.id_section AND seance.id ='$id' AND enseignement.id_prof=prof.id_prof AND enseignement.id_formation=formation.id_formation "));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['semestre']));
$id_sal=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_sal']));
$id_mod=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_mod']));
$id_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_groupe']));
$id_salle=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_salle']));
$id_prof=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_prof']));
$id_module=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_module']));
$jour=mysqli_real_escape_string($db,htmlspecialchars($ligne1['jour']));
$formation=mysqli_real_escape_string($db,htmlspecialchars($ligne1['formation']));
$heure=mysqli_real_escape_string($db,htmlspecialchars($ligne1['heure']));
$id_pr=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_pr']));
$id_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_sec']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id']));
$id_sem=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_sem']));
$id_gr=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_gr']));
$libelle_salle=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_salle']));
$id_for=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_for']));
$type1=mysqli_real_escape_string($db,htmlspecialchars($ligne1['type']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
$libelle_module=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_module']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['lib_sec']));?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Modifier une séance</title>
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
<!--  -->
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Modifier Une Séance.</h1>
                    <h2 class="display-5 py-2 text-truncate"><?php  echo $jour; echo '  '; echo $heure; ?></h2>
                    <div class="px-5">
                        <form name="modifier" method="post" class="justify-content-center">
                          <input type="hidden" name="jour" value="<?php  echo $jour; ?>">
                          <input type="hidden" name="heure" value="<?php echo $heure;?>">
                            <div class="form-group">                              
                                <select class="form-control local" name="module">
                                    <option selected disabled value="" >Module</option>
                                    <?php
                                    $module=mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, lib_section, id_module, libelle_semestre
                                      FROM section, formation, semestre, module, groupe
                                      WHERE section.id_formation = formation.id_formation
                                      AND section.id_semestre = semestre.id_semestre
                                      AND module.id_formation = formation.id_formation
                                      AND module.id_semestre = semestre.id_semestre
                                      AND groupe.id_formation = formation.id_formation
                                      AND libelle_groupe = '$libelle_groupe'
                                      AND libelle_semestre = '$semestre'");

                                      while($a=mysqli_fetch_array($module)){
                                      echo '<option value="'.$a['id_module'].'" '.choixpardefault2($a['id_module'],$ligne1['id_mod']).'>'.$a['libelle_module'].'</option>';
                                      }?>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="prof" required>
                                     <option selected disabled value="">Prof</option>
                                    <?php $prof=mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, libelle_module,libelle_semestre, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation and libelle_groupe='$libelle_groupe' and libelle_semestre = '$semestre'");

                                      while($a=mysqli_fetch_array($prof)){
                                      echo '<option value="'.$a['id_prof'].'" '.choixpardefault2($a['id_prof'],$ligne1['id_pr']).'>'.$a['nom'].' '.$a['prenom']. ' ('.$a['libelle_module'].')'.'</option>';} ?>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="type" required>
                                    <option selected disabled value="">Type</option>
                                     <?php 
                                     echo '<option value="'.$type1.'" '.choixpardefault2($var1,$var2).'>'.$type1.'</option>';?>
                                     <?php if ($type1=='Cours'){ ?>
                                      <option value="TD">TD</option>
                                     <option value="TP">TP</option>
                                     <?php } else if ($type1=='TD'){  ?>
                                     <option value="TP">TP</option>
                                      <option value="Cours">Cours</option>
                                     <?php } else {  ?>
                                     <option value="TD">TD</option>
                                      <option value="Cours">Cours</option>
                                     <?php }   ?>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="salle" required>
                                    <option selected disabled value="">Salle</option>
                                     <?php 
                                     $salle1=mysqli_query($db,"SELECT DISTINCT id_salle,libelle_salle,type FROM salle ORDER BY `salle`.`type` ASC");
                                     while($a=mysqli_fetch_array($salle1)){
                                     echo '<option value="'.$a['id_salle'].'" '.choixpardefault2($a['id_salle'],$ligne1['id_sal']).'>'.$a['libelle_salle'].' ('.$a['type'].')'.'</option>';}?>
                                </select>
                            </div>
                            <button value="Valider" name="modifier" type="submit" class="btn btn-primary btn-lg local">Valider</button><br><hr>

                            <a href="modifier_emploi_du_temps.php?groupe=<?php echo $ligne1['id_groupe'];?>"><input type="button" value="Précedent" name="Fermer" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
<?php

if(isset($_POST['modifier']))
{
if(isset($_POST['module'])){//s'il a cliquer sur le bouton modifier
	if($_POST['module']!="" && $_POST['type']!="" && $_POST['salle']!="" && $_POST['prof']!=""){
 		$module=addslashes(Htmlspecialchars($_POST['module']));
 		$type=addslashes(Htmlspecialchars($_POST['type']));
		$salle=addslashes(Htmlspecialchars($_POST['salle']));
		$prof=addslashes(Htmlspecialchars($_POST['prof']));

		
$data1=mysqli_query($db,"SELECT count(*) as nb from seance where heure='$heure' and jour='$jour' and id_sal='$salle'  ");
$data2=mysqli_query($db,"SELECT count(*) as nbr from seance where id_pr='$prof' and heure='$heure' and jour='$jour'");
$nb=mysqli_fetch_array($data1);
$bool=true;
$nbr=mysqli_fetch_array($data2);
$bool=true;
if($nb['nb']>0 && ($id_sal != $salle)  )
    {
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php
	} else if($nbr['nbr']>0 && ($id_pr != $prof)){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php
	}
	
	if($bool==true) {
if((($type1 == 'TP')&&( $type == 'TP')) ||(($type1 == 'TP')&&( $type == 'TD'))||(($type1 == 'TD')&&( $type == 'TP'))||(($type1 =='TD')&&( $type == 'TD')) && (($type1 == 'Cours')&&( $type == 'Cours'))){
mysqli_query($db,"UPDATE seance set id_mod='$module',id_pr='$prof',type='$type',id_sal='$salle' where id='$id'");

 } else if ((($type1 == 'Cours')&&( $type == 'TP')) || (($type1 == 'Cours')&&( $type == 'TD'))) { 
 mysqli_query($db,"UPDATE seance set id_mod='$module',id_pr='$prof',type='$type',id_sal='$salle' where id='$id'");
 
 mysqli_query($db,"DELETE FROM `seance` WHERE type = '$type1' AND id_sec ='$id_sec' AND id_sal ='$id_sal' AND id!='$id' and jour ='$jour' and heure='$heure' "); 
 
 }else if ((($type1 == 'TD')&&( $type == 'Cours')) || (($type1=='TP')&&( $type=='Cours'))) {
 
  mysqli_query($db,"UPDATE seance set id_mod='$module',id_pr='$prof',type='$type',id_sal='$salle' where heure='$heure' and jour='$jour' ");
	 $groupe15=mysqli_query($db,"SELECT libelle_groupe,id_groupe, nom_formation
FROM groupe, formation, semestre, section
WHERE groupe.id_formation = formation.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND nom_formation = '$formation'
AND libelle_semestre = '$semestre' ");
while($a=mysqli_fetch_array($groupe15)){
$group15=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
 mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`, `jour`) VALUES ('$id_for','$id_sem',$group15,'$prof','$module','$salle','$id_sec','$type','$heure','$jour')");
}

 }  
	 
?> <script langage='javascript'> alert('la Modification est terminée avec succés !');</script> 
		<?php
		echo "<meta http-equiv='refresh' content='0; modifier_emploi_du_temps.php?groupe=".$ligne1['id_groupe']."'/>";
 	} }
	else{
	?> <SCRIPT  LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champs"); </SCRIPT> <?php
	}
 }
}
}
?>
</body>
</html>

 