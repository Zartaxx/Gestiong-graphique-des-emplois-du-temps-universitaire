<?php 
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
$donnee=mysqli_query($db,"select distinct nom_formation from formation");
$data1=mysqli_query($db,"select  distinct libelle_semestre from semestre");?>
<!DOCTYPE html>
<html >
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Emploi de Temps</title>
</head>

<body style="background-color: rgb(219,226,226);">
  <?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id, id_prof, prenom, libelle_module, libelle_groupe, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section,lib_section, id_gr, id_pr, id_mod, id_sal, id_sec, seance.type AS type , heure, jour FROM prof, seance, section, groupe, formation, module, salle, semestre WHERE seance.id_pr = prof.id_prof AND module.id_module = seance.id_mod AND groupe.id_groupe = seance.id_gr AND salle.id_salle = seance.id_sal AND seance.id_gr = groupe.id_groupe AND seance.id_for = formation.id_formation AND seance.id_sec = section.id_section AND seance.id ='$id' AND seance.id_gr = groupe.id_groupe"));
$id_sal=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_sal']));
$id_mod=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_mod']));
$id_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_groupe']));
$jour=mysqli_real_escape_string($db,htmlspecialchars($ligne['jour']));
$heure=mysqli_real_escape_string($db,htmlspecialchars($ligne['heure']));
$id_pr=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_pr']));
$id_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_sec']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne['id']));
$id_sem=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_sem']));
$id_gr=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_gr']));
$libelle_salle=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_salle']));
$id_for=mysqli_real_escape_string($db,htmlspecialchars($ligne['id_for']));
$type1=mysqli_real_escape_string($db,htmlspecialchars($ligne['type']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_groupe']));
$libelle_module=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_module']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne['lib_section']));
 
if((isset($_GET['id']) && ($type1=='TP'))||( (isset($_GET['id']) && ($type1=='TD'))    )   )
{
$id=$_GET['id'];
mysqli_query($db,"DELETE FROM seance WHERE id='$id'");

?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_emplois_de_temps.php ' />";

 } else if (isset($_GET['id']) && ($type1=='Cours') ){
	 $groupe6=mysqli_query($db,"SELECT id_groupe, section.lib_section
FROM groupe, section, formation
WHERE groupe.id_section = section.id_section
AND formation.id_formation = groupe.id_formation
AND section.lib_section = '$lib_sec' ");
while($a=mysqli_fetch_array($groupe6)){
$group=mysqli_real_escape_string($db,htmlspecialchars($a['id_groupe']));
 
 mysqli_query($db," DELETE   FROM `seance` WHERE heure='$heure' and jour='$jour' AND id_gr='$group'" );
 ?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php 
 echo "<meta http-equiv='refresh' content='0; gestion_des_emplois_de_temps.php ' />";
}}}
 
if(isset($_GET['groupe']))
{
$id_groupe=$_GET['groupe'];
$var=$id_groupe;
$ligne1=mysqli_fetch_array(mysqli_query($db,"SELECT groupe.id_groupe as id_groupe, prof.nom, prof.prenom, module.id_module, libelle_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec
FROM groupe, formation, semestre, section, prof, module, enseignement WHERE formation.id_formation = groupe.id_formation AND groupe.id_semestre = semestre.id_semestre AND section.id_section = groupe.id_section AND enseignement.id_prof = prof.id_prof AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation  and id_groupe='$var'"));

$formation=mysqli_real_escape_string($db,htmlspecialchars($ligne1['formation']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['semestre']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['lib_sec']));
$session=mysqli_real_escape_string($db,htmlspecialchars($ligne1['session']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
?>

 <!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;font-weight: bold;">
                Modifier Emploi Du Temps 
              </h2>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col d-flex justify-content-center">
              <h3 style="font-family: monospace;letter-spacing:2px;">
                FORMATION :<span style="color:#00F"><?php echo $formation;?> </span>&nbsp;&nbsp;SEMESTRE :<span style="color:#00F"> <?php echo $semestre;?></span> &nbsp;&nbsp;SECTION : <span style="color:#00F"><?php echo $lib_sec;?></span>&nbsp;&nbsp;&nbsp; Groupe: <span style="color:#00F"><?php echo $libelle_groupe;?></span>
              </h3>
          </div>
    </div>
    <a href="gestion_des_emplois_de_temps.php" style="text-decoration:none; font-size:16px"><input class="col float-right btn-primary m-4" type="button" value="précedent" name="Fermer" style="width:110px ; font-size:16px;"/></a>
    <br>
     <!-- fin de centre -->
<?php
$ligne31=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom, id_prof, prenom, libelle_module, libelle_groupe, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, id_sec, seance.type AS
type , heure, jour FROM prof, seance, section, groupe, formation, module, salle, semestre WHERE jour ='Samedi' AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof AND module.id_module = seance.id_mod AND groupe.id_groupe = seance.id_gr AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe AND seance.id_for=formation.id_formation AND seance.id_sec = section.id_section
AND seance.id_gr ='$var' AND seance.id_gr = groupe.id_groupe"));
$id_prof31=mysqli_real_escape_string($db,htmlspecialchars($ligne31['nom'].' '.$ligne31['prenom']));
$id_module31=mysqli_real_escape_string($db,htmlspecialchars($ligne31['libelle_module']));
$id_groupe31=mysqli_real_escape_string($db,htmlspecialchars($ligne31['libelle_groupe']));
$id_salle31=mysqli_real_escape_string($db,htmlspecialchars($ligne31['libelle_salle']));
$type31=mysqli_real_escape_string($db,htmlspecialchars($ligne31['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne31['id']));


$ligne32=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Samedi' and heure='09:40-11:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal AND seance.id_gr=groupe.id_groupe and seance.id_sec=section.id_section  and seance.id_gr='$var'   "));
$id_prof32=mysqli_real_escape_string($db,htmlspecialchars($ligne32['nom'].' '.$ligne32['prenom']));
$id_module32=mysqli_real_escape_string($db,htmlspecialchars($ligne32['libelle_module']));
$id_groupe32=mysqli_real_escape_string($db,htmlspecialchars($ligne32['libelle_groupe']));
$id_salle32=mysqli_real_escape_string($db,htmlspecialchars($ligne32['libelle_salle']));
$type32=mysqli_real_escape_string($db,htmlspecialchars($ligne32['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne32['id']));

 
$ligne33=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Samedi' and heure='11:20-12:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal AND seance.id_gr=groupe.id_groupe and seance.id_sec=section.id_section   and seance.id_gr='$var'     "));
$id_prof33=mysqli_real_escape_string($db,htmlspecialchars($ligne33['nom'].' '.$ligne33['prenom']));
$id_module33=mysqli_real_escape_string($db,htmlspecialchars($ligne33['libelle_module']));
$id_groupe33=mysqli_real_escape_string($db,htmlspecialchars($ligne33['libelle_groupe']));
$id_salle33=mysqli_real_escape_string($db,htmlspecialchars($ligne33['libelle_salle']));
$type33=mysqli_real_escape_string($db,htmlspecialchars($ligne33['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne33['id']));


 $ligne34=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id, nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Samedi' and heure='13:00-14-30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal AND seance.id_gr=groupe.id_groupe and seance.id_sec=section.id_section  and seance.id_gr='$var'   "));
$id_prof34=mysqli_real_escape_string($db,htmlspecialchars($ligne34['nom'].' '.$ligne34['prenom']));
$id_module34=mysqli_real_escape_string($db,htmlspecialchars($ligne34['libelle_module']));
$id_groupe34=mysqli_real_escape_string($db,htmlspecialchars($ligne34['libelle_groupe']));
$id_salle34=mysqli_real_escape_string($db,htmlspecialchars($ligne34['libelle_salle']));
$type34=mysqli_real_escape_string($db,htmlspecialchars($ligne34['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne34['id']));

 
$ligne35=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,id_groupe,formation.id_formation, id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Samedi' and heure='14-40-16:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr=groupe.id_groupe and seance.id_for=formation.id_formation  and seance.id_gr='$var' "));
$id_prof35=mysqli_real_escape_string($db,htmlspecialchars($ligne35['nom'].' '.$ligne35['prenom']));
$id_module35=mysqli_real_escape_string($db,htmlspecialchars($ligne35['libelle_module']));
$id_groupe35=mysqli_real_escape_string($db,htmlspecialchars($ligne35['libelle_groupe']));
$id_salle35=mysqli_real_escape_string($db,htmlspecialchars($ligne35['libelle_salle']));
$type35=mysqli_real_escape_string($db,htmlspecialchars($ligne35['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne35['id']));


 
$ligne36=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,id_groupe,formation.id_formation, id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Samedi' and heure='16:20-17:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr=groupe.id_groupe and seance.id_for=formation.id_formation   and seance.id_gr='$var' "));
$id_prof36=mysqli_real_escape_string($db,htmlspecialchars($ligne36['nom'].' '.$ligne36['prenom']));
$id_module36=mysqli_real_escape_string($db,htmlspecialchars($ligne36['libelle_module']));
$id_groupe36=mysqli_real_escape_string($db,htmlspecialchars($ligne36['libelle_groupe']));
$id_salle36=mysqli_real_escape_string($db,htmlspecialchars($ligne36['libelle_salle']));
$type36=mysqli_real_escape_string($db,htmlspecialchars($ligne36['type'])); 
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne36['id']));



$ligne  =mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom, id_prof, prenom,libelle_module,
libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr, id_pr, id_mod, id_sal, id_sec, seance.type AS type , heure, jour FROM prof, seance, section, groupe, formation, module, salle, semestre WHERE jour = 'Dimanche' AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof AND module.id_module = seance.id_mod AND groupe.id_groupe = seance.id_gr AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe AND seance.id_for=formation.id_formation AND seance.id_sec = section.id_section
AND seance.id_gr ='$var' AND seance.id_gr = groupe.id_groupe"));
$id_prof=mysqli_real_escape_string($db,htmlspecialchars($ligne['nom'].' '.$ligne['prenom']));
$id_module=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_module']));
$id_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_groupe']));
$id_salle=mysqli_real_escape_string($db,htmlspecialchars($ligne['libelle_salle']));
$type=mysqli_real_escape_string($db,htmlspecialchars($ligne['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne['id']));


$ligne2=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Dimanche' and heure='09:40-11:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal AND seance.id_gr=groupe.id_groupe and seance.id_sec=section.id_section  and seance.id_gr='$var'   "));
$id_prof1=mysqli_real_escape_string($db,htmlspecialchars($ligne2['nom'].' '.$ligne2['prenom']));
$id_module1=mysqli_real_escape_string($db,htmlspecialchars($ligne2['libelle_module']));
$id_groupe1=mysqli_real_escape_string($db,htmlspecialchars($ligne2['libelle_groupe']));
$id_salle1=mysqli_real_escape_string($db,htmlspecialchars($ligne2['libelle_salle']));
$type1=mysqli_real_escape_string($db,htmlspecialchars($ligne2['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne2['id']));

 
$ligne3=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Dimanche' and heure='11:20-12:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal AND seance.id_gr=groupe.id_groupe and seance.id_sec=section.id_section   and seance.id_gr='$var'     "));
$id_prof3=mysqli_real_escape_string($db,htmlspecialchars($ligne3['nom'].' '.$ligne3['prenom']));
$id_module3=mysqli_real_escape_string($db,htmlspecialchars($ligne3['libelle_module']));
$id_groupe3=mysqli_real_escape_string($db,htmlspecialchars($ligne3['libelle_groupe']));
$id_salle3=mysqli_real_escape_string($db,htmlspecialchars($ligne3['libelle_salle']));
$type3=mysqli_real_escape_string($db,htmlspecialchars($ligne3['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne3['id']));


 $ligne4=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id, nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,groupe.id_groupe,formation.id_formation,section.id_section,id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Dimanche' and heure='13:00-14-30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal AND seance.id_gr=groupe.id_groupe and seance.id_sec=section.id_section  and seance.id_gr='$var'   "));
$id_prof4=mysqli_real_escape_string($db,htmlspecialchars($ligne4['nom'].' '.$ligne4['prenom']));
$id_module4=mysqli_real_escape_string($db,htmlspecialchars($ligne4['libelle_module']));
$id_groupe4=mysqli_real_escape_string($db,htmlspecialchars($ligne4['libelle_groupe']));
$id_salle4=mysqli_real_escape_string($db,htmlspecialchars($ligne4['libelle_salle']));
$type4=mysqli_real_escape_string($db,htmlspecialchars($ligne4['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne4['id']));

 
$ligne5=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,id_groupe,formation.id_formation, id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Dimanche' and heure='14-40-16:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr=groupe.id_groupe and seance.id_for=formation.id_formation  and seance.id_gr='$var' "));
$id_prof5=mysqli_real_escape_string($db,htmlspecialchars($ligne5['nom'].' '.$ligne5['prenom']));
$id_module5=mysqli_real_escape_string($db,htmlspecialchars($ligne5['libelle_module']));
$id_groupe5=mysqli_real_escape_string($db,htmlspecialchars($ligne5['libelle_groupe']));
$id_salle5=mysqli_real_escape_string($db,htmlspecialchars($ligne5['libelle_salle']));
$type5=mysqli_real_escape_string($db,htmlspecialchars($ligne5['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne5['id']));


 
$ligne6=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,id_groupe,formation.id_formation, id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Dimanche' and heure='16:20-17:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr=groupe.id_groupe and seance.id_for=formation.id_formation   and seance.id_gr='$var' "));
$id_prof6=mysqli_real_escape_string($db,htmlspecialchars($ligne6['nom'].' '.$ligne6['prenom']));
$id_module6=mysqli_real_escape_string($db,htmlspecialchars($ligne6['libelle_module']));
$id_groupe6=mysqli_real_escape_string($db,htmlspecialchars($ligne6['libelle_groupe']));
$id_salle6=mysqli_real_escape_string($db,htmlspecialchars($ligne6['libelle_salle']));
$type6=mysqli_real_escape_string($db,htmlspecialchars($ligne6['type'])); 
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne6['id']));

// fin dimanche

//debut de lundi
$ligne7=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Lundi' and heure='08:00-09:30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal and seance.id_gr='$var'   "));

$id_prof7=mysqli_real_escape_string($db,htmlspecialchars($ligne7['nom'].' '.$ligne7['prenom']));
$id_module7=mysqli_real_escape_string($db,htmlspecialchars($ligne7['libelle_module']));
$id_groupe7=mysqli_real_escape_string($db,htmlspecialchars($ligne7['libelle_groupe']));
$id_salle7=mysqli_real_escape_string($db,htmlspecialchars($ligne7['libelle_salle']));
$type7=mysqli_real_escape_string($db,htmlspecialchars($ligne7['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne7['id']));


$ligne8=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Lundi' and heure='09:40-11:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal and seance.id_gr='$var'    "));

$id_prof8=mysqli_real_escape_string($db,htmlspecialchars($ligne8['nom'].' '.$ligne8['prenom']));
$id_module8=mysqli_real_escape_string($db,htmlspecialchars($ligne8['libelle_module']));
$id_groupe8=mysqli_real_escape_string($db,htmlspecialchars($ligne8['libelle_groupe']));
$id_salle8=mysqli_real_escape_string($db,htmlspecialchars($ligne8['libelle_salle']));
$type8=mysqli_real_escape_string($db,htmlspecialchars($ligne8['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne8['id']));


$ligne9=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Lundi' and heure='11:20-12:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  and seance.id_gr='$var'  "));

$id_prof9=mysqli_real_escape_string($db,htmlspecialchars($ligne9['nom'].' '.$ligne9['prenom']));
$id_module9=mysqli_real_escape_string($db,htmlspecialchars($ligne9['libelle_module']));
$id_groupe9=mysqli_real_escape_string($db,htmlspecialchars($ligne9['libelle_groupe']));
$id_salle9=mysqli_real_escape_string($db,htmlspecialchars($ligne9['libelle_salle']));
$type9=mysqli_real_escape_string($db,htmlspecialchars($ligne9['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne9['id']));


$ligne10=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Lundi' and heure='13:00-14-30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal and seance.id_gr='$var'   "));

$id_prof10=mysqli_real_escape_string($db,htmlspecialchars($ligne10['nom'].' '.$ligne10['prenom']));
$id_module10=mysqli_real_escape_string($db,htmlspecialchars($ligne10['libelle_module']));
$id_groupe10=mysqli_real_escape_string($db,htmlspecialchars($ligne10['libelle_groupe']));
$id_salle10=mysqli_real_escape_string($db,htmlspecialchars($ligne10['libelle_salle']));
$type10=mysqli_real_escape_string($db,htmlspecialchars($ligne10['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne10['id']));

$ligne11=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Lundi' and heure='14-40-16:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal and seance.id_gr='$var'  "));

$id_prof11=mysqli_real_escape_string($db,htmlspecialchars($ligne11['nom'].' '.$ligne11['prenom']));
$id_module11=mysqli_real_escape_string($db,htmlspecialchars($ligne11['libelle_module']));
$id_groupe11=mysqli_real_escape_string($db,htmlspecialchars($ligne11['libelle_groupe']));
$id_salle11=mysqli_real_escape_string($db,htmlspecialchars($ligne11['libelle_salle']));
$type11=mysqli_real_escape_string($db,htmlspecialchars($ligne11['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne11['id']));

$ligne12=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Lundi' and heure='16:20-17:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal and seance.id_gr='$var'   "));

$id_prof12=mysqli_real_escape_string($db,htmlspecialchars($ligne12['nom'].' '.$ligne12['prenom']));
$id_module12=mysqli_real_escape_string($db,htmlspecialchars($ligne12['libelle_module']));
$id_groupe12=mysqli_real_escape_string($db,htmlspecialchars($ligne12['libelle_groupe']));
$id_salle12=mysqli_real_escape_string($db,htmlspecialchars($ligne12['libelle_salle']));
$type12=mysqli_real_escape_string($db,htmlspecialchars($ligne12['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne12['id']));
//fin Lundi
//debut mardi
$ligne13=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT id,nom ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mardi' and heure='08:00-09:30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof13=mysqli_real_escape_string($db,htmlspecialchars($ligne13['nom'].' '.$ligne13['prenom']));
$id_module13=mysqli_real_escape_string($db,htmlspecialchars($ligne13['libelle_module']));
$id_groupe13=mysqli_real_escape_string($db,htmlspecialchars($ligne13['libelle_groupe']));
$id_salle13=mysqli_real_escape_string($db,htmlspecialchars($ligne13['libelle_salle']));
$type13=mysqli_real_escape_string($db,htmlspecialchars($ligne13['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne13['id']));

$ligne14=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mardi' and heure='09:40-11:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof14=mysqli_real_escape_string($db,htmlspecialchars($ligne14['nom'].' '.$ligne14['prenom']));
$id_module14=mysqli_real_escape_string($db,htmlspecialchars($ligne14['libelle_module']));
$id_groupe14=mysqli_real_escape_string($db,htmlspecialchars($ligne14['libelle_groupe']));
$id_salle14=mysqli_real_escape_string($db,htmlspecialchars($ligne14['libelle_salle']));
$type14=mysqli_real_escape_string($db,htmlspecialchars($ligne14['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne14['id']));


$ligne15=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mardi' and heure='11:20-12:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof15=mysqli_real_escape_string($db,htmlspecialchars($ligne15['nom'].' '.$ligne15['prenom']));
$id_module15=mysqli_real_escape_string($db,htmlspecialchars($ligne15['libelle_module']));
$id_groupe15=mysqli_real_escape_string($db,htmlspecialchars($ligne15['libelle_groupe']));
$id_salle15=mysqli_real_escape_string($db,htmlspecialchars($ligne15['libelle_salle']));
$type15=mysqli_real_escape_string($db,htmlspecialchars($ligne15['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne15['id']));


$ligne16=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mardi' and heure='13:00-14-30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var'"));

$id_prof16=mysqli_real_escape_string($db,htmlspecialchars($ligne16['nom'].' '.$ligne16['prenom']));
$id_module16=mysqli_real_escape_string($db,htmlspecialchars($ligne16['libelle_module']));
$id_groupe16=mysqli_real_escape_string($db,htmlspecialchars($ligne16['libelle_groupe']));
$id_salle16=mysqli_real_escape_string($db,htmlspecialchars($ligne16['libelle_salle']));
$type16=mysqli_real_escape_string($db,htmlspecialchars($ligne16['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne16['id']));


$ligne17=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mardi' and heure='14-40-16:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof17=mysqli_real_escape_string($db,htmlspecialchars($ligne17['nom'].' '.$ligne17['prenom']));
$id_module17=mysqli_real_escape_string($db,htmlspecialchars($ligne17['libelle_module']));
$id_groupe17=mysqli_real_escape_string($db,htmlspecialchars($ligne17['libelle_groupe']));
$id_salle17=mysqli_real_escape_string($db,htmlspecialchars($ligne17['libelle_salle']));
$type17=mysqli_real_escape_string($db,htmlspecialchars($ligne17['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne17['id']));

$ligne18=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mardi' and heure='16:20-17:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof18=mysqli_real_escape_string($db,htmlspecialchars($ligne18['nom'].' '.$ligne18['prenom']));
$id_module18=mysqli_real_escape_string($db,htmlspecialchars($ligne18['libelle_module']));
$id_groupe18=mysqli_real_escape_string($db,htmlspecialchars($ligne18['libelle_groupe']));
$id_salle18=mysqli_real_escape_string($db,htmlspecialchars($ligne18['libelle_salle']));
$type18=mysqli_real_escape_string($db,htmlspecialchars($ligne18['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne18['id']));

//fin mardi
//debut mercredi
$ligne19=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mercredi' and heure='08:00-09:30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr='$var'"));

$id_prof19=mysqli_real_escape_string($db,htmlspecialchars($ligne19['nom'].' '.$ligne19['prenom']));
$id_module19=mysqli_real_escape_string($db,htmlspecialchars($ligne19['libelle_module']));
$id_groupe19=mysqli_real_escape_string($db,htmlspecialchars($ligne19['libelle_groupe']));
$id_salle19=mysqli_real_escape_string($db,htmlspecialchars($ligne19['libelle_salle']));
$type19=mysqli_real_escape_string($db,htmlspecialchars($ligne19['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne19['id']));


$ligne20=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mercredi' and heure='09:40-11:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr='$var'"));

$id_prof20=mysqli_real_escape_string($db,htmlspecialchars($ligne20['nom'].' '.$ligne20['prenom']));
$id_module20=mysqli_real_escape_string($db,htmlspecialchars($ligne20['libelle_module']));
$id_groupe20=mysqli_real_escape_string($db,htmlspecialchars($ligne20['libelle_groupe']));
$id_salle20=mysqli_real_escape_string($db,htmlspecialchars($ligne20['libelle_salle']));
$type20=mysqli_real_escape_string($db,htmlspecialchars($ligne20['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne20['id']));

$ligne21=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mercredi' and heure='11:20-12:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr='$var'"));

$id_prof21=mysqli_real_escape_string($db,htmlspecialchars($ligne21['nom'].' '.$ligne21['prenom']));
$id_module21=mysqli_real_escape_string($db,htmlspecialchars($ligne21['libelle_module']));
$id_groupe21=mysqli_real_escape_string($db,htmlspecialchars($ligne21['libelle_groupe']));
$id_salle21=mysqli_real_escape_string($db,htmlspecialchars($ligne21['libelle_salle']));
$type21=mysqli_real_escape_string($db,htmlspecialchars($ligne21['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne21['id']));

$ligne22=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mercredi' and heure='13:00-14-30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr='$var' "));

$id_prof22=mysqli_real_escape_string($db,htmlspecialchars($ligne22['nom'].' '.$ligne22['prenom']));
$id_module22=mysqli_real_escape_string($db,htmlspecialchars($ligne22['libelle_module']));
$id_groupe22=mysqli_real_escape_string($db,htmlspecialchars($ligne22['libelle_groupe']));
$id_salle22=mysqli_real_escape_string($db,htmlspecialchars($ligne22['libelle_salle']));
$type22=mysqli_real_escape_string($db,htmlspecialchars($ligne22['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne22['id']));

$ligne23=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mercredi' and heure='14-40-16:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr='$var' "));

$id_prof23=mysqli_real_escape_string($db,htmlspecialchars($ligne23['nom'].' '.$ligne23['prenom']));
$id_module23=mysqli_real_escape_string($db,htmlspecialchars($ligne23['libelle_module']));
$id_groupe23=mysqli_real_escape_string($db,htmlspecialchars($ligne23['libelle_groupe']));
$id_salle23=mysqli_real_escape_string($db,htmlspecialchars($ligne23['libelle_salle']));
$type23=mysqli_real_escape_string($db,htmlspecialchars($ligne23['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne23['id']));

$ligne24=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Mercredi' and heure='16:20-17:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal   AND seance.id_gr='$var'"));

$id_prof24=mysqli_real_escape_string($db,htmlspecialchars($ligne24['nom'].' '.$ligne24['prenom']));
$id_module24=mysqli_real_escape_string($db,htmlspecialchars($ligne24['libelle_module']));
$id_groupe24=mysqli_real_escape_string($db,htmlspecialchars($ligne24['libelle_groupe']));
$id_salle24=mysqli_real_escape_string($db,htmlspecialchars($ligne24['libelle_salle']));
$type24=mysqli_real_escape_string($db,htmlspecialchars($ligne24['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne24['id']));
//fin mecredi
//debut jeudi
$ligne25=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Jeudi' and heure='08:00-09:30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof25=mysqli_real_escape_string($db,htmlspecialchars($ligne25['nom'].' '.$ligne25['prenom']));
$id_module25=mysqli_real_escape_string($db,htmlspecialchars($ligne25['libelle_module']));
$id_groupe25=mysqli_real_escape_string($db,htmlspecialchars($ligne25['libelle_groupe']));
$id_salle25=mysqli_real_escape_string($db,htmlspecialchars($ligne25['libelle_salle']));
$type25=mysqli_real_escape_string($db,htmlspecialchars($ligne25['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne25['id']));

$ligne26=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Jeudi' and heure='09:40-11:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof26=mysqli_real_escape_string($db,htmlspecialchars($ligne26['nom'].' '.$ligne26['prenom']));
$id_module26=mysqli_real_escape_string($db,htmlspecialchars($ligne26['libelle_module']));
$id_groupe26=mysqli_real_escape_string($db,htmlspecialchars($ligne26['libelle_groupe']));
$id_salle26=mysqli_real_escape_string($db,htmlspecialchars($ligne26['libelle_salle']));
$type26=mysqli_real_escape_string($db,htmlspecialchars($ligne26['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne26['id']));

$ligne27=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Jeudi' and heure='11:20-12:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var'"));

$id_prof27=mysqli_real_escape_string($db,htmlspecialchars($ligne27['nom'].' '.$ligne27['prenom']));
$id_module27=mysqli_real_escape_string($db,htmlspecialchars($ligne27['libelle_module']));
$id_groupe27=mysqli_real_escape_string($db,htmlspecialchars($ligne27['libelle_groupe']));
$id_salle27=mysqli_real_escape_string($db,htmlspecialchars($ligne27['libelle_salle']));
$type27=mysqli_real_escape_string($db,htmlspecialchars($ligne27['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne27['id']));

$ligne28=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Jeudi' and heure='13:00-14-30'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof28=mysqli_real_escape_string($db,htmlspecialchars($ligne28['nom'].' '.$ligne28['prenom']));
$id_module28=mysqli_real_escape_string($db,htmlspecialchars($ligne28['libelle_module']));
$id_groupe28=mysqli_real_escape_string($db,htmlspecialchars($ligne28['libelle_groupe']));
$id_salle28=mysqli_real_escape_string($db,htmlspecialchars($ligne28['libelle_salle']));
$type28=mysqli_real_escape_string($db,htmlspecialchars($ligne28['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne28['id']));

$ligne29=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Jeudi' and heure='14-40-16:10'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof29=mysqli_real_escape_string($db,htmlspecialchars($ligne29['nom'].' '.$ligne29['prenom']));
$id_module29=mysqli_real_escape_string($db,htmlspecialchars($ligne29['libelle_module']));
$id_groupe29=mysqli_real_escape_string($db,htmlspecialchars($ligne29['libelle_groupe']));
$id_salle29=mysqli_real_escape_string($db,htmlspecialchars($ligne29['libelle_salle']));
$type29=mysqli_real_escape_string($db,htmlspecialchars($ligne29['type']));
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne29['id']));

$ligne30=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT nom,id ,id_prof, prenom,libelle_module, libelle_groupe,libelle_salle,id_for,id_sem,
 id_gr,id_pr,id_mod,id_sal,id_sec,seance.type as type,heure,jour
FROM prof, seance,section, groupe, formation, module,salle, semestre where jour='Jeudi' and heure='16:20-17:50'  and seance.id_pr=prof.id_prof and module.id_module=seance.id_mod and groupe.id_groupe=seance.id_gr and salle.id_salle=seance.id_sal  AND seance.id_gr='$var' "));

$id_prof30=mysqli_real_escape_string($db,htmlspecialchars($ligne30['nom'].' '.$ligne30['prenom']));
$id_module30=mysqli_real_escape_string($db,htmlspecialchars($ligne30['libelle_module']));
$id_groupe30=mysqli_real_escape_string($db,htmlspecialchars($ligne30['libelle_groupe']));
$id_salle30=mysqli_real_escape_string($db,htmlspecialchars($ligne30['libelle_salle']));
$type30=mysqli_real_escape_string($db,htmlspecialchars($ligne30['type'])); 
$id=mysqli_real_escape_string($db,htmlspecialchars($ligne30['id']));

//fin de jeudi
 ?>
 <div class="container" style="margin-bottom: 90px">
 <center>
  <div class="table-responsive-md">
<table class="table table-dark table-hover table-bordered table-responsive-md table-striped" width="130%" style="font-size: 12px; text-align: center;">
<thead>
  <tr style="font-size: 15px;">
   <th></th>
    <th >08:00-09:30</th>
    <th style="height:25px;font-weight:bold;">09:40-11:10</th>
    <th style="height:25px;font-weight:bold;">11:20-12:50</th>
    <th style="height:25px;font-weight:bold;">13:00-14-30</th>
    <th style="height:25px;font-weight:bold;">14-40-16:10</th>
    <th style="height:25px;font-weight:bold;">16:20-17:50</th>
  </tr></thead>
  
  
  <tr>
      <th>Lundi</th>
    <td>         
    <label><?php if( $type7 == true) {  echo '<b>Module :</b> '.$id_module7;}; ?></label> 
 <br/>  
    <label><?php if( $type7== true){ echo '<b>Prof :</b> '.$id_prof7;}; ?></label>      
 <br/>
    <label><?php if( $type7 == true){ echo '<b>Type :</b> '.$type7;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type7 == true){ echo '<b>Salle :</b> '.$id_salle7; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne7['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne7['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
     
   <td><label><?php if( $type8 == true) {  echo '<b>Module :</b> '.$id_module8;}; ?></label> 
 <br/>    
    <label><?php if( $type8== true){ echo '<b>Prof :</b> '.$id_prof8;}; ?></label>     
 <br/>
    <label><?php if( $type8 == true){ echo '<b>Type :</b> '.$type8;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type8 == true){ echo '<b>Salle :</b> '.$id_salle8; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne8['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne8['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
   <td><label><?php if( $type9 == true) {  echo '<b>Module :</b> '.$id_module9;}; ?></label> 
 <br/>  
    <label><?php if( $type9 == true){ echo '<b>Prof :</b> '.$id_prof9;}; ?></label>      
 <br/>
    <label><?php if( $type9 == true){ echo '<b>Type :</b> '.$type9;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type9 == true){ echo '<b>Salle :</b> '.$id_salle9; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne9['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne9['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
   <td ><label><?php if( $type10 == true) {  echo '<b>Module :</b> '.$id_module10;}; ?></label> 
 <br/> 
    <label><?php if( $type10 == true){ echo '<b>Prof :</b> '.$id_prof10;}; ?></label>       
 <br/>
    <label><?php if( $type10 == true){ echo '<b>Type :</b> '.$type10;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type10 == true){ echo '<b>Salle :</b> '.$id_salle10; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne10['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne10['id'];?>" class="btn btn-danger"> supprimer</a>
    </td><?php } ?>
     
   <td><label><?php if( $type11 == true) {  echo '<b>Module :</b> '.$id_module11;}; ?></label> 
 <br/>    
    <label><?php if( $type11 == true){ echo '<b>Prof :</b> '.$id_prof11;}; ?></label>   
 <br/>
    <label><?php if( $type11 == true){ echo '<b>Type :</b> '.$type11;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type11 == true){ echo '<b>Salle :</b> '.$id_salle11; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne11['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne11['id'];?>" class="btn btn-danger"> supprimer</a>
     </td><?php } ?>
     
     <td><label><?php if( $type12 == true) {  echo '<b>Module :</b> '.$id_module12;}; ?></label> 
 <br/>   
    <label><?php if( $type12 == true){ echo '<b>Prof :</b> '.$id_prof12;}; ?></label>     
 <br/>
    <label><?php if( $type12 == true){ echo '<b>Type :</b> '.$type12;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type12 == true){ echo '<b>Salle :</b> '.$id_salle12; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne12['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne12['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?>
  </tr>
  
  <tr>
    <th >Mardi</th>
    
   <td><label><?php if( $type13 == true) {  echo '<b>Module :</b> '.$id_module13;}; ?></label> 
 <br/>      
    <label><?php if( $type13 == true){ echo '<b>Prof :</b> '.$id_prof13;}; ?></label> 
 <br/>
    <label><?php if( $type13 == true){ echo '<b>Type :</b> '.$type13;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type13 == true){ echo '<b>Salle :</b> '.$id_salle13; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne13['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne13['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type14 == true) {  echo '<b>Module :</b> '.$id_module14;}; ?></label> 
 <br/>    
    <label><?php if( $type14 == true){ echo '<b>Prof :</b> '.$id_prof14;}; ?></label>   
 <br/>
    <label><?php if( $type14 == true){ echo '<b>Type :</b> '.$type14;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type14 == true){ echo '<b>Salle :</b> '.$id_salle14; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne14['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne14['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type15 == true) {  echo '<b>Module :</b> '.$id_module15;}; ?></label> 
 <br/>       
    <label><?php if( $type15 == true){ echo '<b>Type :</b> '.$type15;}; ?></label> 
 <br/>
   <label><?php if( $type15 == true){ echo '<b>Prof :</b> '.$id_prof15;}; ?></label>  
&nbsp;&nbsp;
    <label><?php if( $type15 == true){ echo '<b>Salle :</b> '.$id_salle15; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne15['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne15['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
      
    <td > <label><?php if( $type16 == true) {  echo '<b>Module :</b> '.$id_module16;}; ?></label> 
 <br/> 
    <label><?php if( $type16 == true){ echo '<b>Prof :</b> '.$id_prof16;}; ?></label>      
 <br/>
    <label><?php if( $type16 == true){ echo '<b>Type :</b> '.$type16;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type16 == true){ echo '<b>Salle :</b> '.$id_salle16; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne16['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne16['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
      
    <td><label><?php if( $type17 == true) {  echo '<b>Module :</b> '.$id_module17;}; ?></label> 
 <br/>    
    <label><?php if( $type17 == true){ echo '<b>Prof :</b> '.$id_prof17;}; ?></label>    
 <br/>
    <label><?php if( $type17 == true){ echo '<b>Type :</b> '.$type17;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type17 == true){ echo '<b>Salle :</b> '.$id_salle17; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne17['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne17['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
  
  <td><label><?php if( $type18 == true) {  echo '<b>Module :</b> '.$id_module18;}; ?></label> 
 <br/>   
    <label><?php if( $type18 == true){ echo '<b>Prof :</b> '.$id_prof18;}; ?></label>     
 <br/>
    <label><?php if( $type18 == true){ echo '<b>Type :</b> '.$type18;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type18 == true){ echo '<b>Salle :</b> '.$id_salle18; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne18['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne18['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?>
  </tr>
  
  <tr>
    <th >Mercredi</th>
    <td><label><?php if( $type19 == true) {  echo '<b>Module :</b> '.$id_module19;}; ?></label> 
 <br/>  
    <label><?php if( $type19 == true){ echo '<b>Prof :</b> '.$id_prof19;}; ?></label>      
 <br/>
    <label><?php if( $type19 == true){ echo '<b>Type :</b> '.$type19;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type19 == true){ echo '<b>Salle :</b> '.$id_salle19; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne19['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne19['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type20 == true) {  echo '<b>Module :</b> '.$id_module20;}; ?></label> 
 <br/>     
    <label><?php if( $type20 == true){ echo '<b>Prof :</b> '.$id_prof20;}; ?></label>  
 <br/>
    <label><?php if( $type20 == true){ echo '<b>Type :</b> '.$type20;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type20 == true){ echo '<b>Salle :</b> '.$id_salle20; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne20['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne20['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?>
     
   <td><label><?php if( $type21 == true) {  echo '<b>Module :</b> '.$id_module21;}; ?></label> 
 <br/>       
    <label><?php if( $type21 == true){ echo '<b>Prof :</b> '.$id_prof21;}; ?></label> 
 <br/>
    <label><?php if( $type21 == true){ echo '<b>Type :</b> '.$type21;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type21 == true){ echo '<b>Salle :</b> '.$id_salle21; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne21['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne21['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type22 == true) {  echo '<b>Module :</b> '.$id_module22;}; ?></label> 
 <br/>  
    <label><?php if( $type22 == true){ echo '<b>Prof :</b> '.$id_prof22;}; ?></label>       
 <br/>
   <label><?php if( $type22 == true){ echo '<b>Type :</b> '.$type22;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type22 == true){ echo '<b>Salle :</b> '.$id_salle22; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne22['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne22['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type23 == true) {  echo '<b>Module :</b> '.$id_module23;}; ?></label> 
 <br/>       
    <label><?php if( $type23 == true){ echo '<b>Prof :</b> '.$id_prof23;}; ?></label>
 <br/>
    <label><?php if( $type23 == true){ echo '<b>Type :</b> '.$type23;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type23 == true){ echo '<b>Salle :</b> '.$id_salle23; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne23['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne23['id'];?>" class="btn btn-danger"> supprimer</a>
     </td><?php } ?>
     
     <td><label><?php if( $type24 == true) {  echo '<b>Module :</b> '.$id_module24;}; ?></label> 
 <br/>       
    <label><?php if( $type24 == true){ echo '<b>Prof :</b> '.$id_prof24;}; ?></label> 
 <br/>
    <label><?php if( $type24 == true){ echo '<b>Type :</b> '.$type24;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type24 == true){ echo '<b>Salle :</b> '.$id_salle24; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne24['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne24['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
  
  </tr>
  <tr>
    <th >Jeudi</th>
   <td><label><?php if( $type25 == true) {  echo '<b>Module :</b> '.$id_module25;}; ?></label> 
 <br/>  
    <label><?php if( $type25 == true){ echo '<b>Prof :</b> '.$id_prof25;}; ?></label>      
 <br/>
    <label><?php if( $type25 == true){ echo '<b>Type :</b> '.$type25;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type25 == true){ echo '<b>Salle :</b> '.$id_salle25; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne25['id'];?>" class="btn btn-warning"  > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne25['id'];?>" class="btn btn-danger"> supprimer</a>
    </td><?php } ?>
      
    <td><label><?php if( $type26 == true) {  echo '<b>Module :</b> '.$id_module26;}; ?></label> 
 <br/>    
    <label><?php if( $type26 == true){ echo '<b>Prof :</b> '.$id_prof26;}; ?></label>     
 <br/>
   <label><?php if( $type26 == true){ echo '<b>Type :</b> '.$type26;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type26 == true){ echo '<b>Salle :</b> '.$id_salle26; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne26['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne26['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type27 == true) {  echo '<b>Module :</b> '.$id_module27;}; ?></label> 
 <br/>      
    <label><?php if( $type27 == true){ echo '<b>Prof :</b> '.$id_prof27;}; ?></label>  
 <br/>
    <label><?php if( $type27 == true){ echo '<b>Type :</b> '.$type27;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type27 == true){ echo '<b>Salle :</b> '.$id_salle27; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne27['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne27['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
   <td><label><?php if( $type28 == true) {  echo '<b>Module :</b> '.$id_module28;}; ?></label> 
 <br/>  
    <label><?php if( $type28 == true){ echo '<b>Prof :</b> '.$id_prof28;}; ?></label>      
 <br/>
    <label><?php if( $type28 == true){ echo '<b>Type :</b> '.$type28;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type28 == true){ echo '<b>Salle :</b> '.$id_salle28; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne28['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne28['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
    <td><label><?php if( $type29 == true) {  echo '<b>Module :</b> '.$id_module29;}; ?></label> 
 <br/> 
    <label><?php if( $type29 == true){ echo '<b>Prof :</b> '.$id_prof29;}; ?></label>        
 <br/>
   <label><?php if( $type29 == true){ echo '<b>Type :</b> '.$type29;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type29 == true){ echo '<b>Salle :</b> '.$id_salle29; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne29['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne29['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
     
 <td><label><?php if( $type30 == true) {  echo '<b>Module :</b> '.$id_module30;}; ?></label> 
 <br/> 
    <label><?php if( $type30 == true){ echo '<b>Prof :</b> '.$id_prof30;}; ?></label>        
 <br/>
   <label><?php if( $type30 == true){ echo '<b>Type :</b> '.$type30;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type30 == true){ echo '<b>Salle :</b> '.$id_salle30; ?></label>
    <br/><a href="modifier.php?id=<?php echo $ligne30['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne30['id'];?>" class="btn btn-danger"> supprimer</a>
      </td><?php } ?>
  </tr>
  <tr>
    <th >Vendredi</th>
  
     <td>           
    <label><?php if( $type == true){  echo '<b>Module :</b> '.$id_module;}; ?></label> 
 <br/>     
    <label><?php if( $type == true){ echo '<b>Prof :</b> '.$id_prof;}; ?></label>  
 <br/>
    <label><?php if( $type == true ){ echo '<b>Type :</b> '.$type;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type == true){ echo '<b>Salle :</b> '.$id_salle; ?></label> 
<br/><a href="modifier.php?id=<?php echo $ligne['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;
<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne['id'];?>" class="btn btn-danger"> supprimer</a></td>
      <?php } ?>

    
  <td>         
    <label><?php if( $type1 == true) {  echo '<b>Module :</b> '.$id_module1;}; ?></label> 
 <br/>  
    <label><?php if( $type1 == true){ echo '<b>Prof :</b> '.$id_prof1;}; ?></label>     
 <br/>
     <label><?php if( $type1 == true){ echo '<b>Type :</b> '.$type1;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type1 == true){ echo '<b>Salle :</b> '.$id_salle1; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne2['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;
    <a href="modifier_emploi_du_temps.php?id=<?php echo $ligne2['id'];?>" class="btn btn-danger"> supprimer</a>
          <?php } ?>

</td> 
     
   <td>         
    <label><?php if( $type3== true) {  echo '<b>Module :</b> '.$id_module3;}; ?></label> 
 <br/>     
    <label><?php if( $type3 == true){ echo '<b>Prof :</b> '.$id_prof3;}; ?></label>   
 <br/>
    <label><?php if( $type3 == true){ echo '<b>Type :</b> '.$type3;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type3 == true){ echo '<b>Salle :</b> '.$id_salle3; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne3['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;
    <a href="modifier_emploi_du_temps.php?id=<?php echo $ligne3['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
     
    <td >         
    <label><?php if( $type4 == true) {  echo '<b>Module :</b> '.$id_module4;}; ?></label> 
 <br/>      
    <label><?php if( $type4 == true){ echo '<b>Prof :</b> '.$id_prof4;}; ?></label>  
 <br/>
     <label><?php if( $type4 == true){ echo '<b>Type :</b> '.$type4;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type4 == true){ echo '<b>Salle :</b> '.$id_salle4; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne4['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne4['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
    <td>         
    <label><?php if( $type5 == true) {  echo '<b>Module :</b> '.$id_module5;}; ?></label> 
 <br/>  
    <label><?php if( $type5 == true){ echo '<b>Prof :</b> '.$id_prof5;}; ?></label>       
 <br/>
    <label><?php if( $type5 == true){ echo '<b>Type :</b> '.$type5;}; ?></label>
&nbsp;&nbsp;
    <label><?php if( $type5 == true){ echo '<b>Salle :</b> '.$id_salle5; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne5['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne5['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
     <td>         
    <label><?php if( $type6 == true) {  echo '<b>Module :</b> '.$id_module6;}; ?></label> 
 <br/>  
    <label><?php if( $type6 == true){ echo '<b>Prof :</b> '.$id_prof6;}; ?></label>     
 <br/>
    <label><?php if( $type6 == true){ echo '<b>Type :</b> '.$type6;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type6 == true){ echo '<b>Salle :</b> '.$id_salle6; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne6['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne6['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
    </tr>
    <tr>
    <th>Samedi</th>
  
     <td>           
    <label><?php if( $type31 == true){  echo '<b>Module :</b> '.$id_module31;}; ?></label> 
 <br/>  
    <label><?php if( $type31 == true){ echo '<b>Prof :</b> '.$id_prof31;}; ?></label>       
 <br/>
   <label><?php if( $type31 == true ){ echo '<b>Type :</b> '.$type31;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type31 == true){ echo '<b>Salle :</b> '.$id_salle31; ?></label> 
<br/><a href="modifier.php?id=<?php echo $ligne31['id'];?>" class="btn btn-warning" > Modifier
    </a>&nbsp;
<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne31['id'];?>" class="btn btn-danger"> supprimer</a></td>
      <?php } ?>

    
  <td>         
    <label><?php if( $type32 == true) {  echo '<b>Module :</b> '.$id_module32;}; ?></label> 
 <br/>   
    <label><?php if( $type32 == true){ echo '<b>Prof :</b> '.$id_prof32;}; ?></label>        
 <br/>
    <label><?php if( $type32 == true){ echo '<b>Type :</b> '.$type32;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type32 == true){ echo '<b>Salle :</b> '.$id_salle32; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne32['id'];?>" class="btn btn-warning" > Modifier
        </a>&nbsp;
    <a href="modifier_emploi_du_temps.php?id=<?php echo $ligne32['id'];?>" class="btn btn-danger"> supprimer</a>
          <?php } ?>

</td> 
     
   <td>         
    <label><?php if( $type33== true) {  echo '<b>Module :</b> '.$id_module33;}; ?></label> 
 <br/>       
    <label><?php if( $type33 == true){ echo '<b>Prof :</b> '.$id_prof33;}; ?></label>     
 <br/>
   <label><?php if( $type33 == true){ echo '<b>Type :</b> '.$type33;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type33 == true){ echo '<b>Salle :</b> '.$id_salle33; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne33['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;
    <a href="modifier_emploi_du_temps.php?id=<?php echo $ligne33['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
     
    <td >         
    <label><?php if( $type34 == true) {  echo '<b>Module :</b> '.$id_module34;}; ?></label> 
 <br/>    
    <label><?php if( $type34 == true){ echo '<b>Prof :</b> '.$id_prof34;}; ?></label>   
 <br/>
    <label><?php if( $type34 == true){ echo '<b>Type :</b> '.$type34;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type34 == true){ echo '<b>Salle :</b> '.$id_salle34; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne34['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne34['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
    <td>         
    <label><?php if( $type35 == true) {  echo '<b>Module :</b> '.$id_module35;}; ?></label> 
 <br/> 
    <label><?php if( $type35 == true){ echo '<b>Prof :</b> '.$id_prof35;}; ?></label>       
 <br/>
    <label><?php if( $type35 == true){ echo '<b>Type :</b> '.$type35;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type35 == true){ echo '<b>Salle :</b> '.$id_salle35; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne35['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne35['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
     <td>         
    <label><?php if( $type36 == true) {  echo '<b>Module :</b> '.$id_module36;}; ?></label> 
 <br/>    
    <label><?php if( $type36 == true){ echo '<b>Prof :</b> '.$id_prof36;}; ?></label>   
 <br/>
    <label><?php if( $type36 == true){ echo '<b>Type :</b> '.$type36;}; ?></label> 
&nbsp;&nbsp;
    <label><?php if( $type36 == true){ echo '<b>Salle :</b> '.$id_salle36; ?></label> 
    <br/><a href="modifier.php?id=<?php echo $ligne36['id'];?>" class="btn btn-warning" > Modifier</a>&nbsp;<a href="modifier_emploi_du_temps.php?id=<?php echo $ligne36['id'];?>" class="btn btn-danger"> supprimer</a>
</td><?php } ?> 
    </tr>
   
</table>
</div>
</center>
</div>
<?php   } ?>
</body>  
</html>
