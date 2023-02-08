<?php 
include("menu_principale2.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
$donnee=mysqli_query($db,"select distinct nom_formation from formation");
$data1=mysqli_query($db,"select  distinct libelle_semestre from semestre");
if(isset($_GET['id_section']))
{
$id_section=$_GET['id_section'];
$var=$id_section;
$ligne1=mysqli_fetch_array(mysqli_query($db,"SELECT libelle_module, groupe.id_groupe AS id_groupe, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, section.id_section, seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_sec = section.id_section
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
AND section.id_section =$var"));

$formation=mysqli_real_escape_string($db,htmlspecialchars($ligne1['formation']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($ligne1['semestre']));
$lib_sec=mysqli_real_escape_string($db,htmlspecialchars($ligne1['lib_sec']));
$session=mysqli_real_escape_string($db,htmlspecialchars($ligne1['session']));
$libelle_groupe=mysqli_real_escape_string($db,htmlspecialchars($ligne1['libelle_groupe']));
?>
<!DOCTYPE html>
<html>
<script language="Javascript">
function imprimer(){
window.print();}
</script>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/IMAGE1.png" type="image/x-icon">
<title>Emploi du Temps de Section</title>
</head>
<body style="background-color: rgb(219,226,226);">
<div class="container" style="margin-bottom: 90px;">
		<!-- en tete caché, visible qu'en impression  -->
    <div class="col-md-12 d-none d-print-block" style="text-align: center;">
      <h3 style="text-transform: uppercase;">Ecole Superieure de technologie FBS</h3>
   
      
    </div>
<!-- centrer le paragraphe  --------------------------->
<div class="row d-print-none">
    <div class="col d-flex justify-content-center">
        <a href="#" value="imprimer" name="imprimer" onClick="imprimer()">
        <img src="image/imprimrer1.png" width='35' height='35'/>
        </a>
    </div>
</div>
<br>
<div class="row">
          <div class="col d-flex justify-content-center">
          	  <h2 style="font-family: monospace;letter-spacing:2px;">Emploi du Temps de Section</h2>
          </div>
</div>
<div class="row">
          <div class="col d-flex justify-content-center">
              <h3 style="font-family: monospace;letter-spacing:2px;">
                FORMATION :<span style="color:#00F"><?php echo $formation;?> </span>&nbsp;&nbsp;   SEMESTRE :<span style="color:#00F"> <?php echo $semestre;?></span> &nbsp;&nbsp;
                SECTION : <span style="color:#00F"><?php echo $lib_sec;?></span>
              </h3>
          </div>
</div>
<br>
<!----------------------------------------------------->   
<?php
$ligne111= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod,id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
and jour = 'Vendredi'
AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne2= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
and jour = 'Vendredi'
AND heure = '09:40-11:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

  $ligne3= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Vendredi'
AND heure = '11:20-12:50'
AND seance.id_pr = prof.id_prof
AND salle.id_salle = seance.id_sal
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
 $ligne4= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Vendredi'
AND heure = '13:00-14-30'
AND seance.id_pr = prof.id_prof
AND salle.id_salle = seance.id_sal
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne5= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Vendredi'
AND heure = '14-40-16:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne6= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
 AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Vendredi'
AND heure = '16:20-17:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
// fin Vendredi //debut de lundi
$ligne7= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Lundi'
AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne8=mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe,formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Lundi'
AND heure = '09:40-11:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne9= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_sec = section.id_section
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Lundi'
AND heure = '11:20-12:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne10= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
 AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Lundi'
AND heure = '13:00-14-30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne11= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Lundi'
AND heure = '14-40-16:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne12= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Lundi'
AND heure = '16:20-17:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
//fin Lundi debut mardi
$ligne13= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mardi'
AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne14= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_sec = section.id_section
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mardi'
AND heure = '09:40-11:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne15= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mardi'
AND heure = '11:20-12:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne16= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mardi'
AND heure = '13:00-14-30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne17= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mardi'
AND heure = '14-40-16:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne18= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mardi'
AND heure = '16:20-17:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
//fin mardi debut mercredi
$ligne19= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mercredi'
AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne20= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mercredi'
AND heure = '09:40-11:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne21= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_sec = section.id_section
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mercredi'
AND heure = '11:20-12:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne22= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mercredi'
AND heure = '13:00-14-30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne23= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mercredi'
AND heure = '14-40-16:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne24= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Mercredi'
AND heure = '16:20-17:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
//fin mecredi debut jeudi
$ligne25= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Jeudi'
AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'") ;

$ligne26= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Jeudi'
AND heure = '09:40-11:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne27= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Jeudi'
AND heure = '11:20-12:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne28= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Jeudi'
AND heure = '13:00-14-30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne29= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Jeudi'
AND heure = '14-40-16:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

$ligne30= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Jeudi'
AND heure = '16:20-17:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'"); 
//fin de jeudi

$ligne31= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod,id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
and jour = 'Samedi'
AND heure = '08:00-09:30'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne32= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
and jour = 'Samedi'
AND heure = '09:40-11:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");

  $ligne33= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec, seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Samedi'
AND heure = '11:20-12:50'
AND seance.id_pr = prof.id_prof
AND salle.id_salle = seance.id_sal
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
 $ligne34= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Samedi'
AND heure = '13:00-14-30'
AND seance.id_pr = prof.id_prof
AND salle.id_salle = seance.id_sal
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne35= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Samedi'
AND heure = '14-40-16:10'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 
$ligne36= mysqli_query($db,"SELECT  prof.id_prof, libelle_salle, id_for, id_sem, groupe.id_groupe, formation.id_formation, section.id_section, id_gr, id_pr, id_mod, id_sal, seance.type AS
type , heure, jour, libelle_module, prof.nom, prof.prenom, module.id_module, formation.nom_formation AS formation, libelle_groupe, semestre.libelle_semestre AS semestre, semestre.session, section.lib_section AS lib_sec,seance.id_sec
FROM groupe, formation, semestre, section, prof, module, enseignement, seance,salle
WHERE formation.id_formation = groupe.id_formation
AND groupe.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND enseignement.id_prof = prof.id_prof
AND enseignement.id_module = module.id_module
AND enseignement.id_formation = formation.id_formation
 AND seance.id_mod = module.id_module
AND seance.id_gr = groupe.id_groupe
and jour = 'Samedi'
AND heure = '16:20-17:50'
AND seance.id_pr = prof.id_prof
AND module.id_module = seance.id_mod
AND groupe.id_groupe = seance.id_gr
AND salle.id_salle = seance.id_sal
AND seance.id_gr = groupe.id_groupe
AND seance.id_sec = section.id_section
AND seance.id_for=formation.id_formation
AND seance.id_sec ='$var'");
 ?>
<table class="table table-dark table-hover table-striped table-bordered table-responsive-md" style="font-size: 13px;">
<thead>
  <tr>
   <th></th>
    <th style="height:25px;font-weight:bold;">08:00-09:30</th>
    <th style="height:25px;font-weight:bold;">09:40-11:10</th>
    <th style="height:25px;font-weight:bold;">11:20-12:50</th>
    <th style="height:25px;font-weight:bold;">13:00-14-30</th>
    <th style="height:25px;font-weight:bold;">14-40-16:10</th>
    <th style="height:25px;font-weight:bold;">16:20-17:50</th>
  </tr></thead>
  <tbody>
 
  
  
  
  <tr>
      <th  style=" height:50px;">Lundi</th>
    <td><?php  
  while($a7= mysqli_fetch_array($ligne7)) {?><br>
<?php if($a7['type'] == true) {  echo '<b>Module: </b>'.$a7['libelle_module'].'('.$a7['type'].')';  }; ?> <br/>
<?php if( $a7['type'] == true){ echo '<b>Prof: </b> '.$a7['nom'].' '.$a7['prenom'];}; ?><br />
<?php if( $a7['type'] == true){ echo '<b>Salle :</b> '.$a7['libelle_salle'];}; ?> <br>
<?php if( $a7['type'] =='Cours') {  echo '<b></b>';} else if( $a7['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a7['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php 
if ( $a7['type'] =='Cours') break;} ?></td>

 <td><?php  
  while($a8= mysqli_fetch_array($ligne8)) {?><br>
<?php if($a8['type'] == true) {  echo '<b>Module: </b>'.$a8['libelle_module'].'('.$a8['type'].')';  }; ?> <br/>
<?php if( $a8['type'] == true){ echo '<b>Prof: </b> '.$a8['nom'].' '.$a8['prenom'];}; ?><br />
<?php if( $a8['type'] == true){ echo '<b>Salle :</b> '.$a8['libelle_salle'];}; ?> <br>
<?php if( $a8['type'] =='Cours') {  echo '<b></b>';} else if( $a8['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a8['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a8['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a9= mysqli_fetch_array($ligne9)) {?><br>
<?php if($a9['type'] == true) {  echo '<b>Module: </b>'.$a9['libelle_module'].'('.$a9['type'].')';  }; ?> <br/>
<?php if( $a9['type'] == true){ echo '<b>Prof: </b> '.$a9['nom'].' '.$a9['prenom'];}; ?><br />
<?php if( $a9['type'] == true){ echo '<b>Salle :</b> '.$a9['libelle_salle'];}; ?> <br>
<?php if( $a9['type'] =='Cours') {  echo '<b></b>';} else if( $a9['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a9['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a9['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a10= mysqli_fetch_array($ligne10)) {?><br>
<?php if($a10['type'] == true) {  echo '<b>Module: </b>'.$a10['libelle_module'].'('.$a10['type'].')';  }; ?> <br/>
<?php if( $a10['type'] == true){ echo '<b>Prof: </b> '.$a10['nom'].' '.$a10['prenom'];}; ?><br />
<?php if( $a10['type'] == true){ echo '<b>Salle :</b> '.$a10['libelle_salle'];}; ?> <br>
<?php if( $a10['type'] =='Cours') {  echo '<b></b>';} else if( $a10['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a10['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a10['type'] =='Cours') break; } ?></td>
     
   <td><?php  
  while($a11= mysqli_fetch_array($ligne11)) {?><br>
<?php if($a11['type'] == true) {  echo '<b>Module: </b>'.$a11['libelle_module'].'('.$a11['type'].')';  }; ?> <br/>
<?php if( $a11['type'] == true){ echo '<b>Prof: </b> '.$a11['nom'].' '.$a11['prenom'];}; ?><br />
<?php if( $a11['type'] == true){ echo '<b>Salle :</b> '.$a11['libelle_salle'];}; ?> <br>
<?php if( $a11['type'] =='Cours') {  echo '<b></b>';} else if( $a11['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a11['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a11['type'] =='Cours') break; } ?></td>

     
     <td><?php  
  while($a12= mysqli_fetch_array($ligne12)) {?><br>
<?php if($a12['type'] == true) {  echo '<b>Module: </b>'.$a12['libelle_module'].'('.$a12['type'].')';  }; ?> <br/>
<?php if( $a12['type'] == true){ echo '<b>Prof: </b> '.$a12['nom'].' '.$a12['prenom'];}; ?><br />
<?php if( $a12['type'] == true){ echo '<b>Salle :</b> '.$a12['libelle_salle'];}; ?><br> 
<?php if( $a12['type'] =='Cours') {  echo '<b></b>';} else if( $a12['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a12['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a12['type'] =='Cours') break; } ?></td>

  </tr>
  
  <tr>
    <th class="mam" style=" height:50px;">Mardi</th>
    <td><?php  
  while($a13= mysqli_fetch_array($ligne13)) {?><br>
<?php if($a13['type'] == true) {  echo '<b>Module: </b>'.$a13['libelle_module'].'('.$a13['type'].')';  }; ?> <br/>
<?php if( $a13['type'] == true){ echo '<b>Prof: </b> '.$a13['nom'].' '.$a13['prenom'];}; ?><br />
<?php if( $a13['type'] == true){ echo '<b>Salle :</b> '.$a13['libelle_salle'];}; ?> <br>
<?php if( $a13['type'] =='Cours') {  echo '<b></b>';} else if( $a13['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a13['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a13['type'] =='Cours') break; } ?></td>

   <td><?php  
  while($a14= mysqli_fetch_array($ligne14)) {?><br>
<?php if($a14['type'] == true) {  echo '<b>Module: </b>'.$a14['libelle_module'].'('.$a14['type'].')';  }; ?> <br/>
<?php if( $a14['type'] == true){ echo '<b>Prof: </b> '.$a14['nom'].' '.$a14['prenom'];}; ?><br />
<?php if( $a14['type'] == true){ echo '<b>Salle :</b> '.$a14['libelle_salle'];}; ?> <br>
<?php if( $a14['type'] =='Cours') {  echo '<b></b>';} else if( $a14['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a14['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a14['type'] =='Cours') break; } ?></td>

      
    <td><?php  
   while($a15= mysqli_fetch_array($ligne15)) {?><br>
<?php if($a15['type'] == true) {  echo '<b>Module: </b>'.$a15['libelle_module'].'('.$a15['type'].')';  }; ?> <br/>
<?php if( $a15['type'] == true){ echo '<b>Prof: </b> '.$a15['nom'].' '.$a15['prenom'];}; ?><br />
<?php if( $a15['type'] == true){ echo '<b>Salle :</b> '.$a15['libelle_salle'];}; ?> <br>
<?php if( $a15['type'] =='Cours') {  echo '<b></b>';} else if( $a15['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a15['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a15['type'] =='Cours') break; } ?></td>
 
    <td><?php  
  while($a16= mysqli_fetch_array($ligne16)) {?><br>
<?php if($a16['type'] == true) {  echo '<b>Module: </b>'.$a16['libelle_module'].'('.$a16['type'].')';  }; ?> <br/>
<?php if( $a16['type'] == true){ echo '<b>Prof: </b> '.$a16['nom'].' '.$a16['prenom'];}; ?><br />
<?php if( $a16['type'] == true){ echo '<b>Salle :</b> '.$a16['libelle_salle'];}; ?> <br>
<?php if( $a16['type'] =='Cours') {  echo '<b></b>';} else if( $a16['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a16['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a16['type'] =='Cours') break; } ?></td>
 
    <td><?php  
  while($a17= mysqli_fetch_array($ligne17)) {?><br>
<?php if($a17['type'] == true) {  echo '<b>Module: </b>'.$a17['libelle_module'].'('.$a17['type'].')';  }; ?> <br/>
<?php if( $a17['type'] == true){ echo '<b>Prof: </b> '.$a17['nom'].' '.$a17['prenom'];}; ?><br />
<?php if( $a17['type'] == true){ echo '<b>Salle :</b> '.$a17['libelle_salle'];}; ?> <br>
<?php if( $a17['type'] =='Cours') {  echo '<b></b>';} else if( $a17['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a17['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a17['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a18= mysqli_fetch_array($ligne18)) {?><br>
<?php if($a18['type'] == true) {  echo '<b>Module: </b>'.$a18['libelle_module'].'('.$a18['type'].')';  }; ?> <br/>
<?php if( $a18['type'] == true){ echo '<b>Prof: </b> '.$a18['nom'].' '.$a18['prenom'];}; ?><br />
<?php if( $a18['type'] == true){ echo '<b>Salle :</b> '.$a18['libelle_salle'];}; ?> <br>
<?php if( $a18['type'] =='Cours') {  echo '<b></b>';} else if( $a18['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a18['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a18['type'] =='Cours') break; } ?></td>
  </tr>
  <tr>
    <th style=" height:50px;"  >Mercredi</th>
    <td><?php  
  while($a19= mysqli_fetch_array($ligne19)) {?><br>
<?php if($a19['type'] == true) {  echo '<b>Module: </b>'.$a19['libelle_module'].'('.$a19['type'].')';  }; ?> <br/>
<?php if( $a19['type'] == true){ echo '<b>Prof: </b> '.$a19['nom'].' '.$a19['prenom'];}; ?><br />
<?php if( $a19['type'] == true){ echo '<b>Salle :</b> '.$a19['libelle_salle'];}; ?> <br>
<?php if( $a19['type'] =='Cours') {  echo '<b></b>';} else if( $a19['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a19['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a19['type'] =='Cours') break; } ?></td>

   <td><?php  
  while($a20= mysqli_fetch_array($ligne20)) {?><br>
<?php if($a20['type'] == true) {  echo '<b>Module: </b>'.$a20['libelle_module'].'('.$a20['type'].')';  }; ?> <br/>
<?php if( $a20['type'] == true){ echo '<b>Prof: </b> '.$a20['nom'].' '.$a20['prenom'];}; ?><br />
<?php if( $a20['type'] == true){ echo '<b>Salle :</b> '.$a20['libelle_salle'];}; ?> <br>
<?php if( $a20['type'] =='Cours') {  echo '<b></b>';} else if( $a20['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a20['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a20['type'] =='Cours') break; } ?></td>

   <td><?php  
  while($a21= mysqli_fetch_array($ligne21)) {?><br>
<?php if($a21['type'] == true) {  echo '<b>Module: </b>'.$a21['libelle_module'].'('.$a21['type'].')';  }; ?> <br/>
<?php if( $a21['type'] == true){ echo '<b>Prof: </b> '.$a21['nom'].' '.$a21['prenom'];}; ?><br />
<?php if( $a21['type'] == true){ echo '<b>Salle :</b> '.$a21['libelle_salle'];}; ?> <br>
<?php if( $a21['type'] =='Cours') {  echo '<b></b>';} else if( $a21['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a21['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a21['type'] =='Cours') break; } ?></td>
   
   <td><?php  
  while($a22= mysqli_fetch_array($ligne22)) {?><br>
<?php if($a22['type'] == true) {  echo '<b>Module: </b>'.$a22['libelle_module'].'('.$a22['type'].')';  }; ?> <br/>
<?php if( $a22['type'] == true){ echo '<b>Prof: </b> '.$a22['nom'].' '.$a22['prenom'];}; ?><br />
<?php if( $a22['type'] == true){ echo '<b>Salle :</b> '.$a22['libelle_salle'];}; ?> <br>
<?php if( $a22['type'] =='Cours') {  echo '<b></b>';} else if( $a22['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a22['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a22['type'] =='Cours') break; } ?></td>

  <td><?php  
  while($a23= mysqli_fetch_array($ligne23)) {?><br>
<?php if($a23['type'] == true) {  echo '<b>Module: </b>'.$a23['libelle_module'].'('.$a23['type'].')';  }; ?> <br/>
<?php if( $a23['type'] == true){ echo '<b>Prof: </b> '.$a23['nom'].' '.$a23['prenom'];}; ?><br />
<?php if( $a23['type'] == true){ echo '<b>Salle :</b> '.$a23['libelle_salle'];}; ?> <br>
<?php if( $a23['type'] =='Cours') {  echo '<b></b>';} else if( $a23['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a23['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a23['type'] =='Cours') break; } ?></td>

    <td><?php  
  while($a24= mysqli_fetch_array($ligne24)) {?><br>
<?php if($a24['type'] == true) {  echo '<b>Module: </b>'.$a24['libelle_module'].'('.$a24['type'].')';  }; ?> <br/>
<?php if( $a24['type'] == true){ echo '<b>Prof: </b> '.$a24['nom'].' '.$a24['prenom'];}; ?><br />
<?php if( $a24['type'] == true){ echo '<b>Salle :</b> '.$a24['libelle_salle'];}; ?> <br>
<?php if( $a24['type'] =='Cours') {  echo '<b></b>';} else if( $a24['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a24['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a24['type'] =='Cours') break; } ?></td>

  </tr>
  <tr>
    <th style=" height:50px;"  >Jeudi</th>
   <td><?php  
  while($a25= mysqli_fetch_array($ligne25)) {?><br>
<?php if($a25['type'] == true) {  echo '<b>Module: </b>'.$a25['libelle_module'].'('.$a25['type'].')';  }; ?> <br/>
<?php if( $a25['type'] == true){ echo '<b>Prof: </b> '.$a25['nom'].' '.$a25['prenom'];}; ?><br />
<?php if( $a25['type'] == true){ echo '<b>Salle :</b> '.$a25['libelle_salle'];}; ?> <br>
<?php if( $a25['type'] =='Cours') {  echo '<b></b>';} else if( $a25['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a25['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a25['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a26= mysqli_fetch_array($ligne26)) {?><br>
<?php if($a26['type'] == true) {  echo '<b>Module: </b>'.$a26['libelle_module'].'('.$a26['type'].')';  }; ?> <br/>
<?php if( $a26['type'] == true){ echo '<b>Prof: </b> '.$a26['nom'].' '.$a26['prenom'];}; ?><br />
<?php if( $a26['type'] == true){ echo '<b>Salle :</b> '.$a26['libelle_salle'];}; ?> <br>
<?php if( $a26['type'] =='Cours') {  echo '<b></b>';} else if( $a26['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a26['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a26['type'] =='Cours') break; } ?></td>

     
    <td><?php  
  while($a27= mysqli_fetch_array($ligne27)) {?><br>
<?php if($a27['type'] == true) {  echo '<b>Module: </b>'.$a27['libelle_module'].'('.$a27['type'].')';  }; ?> <br/>
<?php if( $a27['type'] == true){ echo '<b>Prof: </b> '.$a27['nom'].' '.$a27['prenom'];}; ?><br />
<?php if( $a27['type'] == true){ echo '<b>Salle :</b> '.$a27['libelle_salle'];}; ?> <br>
<?php if( $a27['type'] =='Cours') {  echo '<b></b>';} else if( $a27['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a27['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a27['type'] =='Cours') break; } ?></td>

     
   <td><?php  
  while($a28= mysqli_fetch_array($ligne28)) {?><br>
<?php if($a28['type'] == true) {  echo '<b>Module: </b>'.$a28['libelle_module'].'('.$a28['type'].')';  }; ?> <br/>
<?php if( $a28['type'] == true){ echo '<b>Prof: </b> '.$a28['nom'].' '.$a28['prenom'];}; ?><br />
<?php if( $a28['type'] == true){ echo '<b>Salle :</b> '.$a28['libelle_salle'];}; ?> <br>
<?php if( $a28['type'] =='Cours') {  echo '<b></b>';} else if( $a28['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a28['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a28['type'] =='Cours') break; } ?></td>
 
   <td><?php  
  while($a29= mysqli_fetch_array($ligne29)) {?><br>
<?php if($a29['type'] == true) {  echo '<b>Module: </b>'.$a29['libelle_module'].'('.$a29['type'].')';  }; ?> <br/>
<?php if( $a29['type'] == true){ echo '<b>Prof: </b> '.$a29['nom'].' '.$a29['prenom'];}; ?><br />
<?php if( $a29['type'] == true){ echo '<b>Salle :</b> '.$a29['libelle_salle'];}; ?> <br>
<?php if( $a29['type'] =='Cours') {  echo '<b></b>';} else if( $a29['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a29['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a29['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a30= mysqli_fetch_array($ligne30)) {?><br>
<?php if($a30['type'] == true) {  echo '<b>Module: </b>'.$a30['libelle_module'].'('.$a30['type'].')';  }; ?> <br/>
<?php if( $a30['type'] == true){ echo '<b>Prof: </b> '.$a30['nom'].' '.$a30['prenom'];}; ?><br />
<?php if( $a30['type'] == true){ echo '<b>Salle :</b> '.$a30['libelle_salle'];}; ?> <br>
<?php if( $a30['type'] =='Cours') {  echo '<b></b>';} else if( $a30['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a30['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a30['type'] =='Cours') break; } ?></td>
  </tr>
<tr>
    <th style=" height:50px;">Vendredi</th> 
      <td><?php  
  while($a1= mysqli_fetch_array($ligne111)) {?><br>
<?php if($a1['type'] == true) {  echo '<b>Module: </b>'.$a1['libelle_module'].'('.$a1['type'].')';  }; ?> <br/>
<?php if( $a1['type'] == true){ echo '<b>Prof: </b> '.$a1['nom'].' '.$a1['prenom'];}; ?><br />
<?php if( $a1['type'] == true){ echo '<b>Salle :</b> '.$a1['libelle_salle'];}; ?> <br>
<?php if( $a1['type'] =='Cours') {  echo '<b></b>';} else if( $a1['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a1['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a1['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a2= mysqli_fetch_array($ligne2)) {?><br>
<?php if($a2['type'] == true) {  echo '<b>Module: </b>'.$a2['libelle_module'].'('.$a2['type'].')';  }; ?> <br/>
<?php if( $a2['type'] == true){ echo '<b>Prof: </b> '.$a2['nom'].' '.$a2['prenom'];}; ?><br />
<?php if( $a2['type'] == true){ echo '<b>Salle :</b> '.$a2['libelle_salle'];}; ?> <br>
<?php if( $a2['type'] =='Cours') {  echo '<b></b>';} else if( $a2['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a2['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a2['type'] =='Cours') break; } ?></td>
 
   <td>         
   <?php  
  while($a3= mysqli_fetch_array($ligne3)){?><br>
<?php if($a3['type'] == true) {  echo '<b>Module: </b>'.$a3['libelle_module'].'('.$a3['type'].')';  }; ?> <br/>
<?php if( $a3['type'] == true){ echo '<b>Prof: </b> '.$a3['nom'].' '.$a3['prenom'];}; ?><br />
<?php if( $a3['type'] == true){ echo '<b>Salle :</b> '.$a3['libelle_salle'];}; ?> <br>
<?php if( $a3['type'] =='Cours') {  echo '<b></b>';} else if( $a3['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a3['libelle_groupe'];} else echo'<b></b> '; ?><br><?php if ( $a3['type'] =='Cours') break; } ?></td>

     
    <td><?php  
  while($a4= mysqli_fetch_array($ligne4)) {?><br>
<?php if($a4['type'] == true) {  echo '<b>Module: </b>'.$a4['libelle_module'].'('.$a4['type'].')';  }; ?> <br/>
<?php if( $a4['type'] == true){ echo '<b>Prof: </b> '.$a4['nom'].' '.$a4['prenom'];}; ?><br />
<?php if( $a4['type'] == true){ echo '<b>Salle :</b> '.$a4['libelle_salle'];}; ?> <br>
<?php if( $a4['type'] =='Cours') {  echo '<b></b>';} else if( $a4['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a4['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a4['type'] =='Cours') break; } ?></td>

    <td><?php  
  while($a5= mysqli_fetch_array($ligne5)) {?><br>
<?php if($a5['type'] == true) {  echo '<b>Module: </b>'.$a5['libelle_module'].'('.$a5['type'].')';  }; ?> <br/>
<?php if( $a5['type'] == true){ echo '<b>Prof: </b> '.$a5['nom'].' '.$a5['prenom'];}; ?><br />
<?php if( $a5['type'] == true){ echo '<b>Salle :</b> '.$a5['libelle_salle'];}; ?> <br>
<?php if( $a5['type'] =='Cours') {  echo '<b></b>';} else if( $a5['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a5['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a5['type'] =='Cours') break; } ?></td>

     <td><?php  
  while($a6= mysqli_fetch_array($ligne6)) {?><br>
<?php if($a6['type'] == true) {  echo '<b>Module: </b>'.$a6['libelle_module'].'('.$a6['type'].')';  }; ?> <br/>
<?php if( $a6['type'] == true){ echo '<b>Prof: </b> '.$a6['nom'].' '.$a6['prenom'];}; ?><br />
<?php if( $a6['type'] == true){ echo '<b>Salle :</b> '.$a6['libelle_salle'];}; ?><br> 
<?php if( $a6['type'] =='Cours') {  echo '<b></b>';} else if( $a6['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a6['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a6['type'] =='Cours') break; } ?></td>
    </tr>
<tr>
    <th style=" height:50px;"  >Samedi</th> 
      <td><?php  
  while($a31= mysqli_fetch_array($ligne31)) {?><br>
<?php if($a31['type'] == true) {  echo '<b>Module: </b>'.$a31['libelle_module'].'('.$a31['type'].')';  }; ?> <br/>
<?php if( $a31['type'] == true){ echo '<b>Prof: </b> '.$a31['nom'].' '.$a31['prenom'];}; ?><br />
<?php if( $a31['type'] == true){ echo '<b>Salle :</b> '.$a31['libelle_salle'];}; ?> <br>
<?php if( $a31['type'] =='Cours') {  echo '<b></b>';} else if( $a31['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a31['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a31['type'] =='Cours') break; } ?></td>

<td><?php  
  while($a32= mysqli_fetch_array($ligne32)) {?><br>
<?php if($a32['type'] == true) {  echo '<b>Module: </b>'.$a32['libelle_module'].'('.$a32['type'].')';  }; ?> <br/>
<?php if( $a32['type'] == true){ echo '<b>Prof: </b> '.$a32['nom'].' '.$a32['prenom'];}; ?><br />
<?php if( $a32['type'] == true){ echo '<b>Salle :</b> '.$a32['libelle_salle'];}; ?> <br>
<?php if( $a32['type'] =='Cours') {  echo '<b></b>';} else if( $a32['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a32['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a32['type'] =='Cours') break; } ?></td>
 
   <td>         
   <?php  
  while($a33= mysqli_fetch_array($ligne33)){?><br>
<?php if($a33['type'] == true) {  echo '<b>Module: </b>'.$a33['libelle_module'].'('.$a33['type'].')';  }; ?> <br/>
<?php if( $a33['type'] == true){ echo '<b>Prof: </b> '.$a33['nom'].' '.$a33['prenom'];}; ?><br />
<?php if( $a33['type'] == true){ echo '<b>Salle :</b> '.$a33['libelle_salle'];}; ?> <br>
<?php if( $a33['type'] =='Cours') {  echo '<b></b>';} else if( $a33['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a33['libelle_groupe'];} else echo'<b></b> '; ?><br><?php if ( $a33['type'] =='Cours') break; } ?></td>

     
    <td><?php  
  while($a34= mysqli_fetch_array($ligne34)) {?><br>
<?php if($a34['type'] == true) {  echo '<b>Module: </b>'.$a34['libelle_module'].'('.$a34['type'].')';  }; ?> <br/>
<?php if( $a34['type'] == true){ echo '<b>Prof: </b> '.$a34['nom'].' '.$a34['prenom'];}; ?><br />
<?php if( $a34['type'] == true){ echo '<b>Salle :</b> '.$a34['libelle_salle'];}; ?> <br>
<?php if( $a34['type'] =='Cours') {  echo '<b></b>';} else if( $a34['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a34['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a34['type'] =='Cours') break; } ?></td>

    <td><?php  
  while($a35= mysqli_fetch_array($ligne35)) {?><br>
<?php if($a35['type'] == true) {  echo '<b>Module: </b>'.$a35['libelle_module'].'('.$a35['type'].')';  }; ?> <br/>
<?php if( $a35['type'] == true){ echo '<b>Prof: </b> '.$a35['nom'].' '.$a35['prenom'];}; ?><br />
<?php if( $a35['type'] == true){ echo '<b>Salle :</b> '.$a35['libelle_salle'];}; ?> <br>
<?php if( $a35['type'] =='Cours') {  echo '<b></b>';} else if( $a35['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a35['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a35['type'] =='Cours') break; } ?></td>

     <td><?php  
  while($a36= mysqli_fetch_array($ligne36)) {?><br>
<?php if($a36['type'] == true) {  echo '<b>Module: </b>'.$a36['libelle_module'].'('.$a36['type'].')';  }; ?> <br/>
<?php if( $a36['type'] == true){ echo '<b>Prof: </b> '.$a36['nom'].' '.$a36['prenom'];}; ?><br />
<?php if( $a36['type'] == true){ echo '<b>Salle :</b> '.$a36['libelle_salle'];}; ?><br> 
<?php if( $a36['type'] =='Cours') {  echo '<b></b>';} else if( $a36['type'] ==('TD' || 'TP')) {   echo '<b>Groupe :</b> '.$a36['libelle_groupe'];} else echo'<b></b> '; ?> <br><?php if ( $a36['type'] =='Cours') break; } ?></td>
    </tr> 
</table>
<?php   } ?>
</div>
 </body>
</html>
