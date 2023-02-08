<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
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
<br/><br/><br/><br/>
<!DOCTYPE">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/special.css">
 <link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>ajouter un emplois du temps</title>
<meta  charset=utf-8 />
<script type="text/javascript" src="CSS/emploi_chekbox.js"></script>
<script type="text/javascript" src="CSS/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	$('#heure1').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure1').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
		
</script>
</head>
<body style="background-color:#07415f; margin-top:-110px;">
<div class="container" style="padding-top:0px;"> 
<p style=" text-align:center;letter-spacing:2px;font-style:italic; word-spacing:3px;;font-size:24px;color:#FFF;   font-family:'Comic Sans MS', cursive; " > PROGRAMMER UNE SEANCE </p><pre style="letter-spacing:3px;	word-spacing:5px; font-weight:bold;"><span style="color:#FFF"> FORMATION :<?php echo $formation;?> </span>     <span style="color:#FFF">SEMESTRE : <?php echo $semestre;?>     </span><span style="color:#FFF">SECTION : <?php echo $lib_sec;?> </span></pre><br></div>
<div class="container" style="padding-top:40px;width:630px; margin-top:10px;">

<form  method="post"  name="emplois" onSubmit="return test2(this);">
<input type="hidden" name="formation" value="<?php echo $formation; ?>">  
 <select name="jour">
  <option selected>Jour</option>
  <option value="Vendredi">Samedi</option>
  <option value="Vendredi">Vendredi</option>
  <option value="Lundi">Lundi</option>
  <option value="Mardi">Mardi</option>
  <option value="Mercredi">Mercredi</option>
  <option value="Jeudi">Jeudi</option>
  <option value="Vendredi">Vendredi</option>
  </select><br>
  
<input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$";   required name="heure1" id="heure1" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /><br>
  
<select name="module" id="prof" onchange='go()'>
					<option value='-1'>Module</option>
<?php
$donnee=mysqli_query($db,"SELECT DISTINCT libelle_module, formation.id_formation, semestre.id_semestre, id_module, libelle_semestre
FROM section, formation, semestre, module, groupe WHERE section.id_formation = formation.id_formation AND section.id_semestre = semestre.id_semestre AND module.id_formation = formation.id_formation AND module.id_semestre = semestre.id_semestre AND groupe.id_formation = formation.id_formation AND libelle_semestre = '$semestre' and groupe.id_groupe ='$var'");

while($a=mysqli_fetch_array($donnee)){
   echo '<option value="'.$a['id_module'].'">'.$a['libelle_module'].'</option>';} ?>
</select><br />	 
<div id='module' style='display:inline'> 
                
<select name='module'>
  <option value='-1'>Prof</option>
  </select></div>   <br>
     
     <select id="type" name="type" onChange="return test();">
            <option selected>Type </option>
			<option value="Cours">Cours</option>
			<option value="TD">TD</option>
			<option value="TP">TP</option>
		</select><br>
 	<select name="groupe" id="groupe"  disabled="disabled">
<option value="<?php echo  $a['id_groupe']; ?>" >Groupe</option>
<?php $donnee3=mysqli_query($db,"SELECT DISTINCT enseignement.id_prof, prof.id_prof, id, libelle_module, nom_formation, nom, prenom
FROM enseignement, formation, prof, groupe, section, semestre, module WHERE enseignement.id_prof = prof.id_prof
AND enseignement.id_formation = formation.id_formation AND enseignement.id_semestre = semestre.id_semestre AND enseignement.id_module = module.id_module AND formation.id_formation = section.id_formation AND groupe.id_formation = formation.id_formation and groupe.id_groupe ='$var'");
while($a=mysqli_fetch_array($donnee3)){
echo '<option value="'.$a['id_groupe'].'">'.$a['libelle_groupe'].'</option>'; }?>
</select><br>


<select name="salle">
<option selected>Salle</option>
<?php 
$donnee4=mysqli_query($db,"SELECT DISTINCT id_salle,libelle_salle,type FROM salle ORDER BY `salle`.`type` ASC");
while($a=mysqli_fetch_array($donnee4)){
echo '<option value="'.$a['id_salle'].'">'.$a['libelle_salle']. '&laquo;'.$a['type'].'&raquo;';'</option>';} ?>
</select>

<hr width="100%" style="height:2px; color:rgba(255,255,255,.7);"/>
  
<input type="submit" value="Enregistrer" name="Enregistrer" class="btn_mod" style=" margin-top:15px;width:133px;">&nbsp;&nbsp;
<a href="gestion_des_emplois_de_temps.php" style="text-decoration:none;"><input type="button" value="Fermer" name="Fermer" class="btn_mod" style="width:95px"></a><br>
</form>
</div>

<?php 
if(isset($_POST['jour'])){//s'il a cliquer sur ajouter la 2eme fois
$jour=$_POST['jour'];
$heure=$_POST['heure1'];
$prof=$_POST['prof'];
$module=$_POST['module'];
$type=$_POST['type'];
$salle=$_POST['salle'];


 /*  pour ne pas ajouter deux salles similaires  */
$data=mysqli_query($db,"select count(*) as nb from seance where id_sal='$salle' and heure='$heure' and jour='$jour'");

$ligne1=mysqli_fetch_array(mysqli_query($db,"SELECT libelle_salle from salle,seance where salle.id_salle = seance.id_sal and id_sal='$salle'"));
$libelle_salle=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_salle']));

/*  pour ne pas ajouter deux profs similaires  */
$data1=mysqli_query($db,"select count(*) as nbr from seance where id_pr='$prof' and heure='$heure' and jour='$jour'");

$ligne2=mysqli_fetch_array(mysqli_query($db,"SELECT nom,prenom from prof,seance where prof.id_prof=seance.id_pr  and id_pr='$prof'"));
$nom=mysqli_real_escape_string($db,htmlspecialchars($ligne2['nom']));
$prenom=mysqli_real_escape_string($db,htmlspecialchars($ligne2['prenom']));

/*  pour verifier si l'enseignemet  existe ou deja  */
$nb=mysqli_fetch_array($data);
$bool=true;
$nbr=mysqli_fetch_array($data1);
$bool=true;
	/* 	pour ne pas ajouter deux controles similaire 	*/
	if($nb['nb']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("la salle <?php echo $libelle_salle; ?>  est occupée");</SCRIPT><?php
	}
	else if($nbr['nbr']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("le prof   <?php echo $nom .''.$prenom; ?>  est occupé");</SCRIPT><?php
	}
	
 if($type=='Cours' && $bool==true )
{ 
$groupe=mysqli_query($db,"SELECT id_groupe
FROM groupe , section
WHERE groupe.id_section = section.id_section
AND section.id_section='$var'");

 		 while($a=mysqli_fetch_array($groupe)){
			 $group=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));

  			 mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre',62,'$prof','$module','$salle','$id_section','$type','$heure','$jour')"); }

 }
else if ($type!='Cours' && $bool==true ) {
$groupe=$_POST['groupe'];
mysqli_query($db,"INSERT INTO `seance`(`id_for`, `id_sem`, `id_gr`, `id_pr`, `id_mod`, `id_sal`, `id_sec`, `type`, `heure`,`jour`) VALUES ('$id_formation','$id_semestre',62,'$prof','$module','$salle','$id_section','$type','$heure','$jour')");
}
	


	?> <SCRIPT LANGUAGE="Javascript">	alert("Ajouté avec succés!"); </SCRIPT> <?php
	}
 }
 ?>
 
</body>
</html>