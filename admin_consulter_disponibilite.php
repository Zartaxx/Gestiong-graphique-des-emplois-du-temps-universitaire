<?php 
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
if(isset($_GET['id_prof'])){
$id_prof=$_GET['id_prof'];
$ligne=mysqli_fetch_array(mysqli_query($db,"select UPPER(prof.nom) as nom,UPPER(prof.prenom) as prenom ,UPPER(prof.civilite) as civilite from prof where id_prof='$id_prof'"));
$nom=mysqli_real_escape_string($db,htmlspecialchars($ligne['nom']));
$prenom=mysqli_real_escape_string($db,htmlspecialchars($ligne['prenom']));
$civilite=mysqli_real_escape_string($db,htmlspecialchars($ligne['civilite']));

$dis31=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Samedi' AND heure = '08:00-09:30'"));
$disp31=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 8:00 - 9:30'"));

$dis32=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Samedi' AND heure = '09:40-11:10'"));
$disp32=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 9:30 - 11:00' "));

$dis33=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Samedi' AND heure = '11:20-12:50'"));
$disp33=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Samedi 11:20 - 12:50'"));

$dis34=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Samedi' AND heure = '13:00-14-30'"));
$disp34=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 13:00 - 14-30'"));

$dis35=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Samedi' AND heure = '14-40-16:10'"));
$disp35=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 14-40 - 16:10'"));

$dis36=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Samedi' AND heure = '16:20-17:50'"));
$disp36=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 16:20 - 17:50'"));
 
$dis1=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Dimanche' AND heure = '08:00-09:30'"));
$disp1=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 8:00 - 9:30'"));

$dis2=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Dimanche' AND heure = '09:40-11:10'"));
$disp2=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 9:30 - 11:00' "));

$dis3=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Dimanche' AND heure = '11:20-12:50'"));
$disp3=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Dimanche 11:20 - 12:50'"));

$dis4=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Dimanche' AND heure = '13:00-14-30'"));
$disp4=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 13:00 - 14-30'"));

$dis5=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Dimanche' AND heure = '14-40-16:10'"));
$disp5=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 14-40 - 16:10'"));

$dis6=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Dimanche' AND heure = '16:20-17:50'"));
$disp6=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 16:20 - 17:50'"));

$dis7=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Lundi' AND heure = '08:00-09:30'"));
$disp7=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 8:00 - 9:30'"));

$dis8=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Lundi' AND heure = '09:40-11:10'"));
$disp8=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 9:30 - 11:00' "));

$dis9=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Lundi' AND heure = '11:20-12:50'"));
$disp9=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Lundi 11:20 - 12:50'"));

$dis10=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Lundi' AND heure = '13:00-14-30'"));
$disp10=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 13:00 - 14-30'"));

$dis11=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Lundi' AND heure = '14-40-16:10'"));
$disp11=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 14-40 - 16:10'"));

$dis12=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Lundi' AND heure = '16:20-17:50'"));
$disp12=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 16:20 - 17:50'"));

$dis13=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mardi' AND heure = '08:00-09:30'"));
$disp13=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 8:00 - 9:30'"));

$dis14=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mardi' AND heure = '09:40-11:10'"));
$disp14=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 9:30 - 11:00' "));

$dis15=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mardi' AND heure = '11:20-12:50'"));
$disp15=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Mardi 11:20 - 12:50'"));

$dis16=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mardi' AND heure = '13:00-14-30'"));
$disp16=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 13:00 - 14-30'"));

$dis17=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mardi' AND heure = '14-40-16:10'"));
$disp17=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 14-40 - 16:10'"));

$dis18=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mardi' AND heure = '16:20-17:50'"));
$disp18=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 16:20 - 17:50'"));

$dis19=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mercredi' AND heure = '08:00-09:30'"));
$disp19=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 8:00 - 9:30'"));

$dis20=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mercredi' AND heure = '09:40-11:10'"));
$disp20=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 9:30 - 11:00' "));

$dis21=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mercredi' AND heure = '11:20-12:50'"));
$disp21=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Mercredi 11:20 - 12:50'"));

$dis22=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mercredi' AND heure = '13:00-14-30'"));
$disp22=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 13:00 - 14-30'"));

$dis23=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mercredi' AND heure = '14-40-16:10'"));
$disp23=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 14-40 - 16:10'"));

$dis24=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Mercredi' AND heure = '16:20-17:50'"));
$disp24=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 16:20 - 17:50'"));

$dis25=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Jeudi' AND heure = '08:00-09:30'"));
$disp25=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 8:00 - 9:30'"));

$dis26=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Jeudi' AND heure = '09:40-11:10'"));
$disp26=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 9:30 - 11:00' "));

$dis27=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Jeudi' AND heure = '11:20-12:50'"));
$disp27=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Jeudi 11:20 - 12:50'"));

$dis28=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Jeudi' AND heure = '13:00-14-30'"));
$disp28=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 13:00 - 14-30'"));

$dis29=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Jeudi' AND heure = '14-40-16:10'"));
$disp29=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 14-40 - 16:10'"));

$dis30=mysqli_fetch_array(mysqli_query($db,"SELECT DISTINCT heure, prof.id_prof, jour FROM seance, prof WHERE prof.id_prof ='$id_prof'
AND seance.id_pr = prof.id_prof AND jour = 'Jeudi' AND heure = '16:20-17:50'"));
$disp30=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 16:20 - 17:50'"));
?>
<!DOCTYPE html >
<html>
<head>
<!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Consulter disponibilité</title><br><br>
</head>

<body style="background-color: rgb(219,226,226);">
<?php  
  $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb From  disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof"));
  if($compte['nb']>0){ ?>
  	<!-- début de container  -->
 <div class="container" style="margin-bottom: 90px;">
<!-- centrer le paragraphe  --------------------------->
<div class="row">
  <div class="col d-flex justify-content-center">
    <p style=" letter-spacing:2px; color:#000;">
Disponibilité de : <?php echo $civilite;?> <?php echo $nom;?>  <?php echo $prenom;?>
</p>
  </div>
</div>
<!--  ----------------------table--------------------------->
<table class="table table-dark table-hover table-bordered table-striped table-responsive-md">
<thead>
<tr> 
 <th><b style="color:#ECF4F4">JOUR / HEURE</b></th>
 <th><b style="color:#ECF4F4">08:00-09:30</b></th>
 <th><b style="color:#ECF4F4">09:40-11:10</b></th>
 <th><b style="color:#ECF4F4">11:20-12:50</b></th>
 <th><b style="color:#ECF4F4">13:00-14-30</b></th>
 <th><b style="color:#ECF4F4">14-40-16:10</b></th>
 <th><b style="color:#ECF4F4"> 16:20-17:50</b></th>
 </tr>
 </thead>
  <tbody>
   <tr style="height:35px;">
    <th style="font-weight:normal;color:#FFF; text-height:20px;">Lundi</th>
 
    <td><?php if((isset($disp7['disponibilite']) == 'Lundi 8:00 - 9:30')&& (isset($dis7['jour']) == 'Lundi' && isset($dis7['heure']) =='08:00-09:30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if (isset($disp7['disponibilite']) == 'Lundi 8:00 - 9:30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp8['disponibilite'] == 'Lundi 9:30 - 11:00')&& ($dis8['jour'] == 'Lundi' && $dis8['heure'] =='09:40-11:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp8['disponibilite'] == 'Lundi 9:30 - 11:00') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp9['disponibilite'] == 'Lundi 11:20 - 12:50')&& ($dis9['jour'] == 'Lundi' && $dis9['heure'] =='11:20-12:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp9['disponibilite'] == 'Lundi 11:20 - 12:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp10['disponibilite'] == 'Lundi 13:00 - 14-30')&& ($dis10['jour'] == 'Lundi' && $dis10['heure'] =='13:00-14-30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp10['disponibilite'] == 'Lundi 13:00 - 14-30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp11['disponibilite'] == 'Lundi 14-40 - 16:10')&& ($dis11['jour'] == 'Lundi' && $dis11['heure'] =='14-40-16:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp11['disponibilite'] == 'Lundi 14-40 - 16:10') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp12['disponibilite'] == 'Lundi 16:20 - 17:50')&& ($dis12['jour'] == 'Lundi' && $dis12['heure'] =='16:20-17:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp12['disponibilite'] == 'Lundi 16:20 - 17:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
  </tr>
 
  <tr style="height:35px;">
<th style="font-weight:normal;color:#FFF;">Mardi</th>
<td><?php if(($disp13['disponibilite'] == 'Mardi 8:00 - 9:30')&& ($dis13['jour'] == 'Mardi' && $dis13['heure'] =='08:00-09:30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp13['disponibilite'] == 'Mardi 8:00 - 9:30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp14['disponibilite'] == 'Mardi 9:30 - 11:00')&& ($dis14['jour'] == 'Mardi' && $dis14['heure'] =='09:40-11:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp14['disponibilite'] == 'Mardi 9:30 - 11:00') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp15['disponibilite'] == 'Mardi 11:20 - 12:50')&& ($dis15['jour'] == 'Mardi' && $dis15['heure'] =='11:20-12:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp15['disponibilite'] == 'Mardi 11:20 - 12:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp16['disponibilite'] == 'Mardi 13:00 - 14-30')&& ($dis16['jour'] == 'Mardi' && $dis16['heure'] =='13:00-14-30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp16['disponibilite'] == 'Mardi 13:00 - 14-30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp17['disponibilite'] == 'Mardi 14-40 - 16:10')&& ($dis17['jour'] == 'Mardi' && $dis17['heure'] =='14-40-16:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp17['disponibilite'] == 'Mardi 14-40 - 16:10') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp18['disponibilite'] == 'Mardi 16:20 - 17:50')&& ($dis18['jour'] == 'Mardi' && $dis18['heure'] =='16:20-17:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp18['disponibilite'] == 'Mardi 16:20 - 17:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
  </tr>
  <tr style="height:35px;">
<th style="font-weight:normal; color:#FFF;">Mercredi</th>     
<td><?php if(($disp19['disponibilite'] == 'Mercredi 8:00 - 9:30')&& ($dis19['jour'] == 'Mercredi' && $dis19['heure'] =='08:00-09:30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp19['disponibilite'] == 'Mercredi 8:00 - 9:30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td> 
     
<td><?php if(($disp20['disponibilite'] == 'Mercredi 9:30 - 11:00')&& ($dis20['jour'] == 'Mercredi' && $dis20['heure'] =='09:40-11:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp20['disponibilite'] == 'Mercredi 9:30 - 11:00') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>

<td><?php if(($disp21['disponibilite'] == 'Mercredi 11:20 - 12:50')&& ($dis21['jour'] == 'Mercredi' && $dis21['heure'] =='11:20-12:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp21['disponibilite'] == 'Mercredi 11:20 - 12:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>

<td><?php if(($disp22['disponibilite'] == 'Mercredi 13:00 - 14-30')&& ($dis22['jour'] == 'Mercredi' && $dis22['heure'] =='13:00-14-30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp22['disponibilite'] == 'Mercredi 13:00 - 14-30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>

 <td><?php if(($disp23['disponibilite'] == 'Mercredi 14-40 - 16:10')&& ($dis23['jour'] == 'Mercredi' && $dis23['heure'] =='14-40-16:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp23['disponibilite'] == 'Mercredi 14-40 - 16:10') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp24['disponibilite'] == 'Mercredi 16:20 - 17:50')&& ($dis24['jour'] == 'Mercredi' && $dis24['heure'] =='16:20-17:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp24['disponibilite'] == 'Mercredi 16:20 - 17:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
  </tr>
  <tr style="height:35px;">
<th style="color:#fff;color:#fff;font-weight:normal;">Jeudi</th>    
<td><?php if(($disp25['disponibilite'] == 'Jeudi 8:00 - 9:30')&& ($dis25['jour'] == 'Jeudi' && $dis25['heure'] =='08:00-09:30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp25['disponibilite'] == 'Jeudi 8:00 - 9:30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp26['disponibilite'] == 'Jeudi 9:30 - 11:00')&& ($dis26['jour'] == 'Jeudi' && $dis26['heure'] =='09:40-11:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp26['disponibilite'] == 'Jeudi 9:30 - 11:00') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp27['disponibilite'] == 'Jeudi 11:20 - 12:50')&& ($dis27['jour'] == 'Jeudi' && $dis27['heure'] =='11:20-12:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp27['disponibilite'] == 'Jeudi 11:20 - 12:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp28['disponibilite'] == 'Jeudi 13:00 - 14-30')&& ($dis28['jour'] == 'Jeudi' && $dis28['heure'] =='13:00-14-30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp28['disponibilite'] == 'Jeudi 13:00 - 14-30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>
<td><?php if(($disp29['disponibilite'] == 'Jeudi 14-40 - 16:10')&& ($dis29['jour'] == 'Jeudi' && $dis29['heure'] =='14-40-16:10')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp29['disponibilite'] == 'Jeudi 14-40 - 16:10') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?>  </td>
<td><?php if(($disp30['disponibilite'] == 'Jeudi 16:20 - 17:50')&& ($dis30['jour'] == 'Jeudi' && $dis30['heure'] =='16:20-17:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp30['disponibilite'] == 'Jeudi 16:20 - 17:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?> </td>
  </tr>
<tr style="height:35px;">  
    <th style="font-weight:normal; color:#FFF">Vendredi</th>
<td> <?php if(($disp1['disponibilite'] == 'Dimanche 8:00 - 9:30') && ($dis1['jour'] == 'Dimanche' && $dis1['heure'] =='08:00-09:30')){ echo '<img src="image/dispon2.png" width="30px">';} else if (($disp1['disponibilite'] == 'Dimanche 8:00 - 9:30')){ echo '<img src="image/dispon1.png" width="30px">';}  else {}?></td>

<td><?php if(($disp2['disponibilite']== 'Dimanche 9:30 - 11:00')&& ($dis2['jour'] == 'Dimanche'&& $dis2['heure'] =='09:40-11:10' )) { echo '<img src="image/dispon2.png" width="30px">';} else if ($disp2['disponibilite'] == 'Dimanche 9:30 - 11:00') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>

<td><?php if(($disp3['disponibilite'] == 'Dimanche 11:20 - 12:50')&& ($dis3['jour'] == 'Dimanche' && $dis3['heure'] =='11:20-12:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp3['disponibilite'] == 'Dimanche 11:20 - 12:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?> </td>

<td><?php if(($disp4['disponibilite'] == 'Dimanche 13:00 - 14-30')&& ($dis4['jour'] == 'Dimanche' && $dis4['heure'] =='13:00-14-30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp4['disponibilite'] == 'Dimanche 13:00 - 14-30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?> </td>

<td> <?php if(($disp5['disponibilite'] == 'Dimanche 14-40 - 16:10')&& ($dis5['jour'] == 'Dimanche' && $dis5['heure'] =='14-40-16:10')) { echo '<img src="image/dispon2.png" width="30px">';} else if ($disp5['disponibilite'] == 'Dimanche 14-40 - 16:10'){echo '<img src="image/dispon1.png" width="30px">';}  else {} ?></td>

<td><?php if  (($disp6['disponibilite'] == 'Dimanche 16:20 - 17:50')&& ($dis6['jour'] == 'Dimanche'&& $dis6['heure']='16:20-17:50' ) ){ echo '<img src="image/dispon2.png" width="30px">';}else if ($disp6['disponibilite'] == 'Dimanche 16:20 - 17:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}    ?></td>
   </tr>
 
  <tr style="height:35px;">  
    <th style="font-weight:normal; color:#FFF">Samedi</th>
<td> <?php if(($disp31['disponibilite'] == 'Samedi 8:00 - 9:30') && ($dis31['jour'] == 'Samedi' && $dis31['heure'] =='08:00-09:30')){ echo '<img src="image/dispon2.png" width="30px">';} else if (($disp31['disponibilite'] == 'Samedi 8:00 - 9:30')){ echo '<img src="image/dispon1.png" width="30px">';}  else {}?></td>

<td><?php if(($disp32['disponibilite']== 'Samedi 9:30 - 11:00')&& ($dis32['jour'] == 'Samedi'&& $dis32['heure'] =='09:40-11:10' )) { echo '<img src="image/dispon2.png" width="30px">';} else if ($disp32['disponibilite'] == 'Samedi 9:30 - 11:00') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?></td>

<td><?php if(($disp33['disponibilite'] == 'Samedi 11:20 - 12:50')&& ($dis33['jour'] == 'Samedi' && $dis33['heure'] =='11:20-12:50')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp33['disponibilite'] == 'Samedi 11:20 - 12:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?> </td>

<td><?php if(($disp34['disponibilite'] == 'Samedi 13:00 - 14-30')&& ($dis34['jour'] == 'Samedi' && $dis34['heure'] =='13:00-14-30')) { echo '<img src="image/dispon2.png" width="30px">';}  else if ($disp34['disponibilite'] == 'Samedi 13:00 - 14-30') {echo '<img src="image/dispon1.png" width="30px">';}  else {}  ?> </td>

<td> <?php if(($disp35['disponibilite'] == 'Samedi 14-40 - 16:10')&& ($dis35['jour'] == 'Samedi' && $dis35['heure'] =='14-40-16:10')) { echo '<img src="image/dispon2.png" width="30px">';} else if ($disp35['disponibilite'] == 'Samedi 14-40 - 16:10'){echo '<img src="image/dispon1.png" width="30px">';}  else {} ?></td>

<td><?php if  (($disp36['disponibilite'] == 'Samedi 16:20 - 17:50')&& ($dis36['jour'] == 'Samedi'&& $dis36['heure']='16:20-17:50' ) ){ echo '<img src="image/dispon2.png" width="30px">';}else if ($disp36['disponibilite'] == 'Samedi 16:20 - 17:50') {echo '<img src="image/dispon1.png" width="30px">';}  else {}    ?></td>
   </tr>
  </tbody>
</table>

 <?php
} else { $civ=$civilite ;	?><script language="JavaScript">alert("l a  d i s p o n i b i l i t é d e  <?php echo $nom ?>    n ' e s t   p a s  e n c o r e   s a i s i e !");</script><?php 		echo "<meta http-equiv='refresh' content='0; conslt_admin_dispo_prof.php' />";
	
    }}?> 
    
</div>
<!--  <div class="piedDePage d-print-none">
        <p style="padding-top: 1px;margin-top:3px;">
        Université de Béjaia &copy; 2019/2020 &bull; tous les droits resérvés &bull;
        </p>
  </div><br /> -->
</body>
</html>