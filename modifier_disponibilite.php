<?php
Function choixpardefault2($var1,$var2)
{
if($var1==$var2)
return 'selected="selected"';
else
return "";
}
// appelle au code de connexion à la BDD
require_once("bdd.php");
if(isset($_GET['id_prof']))
{
$id_prof=$_GET['id_prof'];
$ligne=mysqli_fetch_array(mysqli_query($db,"SELECT UPPER(prof.nom) as nom,UPPER(prof.prenom) as prenom,prof.civilite from prof where id_prof='$id_prof'"));
$nom=mysqli_real_escape_string($db,htmlspecialchars($ligne['nom']));
$prenom=mysqli_real_escape_string($db,htmlspecialchars($ligne['prenom']));
$civilite=mysqli_real_escape_string($db,htmlspecialchars($ligne['civilite']));

$annee=mysqli_fetch_array(mysqli_query($db,"SELECT disponibilite,annee_uni,semestre,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof"));
$annee_uni=mysqli_real_escape_string($db,htmlspecialchars($annee['annee_uni']));
$semestre=mysqli_real_escape_string($db,htmlspecialchars($annee['semestre']));

$disp31=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp,disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 8:00 - 9:30'"));
$id_disp31=mysqli_real_escape_string($db,htmlspecialchars($disp31['id_disp']));

$disp32=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 9:30 - 11:00' "));
$id_disp32=mysqli_real_escape_string($db,htmlspecialchars($disp32['id_disp']));

$disp33=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Samedi 11:20 - 12:50'"));
$id_disp33=mysqli_real_escape_string($db,htmlspecialchars($disp33['id_disp']));

$disp34=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 13:00 - 14-30'"));
$id_disp34=mysqli_real_escape_string($db,htmlspecialchars($disp34['id_disp']));

$disp35=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 14-40 - 16:10'"));
$id_disp35=mysqli_real_escape_string($db,htmlspecialchars($disp35['id_disp']));

$disp36=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Samedi 16:20 - 17:50'"));
$id_disp36=mysqli_real_escape_string($db,htmlspecialchars($disp36['id_disp']));


$disp1=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp,disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 8:00 - 9:30'"));
$id_disp1=mysqli_real_escape_string($db,htmlspecialchars($disp1['id_disp']));

$disp2=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 9:30 - 11:00' "));
$id_disp2=mysqli_real_escape_string($db,htmlspecialchars($disp2['id_disp']));

$disp3=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Dimanche 11:20 - 12:50'"));
$id_disp3=mysqli_real_escape_string($db,htmlspecialchars($disp3['id_disp']));

$disp4=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 13:00 - 14-30'"));
$id_disp4=mysqli_real_escape_string($db,htmlspecialchars($disp4['id_disp']));

$disp5=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 14-40 - 16:10'"));
$id_disp5=mysqli_real_escape_string($db,htmlspecialchars($disp5['id_disp']));

$disp6=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Dimanche 16:20 - 17:50'"));
$id_disp6=mysqli_real_escape_string($db,htmlspecialchars($disp6['id_disp']));

$disp7=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 8:00 - 9:30'"));
$id_disp7=mysqli_real_escape_string($db,htmlspecialchars($disp7['id_disp']));

$disp8=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 9:30 - 11:00' "));
$id_disp8=mysqli_real_escape_string($db,htmlspecialchars($disp8['id_disp']));

$disp9=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Lundi 11:20 - 12:50'"));
$id_disp9=mysqli_real_escape_string($db,htmlspecialchars($disp9['id_disp']));

$disp10=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 13:00 - 14-30'"));
$id_disp10=mysqli_real_escape_string($db,htmlspecialchars($disp10['id_disp']));

$disp11=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 14-40 - 16:10'"));
$id_disp11=mysqli_real_escape_string($db,htmlspecialchars($disp11['id_disp']));

$disp12=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Lundi 16:20 - 17:50'"));
$id_disp12=mysqli_real_escape_string($db,htmlspecialchars($disp12['id_disp']));

$disp13=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 8:00 - 9:30'"));
$id_disp13=mysqli_real_escape_string($db,htmlspecialchars($disp13['id_disp']));

$disp14=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 9:30 - 11:00' "));
$id_disp14=mysqli_real_escape_string($db,htmlspecialchars($disp14['id_disp']));

$disp15=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Mardi 11:20 - 12:50'"));
$id_disp15=mysqli_real_escape_string($db,htmlspecialchars($disp15['id_disp']));

$disp16=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 13:00 - 14-30'"));
$id_disp16=mysqli_real_escape_string($db,htmlspecialchars($disp16['id_disp']));

$disp17=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 14-40 - 16:10'"));
$id_disp17=mysqli_real_escape_string($db,htmlspecialchars($disp17['id_disp']));

$disp18=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mardi 16:20 - 17:50'"));
$id_disp18=mysqli_real_escape_string($db,htmlspecialchars($disp18['id_disp']));

$disp19=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 8:00 - 9:30'"));
$id_disp19=mysqli_real_escape_string($db,htmlspecialchars($disp19['id_disp']));

$disp20=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 9:30 - 11:00' "));
$id_disp20=mysqli_real_escape_string($db,htmlspecialchars($disp20['id_disp']));

$disp21=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Mercredi 11:20 - 12:50'"));
$id_disp21=mysqli_real_escape_string($db,htmlspecialchars($disp21['id_disp']));

$disp22=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 13:00 - 14-30'"));
$id_disp22=mysqli_real_escape_string($db,htmlspecialchars($disp22['id_disp']));

$disp23=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 14-40 - 16:10'"));
$id_disp23=mysqli_real_escape_string($db,htmlspecialchars($disp23['id_disp']));

$disp24=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Mercredi 16:20 - 17:50'"));
$id_disp24=mysqli_real_escape_string($db,htmlspecialchars($disp24['id_disp']));

$disp25=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 8:00 - 9:30'"));
$id_disp25=mysqli_real_escape_string($db,htmlspecialchars($disp25['id_disp']));

$disp26=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 9:30 - 11:00' "));
$id_disp26=mysqli_real_escape_string($db,htmlspecialchars($disp26['id_disp']));

$disp27=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof  and disponibilite='Jeudi 11:20 - 12:50'"));
$id_disp27=mysqli_real_escape_string($db,htmlspecialchars($disp27['id_disp']));

$disp28=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 13:00 - 14-30'"));
$id_disp28=mysqli_real_escape_string($db,htmlspecialchars($disp28['id_disp']));

$disp29=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 14-40 - 16:10'"));
$id_disp29=mysqli_real_escape_string($db,htmlspecialchars($disp29['id_disp']));

$disp30=mysqli_fetch_array(mysqli_query($db,"SELECT id_disp, disponibilite,prof.id_prof
FROM disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof and disponibilite='Jeudi 16:20 - 17:50'"));
$id_disp30=mysqli_real_escape_string($db,htmlspecialchars($disp30['id_disp']));
 ?>
 
<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<title>modifier disponibilité</title>
</head>
<body style="background-color:#07415f;">
 
<?php include('menu_principale.php') ?>
<?php  
  $compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb From  disponibilite,prof WHERE prof.id_prof ='$id_prof' AND disponibilite.id_prof = prof.id_prof"));
  if($compte['nb']>0){ ?>

<form method="POST" name="modifier"  style="margin-left:40px;"><br>
 <p style="font-family: monospace;  letter-spacing:-1px; color:#FFF; margin-left:100px;">
Disponibilité de : <?php echo $civilite;?> <?php echo $nom;?>  <?php echo $prenom;?>
</p>
 <select class="aq" name="annee" required>
<option selected disabled value="">Année Universitaire</option>
     <?php 
echo '<option value="'.$annee_uni.'" '.choixpardefault2($var1,$var2).'>'.$annee_uni.'</option>';?>
<?php if ($annee_uni=='2016-2017'){ ?>
       <option value="2017-2018">2017-2018</option>
      <?php } else if ($annee_uni=='2017-2018'){  ?>
      <option value="2016-2017">2016-2017</option>
       <?php }  ?> 
      </select>
<select name="semestre" required style="margin-left:250px;">
<option selected disabled value=""> Semestre</option>
<?php  $sem=mysqli_query($db,"select  distinct  libelle_semestre  from semestre"); 
 while($a=mysqli_fetch_array($sem)){
echo '<option value="'.$a['libelle_semestre'].'"'.choixpardefault2($annee['semestre'],$a['libelle_semestre']).'>'.$a['libelle_semestre'].'</option>';
}?></select><center>
</p>
   <center>
<table class="responstable" style="width:1130px;">
<thead><tr> 
 <th style="width:200px; font-weight:normal">JOUR / HEURE</th>
 <th>08:00 - 09:30</th>
 <th>09:40 - 11:10</th>
 <th>11:20 - 12:50</th>
  <th>13:00 - 14-30</th>
 <th>14-40 - 16:10</th>
  <th>16:20 - 17:50</th>
 </tr>
 </thead>
 
  <tbody>
  <input type="hidden" name="id_prof" value=" <?php echo $id_prof; ?>"> 
  

 
 <tr>
    <th style="width:200px; font-weight:normal">Lundi</th>
    <td align="center"><input name="case7" id="case7" type="checkbox"<?php if($disp7['disponibilite'] == 'Lundi 8:00 - 9:30')  echo 'CHECKED="checked"';?>value="Lundi 8:00 - 9:30"/></td>
<td align="center"><input name="case8" id="case8" type="checkbox"<?php if($disp8['disponibilite'] == 'Lundi 9:30 - 11:00')     echo 'CHECKED="checked"';?>value="Lundi 9:30 - 11:00"/></td>
<td align="center"><input name="case9" id="case9" type="checkbox"<?php if($disp9['disponibilite'] == 'Lundi 11:20 - 12:50')    echo 'CHECKED="checked"';?>value="Lundi 11:20 - 12:50"/></td>
<td align="center"><input name="case10" id="case10" type="checkbox"<?php if ($disp10['disponibilite'] == 'Lundi 13:00 - 14-30') echo 'CHECKED="checked"';?>value="Lundi 13:00 - 14-30"/></td>
<td align="center"><input name="case11" id="case11" type="checkbox"<?php if($disp11['disponibilite'] == 'Lundi 14-40 - 16:10') echo 'CHECKED="checked"';?>value="Lundi 14-40 - 16:10"/></td>
<td align="center"><input name="case12" id="case12" type="checkbox"<?php if($disp12['disponibilite'] == 'Lundi 16:20 - 17:50') echo 'CHECKED="checked"';?> value="Lundi 16:20 - 17:50"/></td>
  </tr>
  <tr>
<th style="width:200px; font-weight:normal">Mardi</th> 
<td align="center"><input name="case13" id="case13" type="checkbox" <?php if($disp13['disponibilite'] == 'Mardi 8:00 - 9:30')     echo 'CHECKED="checked"';?> value="Mardi 8:00 - 9:30"/></td>
<td align="center"><input name="case14" id="case14" type="checkbox"<?php if($disp14['disponibilite'] == 'Mardi 9:30 - 11:00')   echo 'CHECKED="checked"';?>value="Mardi 9:30 - 11:00"/></td>
<td align="center"><input name="case15" id="case15" type="checkbox"<?php if($disp15['disponibilite'] == 'Mardi 11:20 - 12:50') echo 'CHECKED="checked"';?>value="Mardi 11:20 - 12:50"/></td>
<td align="center"><input name="case16" id="case16" type="checkbox"<?php if($disp16['disponibilite'] == 'Mardi 13:00 - 14-30') echo 'CHECKED="checked"';?>value="Mardi 13:00 - 14-30"/></td>
<td align="center"><input name="case17" id="case17" type="checkbox"<?php if($disp17['disponibilite'] == 'Mardi 14-40 - 16:10') echo 'CHECKED="checked"';?>value="Mardi 14-40 - 16:10"/></td>
<td align="center"><input name="case18" id="case18" type="checkbox"<?php if($disp18['disponibilite'] == 'Mardi 16:20 - 17:50')    echo 'CHECKED="checked"';?>value="Mardi 16:20 - 17:50"/></td>
  </tr>
  <tr>
<th style="width:200px; font-weight:normal">Mercredi</th>
<td align="center"><input name="case19" id="case19" type="checkbox"<?php if($disp19['disponibilite'] == 'Mercredi 8:00 - 9:30') echo 'CHECKED="checked"';?>value="Mercredi 8:00 - 9:30"/></td>   
<td align="center"><input name="case20" id="case20" type="checkbox"<?php if($disp20['disponibilite'] == 'Mercredi 9:30 - 11:00') echo 'CHECKED="checked"';?>value="Mercredi 9:30 - 11:00"/></td>
<td align="center"><input name="case21" id="case21" type="checkbox"<?php if($disp21['disponibilite'] == 'Mercredi 11:20 - 12:50') echo 'CHECKED="checked"';?>value="Mercredi 11:20 - 12:50"/></td>
<td align="center"><input name="case22" id="case22" type="checkbox"<?php if($disp22['disponibilite'] == 'Mercredi 13:00 - 14-30') echo 'CHECKED="checked"';?>value="Mercredi 13:00 - 14-30"/></td>
 <td align="center"><input name="case23" id="case23" type="checkbox"<?php if($disp23['disponibilite'] == 'Mercredi 14-40 - 16:10') echo 'CHECKED="checked"';?>value="Mercredi 14-40 - 16:10"/></td>
<td align="center"><input name="case24" id="case24" type="checkbox"<?php if($disp24['disponibilite'] == 'Mercredi 16:20 - 17:50') echo 'CHECKED="checked"';?>value="Mercredi 16:20 - 17:50"/></td>
  </tr>
  <tr>
<th style="width:200px; font-weight:normal">Jeudi</th>  
<td align="center"><input name="case25" id="case25" type="checkbox"<?php if($disp25['disponibilite'] == 'Jeudi 8:00 - 9:30')     echo 'CHECKED="checked"';?>value="Jeudi 8:00 - 9:30"/></td>
<td align="center"><input name="case26" id="case26" type="checkbox"<?php if($disp26['disponibilite'] == 'Jeudi 9:30 - 11:00')  echo 'CHECKED="checked"';?>value="Jeudi 9:30 - 11:00"/></td>
<td align="center"><input name="case27" id="case27" type="checkbox"<?php if($disp27['disponibilite'] == 'Jeudi 11:20 - 12:50') echo 'CHECKED="checked"';?>value="Jeudi 11:20 - 12:50"/></td>
<td align="center"><input name="case28" id="case28" type="checkbox"<?php if($disp28['disponibilite'] == 'Jeudi 13:00 - 14-30') echo 'CHECKED="checked"';?>value="Jeudi 13:00 - 14-30"/></td>
<td align="center"><input name="case29" id="case29" type="checkbox"<?php if($disp29['disponibilite'] == 'Jeudi 14-40 - 16:10') echo 'CHECKED="checked"';?>value="Jeudi 14-40 - 16:10"/>  </td>
<td align="center"><input name="case30" id="case30" type="checkbox" <?php if($disp30['disponibilite'] == 'Jeudi 16:20 - 17:50') echo 'CHECKED="checked"';?> value="Jeudi 16:20 - 17:50"/> </td>
  </tr>
<tr>  
    <th style="width:200px; font-weight:normal">Vendredi</th>
    
<td align="center"><input name="case1" id="case1" type="checkbox" <?php if($disp1['disponibilite'] == 'Dimanche 8:00 - 9:30')  echo 'CHECKED="checked"';?> value="Dimanche 8:00 - 9:30"/></td>
<td align="center"><input name="case2" id="case2" type="checkbox"<?php if($disp2['disponibilite']== 'Dimanche 9:30 - 11:00')   echo 'CHECKED="checked"';?>value="Dimanche 9:30 - 11:00"/></td>
<td align="center"><input name="case3" id="case3" type="checkbox"<?php if($disp3['disponibilite'] == 'Dimanche 11:20 - 12:50') echo 'CHECKED="checked"';?>value="Dimanche 11:20 - 12:50"/> </td>
<td align="center"><input name="case4" id="case4" type="checkbox"<?php if($disp4['disponibilite'] == 'Dimanche 13:00 - 14-30') echo 'CHECKED="checked"';?>value="Dimanche 13:00 - 14-30"/></td>
<td align="center"><input name="case5" id="case5" type="checkbox" <?php if($disp5['disponibilite'] == 'Dimanche 14-40 - 16:10') echo 'CHECKED="checked"';?>value="Dimanche 14-40 - 16:10"/></td>
<td align="center"><input name="case6" id="case6" type="checkbox"<?php if($disp6['disponibilite'] == 'Dimanche 16:20 - 17:50') echo 'CHECKED="checked"';?>value="Dimanche 16:20 - 17:50"/></td>
   </tr>
   <tr>
<th style="width:200px; font-weight:normal">Samedi</th> 
<td align="center"><input name="case31" id="case31" type="checkbox" <?php if($disp31['disponibilite'] == 'Samedi 8:00 - 9:30') echo 'CHECKED="checked"';?> value="Samedi 8:00 - 9:30"/></td>
<td align="center"><input name="case32" id="case32" type="checkbox"<?php if($disp32['disponibilite'] == 'Samedi 9:30 - 11:00') echo 'CHECKED="checked"';?>value="Samedi 9:30 - 11:00"/></td>
<td align="center"><input name="case33" id="case33" type="checkbox"<?php if($disp33['disponibilite'] == 'Samedi 11:20 - 12:50')   echo 'CHECKED="checked"';?>value="Samedi 11:20 - 12:50"/></td>
<td align="center"><input name="case34" id="case34" type="checkbox"<?php if($disp34['disponibilite'] == 'Samedi 13:00 - 14-30') echo 'CHECKED="checked"';?>value="Samedi 13:00 - 14-30"/></td>
<td align="center"><input name="case35" id="case35" type="checkbox"<?php if($disp35['disponibilite'] == 'Samedi 14-40 - 16:10') echo 'CHECKED="checked"';?>value="Samedi 14-40 - 16:10"/></td>
<td align="center"><input name="case36" id="case36" type="checkbox"<?php if($disp36['disponibilite'] == 'Samedi 16:20 - 17:50') echo 'CHECKED="checked"';?>value="Samedi 16:20 - 17:50"/></td>
  </tr>
   </tbody>
</table>
</center>
<input class="btn_mod" type="submit" name="Appliquer" value="Modifier" />&nbsp;&nbsp;
<input class="btn_mod" type="reset" value="Annuler" />
 </form>
<?php
if(isset($_POST['Appliquer']))
{
if(isset($_POST['case31']) && $_POST['case31']!= " " ) {
 	$id_prof=$_POST['id_prof'];
	$case31=$_POST['case31'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case31' and id_disp= '$id_disp31'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case31','$annee','$semestre','$id_prof')");	
 
 	}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp31'"); }
	
  if(isset($_POST['case32']) && $_POST['case32']!= " " ){ 
 	$id_prof=$_POST['id_prof'];
	$case32=$_POST['case32'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case32' and id_disp= '$id_disp32'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case32','$annee','$semestre','$id_prof')");}}
 else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp32'"); }

   if(isset($_POST['case33']) && $_POST['case33']!= " " ){ 
 	$id_prof=$_POST['id_prof'];
	$case33=$_POST['case33'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case33' and id_disp= '$id_disp33'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case33','$annee','$semestre','$id_prof')");
}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp33'");}

if(isset($_POST['case34']) && $_POST['case34']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case34=$_POST['case34'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case34' and id_disp= '$id_disp34'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case34','$annee','$semestre','$id_prof')");
}} else{ mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp34'");}

 if(isset($_POST['case35']) && $_POST['case35']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case35=$_POST['case35'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case35' and id_disp= '$id_disp35'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case35','$annee','$semestre','$id_prof')");
}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp35'");}

if(isset($_POST['case36']) && $_POST['case36']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case36=$_POST['case36'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case36' and id_disp= '$id_disp36'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case36','$annee','$semestre','$id_prof')");
}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp36'");}


if(isset($_POST['case1']) && $_POST['case1']== "Dimanche 8:00 - 9:30" ) {
 	$id_prof=$_POST['id_prof'];
	$case1=$_POST['case1'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	
$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case1' and id_disp= '$id_disp1'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case1','$annee','$semestre','$id_prof')");}
  	} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp1'"); }
	
  if(isset($_POST['case2']) && $_POST['case2']== "Dimanche 9:30 - 11:00" ){ 
 	$id_prof=$_POST['id_prof'];
	$case2=$_POST['case2'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case2' and id_disp= '$id_disp2'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case2','$annee','$semestre','$id_prof')");}}
 else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp2'"); }

   if(isset($_POST['case3']) && $_POST['case3']== "Dimanche 11:20 - 12:50" ){ 
 	$id_prof=$_POST['id_prof'];
	$case3=$_POST['case3'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case3' and id_disp= '$id_disp3'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case3','$annee','$semestre','$id_prof')");
}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp3' and id_disp= '$id_disp3'");}

if(isset($_POST['case4']) && $_POST['case4']== "Dimanche 13:00 - 14-30"){ 
 	$id_prof=$_POST['id_prof'];
	$case4=$_POST['case4'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case4' and id_disp= '$id_disp4'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case4','$annee','$semestre','$id_prof')");
}} else{ mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp4'");}

 if(isset($_POST['case5']) && $_POST['case5']== "Dimanche 14-40 - 16:10"){ 
 	$id_prof=$_POST['id_prof'];
	$case5=$_POST['case5'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case5' and id_disp= '$id_disp5'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case5','$annee','$semestre','$id_prof')");
}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp5'");}

if(isset($_POST['case6']) && $_POST['case6']== "Dimanche 16:20 - 17:50"){ 
 	$id_prof=$_POST['id_prof'];
	$case6=$_POST['case6'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case6' and id_disp= '$id_disp6'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case6','$annee','$semestre','$id_prof')");
}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp= '$id_disp6'");}


if(isset($_POST['case7']) && $_POST['case7']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case7=$_POST['case7'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
	$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case7' and id_disp= '$id_disp7'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case7','$annee','$semestre','$id_prof')");}
} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp7'");}

if(isset($_POST['case8']) && $_POST['case8']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case8=$_POST['case8'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));
$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case8' and id_disp= '$id_disp8'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){	
	mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case8','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp8'");}

if(isset($_POST['case9']) && $_POST['case9']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case9=$_POST['case9'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case9' and id_disp= '$id_disp9'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case9','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp9'");}

if(isset($_POST['case10']) && $_POST['case10']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case10=$_POST['case10'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case10' and id_disp= '$id_disp10'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case10','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp10'");}

if(isset($_POST['case11']) && $_POST['case11']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case11=$_POST['case11'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case11' and id_disp= '$id_disp11'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case11','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp11'");}

if(isset($_POST['case12']) && $_POST['case12']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case12=$_POST['case12'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case12' and id_disp= '$id_disp12'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case12','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp12'");}

if(isset($_POST['case13']) && $_POST['case13']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case13=$_POST['case13'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case13' and id_disp= '$id_disp13'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case13','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp13'");}

if(isset($_POST['case14']) && $_POST['case14']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case14=$_POST['case14'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case14' and id_disp= '$id_disp14'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case14','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp14'");}

if(isset($_POST['case15']) && $_POST['case15']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case15=$_POST['case15'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case15' and id_disp= '$id_disp15'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case15','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp15'");}

if(isset($_POST['case16']) && $_POST['case16']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case16=$_POST['case16'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case16' and id_disp= '$id_disp16'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case16','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp16'");}

if(isset($_POST['case17']) && $_POST['case17']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case17=$_POST['case17'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case17' and id_disp= '$id_disp17'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case17','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp17'");}

if(isset($_POST['case18']) && $_POST['case18']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case18=$_POST['case18'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case18' and id_disp= '$id_disp18'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case18','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp18'");}

if(isset($_POST['case19']) && $_POST['case19']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case19=$_POST['case19'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case19' and id_disp= '$id_disp19'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case19','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp19'");}

if(isset($_POST['case20']) && $_POST['case20']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case20=$_POST['case20'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case20' and id_disp= '$id_disp20'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case20','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp20'");}

if(isset($_POST['case21']) && $_POST['case21']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case21=$_POST['case21'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case21' and id_disp= '$id_disp21'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case21','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp21'");}

if(isset($_POST['case22']) && $_POST['case22']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case22=$_POST['case22'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case22' and id_disp= '$id_disp22'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case22','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp22'");}

if(isset($_POST['case23']) && $_POST['case23']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case23=$_POST['case23'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case23' and id_disp= '$id_disp23'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case23','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp23'");}

if(isset($_POST['case24']) && $_POST['case24']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case24=$_POST['case24'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case24' and id_disp= '$id_disp24'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case24','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp24'");}

if(isset($_POST['case25']) && $_POST['case25']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case25=$_POST['case25'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case25' and id_disp= '$id_disp25'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case25','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp25'");}

if(isset($_POST['case26']) && $_POST['case26']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case26=$_POST['case26'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case26' and id_disp= '$id_disp26'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case26','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp26'");}

if(isset($_POST['case27']) && $_POST['case27']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case27=$_POST['case27'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case27' and id_disp= '$id_disp27'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case27','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp27'");}

if(isset($_POST['case28']) && $_POST['case28']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case28=$_POST['case28'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case28' and id_disp= '$id_disp28'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case28','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp28'");}

if(isset($_POST['case29']) && $_POST['case29']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case29=$_POST['case29'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case29' and id_disp= '$id_disp29'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case29','$annee','$semestre','$id_prof')");}} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp29'");}

if(isset($_POST['case30']) && $_POST['case30']!= " "){ 
 	$id_prof=$_POST['id_prof'];
	$case30=$_POST['case30'];
	$annee=addslashes(Htmlspecialchars($_POST['annee']));$semestre=addslashes(Htmlspecialchars($_POST['semestre']));
	$compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb from disponibilite where id_prof='$id_prof' and annee_uni='$annee' and semestre='$semestre' and disponibilite='$case30' and id_disp= '$id_disp30'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
 }
if($bool==true){mysqli_query($db,"insert into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case30','$annee','$semestre','$id_prof')");} else { mysqli_query($db,"DELETE FROM disponibilite WHERE id_disp='$id_disp30'");}




} ?><script langage='javascript'>alert('la Modification  est terminée avec succée ...');</script><?php
echo "<meta http-equiv='refresh' content='0; conslt_admin_dispo_prof.php' />"; }

 } else {?><script language="JavaScript">alert("l a  d i s p o n i b i l i t é  d e  <?php echo $nom .'  '.$prenom; ?>    n ' e s t   p a s  e n c o r e   s a i s i e !");</script><?php echo "<meta http-equiv='refresh' content='0; conslt_admin_dispo_prof.php' />";
     }	
     }
 ?>
</body>
</html>