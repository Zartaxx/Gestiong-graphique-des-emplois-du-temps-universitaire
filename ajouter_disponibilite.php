<?php include('menu_principale.php') ?>
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
     <title>Ajouter disponibilité</title>
     <!-- un peu de style appliqué juste localement pour les bouttons et les select -->
     <style type="text/css">
        span:first-child
         {
        padding-left: 40px;
        float: left;
         }

        span:last-child
         {
        padding-right: 40px;
        float: right;
         }
        .localslct{
        height: 35px; width: 55vh;font-size: 16px;}
        .localDispo{
        height: 35px; width: 90px;font-size: 13px;}
     </style>
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
	<div class="container" style="margin-bottom: 40px;">
<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
if(isset($_GET['modif'])){
$id_prof=$_GET['modif'];
$ligne=mysqli_fetch_array(mysqli_query($db,"select UPPER(prof.nom) as nom,UPPER(prof.prenom) as prenom,prof.civilite from prof,utilisateur where id_prof='$id_prof' or id_user='$id_prof'"));
$nom=mysqli_real_escape_string($db,htmlspecialchars($ligne['nom']));
$prenom=mysqli_real_escape_string($db,htmlspecialchars($ligne['prenom']));
$civ=mysqli_real_escape_string($db,htmlspecialchars($ligne['civilite']));

$disp31=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Samedi' and heure='08:00-09:30'"));
$disp32=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Samedi' and heure='09:40-11:10' "));
$disp33=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof  and jour='Samedi' and heure='11:20-12:50'"));

$disp34=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Samedi' and heure='13:00-14-30'"));

$disp35=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Samedi' and heure='14-40-16:10'"));
$disp36=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Samedi' and heure='16:20-17:50'"));


$disp1=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Dimanche' and heure='08:00-09:30'"));
$disp2=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Dimanche' and heure='09:40-11:10' "));
$disp3=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof  and jour='Dimanche' and heure='11:20-12:50'"));

$disp4=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Dimanche' and heure='13:00-14-30'"));

$disp5=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Dimanche' and heure='14-40-16:10'"));
$disp6=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Dimanche' and heure='16:20-17:50'"));

$disp7=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Lundi' and heure='08:00-09:30'"));
$disp8=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Lundi' and heure='09:40-11:10' "));
$disp9=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof  and jour='Lundi' and heure='11:20-12:50'"));
$disp10=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Lundi' and heure='13:00-14-30'"));
$disp11=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Lundi' and heure='14-40-16:10'"));
$disp12=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Lundi' and heure='16:20-17:50'"));

$disp13=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mardi' and heure='08:00-09:30'"));
$disp14=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mardi' and heure='09:40-11:10' "));
$disp15=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof  and jour='Mardi' and heure='11:20-12:50'"));
$disp16=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mardi' and heure='13:00-14-30'"));
$disp17=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mardi' and heure='14-40-16:10'"));
$disp18=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mardi' and heure='16:20-17:50'"));

$disp19=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mercredi' and heure='08:00-09:30'"));
$disp20=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mercredi' and heure='09:40-11:10' "));
$disp21=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof  and jour='Mercredi' and heure='11:20-12:50'"));
$disp22=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mercredi' and heure='13:00-14-30'"));
$disp23=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mercredi' and heure='14-40-16:10'"));
$disp24=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Mercredi' and heure='16:20-17:50'"));

$disp25=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Jeudi' and heure='08:00-09:30'"));
$disp26=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Jeudi' and heure='09:40-11:10' "));
$disp27=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof  and jour='Jeudi' and heure='11:20-12:50'"));
$disp28=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Jeudi' and heure='13:00-14-30'"));
$disp29=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Jeudi' and heure='14-40-16:10'"));
$disp30=mysqli_fetch_array(mysqli_query($db,"SELECT jour,heure,prof.id_prof
FROM seance,prof WHERE prof.id_prof ='$id_prof' AND seance.id_pr = prof.id_prof and jour='Jeudi' and heure='16:20-17:50'"));
?>

<?php
if(isset($_POST['annee'])){ 
$annee=$_POST['annee'];
$semestre=$_POST['semestre'];
$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from disponibilite where annee_uni='$annee' and semestre='$semestre' and id_prof='$id_prof'"));
$bool=true;
if($compte['nb']>0)
{
$bool=true;
?> <SCRIPT LANGUAGE="Javascript">	alert("Erreur d\'insertion, la disponibilité de ce prof a été déja saisi!"); </SCRIPT> <?php
echo "<meta http-equiv='refresh' content='0; conslt_admin_dispo_prof.php' />";
}
if($bool==true){
if(isset($_POST['case31'])){ 
$case31=$_POST['case31'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case31','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case32'])){ 
$case32=$_POST['case32'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case32','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case33'])){ 
$case33=$_POST['case33'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case33','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case34'])){ 
$case34=$_POST['case34'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case34','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case35'])){ 
$case35=$_POST['case35'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case35','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case36'])){ 
$case36=$_POST['case36'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case36','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case1'])){ 
$case1=$_POST['case1'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case1','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case2'])){ 
$case2=$_POST['case2'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case2','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case3'])){ 
$case3=$_POST['case3'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case3','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case4'])){ 
$case4=$_POST['case4'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case4','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case5'])){ 
$case5=$_POST['case5'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case5','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case6'])){ 
$case6=$_POST['case6'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case6','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case7'])){ 
$case7=$_POST['case7'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case7','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case8'])){ 
$case8=$_POST['case8'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case8','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case9'])){ 
$case9=$_POST['case9'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case9','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case10'])){ 
$case10=$_POST['case10'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case10','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case11'])){ 
$case11=$_POST['case11'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case11','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case12'])){ 
$case12=$_POST['case12'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case12','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case13'])){ 
$case13=$_POST['case13'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case13','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case14'])){ 
$case14=$_POST['case14'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case14','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case15'])){ 
$case15=$_POST['case15'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case15','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case16'])){ 
$case16=$_POST['case16'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case16','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case17'])){ 
$case17=$_POST['case17'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case17','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case18'])){ 
$case18=$_POST['case18'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case18','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case19'])){ 
$case19=$_POST['case19'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case19','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case20'])){ 
$case20=$_POST['case20'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case20','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case21'])){  
$case21=$_POST['case21'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case21','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case22'])){ 
$case22=$_POST['case22'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case22','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case23'])){ 
$case23=$_POST['case23'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case23','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case24'])){ 
$case24=$_POST['case24'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case24','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case25'])){ 
$case25=$_POST['case25'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case25','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case26'])){ 
$case26=$_POST['case26'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case26','$annee','$semestre','$id_prof')");
} 
if(isset($_POST['case27'])){ 
$case27=$_POST['case27'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case27','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case28'])){ 
$case28=$_POST['case28'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case28','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case29'])){ 
$case29=$_POST['case29'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case29','$annee','$semestre','$id_prof')");
}
if(isset($_POST['case30'])){ 
$case30=$_POST['case30'];
mysqli_query($db,"INSERT into disponibilite(disponibilite,annee_uni,semestre,id_prof) values ('$case30','$annee','$semestre','$id_prof')");
}
echo "<meta http-equiv='refresh' content='0; conslt_admin_dispo_prof.php' />";
?> <SCRIPT LANGUAGE="Javascript">	alert(" Ajout avec succés"); </SCRIPT> <?php

}
 }
else {
 
  ?>
  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  	<br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto text-center form p-4">
                    <h3 class="display-5 py-1">Disponibilité de : <?php echo $civ;?> <?php echo $nom;?>  <?php echo $prenom;?>.</h3><br>
                    <div class="px-5">
                        <form method="post" class="justify-content-center">
                        	<div>
                               <span>
                               	<div class="form-group">                              
                                 <select class="form-control localslct" name="annee" required>
                                   <option selected disabled value="">Année Universitaire</option>
                                   <option value="2019-2020">2019-2020</option>
                                   <option value="2020-2021">2020-2021</option>
                                   <option value="2021-2022">2021-2022</option>
                                   <option value="2022-2023">2022-2023</option>
                                   <option value="2023-2024">2023-2024</option>
                                   <option value="2024-2025">2024-2025</option>
                                   <option value="2025-2026">2025-2026</option>
                                   <option value="2026-2027">2026-2027</option>
                                   <option value="2027-2028">2027-2028</option>
                                   <option value="2028-2029">2028-2029</option>
                                   <option value="2029-2030">2029-2030</option>
                                   <option value="2030-2031">2030-2031</option>
                                   <option value="2031-2032">2031-2032</option>
                                   <option value="2032-2033">2032-2033</option>
                                   <option value="2033-2034">2033-2034</option>
                                   <option value="2034-2035">2034-2035</option>
                                   <option value="2035-2036">2035-2036</option>
                                   <option value="2036-2037">2036-2037</option>
                                 </select>
                                </div>
                               </span>
                               <span>
                               	<div class="form-group">                                
                                 <select class="form-control localslct" name="semestre" required>
                                    <option  selected disabled value="">Semestre</option>
                                    <?php $sem=mysqli_query($db,"select  distinct  libelle_semestre from semestre");
                                    while($a=mysqli_fetch_array($sem)){
                                    echo '<option value="'.$a['libelle_semestre'].'">'.$a['libelle_semestre'].'</option>';
                                    }?>
                                 </select>
                                </div>
                               </span>
                            </div>
                            
                            <div class="form-group">
                            	<table class="table table-hover table-secondary table-responsive-xs table-striped" style="font-size: 12px">
                                <thead>
                                <tr> 
                                 <th style="font-weight:normal;">JOUR / HEURE</th>
                                 <th>08:00 - 09:30</th>
                                 <th>09:40 - 11:10</th>
                                 <th>11:20 - 12:50</th>
                                 <th>13:00 - 14-30</th>
                                 <th>14-40 - 16:10</th>
                                 <th>16:20 - 17:50</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 
                               
                                 <tr>
                                 <th style="font-weight:normal">Lundi</th>
 
                                 <td align="center"><input name="case7" id="case7" type="checkbox" <?php if($disp7['jour'] == 'Lundi' && $disp7['heure'] =='08:00-09:30') echo ' CHECKED="checked"'; ?> value="Lundi 8:00 - 9:30"/></td>
                                 <td align="center"><input name="case8" id="case8" type="checkbox" <?php if($disp8['jour'] == 'Lundi' && $disp8['heure'] =='09:40-11:10') echo ' CHECKED="checked"'; ?> value="Lundi 9:30 - 11:00"/></td>
                                 <td align="center"><input name="case9" id="case9" type="checkbox"<?php if($disp9['jour'] == 'Lundi' && $disp9['heure'] =='11:20-12:50') echo ' CHECKED="checked"'; ?>  value="Lundi 11:20 - 12:50" /></td>
                                 <td align="center"><input name="case10" id="case10" type="checkbox"<?php if ($disp10['jour'] == 'Lundi' && $disp10['heure'] =='13:00-14-30') echo ' CHECKED="checked"'; ?>  value="Lundi 13:00 - 14-30" /></td>
                                 <td align="center"><input name="case11" id="case11" type="checkbox"<?php if($disp11['jour'] == 'Lundi' && $disp11['heure'] =='14-40-16:10') echo ' CHECKED="checked"'; ?>  value="Lundi 14-40 - 16:10" /></td>
                                 <td align="center"><input name="case12" id="case12" type="checkbox" <?php if($disp12['jour'] == 'Lundi' && $disp12['heure'] =='16:20-17:50') echo ' CHECKED="checked"'; ?> value="Lundi 16:20 - 17:50" /> </td>
                                 </tr>
                                 <tr>
                                 <th style="font-weight:normal">Mardi</th>
                                 <td align="center"><input name="case13" id="case13" type="checkbox"  <?php if($disp13['jour'] == 'Mardi' && $disp13['heure'] =='08:00-09:30') echo ' CHECKED="checked"'; ?> value="Mardi 8:00 - 9:30"/></td>
                                 <td align="center"><input name="case14" id="case14" type="checkbox" <?php if($disp14['jour'] == 'Mardi' && $disp14['heure'] =='09:40-11:10') echo ' CHECKED="checked"'; ?> value="Mardi 9:30 - 11:00"/></td>
                                 <td align="center"><input name="case15" id="case15" type="checkbox" <?php if($disp15['jour'] == 'Mardi' && $disp15['heure'] =='11:20-12:50') echo ' CHECKED="checked"'; ?> value="Mardi 11:20 - 12:50" /></td>
                                 <td align="center"><input name="case16" id="case16" type="checkbox" <?php if($disp16['jour'] == 'Mardi' && $disp16['heure'] =='13:00-14-30') echo ' CHECKED="checked"'; ?> value="Mardi 13:00 - 14-30" /></td>
                                 <td align="center"><input name="case17" id="case17" type="checkbox" <?php if($disp17['jour'] == 'Mardi' && $disp17['heure'] =='14-40-16:10') echo ' CHECKED="checked"'; ?> value="Mardi 14-40 - 16:10" /></td>
                                 <td align="center"><input name="case18" id="case18" type="checkbox" <?php if($disp18['jour'] == 'Mardi' && $disp18['heure'] =='16:20-17:50') echo ' CHECKED="checked"'; ?> value="Mardi 16:20 - 17:50" /></td>
                                 </tr>
                                 <tr>
                                 <th style="font-weight:normal">Mercredi</th>
                                 <td align="center"><input name="case19" id="case19" type="checkbox"<?php if($disp19['jour'] == 'Mercredi' && $disp19['heure'] =='08:00-09:30') echo ' CHECKED="checked"'; ?>  value="Mercredi 8:00 - 9:30"/></td> 
     
                                 <td align="center"><input name="case20" id="case20" type="checkbox" <?php if($disp20['jour'] == 'Mercredi' && $disp20['heure'] =='09:40-11:10') echo ' CHECKED="checked"'; ?> value="Mercredi 9:30 - 11:00"/></td>

                                 <td align="center"><input name="case21" id="case21" type="checkbox" <?php if($disp21['jour'] == 'Mercredi' && $disp21['heure'] =='11:20-12:50') echo ' CHECKED="checked"'; ?> value="Mercredi 11:20 - 12:50" /></td>
                                 <td align="center"><input name="case22" id="case22" type="checkbox"  <?php if($disp22['jour'] == 'Mercredi' && $disp22['heure'] =='13:00-14-30') echo ' CHECKED="checked"'; ?> value="Mercredi 13:00 - 14-30" /></td>
                                 <td align="center"><input name="case23" id="case23" type="checkbox" <?php if($disp23['jour'] == 'Mercredi' && $disp23['heure'] =='14-40-16:10') echo ' CHECKED="checked"'; ?>  value="Mercredi 14-40 - 16:10" /></td>
                                 <td align="center"><input name="case24" id="case24" type="checkbox" <?php if($disp24['jour'] == 'Mercredi' && $disp24['heure'] =='16:20-17:50') echo ' CHECKED="checked"'; ?>  value="Mercredi 16:20 - 17:50" /></td>
                                 </tr>
                                 <tr>
                                 <th style="font-weight:normal">Jeudi</th>
                                 <td align="center"><input name="case25" id="case25" type="checkbox"<?php if($disp25['jour'] == 'Jeudi' && $disp25['heure'] =='08:00-09:30') echo ' CHECKED="checked"'; ?>  value="Jeudi 8:00 - 9:30"/></td>
                                 <td align="center"><input name="case26" id="case26" type="checkbox" <?php if($disp26['jour'] == 'Jeudi' && $disp26['heure'] =='09:40-11:10') echo ' CHECKED="checked"'; ?> value="Jeudi 9:30 - 11:00"/></td>
                                 <td align="center"><input name="case27" id="case27" type="checkbox" <?php if($disp27['jour'] == 'Jeudi' && $disp27['heure'] =='11:20-12:50') echo ' CHECKED="checked"'; ?> value="Jeudi 11:20 - 12:50" /></td>
                                 <td align="center"><input name="case28" id="case28" type="checkbox" <?php if($disp28['jour'] == 'Jeudi' && $disp28['heure'] =='13:00-14-30') echo ' CHECKED="checked"'; ?> value="Jeudi 13:00 - 14-30" /></td>
                                 <td align="center"><input name="case29" id="case29" type="checkbox" <?php if($disp29['jour'] == 'Jeudi' && $disp29['heure'] =='14-40-16:10') echo ' CHECKED="checked"'; ?> value="Jeudi 14-40 - 16:10" /></td>
                                 <td align="center"><input name="case30" id="case30" type="checkbox" <?php if($disp30['jour'] == 'Jeudi' && $disp30['heure'] =='16:20-17:50') echo ' CHECKED="checked"'; ?> value="Jeudi 16:20 - 17:50" /></td>
                                 </tr>
                                <tr>  
                                 <th style="font-weight:normal">Vendredi</th>
                                 <td align="center"><input name="case1" id="case1" type="checkbox" <?php if($disp1['jour'] == 'Dimanche' && $disp1['heure'] =='08:00-09:30') echo ' CHECKED="checked"'; ?> value="Dimanche 8:00 - 9:30"/></td>
                                 <td align="center"><input name="case2" id="case2" type="checkbox" <?php if($disp2['jour']== 'Dimanche' &&  $disp2['heure'] =='09:40-11:10') echo ' CHECKED="checked"'; ?> value="Dimanche 9:30 - 11:00"/></td>
                                 <td align="center"><input name="case3" id="case3" type="checkbox" <?php if($disp3['jour'] == 'Dimanche' &&  $disp3['heure'] =='11:20-12:50') echo ' CHECKED="checked"'; ?> value="Dimanche 11:20 - 12:50" /></td>
                                 <td align="center"><input name="case4" id="case4" type="checkbox" <?php if($disp4['jour'] == 'Dimanche' &&  $disp4['heure'] =='13:00-14-30') echo ' CHECKED="checked"'; ?> value="Dimanche 13:00 - 14-30" /></td>
                                 <td align="center"><input name="case5" id="case5" type="checkbox" <?php if($disp5['jour'] == 'Dimanche' &&  $disp5['heure'] =='14-40-16:10') echo ' CHECKED="checked"'; ?> value="Dimanche 14-40 - 16:10" /></td>
                                 <td align="center"><input name="case6" id="case6" type="checkbox" <?php if($disp6['jour'] == 'Dimanche' &&  $disp6['heure'] =='16:20-17:50') echo ' CHECKED="checked"'; ?> value="Dimanche 16:20 - 17:50" /></td>
                                 </tr>
                                 <tr>
                                    <th style="font-weight:normal">Samedi</th>
 
                                 <td align="center"><input name="case31" id="case31" type="checkbox" <?php if($disp31['jour'] == 'Samedi' && $disp31['heure'] =='08:00-09:30') echo ' CHECKED="checked"'; ?> value="Samedi 8:00 - 9:30"/></td>
                                 <td align="center"><input name="case32" id="case32" type="checkbox" <?php if($disp32['jour'] == 'Samedi' && $disp32['heure'] =='09:40-11:10') echo ' CHECKED="checked"'; ?> value="Samedi 9:30 - 11:00"/></td>
                                 <td align="center"><input name="case33" id="case33" type="checkbox"<?php if($disp33['jour'] == 'Samedi' && $disp33['heure'] =='11:20-12:50') echo ' CHECKED="checked"'; ?>  value="Samedi 11:20 - 12:50"/></td>
                                 <td align="center"><input name="case34" id="case34" type="checkbox"<?php if ($disp34['jour'] == 'Samedi' && $disp34['heure'] =='13:00-14-30') echo ' CHECKED="checked"'; ?>  value="Samedi 13:00 - 14-30" /></td>
                                 <td align="center"><input name="case35" id="case35" type="checkbox"<?php if($disp35['jour'] == 'Samedi' && $disp35['heure'] =='14-40-16:10') echo ' CHECKED="checked"'; ?>  value="Samedi 14-40 - 16:10" /></td>
                                 <td align="center"><input name="case36" id="case36" type="checkbox" <?php if($disp36['jour'] == 'Samedi' && $disp36['heure'] =='16:20-17:50') echo ' CHECKED="checked"'; ?> value="Samedi 16:20 - 17:50" /> </td>
                                 </tr>

                              </tbody>
                                 </table>
                            </div>
                            <div>
                               <span>
                                 <a href="conslt_admin_dispo_prof.php"><input type="button" value="Précedent" name="Fermer" class="btn btn-outline-warning btn-lg localDispo"></a>
                               </span>
                               <span>
                                 <button value="Appliquer" name="Appliquer" type="submit" class="btn btn-outline-primary btn-lg localDispo">Appliquer</button>
                               </span>
                               <span>
                                 <button value="Annuler" type="reset" class="btn btn-outline-light btn-lg localDispo">Annuler</button>
                               </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
</div>
</form>
<?php
} }
?> 
</body>
</html>