<?php 
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
$idr = isset($_POST['module1'])?$_POST['module1']:false;$id1 = isset($_POST['type1'])?$_POST['type1']:false;
$idr1 = isset($_POST['module2'])?$_POST['module2']:false;$id2 = isset($_POST['type2'])?$_POST['type2']:false;
$idr2 = isset($_POST['module3'])?$_POST['module3']:false;$id3 = isset($_POST['type3'])?$_POST['type3']:false;
$idr3 = isset($_POST['module4'])?$_POST['module4']:false;$id4 = isset($_POST['type4'])?$_POST['type4']:false;
$idr5 = isset($_POST['module5'])?$_POST['module5']:false;$id5 = isset($_POST['type5'])?$_POST['type5']:false;
$idr6 = isset($_POST['module6'])?$_POST['module6']:false;$id6 = isset($_POST['type6'])?$_POST['type6']:false;
$idr7 = isset($_POST['module7'])?$_POST['module7']:false;$id7 = isset($_POST['type7'])?$_POST['type7']:false;
$idr8 = isset($_POST['module8'])?$_POST['module8']:false;$id8 = isset($_POST['type8'])?$_POST['type8']:false;
$idr9 = isset($_POST['module9'])?$_POST['module9']:false;$id9 = isset($_POST['type9'])?$_POST['type9']:false;
$idr10 = isset($_POST['module10'])?$_POST['module10']:false;$id10 = isset($_POST['type10'])?$_POST['type10']:false;
$idr11 = isset($_POST['module11'])?$_POST['module11']:false;$id11 = isset($_POST['type11'])?$_POST['type11']:false;
$idr12 = isset($_POST['module12'])?$_POST['module12']:false;$id12 = isset($_POST['type12'])?$_POST['type12']:false;
$idr13 = isset($_POST['module13'])?$_POST['module13']:false;$id13 = isset($_POST['type13'])?$_POST['type13']:false;
$idr14 = isset($_POST['module14'])?$_POST['module14']:false;$id14 = isset($_POST['type14'])?$_POST['type14']:false;
$idr15 = isset($_POST['module15'])?$_POST['module15']:false;$id15 = isset($_POST['type15'])?$_POST['type15']:false;
$idr16 = isset($_POST['module16'])?$_POST['module16']:false;$id16 = isset($_POST['type16'])?$_POST['type16']:false;
$idr17 = isset($_POST['module17'])?$_POST['module17']:false;$id17 = isset($_POST['type17'])?$_POST['type17']:false;
$idr18 = isset($_POST['module18'])?$_POST['module18']:false;$id18 = isset($_POST['type18'])?$_POST['type18']:false;
$idr19 = isset($_POST['module19'])?$_POST['module19']:false;$id19 = isset($_POST['type19'])?$_POST['type19']:false;
$idr20 = isset($_POST['module20'])?$_POST['module20']:false;$id20 = isset($_POST['type20'])?$_POST['type20']:false;
$idr21 = isset($_POST['module21'])?$_POST['module21']:false;$id21 = isset($_POST['type21'])?$_POST['type21']:false;
$idr22 = isset($_POST['module22'])?$_POST['module22']:false;$id22 = isset($_POST['type22'])?$_POST['type22']:false;
$idr23 = isset($_POST['module23'])?$_POST['module23']:false;$id23 = isset($_POST['type23'])?$_POST['type23']:false;
$idr24 = isset($_POST['module24'])?$_POST['module24']:false;$id24 = isset($_POST['type24'])?$_POST['type24']:false;
$idr25 = isset($_POST['module25'])?$_POST['module25']:false;$id25 = isset($_POST['type25'])?$_POST['type25']:false;
$idr26 = isset($_POST['module26'])?$_POST['module26']:false;$id26 = isset($_POST['type26'])?$_POST['type26']:false;
$idr27 = isset($_POST['module27'])?$_POST['module27']:false;$id27 = isset($_POST['type27'])?$_POST['type27']:false;
$idr28 = isset($_POST['module28'])?$_POST['module28']:false;$id28 = isset($_POST['type28'])?$_POST['type28']:false;
$idr29 = isset($_POST['module29'])?$_POST['module29']:false;$id29 = isset($_POST['type29'])?$_POST['type29']:false;
$idr30 = isset($_POST['module30'])?$_POST['module30']:false;$id30 = isset($_POST['type30'])?$_POST['type30']:false;
$idr31 = isset($_POST['module31'])?$_POST['module31']:false;$id31 = isset($_POST['type31'])?$_POST['type31']:false;
$idr32 = isset($_POST['module32'])?$_POST['module32']:false;$id32 = isset($_POST['type32'])?$_POST['type32']:false;
$idr33 = isset($_POST['module33'])?$_POST['module33']:false;$id33 = isset($_POST['type33'])?$_POST['type33']:false;
$idr34 = isset($_POST['module34'])?$_POST['module34']:false;$id34 = isset($_POST['type34'])?$_POST['type34']:false;
$idr35 = isset($_POST['module35'])?$_POST['module35']:false;$id35 = isset($_POST['type35'])?$_POST['type35']:false;
$idr36 = isset($_POST['module36'])?$_POST['module36']:false;$id36 = isset($_POST['type36'])?$_POST['type36']:false;
if(isset($_GET['groupe'])){
$id_groupe=$_GET['groupe'];
$var=$id_groupe;
$ligne1=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT groupe.id_groupe, prof.nom, prof.prenom, module.id_module, libelle_module, formation.nom_formation AS formation, formation.id_formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, section.id_section AS id_section, semestre.id_semestre, groupe.id_groupe, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre,session , section.lib_section AS lib_sec FROM groupe, formation, semestre, section, prof, module, enseignement WHERE formation.id_formation = groupe.id_formation AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section AND enseignement.id_prof = prof.id_prof AND module.id_formation = formation.id_formation  AND enseignement.id_module = module.id_module AND formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre  AND section.id_section = groupe.id_section
AND id_groupe ='$var'"));
$id_formation=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_formation']));
$id_section=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_section']));
$id_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_groupe']));
$id_semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['id_semestre']));
$formation=mysqli_real_escape_string($db,htmlspecialchars($ligne1['formation']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['semestre']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['lib_sec']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['lib_sec']));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['semestre']));?>
<!DOCTYPE html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Emploi de Temps</title>
     <style>
       input{
        width:135px; margin-top: 10px;
       }
     </style>
</head>
<body style="background-color: rgb(219,226,226);">

 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Créer un Emlpois Du Temps
              </h2>
          </div>
      </div>
      <div class="row">
          <div class="col d-flex justify-content-center">
              <h3 style="font-family: monospace;letter-spacing:2px;">
                FORMATION :<span style="color:#00F"><?php echo $formation;?> </span>&nbsp;&nbsp;SEMESTRE :<span style="color:#00F"> <?php echo $semestre;?></span> &nbsp;&nbsp;SECTION : <span style="color:#00F"><?php echo $lib_sec;?></span>&nbsp;&nbsp;&nbsp; Groupe: <span style="color:#00F"><?php echo $libelle_groupe;?></span>
              </h3>
          </div>
    </div>
    <a href="gestion_des_emplois_de_temps.php" style="text-decoration:none; font-size:16px"><input class="col float-right btn btn-primary m-4" type="button" value="précedent" style="width:110px ; font-size:16px;"/></a>
    <br>
     <!-- fin de centre -->
 <form name="emplois" method="POST" id="changer"  <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> >
   <div class="container" style="margin-bottom: 90px;">

  <table class="table table-hover table-dark table-striped table-responsive-md">
  <thead>
    <tr class="ligne">
      <th ></th>
      <th class="massi"><b>08:00-09:30</b></th>
      <th class="massi"><b>09:40-11:10</b></th>
      <th class="massi"><b>11:20-12:50</b></th>
      <th class="massi"><b>13:00-14-30</b></th>
      <th class="massi"><b>14-40-16:10</b></th>
      <th class="massi"><b>16:20-17:50</b></th>  
    </tr></thead>
       <tbody>    
    
  
    
    
    <tr>
      <th class="mam"><b>Lundi</b></th>
      <td><input type="hidden" name="jour7" value="Lundi" >
          <input type="hidden" name="heure7" value="08:00-09:30">
     <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module7" style="width:135px;" id="module7" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr7) && $idr7 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr7) && $idr7 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr7'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof7" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
              <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type7" style="width:65px; " id="type7" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id7) && $id7 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id7) && $id7 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id7' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '08:00-09:30' AND seance.jour = 'Lundi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle7" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Lundi' and heure='08:00-09:30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
        <input name="va7" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td>
        <input type="hidden" name="jour8" value="Lundi" >
          <input type="hidden" name="heure8" value="09:40-11:10">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module8" style="width:135px;" id="module8" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr8) && $idr8 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr8) && $idr8 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr8'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof8" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
     <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type8" style="width:65px; " id="type8" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id8) && $id8 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id8) && $id8 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id8' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '09:40-11:10' AND seance.jour = 'Lundi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle8" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Lundi' and heure='09:40-11:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va8" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td> <input type="hidden" name="jour9" value="Lundi" >
          <input type="hidden" name="heure9" value="11:20-12:50">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module9" style="width:135px;" id="module9" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr9) && $idr9 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr9) && $idr9 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr9'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof9" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type9" id="type9" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id9) && $id9 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id9) && $id9 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id9' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '11:20-12:50' AND seance.jour = 'Lundi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle9" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Lundi' and heure='11:20-12:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va9" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;">

 
        </span><?php }?></td><td> <input type="hidden" name="jour10" value="Lundi" >
          <input type="hidden" name="heure10" value="13:00-14-30">
      <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module10" style="width:135px;" id="module10" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr10) && $idr10 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr10) && $idr10 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr10'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof10" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
             <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type10" style="width:65px; " id="type10" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id10) && $id10 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id10) && $id10 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id10' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '13:00-14-30' AND seance.jour = 'Lundi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle10" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>

         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Lundi' and heure='13:00-14-30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va10" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td> <input type="hidden" name="jour11" value="Lundi" >
          <input type="hidden" name="heure11" value="14-40-16:10">
      <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module11" style="width:135px;" id="module11" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr11) && $idr11 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr11) && $idr11 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr11'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof11" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type11" style="width:65px; " id="type11" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id11) && $id11 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id11) && $id11 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id11' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '14-40-16:10' AND seance.jour = 'Lundi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle11" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>


         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Lundi' and heure='14-40-16:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va11" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td> <input type="hidden" name="jour12" value="Lundi" >
          <input type="hidden" name="heure12" value="16:20-17:50">
          <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module12" style="width:135px;" id="module12" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr12) && $idr12 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr12) && $idr12 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr12'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof12" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type12" style="width:65px; " id="type12" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id12) && $id12 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id12) && $id12 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id12' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '16:20-17:50' AND seance.jour = 'Lundi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle12" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>


         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Lundi' and heure='16:20-17:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va12" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td></tr>    
    <tr>
    
      <th class="mam"><b>Mardi</b></th>
      <td>
      <input type="hidden" name="jour13" value="Mardi" >
          <input type="hidden" name="heure13" value="08:00-09:30">
          <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module13" style="width:135px;" id="module13" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr13) && $idr13 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr13) && $idr13 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr13'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof13" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
              <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type13" style="width:65px; " id="type13" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id13) && $id13 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id13) && $id13 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id13' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '08:00-09:30' and seance.jour='Mardi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle13" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>


         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mardi' and heure='08:00-09:30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va13" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td>
      <input type="hidden" name="jour14" value="Mardi" >
          <input type="hidden" name="heure14" value="09:40-11:10">
          <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module14" style="width:135px;" id="module14" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr14) && $idr14 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr14) && $idr14 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr14'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof14" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type14" style="width:65px; " id="type14" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id14) && $id14 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id14) && $id14 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id14' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '09:40-11:10' and seance.jour='Mardi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle14" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mardi' and heure='09:40-11:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va14" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td>
      <input type="hidden" name="jour15" value="Mardi" >
          <input type="hidden" name="heure15" value="11:20-12:50">
          <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module15" style="width:135px;" id="module15" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr15) && $idr15 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr15) && $idr15 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr15'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof15" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type15" style="width:65px; " id="type15" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id15) && $id15 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id15) && $id15 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id15' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '11:20-12:50' and seance.jour='Mardi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle15" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mardi' and heure='11:20-12:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va15" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td>
      <input type="hidden" name="jour16" value="Mardi" >
          <input type="hidden" name="heure16" value="13:00-14-30">
          <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module16" style="width:135px;" id="module16" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr16) && $idr16 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr16) && $idr16 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr16'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof16" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type16" style="width:65px; " id="type16" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id16) && $id16 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id16) && $id16 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id16' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '13:00-14-30' and seance.jour='Mardi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle16" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mardi' and heure='13:00-14-30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va16" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td>
      <input type="hidden" name="jour17" value="Mardi" >
          <input type="hidden" name="heure17" value="14-40-16:10"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module17" style="width:135px;" id="module17" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr17) && $idr17 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr17) && $idr17 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr17'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof17" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type17" style="width:65px; " id="type17" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id17) && $id17 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id17) && $id17 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id17' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '14-40-16:10' and seance.jour='Mardi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle17" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mardi' and heure='14-40-16:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va17" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td>
      <td>
      <input type="hidden" name="jour18" value="Mardi" >
          <input type="hidden" name="heure18" value="16:20-17:50"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module18" style="width:135px;" id="module18" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr18) && $idr18 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr18) && $idr18 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr18'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof18" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type18" style="width:65px; " id="type18" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id18) && $id18 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id18) && $id18 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id18' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '16:20-17:50' and seance.jour='Mardi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle18" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mardi' and heure='16:20-17:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va18" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td>
    </tr>
    <tr>
      <th class="mam"><b>Mercredi</b></th>
      <input type="hidden" name="jour19" value="Mercredi" >
          <input type="hidden" name="heure19" value="08:00-09:30">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module19" style="width:135px;" id="module19" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr19) && $idr19 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr19) && $idr19 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr19'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof19" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type19" style="width:65px; " id="type19" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id19) && $id19 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id19) && $id19 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id19' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '08:00-09:30' and seance.jour='Mercredi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle19" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mercredi' and heure='08:00-09:30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va19" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td> <input type="hidden" name="jour20" value="Mercredi" >
          <input type="hidden" name="heure20" value="09:40-11:10">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module20" style="width:135px;" id="module20" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr20) && $idr20 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr20) && $idr20 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr20'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof20" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type20" style="width:65px; " id="type20" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id20) && $id20 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id20) && $id20 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id20' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '09:40-11:10' and seance.jour='Mercredi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle20" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mercredi' and heure='09:40-11:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va20" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><input type="hidden" name="jour21" value="Mercredi" >
          <input type="hidden" name="heure21" value="11:20-12:50">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module21" style="width:135px;" id="module21" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr21) && $idr21 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr21) && $idr21 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr21'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof21" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type21" style="width:65px; " id="type21" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id21) && $id21 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id21) && $id21 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id21' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '11:20-12:50' and seance.jour='Mercredi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle21" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mercredi' and heure='11:20-12:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va21" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><input type="hidden" name="jour22" value="Mercredi" >
          <input type="hidden" name="heure22" value="13:00-14-30">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module22" style="width:135px;" id="module22" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr22) && $idr22 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr22) && $idr22 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr22'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof22" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type22" style="width:65px; " id="type22" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id22) && $id22 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id22) && $id22 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id22' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '13:00-14-30' and seance.jour='Mercredi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle22" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mercredi' and heure='13:00-14-30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va22" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><input type="hidden" name="jour23" value="Mercredi" >
          <input type="hidden" name="heure23" value="14-40-16:10">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module23" style="width:135px;" id="module23" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr23) && $idr23 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr23) && $idr23 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr23'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof23" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type23" style="width:65px; " id="type23" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id23) && $id23 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id23) && $id23 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id23' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '14:00-15:50' and seance.jour='Mercredi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle23" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mercredi' and heure='14-40-16:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va23" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><input type="hidden" name="jour24" value="Mercredi" >
          <input type="hidden" name="heure24" value="16:20-17:50">
      <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module24" style="width:135px;" id="module24" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr24) && $idr24 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr24) && $idr24 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr24'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof24" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type24" style="width:65px; " id="type24" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id24) && $id24 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id24) && $id24 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id24' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '16:20-17:50' and seance.jour='Mercredi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle24" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Mercredi' and heure='16:20-17:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va24" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td>
    </tr>
    <tr>
      <th class="mam">Jeudi</th>
      <td><input type="hidden" name="jour25" value="Jeudi" >
          <input type="hidden" name="heure25" value="08:00-09:30"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module25" style="width:135px;" id="module25" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr25) && $idr25 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr25) && $idr25 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr25'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof25" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type25" style="width:65px; " id="type25" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id25) && $id25 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id25) && $id25 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id25' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '08:00-09:30' and seance.jour='Jeudi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle25" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Jeudi' and heure='08:00-09:30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va25" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td><input type="hidden" name="jour26" value="Jeudi" >
          <input type="hidden" name="heure26" value="09:40-11:10"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module26" style="width:135px;" id="module26" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr26) && $idr26 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr26) && $idr26 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr26'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof26" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type26" style="width:65px; " id="type26" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id26) && $id26 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id26) && $id26 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id26' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '09:40-11:10' and seance.jour='Jeudi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle26" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Jeudi' and heure='09:40-11:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va26" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td><input type="hidden" name="jour27" value="Jeudi" >
          <input type="hidden" name="heure27" value="11:20-12:50"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module27" style="width:135px;" id="module27" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr27) && $idr27 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr27) && $idr27 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr27'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof27" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type27" style="width:65px; " id="type27" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id27) && $id27 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id27) && $id27 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id27' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '11:20-12:50' and seance.jour='Jeudi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle27" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Jeudi' and heure='11:20-12:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va27" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td><input type="hidden" name="jour28" value="Jeudi" >
          <input type="hidden" name="heure28" value="13:00-14-30"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module28" style="width:135px;" id="module28" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr28) && $idr28 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr28) && $idr28 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr28'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof28" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type28" style="width:65px; " id="type28" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id28) && $id28 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id28) && $id28 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id28' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '13:00-14-30' and seance.jour='Jeudi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle28" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Jeudi' and heure='13:00-14-30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va28" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td><input type="hidden" name="jour29" value="Jeudi" >
          <input type="hidden" name="heure29" value="14-40-16:10"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module29" style="width:135px;" id="module29" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr29) && $idr29 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr29) && $idr29 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr29'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof29" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
         
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type29" style="width:65px; " id="type29" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id29) && $id29 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id29) && $id29 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id29' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '14-40-16:10' and seance.jour='Jeudi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle29" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Jeudi' and heure='14-40-16:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va29" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td><td><input type="hidden" name="jour30" value="Jeudi" >
          <input type="hidden" name="heure30" value="16:20-17:50"><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module30" style="width:135px;" id="module30" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr30) && $idr30 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr30) && $idr30 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr30'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof30" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type30" style="width:65px; " id="type30" onchange="document.forms['changer'].submit();"> 
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id30) && $id30 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id30) && $id30 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id30' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '16:20-17:50' and seance.jour='Jeudi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle30" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
         <br><?php  	$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Jeudi' and heure='15:30-17:30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
<input name="va30" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
        </span><?php }?></td>
    </tr>
    <tr>
    <th class="mam">Vendredi</th>
    <td>
 
    <input type="hidden" name="jour1" value="Dimanche" >
    <input type="hidden" name="heure1" value="08:00-09:30">
  <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;
if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
   <select    name="module1" style="width:135px;" id="module1" onchange="document.forms['changer'].submit();">
  <option selected="selected" disabled>Module</option>
    <?php  for($i = 0; $i < $nb_regions; $i++){?>
<option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr) && $idr == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);
if(isset($idr) && $idr != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom
FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof
AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation
AND enseignement.id_module = '$idr'  ORDER BY id");
$nd = 0; $code_dept = array();$nom_dept = array();
while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);
array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?>
<select name="prof1" style="width:65px;"><?php  for($d = 0; $d<$nd; $d++) {?>
<option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
       
<?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; 
if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
  <select  name="type1"  style="width:65px; " id="type1" onchange="document.forms['changer'].submit();"> 
  <option selected disabled >Type</option>
     <?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id1) && $id1 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id1) && $id1 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id1' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '08:00-09:30' AND seance.jour = 'Dimanche')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle1" style="width:135px;">  
  <?php for($d = 0; $d<$nd; $d++){?>
<option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?> 
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Dimanche' and heure='08:00-09:30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span><input type="submit" name="va1" class="valider btn btn-primary" value="valider" style="font-size: 13px;"></span><?php }?></td>
 
      <input type="hidden" name="jour2" value="Dimanche" >
     <input type="hidden" name="heure2" value="09:40-11:10">
    <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;
if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
   <select  name="module2" style="width:135px;" id="module2" onchange="document.forms['changer'].submit();">
<option selected="selected" disabled >Module</option>    <?php  for($i = 0; $i < $nb_regions; $i++){?>
<option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr1) && $idr1 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);
if(isset($idr1) && $idr1 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom
FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof
AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation
AND enseignement.id_module = '$idr1'  ORDER BY id");
$nd = 0; $code_dept = array();$nom_dept = array();
while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);
array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?>
<select   name="prof2" style="width:65px;"  ><?php  for($d = 0; $d<$nd; $d++) {?>
<option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
       
<?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type2" id="type2" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id2) && $id2 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id2) && $id2 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id2' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '09:40-11:10' AND seance.jour = 'Dimanche')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle2" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
 
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Dimanche' and heure='09:40-11:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input class="valider btn btn-primary" type="Submit" name="va2" value="Valider" style="font-size: 13px;"></span><?php }?></td>
      <input type="hidden" name="jour3" value="Dimanche" >
     <input type="hidden" name="heure3" value="11:20-12:50">
    <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select   name="module3" style="width:135px;" id="module3" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr2) && $idr2 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr2) && $idr2 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr2'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select   name="prof3" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 

      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type3" id="type3" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id3) && $id3 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id3) && $id3 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id3' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '11:20-12:50' AND seance.jour = 'Dimanche')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle3" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Dimanche' and heure='11:20-12:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input class="valider btn btn-primary" value="Valider" name="va3" type="Submit" style="font-size: 13px;"></span><?php }?></td>
   
   <input type="hidden" name="jour4" value="Dimanche" >
     <input type="hidden" name="heure4" value="13:00-14-30">   
    <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select   name="module4" style="width:135px;" id="module4" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr3) && $idr3 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr3) && $idr3 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr3'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select   name="prof4" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 

            <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type4" id="type4" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id4) && $id4 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id4) && $id4 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id4' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '13:00-14-30' AND seance.jour = 'Dimanche')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle4" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Dimanche' and heure='13:00-14-30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input class="valider btn btn-primary" name="va4" value="Valider" type="Submit" style="font-size: 13px;"> 
      </span><?php }?></td>
    <td>
    <input type="hidden" name="jour5" value="Dimanche" >
     <input type="hidden" name="heure5" value="14-40-16:10">
         <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select   name="module5" style="width:135px;" id="module5" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr5) && $idr5 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr5) && $idr5 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr5'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select  name="prof5" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type5" id="type5" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id5) && $id5 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id5) && $id5 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id5' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '14-40-16:10' AND seance.jour = 'Dimanche')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle5" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>

       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Dimanche' and heure='14-40-16:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input class="valider btn btn-primary" name="va5" value="Valider" type="Submit" style="font-size: 13px;"> 
      </span><?php }?></td>
      
      <input type="hidden" name="jour6" value="Dimanche" >
     <input type="hidden" name="heure6" value="16:20-17:50">
    <td>
    <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module6" style="width:135px;" id="module6" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr6) && $idr6 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr6) && $idr6 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr6'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof6" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
           <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type6" id="type6" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id6) && $id6 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id6) && $id6 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id6' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '16:20-17:50' AND seance.jour = 'Dimanche')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle6" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>

       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Dimanche' and heure='16:20-17:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input name="va6" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
      </span><?php }?></td>
      </tr>
      <tr>
    <th class="mam"><b>Samedi</b></th>
     <td>
   
<input type="hidden" name="jour31" value="Samedi" >
<input type="hidden" name="heure31" value="08:00-09:30">
 <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;
if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>   
<select style="width:135px;"name="module31" id="module31" onchange="document.forms['changer'].submit();">
<option selected="selected" disabled>Module</option> <?php  for($i = 0; $i < $nb_regions; $i++){?>
<option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr31) && $idr31 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select>
<?php mysqli_free_result($sql1);
if(isset($idr31) && $idr31 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom
FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof
AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation
AND enseignement.id_module = '$idr31'  ORDER BY id");
$nd = 0; $code_dept = array();$nom_dept = array();
while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);
array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?>    

<select name="prof31" style="width:65px;">
<?php  for($d = 0; $d<$nd; $d++) {?>
<option  value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>
<?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; 
if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
 
<select  name="type31"  style="width:65px; " id="type31" onchange="document.forms['changer'].submit();">
<option selected disabled >Type</option>
     <?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id31) && $id31 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
mysqli_free_result($prof1); if(isset($id31) && $id31 != -1){
$module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id31' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '08:00-09:30' AND seance.jour = 'Samedi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);
array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>

 <select name="salle31" style="width:135px;"><?php } ?>
 <?php for($d = 0; $d<$nd; $d++){?>
<option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);?> <br>
<?php   $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Samedi' and heure='08:00-09:30' and id_gr='$id_groupe'"));
  if($compte['nb']>0){ ?> <input type="button" class="btn btn-danger"  value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?>
  <span><input type="submit" name="va31" class="valider btn btn-primary" value="valider" style="font-size: 13px;"></span><?php }?></td>
   <input type="hidden" name="jour32" value="Samedi" >
  <input type="hidden" name="heure32" value="09:40-11:10">
    <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;
if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module32" style="width:135px;" id="module32" onchange="document.forms['changer'].submit();">
<option selected="selected" disabled >Module</option>    <?php  for($i = 0; $i < $nb_regions; $i++){?>
<option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr32) && $idr32 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);
if(isset($idr32) && $idr32 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom
FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof
AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation
AND enseignement.id_module = '$idr32'  ORDER BY id");
$nd = 0; $code_dept = array();$nom_dept = array();
while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);
array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?>
<select name="prof32" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?>
<option  value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select>

<?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type32" style="width:65px; " id="type32" onchange="document.forms['changer'].submit();">
<option selected disabled>Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id32) && $id32 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
mysqli_free_result($prof1); if(isset($id32) && $id32 != -1){
$module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id32' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '09:40-11:10' AND seance.jour = 'Samedi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){ array_push($id_mod, $ligne_mod['id_salle']);
array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle32" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
 <br><?php  $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Samedi' and heure='09:40-11:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="btn btn-danger valider1" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> 
       <span>
       <input class="valider btn btn-primary" type="Submit" name="va32" value="Valider" style="font-size: 13px;"></span><?php }?></td>
      <input type="hidden" name="jour33" value="Samedi" >
     <input type="hidden" name="heure33" value="11:20-12:50">
    <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select   name="module33" style="width:135px;" id="module33" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr33) && $idr33 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr33) && $idr33 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr33'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select   name="prof33"   style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 

      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type33" id="type33" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id33) && $id33 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id33) && $id33 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id33' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '11:20-12:50' AND seance.jour = 'Samedi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle33" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
 
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Samedi' and heure='11:20-12:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input class="valider btn btn-primary" value="Valider" name="va33" type="Submit" style="font-size: 13px;"></span><?php }?></td>
   
   <input type="hidden" name="jour34" value="Samedi" >
     <input type="hidden" name="heure34" value="13:00-14-30">   
    <td><?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select   name="module34" style="width:135px;" id="module34" onchange="document.forms['changer'].submit();"><option value="" >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr34) && $idr34 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr34) && $idr34 != -1){
  $sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr34'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select   name="prof34" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 

      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type34" id="type34" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id34) && $id34 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id34) && $id34 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id34' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '13:00-14-30' AND seance.jour = 'Samedi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle34" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
 
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Samedi' and heure='13:00-14-30' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php
}else{ ?> <span><input class="valider btn btn-primary" name="va34" value="Valider" type="Submit" style="font-size: 13px;"> 
      </span><?php }?></td>
    <td>
    <input type="hidden" name="jour35" value="Samedi" >
     <input type="hidden" name="heure35" value="14-40-16:10">
         <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select   name="module35" style="width:135px;" id="module35" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr35) && $idr35 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr35) && $idr35 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr35'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select  name="prof35" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
<?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type35" id="type35" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id35) && $id35 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id35) && $id35 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id35' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '14-40-16:10' AND seance.jour = 'Samedi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle35" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
 
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Samedi' and heure='14-40-16:10' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input class="valider btn btn-primary" name="va35" value="Valider" type="Submit" style="font-size: 13px;"> 
      </span><?php }?></td>
      
      <input type="hidden" name="jour36" value="Samedi" >
     <input type="hidden" name="heure36" value="16:20-17:50">
    <td>
    <?php
$sql1 = mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");
$code_region = array();$prof = array();$nb_regions = 0;if($sql1 != false){while($ligne = mysqli_fetch_assoc($sql1)){
array_push($code_region, $ligne['id_module']);array_push($prof, $ligne['libelle_module']);$nb_regions++;}}?>
<select name="module36" style="width:135px;" id="module36" onchange="document.forms['changer'].submit();"><option selected="selected" disabled >Module</option>
<?php  for($i = 0; $i < $nb_regions; $i++){?><option value="<?php echo($code_region[$i]); ?>"<?php echo((isset($idr36) && $idr36 == $code_region[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php mysqli_free_result($sql1);if(isset($idr36) && $idr36 != -1){
$sql2 =mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation AND enseignement.id_module = '$idr36'  ORDER BY id");$nd = 0; $code_dept = array();$nom_dept = array();while($ligne = mysqli_fetch_assoc($sql2)){array_push($code_dept, $ligne['id_prof']);array_push($nom_dept, $ligne['nom'].' '.$ligne['prenom']); $nd++; }?><select name="prof36" style="width:65px;"> <?php  for($d = 0; $d<$nd; $d++) {?><option value="<?php echo($code_dept[$d]); ?>"<?php echo((isset($dept_selectionne) && $dept_selectionne == $code_dept[$d])?" selected=\"selected\"":null); ?>><?php echo($nom_dept[$d]); ?></option><?php }}?></select> 
      <?php
 $prof1 = mysqli_query($db,"SELECT distinct `type` FROM `salle` ORDER BY `salle`.`type` ASC "); 
$id_salle = array();$prof = array();$nb_prof = 0; if($prof1 != false){
 while($ligne = mysqli_fetch_assoc($prof1)){array_push($id_salle,$ligne['type']);array_push($prof,$ligne['type']);$nb_prof++;}}?>
<select  name="type36" id="type36" style="width:65px; " onchange="document.forms['changer'].submit();"> 
<option selected value="" >Type</option><?php  for($i=0; $i<$nb_prof; $i++){?>
 <option value="<?php echo($id_salle[$i]); ?>"<?php echo((isset($id36) && $id36 == $id_salle[$i])?" selected=\"selected\"":null); ?>><?php echo($prof[$i]); ?></option><?php } ?></select><?php
    mysqli_free_result($prof1); if(isset($id36) && $id36 != -1){
 $module1 = "SELECT id_salle, libelle_salle,TYPE FROM salle WHERE salle.type = '$id36' AND salle.id_salle NOT
IN (SELECT id_sal FROM seance WHERE seance.heure = '16:20-17:50' AND seance.jour = 'Samedi')";
 if($module1 != false){$rech_mod = mysqli_query($db,$module1);
$nd = 0;$id_mod = array();$lib_mod = array();
while($ligne_mod = mysqli_fetch_assoc($rech_mod)){array_push($id_mod, $ligne_mod['id_salle']);

array_push($lib_mod, $ligne_mod['libelle_salle']); $nd++;}?><br>
 <select name="salle36" style="width:135px;">
 <?php for($d = 0; $d<$nd; $d++){?><option value="<?php echo($id_mod[$d]); ?>"<?php echo((
isset($mod_selectionne) && $mod_selectionne == $id_mod[$d])?" selected=\"selected\"":null); ?>><?php echo($lib_mod[$d]); ?></option><?php } ?></select><?php }mysqli_free_result($rech_mod);}?>
 
       <br><?php    $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb FROM `seance` WHERE jour='Samedi' and heure='16:20-17:50' and id_gr='$id_groupe'"));
   if($compte['nb']>0){ ?><input type="button" class="valider1 btn btn-danger" value="occupée" title="Impossible d'ajouter une seance" style="font-size: 13px;">   <?php }else{ ?> <span>
      <input name="va36" class="valider btn btn-primary" value="Valider" type="Submit" style="font-size: 13px;"> 
      </span><?php }?></td>
      </tr>   
  </tbody>

  </table>
  </form>
 <?php 
if(isset($_POST['va1']))
{
if(isset($_POST['prof1']) && ($_POST['salle1']!="") && ($_POST['module1']!="") &&($_POST['type1']!="")){
$prof1=$_POST['prof1'];$jour1=$_POST['jour1'];$heure1=$_POST['heure1'];$module1=$_POST['module1'];$type1=$_POST['type1'];
$salle1=$_POST['salle1'];
$data=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle1' and heure='$heure1' and jour='$jour1'");
$data1=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof1' and heure='$heure1' and jour='$jour1'");
$data2=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure1' and jour='$jour1'");

$nb=mysqli_fetch_array($data);
$bool=true;
$nbre=mysqli_fetch_array($data2);
$bool=true;
$nbr=mysqli_fetch_array($data1);
$bool=true;
if($nb['nb']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php
	}
	else if($nbr['nbr']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php
	}
	else if($nbre['nbre']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php
	}	
 if($type1=='Cours' && $bool==true )
{ 
$groupe=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");

 		 while($a=mysqli_fetch_array($groupe)){
			 $group1=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
  			 mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group1','$prof1','$module1','$salle1','$id_section','$type1','$heure1','$jour1')"); }
?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
 }
else if ($type1!='Cours' && $bool==true ) {
 mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof1','$module1','$salle1','$id_section','$type1','$heure1','$jour1')");
	?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}
	 else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }
}

 if(isset($_POST['va2']))
{
if(isset($_POST['prof2'])  && ($_POST['salle2']!="") && ($_POST['module2']!="") &&($_POST['type2']!="")){//s'il a cliquer sur ajouter la 2eme fois
$prof2=$_POST['prof2'];$jour2=$_POST['jour2'];$heure2=$_POST['heure2'];$module2=$_POST['module2'];$type2=$_POST['type2'];
$salle2=$_POST['salle2'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle2' and heure='$heure2' and jour='$jour2'");
$data2=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof2' and heure='$heure2' and jour='$jour2'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure2' and jour='$jour2'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data2); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type2=='Cours' && $bool==true ) { 
$groupe2=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe2)){
$group2=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group2','$prof2','$module2','$salle2','$id_section','$type2','$heure2','$jour2')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type2!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof2','$module2','$salle2','$id_section','$type2','$heure2','$jour2')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php } }else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }
}
	
 if(isset($_POST['va3']))
{
if(isset($_POST['prof3']) && ($_POST['salle3']!="") && ($_POST['module3']!="") &&($_POST['type3']!="")){//s'il a cliquer sur ajouter la 3eme fois
$prof3=$_POST['prof3'];$jour3=$_POST['jour3'];$heure3=$_POST['heure3'];$module3=$_POST['module3'];$type3=$_POST['type3'];
$salle3=$_POST['salle3'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle3' and heure='$heure3' and jour='$jour3'");
$data2=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof3' and heure='$heure3' and jour='$jour3'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure3' and jour='$jour3'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data2); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type3=='Cours' && $bool==true ) { 
$groupe3=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe3)){
$group3=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group3','$prof3','$module3','$salle3','$id_section','$type3','$heure3','$jour3')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type3!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof3','$module3','$salle3','$id_section','$type3','$heure3','$jour3')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }} 
	
 	 if(isset($_POST['va4']))
{
if(isset($_POST['prof4'])&&($_POST['salle4']!="") && ($_POST['module4']!="") &&($_POST['type4']!="")){//s'il a cliquer sur ajouter la 4eme fois
$prof4=$_POST['prof4'];$jour4=$_POST['jour4'];$heure4=$_POST['heure4'];$module4=$_POST['module4'];$type4=$_POST['type4'];
$salle4=$_POST['salle4'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle4' and heure='$heure4' and jour='$jour4'");
$data4=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof4' and heure='$heure4' and jour='$jour4'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure4' and jour='$jour4'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data4); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type4=='Cours' && $bool==true ) { 
$groupe4=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe4)){
$group4=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group4','$prof4','$module4','$salle4','$id_section','$type4','$heure4','$jour4')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type4!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof4','$module4','$salle4','$id_section','$type4','$heure4','$jour4')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
 	 if(isset($_POST['va5']))
{
if(isset($_POST['prof5']) && ($_POST['salle5']!="") && ($_POST['module5']!="") &&($_POST['type5']!="")){//s'il a cliquer sur ajouter la 5eme fois
$prof5=$_POST['prof5'];$jour5=$_POST['jour5'];$heure5=$_POST['heure5'];$module5=$_POST['module5'];$type5=$_POST['type5'];
$salle5=$_POST['salle5'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle5' and heure='$heure5' and jour='$jour5'");
$data5=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof5' and heure='$heure5' and jour='$jour5'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure5' and jour='$jour5'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data5); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type5=='Cours' && $bool==true ) { 
$groupe5=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe5)){
$group5=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group5','$prof5','$module5','$salle5','$id_section','$type5','$heure5','$jour5')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type5!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof5','$module5','$salle5','$id_section','$type5','$heure5','$jour5')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }} 
	
 	 if(isset($_POST['va6']))
{
if(isset($_POST['prof6']) && ($_POST['salle6']!="") && ($_POST['module6']!="") &&($_POST['type6']!="")){//s'il a cliquer sur ajouter la 6eme fois
$prof6=$_POST['prof6'];$jour6=$_POST['jour6'];$heure6=$_POST['heure6'];$module6=$_POST['module6'];$type6=$_POST['type6'];
$salle6=$_POST['salle6'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle6' and heure='$heure6' and jour='$jour6'");
$data6=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof6' and heure='$heure6' and jour='$jour6'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure6' and jour='$jour6'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data6); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type6=='Cours' && $bool==true ) { 
$groupe6=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe6)){
$group6=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group6','$prof6','$module6','$salle6','$id_section','$type6','$heure6','$jour6')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type6!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof6','$module6','$salle6','$id_section','$type6','$heure6','$jour6')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	 
 	 if(isset($_POST['va7']))
{
if(isset($_POST['prof7']) && ($_POST['salle7']!="") && ($_POST['module7']!="") &&($_POST['type7']!="")){//s'il a cliquer sur ajouter la 7eme fois
$prof7=$_POST['prof7'];$jour7=$_POST['jour7'];$heure7=$_POST['heure7'];$module7=$_POST['module7'];$type7=$_POST['type7'];
$salle7=$_POST['salle7'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle7' and heure='$heure7' and jour='$jour7'");
$data7=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof7' and heure='$heure7' and jour='$jour7'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure7' and jour='$jour7'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data7); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type7=='Cours' && $bool==true ) { 
$groupe7=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe7)){
$group7=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group7','$prof7','$module7','$salle7','$id_section','$type7','$heure7','$jour7')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type7!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof7','$module7','$salle7','$id_section','$type7','$heure7','$jour7')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	 
 	 if(isset($_POST['va8']))
{
if(isset($_POST['prof8']) && ($_POST['salle8']!="") && ($_POST['module8']!="") &&($_POST['type8']!="")){//s'il a cliquer sur ajouter la 8eme fois
$prof8=$_POST['prof8'];$jour8=$_POST['jour8'];$heure8=$_POST['heure8'];$module8=$_POST['module8'];$type8=$_POST['type8'];
$salle8=$_POST['salle8'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle8' and heure='$heure8' and jour='$jour8'");
$data8=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof8' and heure='$heure8' and jour='$jour8'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure8' and jour='$jour8'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data8); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type8=='Cours' && $bool==true ) { 
$groupe8=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe8)){
$group8=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group8','$prof8','$module8','$salle8','$id_section','$type8','$heure8','$jour8')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type8!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof8','$module8','$salle8','$id_section','$type8','$heure8','$jour8')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }} 
	
 	 if(isset($_POST['va9']))
{
if(isset($_POST['prof9']) && ($_POST['salle9']!="") && ($_POST['module9']!="") &&($_POST['type9']!="")){//s'il a cliquer sur ajouter la 9eme fois
$prof9=$_POST['prof9'];$jour9=$_POST['jour9'];$heure9=$_POST['heure9'];$module9=$_POST['module9'];$type9=$_POST['type9'];
$salle9=$_POST['salle9'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle9' and heure='$heure9' and jour='$jour9'");
$data9=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof9' and heure='$heure9' and jour='$jour9'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure9' and jour='$jour9'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data9); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?><SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type9=='Cours' && $bool==true ) { 
$groupe9=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe9)){
$group9=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group9','$prof9','$module9','$salle9','$id_section','$type9','$heure9','$jour9')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type9!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof9','$module9','$salle9','$id_section','$type9','$heure9','$jour9')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	 if(isset($_POST['va10']))
{
if(isset($_POST['prof10']) && ($_POST['salle10']!="") && ($_POST['module10']!="") &&($_POST['type10']!="")){//s'il a cliquer sur ajouter la 10eme fois
$prof10=$_POST['prof10'];$jour10=$_POST['jour10'];$heure10=$_POST['heure10'];$module10=$_POST['module10'];$type10=$_POST['type10'];
$salle10=$_POST['salle10'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle10' and heure='$heure10' and jour='$jour10'");
$data10=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof10' and heure='$heure10' and jour='$jour10'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure10' and jour='$jour10'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data10); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type10=='Cours' && $bool==true ) { 
$groupe10=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe10)){
$group10=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group10','$prof10','$module10','$salle10','$id_section','$type10','$heure10','$jour10')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type10!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof10','$module10','$salle10','$id_section','$type10','$heure10','$jour10')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}
	else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php } }
	
	 if(isset($_POST['va11']))
{
if(isset($_POST['prof11']) && ($_POST['salle11']!="") && ($_POST['module11']!="") &&($_POST['type11']!="")){//s'il a cliquer sur ajouter la 11eme fois
$prof11=$_POST['prof11'];$jour11=$_POST['jour11'];$heure11=$_POST['heure11'];$module11=$_POST['module11'];$type11=$_POST['type11'];
$salle11=$_POST['salle11'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle11' and heure='$heure11' and jour='$jour11'");
$data11=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof11' and heure='$heure11' and jour='$jour11'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure11' and jour='$jour11'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data11); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type11=='Cours' && $bool==true ) { 
$groupe11=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe11)){
$group11=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group11','$prof11','$module11','$salle11','$id_section','$type11','$heure11','$jour11')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type11!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof11','$module11','$salle11','$id_section','$type11','$heure11','$jour11')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	 if(isset($_POST['va12']))
{
if(isset($_POST['prof12']) && ($_POST['salle12']!="") && ($_POST['module12']!="") &&($_POST['type12']!="")){//s'il a cliquer sur ajouter la 12eme fois
$prof12=$_POST['prof12'];$jour12=$_POST['jour12'];$heure12=$_POST['heure12'];$module12=$_POST['module12'];$type12=$_POST['type12'];
$salle12=$_POST['salle12'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle12' and heure='$heure12' and jour='$jour12'");
$data12=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof12' and heure='$heure12' and jour='$jour12'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure12' and jour='$jour12'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data12); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type12=='Cours' && $bool==true ) { 
$groupe12=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe12)){
$group12=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group12','$prof12','$module12','$salle12','$id_section','$type12','$heure12','$jour12')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type12!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof12','$module12','$salle12','$id_section','$type12','$heure12','$jour12')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va13']))
{
if(isset($_POST['prof13']) && ($_POST['salle13']!="") && ($_POST['module13']!="") &&($_POST['type13']!="")){//s'il a cliquer sur ajouter la 13eme fois
$prof13=$_POST['prof13'];$jour13=$_POST['jour13'];$heure13=$_POST['heure13'];$module13=$_POST['module13'];$type13=$_POST['type13'];
$salle13=$_POST['salle13'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle13' and heure='$heure13' and jour='$jour13'");
$data13=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof13' and heure='$heure13' and jour='$jour13'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure13' and jour='$jour13'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data13); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type13=='Cours' && $bool==true ) { 
$groupe13=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe13)){
$group13=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group13','$prof13','$module13','$salle13','$id_section','$type13','$heure13','$jour13')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type13!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof13','$module13','$salle13','$id_section','$type13','$heure13','$jour13')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va14']))
{
if(isset($_POST['prof14']) && ($_POST['salle14']!="") && ($_POST['module14']!="") &&($_POST['type14']!="")){//s'il a cliquer sur ajouter la 14eme fois
$prof14=$_POST['prof14'];$jour14=$_POST['jour14'];$heure14=$_POST['heure14'];$module14=$_POST['module14'];$type14=$_POST['type14'];
$salle14=$_POST['salle14'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle14' and heure='$heure14' and jour='$jour14'");
$data14=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof14' and heure='$heure14' and jour='$jour14'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure14' and jour='$jour14'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data14); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type14=='Cours' && $bool==true ) { 
$groupe14=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe14)){
$group14=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group14','$prof14','$module14','$salle14','$id_section','$type14','$heure14','$jour14')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type14!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof14','$module14','$salle14','$id_section','$type14','$heure14','$jour14')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va15']))
{
if(isset($_POST['prof15']) && ($_POST['salle15']!="") && ($_POST['module15']!="") &&($_POST['type15']!="")){//s'il a cliquer sur ajouter la 15eme fois
$prof15=$_POST['prof15'];$jour15=$_POST['jour15'];$heure15=$_POST['heure15'];$module15=$_POST['module15'];$type15=$_POST['type15'];
$salle15=$_POST['salle15'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle15' and heure='$heure15' and jour='$jour15'");
$data15=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof15' and heure='$heure15' and jour='$jour15'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure15' and jour='$jour15'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data15); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type15=='Cours' && $bool==true ) { 
$groupe15=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe15)){
$group15=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group15','$prof15','$module15','$salle15','$id_section','$type15','$heure15','$jour15')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type15!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof15','$module15','$salle15','$id_section','$type15','$heure15','$jour15')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va16']))
{
if(isset($_POST['prof16']) && ($_POST['salle16']!="") && ($_POST['module16']!="") &&($_POST['type16']!="")){//s'il a cliquer sur ajouter la 16eme fois
$prof16=$_POST['prof16'];$jour16=$_POST['jour16'];$heure16=$_POST['heure16'];$module16=$_POST['module16'];$type16=$_POST['type16'];
$salle16=$_POST['salle16'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle16' and heure='$heure16' and jour='$jour16'");
$data16=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof16' and heure='$heure16' and jour='$jour16'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure16' and jour='$jour16'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data16); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type16=='Cours' && $bool==true ) { 
$groupe16=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe16)){
$group16=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group16','$prof16','$module16','$salle16','$id_section','$type16','$heure16','$jour16')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type16!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof16','$module16','$salle16','$id_section','$type16','$heure16','$jour16')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va17']))
{
if(isset($_POST['prof17']) && ($_POST['salle17']!="") && ($_POST['module17']!="") &&($_POST['type17']!="")){//s'il a cliquer sur ajouter la 17eme fois
$prof17=$_POST['prof17'];$jour17=$_POST['jour17'];$heure17=$_POST['heure17'];$module17=$_POST['module17'];$type17=$_POST['type17'];
$salle17=$_POST['salle17'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle17' and heure='$heure17' and jour='$jour17'");
$data17=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof17' and heure='$heure17' and jour='$jour17'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure17' and jour='$jour17'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data17); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type17=='Cours' && $bool==true ) { 
$groupe17=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe17)){
$group17=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group17','$prof17','$module17','$salle17','$id_section','$type17','$heure17','$jour17')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type17!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof17','$module17','$salle17','$id_section','$type17','$heure17','$jour17')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va18']))
{
if(isset($_POST['prof18']) && ($_POST['salle18']!="") && ($_POST['module18']!="") &&($_POST['type18']!="")){//s'il a cliquer sur ajouter la 18eme fois
$prof18=$_POST['prof18'];$jour18=$_POST['jour18'];$heure18=$_POST['heure18'];$module18=$_POST['module18'];$type18=$_POST['type18'];
$salle18=$_POST['salle18'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle18' and heure='$heure18' and jour='$jour18'");
$data18=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof18' and heure='$heure18' and jour='$jour18'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure18' and jour='$jour18'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data18); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type18=='Cours' && $bool==true ) { 
$groupe18=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe18)){
$group18=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group18','$prof18','$module18','$salle18','$id_section','$type18','$heure18','$jour18')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type18!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof18','$module18','$salle18','$id_section','$type18','$heure18','$jour18')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va19']))
{
if(isset($_POST['prof19']) && ($_POST['salle19']!="") && ($_POST['module19']!="") &&($_POST['type19']!="")){//s'il a cliquer sur ajouter la 19eme fois
$prof19=$_POST['prof19'];$jour19=$_POST['jour19'];$heure19=$_POST['heure19'];$module19=$_POST['module19'];$type19=$_POST['type19'];
$salle19=$_POST['salle19'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle19' and heure='$heure19' and jour='$jour19'");
$data19=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof19' and heure='$heure19' and jour='$jour19'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure19' and jour='$jour19'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data19); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type19=='Cours' && $bool==true ) { 
$groupe19=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe19)){
$group19=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group19','$prof19','$module19','$salle19','$id_section','$type19','$heure19','$jour19')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type19!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof19','$module19','$salle19','$id_section','$type19','$heure19','$jour19')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va20']))
{
if(isset($_POST['prof20']) && ($_POST['salle20']!="") && ($_POST['module20']!="") &&($_POST['type20']!="")){//s'il a cliquer sur ajouter la 20eme fois
$prof20=$_POST['prof20'];$jour20=$_POST['jour20'];$heure20=$_POST['heure20'];$module20=$_POST['module20'];$type20=$_POST['type20'];
$salle20=$_POST['salle20'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle20' and heure='$heure20' and jour='$jour20'");
$data20=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof20' and heure='$heure20' and jour='$jour20'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure20' and jour='$jour20'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data20); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type20=='Cours' && $bool==true ) { 
$groupe20=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe20)){
$group20=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group20','$prof20','$module20','$salle20','$id_section','$type20','$heure20','$jour20')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type20!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof20','$module20','$salle20','$id_section','$type20','$heure20','$jour20')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va21']))
{
if(isset($_POST['prof21']) && ($_POST['salle21']!="") && ($_POST['module21']!="") &&($_POST['type21']!="")){//s'il a cliquer sur ajouter la 21eme fois
$prof21=$_POST['prof21'];$jour21=$_POST['jour21'];$heure21=$_POST['heure21'];$module21=$_POST['module21'];$type21=$_POST['type21'];
$salle21=$_POST['salle21'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle21' and heure='$heure21' and jour='$jour21'");
$data21=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof21' and heure='$heure21' and jour='$jour21'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure21' and jour='$jour21'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data21); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type21=='Cours' && $bool==true ) { 
$groupe21=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe21)){
$group21=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group21','$prof21','$module21','$salle21','$id_section','$type21','$heure21','$jour21')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type21!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof21','$module21','$salle21','$id_section','$type21','$heure21','$jour21')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va22']))
{
if(isset($_POST['prof22']) && ($_POST['salle22']!="") && ($_POST['module22']!="") &&($_POST['type22']!="")){//s'il a cliquer sur ajouter la 22eme fois
$prof22=$_POST['prof22'];$jour22=$_POST['jour22'];$heure22=$_POST['heure22'];$module22=$_POST['module22'];$type22=$_POST['type22'];
$salle22=$_POST['salle22'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle22' and heure='$heure22' and jour='$jour22'");
$data22=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof22' and heure='$heure22' and jour='$jour22'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure22' and jour='$jour22'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data22); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type22=='Cours' && $bool==true ) { 
$groupe22=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe22)){
$group22=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group22','$prof22','$module22','$salle22','$id_section','$type22','$heure22','$jour22')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type22!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof22','$module22','$salle22','$id_section','$type22','$heure22','$jour22')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va23']))
{
if(isset($_POST['prof23']) && ($_POST['salle23']!="") && ($_POST['module23']!="") &&($_POST['type23']!="")){//s'il a cliquer sur ajouter la 23eme fois
$prof23=$_POST['prof23'];$jour23=$_POST['jour23'];$heure23=$_POST['heure23'];$module23=$_POST['module23'];$type23=$_POST['type23'];
$salle23=$_POST['salle23'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle23' and heure='$heure23' and jour='$jour23'");
$data23=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof23' and heure='$heure23' and jour='$jour23'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure23' and jour='$jour23'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data23); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type23=='Cours' && $bool==true ) { 
$groupe23=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe23)){
$group23=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group23','$prof23','$module23','$salle23','$id_section','$type23','$heure23','$jour23')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type23!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof23','$module23','$salle23','$id_section','$type23','$heure23','$jour23')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va24']))
{
if(isset($_POST['prof24']) && ($_POST['salle24']!="") && ($_POST['module24']!="") &&($_POST['type24']!="")){//s'il a cliquer sur ajouter la 24eme fois
$prof24=$_POST['prof24'];$jour24=$_POST['jour24'];$heure24=$_POST['heure24'];$module24=$_POST['module24'];$type24=$_POST['type24'];
$salle24=$_POST['salle24'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle24' and heure='$heure24' and jour='$jour24'");
$data24=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof24' and heure='$heure24' and jour='$jour24'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure24' and jour='$jour24'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data24); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type24=='Cours' && $bool==true ) { 
$groupe24=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe24)){
$group24=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group24','$prof24','$module24','$salle24','$id_section','$type24','$heure24','$jour24')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type24!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof24','$module24','$salle24','$id_section','$type24','$heure24','$jour24')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va25']))
{
if(isset($_POST['prof25']) && ($_POST['salle25']!="") && ($_POST['module25']!="") &&($_POST['type25']!="")){//s'il a cliquer sur ajouter la 25eme fois
$prof25=$_POST['prof25'];$jour25=$_POST['jour25'];$heure25=$_POST['heure25'];$module25=$_POST['module25'];$type25=$_POST['type25'];
$salle25=$_POST['salle25'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle25' and heure='$heure25' and jour='$jour25'");
$data25=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof25' and heure='$heure25' and jour='$jour25'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure25' and jour='$jour25'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data25); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type25=='Cours' && $bool==true ) { 
$groupe25=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe25)){
$group25=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group25','$prof25','$module25','$salle25','$id_section','$type25','$heure25','$jour25')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type25!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof25','$module25','$salle25','$id_section','$type25','$heure25','$jour25')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va26']))
{
if(isset($_POST['prof26']) && ($_POST['salle26']!="") && ($_POST['module26']!="") &&($_POST['type26']!="")){//s'il a cliquer sur ajouter la 26eme fois
$prof26=$_POST['prof26'];$jour26=$_POST['jour26'];$heure26=$_POST['heure26'];$module26=$_POST['module26'];$type26=$_POST['type26'];
$salle26=$_POST['salle26'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle26' and heure='$heure26' and jour='$jour26'");
$data26=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof26' and heure='$heure26' and jour='$jour26'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure26' and jour='$jour26'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data26); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type26=='Cours' && $bool==true ) { 
$groupe26=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe26)){
$group26=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group26','$prof26','$module26','$salle26','$id_section','$type26','$heure26','$jour26')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type26!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof26','$module26','$salle26','$id_section','$type26','$heure26','$jour26')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va27']))
{
if(isset($_POST['prof27']) && ($_POST['salle27']!="") && ($_POST['module27']!="") &&($_POST['type27']!="")){//s'il a cliquer sur ajouter la 27eme fois
$prof27=$_POST['prof27'];$jour27=$_POST['jour27'];$heure27=$_POST['heure27'];$module27=$_POST['module27'];$type27=$_POST['type27'];
$salle27=$_POST['salle27'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle27' and heure='$heure27' and jour='$jour27'");
$data27=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof27' and heure='$heure27' and jour='$jour27'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure27' and jour='$jour27'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data27); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type27=='Cours' && $bool==true ) { 
$groupe27=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe27)){
$group27=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group27','$prof27','$module27','$salle27','$id_section','$type27','$heure27','$jour27')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type27!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof27','$module27','$salle27','$id_section','$type27','$heure27','$jour27')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va28']))
{
if(isset($_POST['prof28']) && ($_POST['salle28']!="") && ($_POST['module28']!="") &&($_POST['type28']!="")){//s'il a cliquer sur ajouter la 28eme fois
$prof28=$_POST['prof28'];$jour28=$_POST['jour28'];$heure28=$_POST['heure28'];$module28=$_POST['module28'];$type28=$_POST['type28'];
$salle28=$_POST['salle28'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle28' and heure='$heure28' and jour='$jour28'");
$data28=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof28' and heure='$heure28' and jour='$jour28'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure28' and jour='$jour28'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data28); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type28=='Cours' && $bool==true ) { 
$groupe28=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe28)){
$group28=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group28','$prof28','$module28','$salle28','$id_section','$type28','$heure28','$jour28')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type28!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof28','$module28','$salle28','$id_section','$type28','$heure28','$jour28')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va29']))
{
if(isset($_POST['prof29']) && ($_POST['salle29']!="") && ($_POST['module29']!="") &&($_POST['type29']!="")){//s'il a cliquer sur ajouter la 29eme fois
$prof29=$_POST['prof29'];$jour29=$_POST['jour29'];$heure29=$_POST['heure29'];$module29=$_POST['module29'];$type29=$_POST['type29'];
$salle29=$_POST['salle29'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle29' and heure='$heure29' and jour='$jour29'");
$data29=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof29' and heure='$heure29' and jour='$jour29'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure29' and jour='$jour29'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data29); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type29=='Cours' && $bool==true ) { 
$groupe29=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe29)){
$group29=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group29','$prof29','$module29','$salle29','$id_section','$type29','$heure29','$jour29')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type29!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof29','$module29','$salle29','$id_section','$type29','$heure29','$jour29')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
	 if(isset($_POST['va30']))
{
if(isset($_POST['prof30']) && ($_POST['salle30']!="") && ($_POST['module30']!="") &&($_POST['type30']!="")){//s'il a cliquer sur ajouter la 30eme fois
$prof30=$_POST['prof30'];$jour30=$_POST['jour30'];$heure30=$_POST['heure30'];$module30=$_POST['module30'];$type30=$_POST['type30'];
$salle30=$_POST['salle30'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle30' and heure='$heure30' and jour='$jour30'");
$data30=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof30' and heure='$heure30' and jour='$jour30'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure30' and jour='$jour30'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data30); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type30=='Cours' && $bool==true ) { 
$groupe30=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe30)){
$group30=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group30','$prof30','$module30','$salle30','$id_section','$type30','$heure30','$jour30')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type30!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof30','$module30','$salle30','$id_section','$type30','$heure30','$jour30')");
?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT><?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}

 	 if(isset($_POST['va31']))
{
if(isset($_POST['prof31']) && ($_POST['salle31']!="") && ($_POST['module31']!="") &&($_POST['type31']!="")){//s'il a cliquer sur ajouter la 31eme fois
$prof31=$_POST['prof31'];$jour31=$_POST['jour31'];$heure31=$_POST['heure31'];$module31=$_POST['module31'];$type31=$_POST['type31'];
$salle31=$_POST['salle31'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle31' and heure='$heure31' and jour='$jour31'");
$data31=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof31' and heure='$heure31' and jour='$jour31'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure31' and jour='$jour31'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data31); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type31=='Cours' && $bool==true ) { 
$groupe31=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe31)){
$group31=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group31','$prof31','$module31','$salle31','$id_section','$type31','$heure31','$jour31')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type31!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof31','$module31','$salle31','$id_section','$type31','$heure31','$jour31')");
?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT><?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}


 if(isset($_POST['va32']))
{
if(isset($_POST['prof32']) && ($_POST['salle32']!="") && ($_POST['module32']!="") &&($_POST['type32']!="")){//s'il a cliquer sur ajouter la 32eme fois
$prof32=$_POST['prof32'];$jour32=$_POST['jour32'];$heure32=$_POST['heure32'];$module32=$_POST['module32'];$type32=$_POST['type32'];
$salle32=$_POST['salle32'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle32' and heure='$heure32' and jour='$jour32'");
$data32=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof32' and heure='$heure32' and jour='$jour32'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure32' and jour='$jour32'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data32); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type32=='Cours' && $bool==true ) { 
$groupe32=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe32)){
$group32=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group32','$prof32','$module32','$salle32','$id_section','$type32','$heure32','$jour32')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type32!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof32','$module32','$salle32','$id_section','$type32','$heure32','$jour32')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
 if(isset($_POST['va33']))
{
if(isset($_POST['prof33']) && ($_POST['salle33']!="") && ($_POST['module33']!="") &&($_POST['type33']!="")){//s'il a cliquer sur ajouter la 33eme fois
$prof33=$_POST['prof33'];$jour33=$_POST['jour33'];$heure33=$_POST['heure33'];$module33=$_POST['module33'];$type33=$_POST['type33'];
$salle33=$_POST['salle33'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle33' and heure='$heure33' and jour='$jour33'");
$data2=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof33' and heure='$heure33' and jour='$jour33'");
$data33=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure33' and jour='$jour33'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data2); $bool=true;
$nbre=mysqli_fetch_array($data33); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type33=='Cours' && $bool==true ) { 
$groupe33=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe33)){
$group33=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group33','$prof33','$module33','$salle33','$id_section','$type33','$heure33','$jour33')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type33!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof33','$module33','$salle33','$id_section','$type33','$heure33','$jour33')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }} 
	
 	 if(isset($_POST['va34']))
{
if(isset($_POST['prof34']) && ($_POST['salle34']!="") && ($_POST['module34']!="") &&($_POST['type34']!="")){//s'il a cliquer sur ajouter la 34eme fois
$prof34=$_POST['prof34'];$jour34=$_POST['jour34'];$heure34=$_POST['heure34'];$module34=$_POST['module34'];$type34=$_POST['type34'];
$salle34=$_POST['salle34'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle34' and heure='$heure34' and jour='$jour34'");
$data34=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof34' and heure='$heure34' and jour='$jour34'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure34' and jour='$jour34'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data34); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type34=='Cours' && $bool==true ) { 
$groupe34=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe34)){
$group34=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group34','$prof34','$module34','$salle34','$id_section','$type34','$heure34','$jour34')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type34!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof34','$module34','$salle34','$id_section','$type34','$heure34','$jour34')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
	
 	 if(isset($_POST['va35']))
{
if(isset($_POST['prof35']) && ($_POST['salle35']!="") && ($_POST['module35']!="") &&($_POST['type35']!="")){//s'il a cliquer sur ajouter la 35eme fois
$prof35=$_POST['prof35'];$jour35=$_POST['jour35'];$heure35=$_POST['heure35'];$module35=$_POST['module35'];$type35=$_POST['type35'];
$salle35=$_POST['salle35'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle35' and heure='$heure35' and jour='$jour35'");
$data35=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof35' and heure='$heure35' and jour='$jour35'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure35' and jour='$jour35'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data35); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type35=='Cours' && $bool==true ) { 
$groupe35=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe35)){
$group35=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group35','$prof35','$module35','$salle35','$id_section','$type35','$heure35','$jour35')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type35!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof35','$module35','$salle35','$id_section','$type35','$heure35','$jour35')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php }}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }} 
	
 	 if(isset($_POST['va36']))
{
if(isset($_POST['prof36']) && ($_POST['salle36']!="") && ($_POST['module36']!="") &&($_POST['type36']!="")){//s'il a cliquer sur ajouter la 36eme fois
$prof36=$_POST['prof36'];$jour36=$_POST['jour36'];$heure36=$_POST['heure36'];$module36=$_POST['module36'];$type36=$_POST['type36'];
$salle36=$_POST['salle36'];
$data1=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle36' and heure='$heure36' and jour='$jour36'");
$data36=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof36' and heure='$heure36' and jour='$jour36'");
$data3=mysqli_query($db,"select count(*) as nbre from seance where id_gr='$id_groupe' and heure='$heure36' and jour='$jour36'");
$nb=mysqli_fetch_array($data1); $bool=true;
$nbr=mysqli_fetch_array($data36); $bool=true;
$nbre=mysqli_fetch_array($data3); $bool=true;
if($nb['nb']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("la salle est occupée");</SCRIPT><?php }
	else if($nbr['nbr']>0){ $bool=false; ?>
<SCRIPT LANGUAGE="Javascript">alert("le prof est occupé");</SCRIPT><?php } 
    else if($nbre['nbre']>0){ $bool=false;?>
<SCRIPT LANGUAGE="Javascript">alert("le groupe est déja programmé pour une séance!");</SCRIPT><?php }	
 if($type36=='Cours' && $bool==true ) { 
$groupe36=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe36)){
$group36=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$group36','$prof36','$module36','$salle36','$id_section','$type36','$heure36','$jour36')"); } ?><SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php
}
else if ($type36!='Cours' && $bool==true ) {
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre','$id_groupe','$prof36','$module36','$salle36','$id_section','$type36','$heure36','$jour36')");
 	?> <SCRIPT LANGUAGE="Javascript">	alert("La séance est ajoutée avec succés!"); </SCRIPT> <?php 
	}}else { ?> <SCRIPT LANGUAGE="Javascript"> alert("vous devez selectionée tout les champs  "); </SCRIPT><?php }}
  ?>
 <?php } ?>
</div>
</body>
</html>