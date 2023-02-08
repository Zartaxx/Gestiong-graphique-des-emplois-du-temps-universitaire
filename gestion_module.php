<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
include("menu_principale.php");
$scripts = array();
$tri= " formation DESC";
$liste_tri = array('formation');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri))
{
switch($_GET['tri'])
{
	case 'formation':
 	$tri = ' '.$_GET['tri'].' ASC';
	break; 
}}

 $scripts1 = array();
$tri1= " module DESC";
$liste_tri1 = array('module');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri1))
{
switch($_GET['tri'])
{
	case 'module':
 	$tri = ' '.$_GET['tri'].' ASC';
	break; 
}}
?>
<!doctype html>
<html>
<head>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Gestion des modules.</title>
<style>
       .main {
       width: 40%;
       margin: 50px auto;
       }
</style>
</head>
<?php 

/*	Supprimier tous les entres en relation		*/

if(isset($_GET['id_module']))
{
$id_module=$_GET['id_module'];
mysqli_query($db,"DELETE FROM module WHERE id_module='$id_module'");
mysqli_query($db,"DELETE FROM enseignement WHERE id_module='$id_module'");
mysqli_query($db,"DELETE from seance where id_mod='$id_module'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php

    echo "<meta http-equiv='refresh' content='0; gestion_module.php' />";

 }

?>
<body style="background-color: rgb(219,226,226);">
<!-- center le premier paragraphe -->
     <br><br>
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Modules.
              </h2>
          </div>
    </div>
     <!-- fin de centre -->
     <!-- début de form zonne de recherche -->    
     <div class="main">
      <form name="chercher" action="recherche_module.php"  method="post">
       <div class="input-group">
         <input type="text" name="cher_module" class="form-control" placeholder="Rechercher un module" style="font-size: 16px;" required="">
         <div class="input-group-append">
            <button class="btn btn-dark" type="submit">
                <i><img src="image/search1.png" style="width: 45%;"></i>
            </button>
        </div>
       </div>
     </form>
     </div>
     <!-- recherche fin -->
<?php $compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb  from module"));
  if($compte['nb']>0){ ?>

 <div class="container" style="margin-bottom: 90px;">
<table class="table table-hover table-dark table-striped table-responsive-md">
<thead>
<tr> 
 <th width="260">Libelle de formation <?php 
  foreach($liste_tri as $typetri)
  {
    echo '<a style="font-size:18px; " href="gestion_module.php?tri='.$typetri.'"><img src="image/t1.png" width="15" height="15"></a>';
  }
  ?></th>
 <th scope="col" width="210">Semestre</th>
 <th scope="col" width="260">Libelle de module <?php 
  foreach($liste_tri1 as $typetri1)
  {	  
	  echo '<a style="font-size:18px; " href="gestion_module.php?tri='.$typetri1.'"><img src="image/t2.png" width="15" height="15"></a>';
  }
  ?> </th>
 <th scope="col" width="230">volume horaire</th>
 <th scope="col" > Action</th>
</tr>
</thead>

<?php
$reponse=mysqli_query($db,"SELECT id_module, formation.nom_formation AS formation, module.libelle_module AS module, volume_horaire, semestre.libelle_semestre AS semestre FROM module, formation, semestre WHERE formation.id_formation = module.id_formation
AND semestre.id_semestre = module.id_semestre AND semestre.id_formation = formation.id_formation    ORDER BY $tri, `module`.`id_formation` ASC,semestre");?>
   
  <?php $var1="";   ?>
 <?php while($a=mysqli_fetch_array($reponse))
  { 
 $var=$a['formation'];
  
 if($var1!=$var)  
 {
	 $var1=$var;
  ?>
 <tr>  
 <td style="letter-spacing:2px;background: #0F1520; color: white;
"><b><?php  echo  $a['formation'];?></b></td>
 <td colspan="4" style="background: #0F1520"></td>
 </tr>
  <?php } ?>

<tr>
  <td> </td>
  <td style="width:100px; "><b><?php  echo  $a['semestre'];  ?></b></td>
  <td style="  width:0 auto;"><b><?php  echo  $a['module'];?></b></td> 
  <td style="width:150px;"><b><?php echo $a['volume_horaire']; ?></b></td> 
  <td >
  <a href="modifier_module.php?modif_dip=<?php echo $a['id_module'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30"/></a>
  <a href="gestion_module.php?id_module=<?php echo $a['id_module'];?>"onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a>
  </td> 
  <?php   } ?>
 </tr>
  </table>
</div>
 <a name="haut" id="haut"></a>
 <div><a id="cRetour" class="cInvisible" href="#"></a></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});
</script>
<?php } else { 	?><script language="JavaScript">alert("la table module est vide!");</script><?php	
		echo "<meta http-equiv='refresh' content='0; ajouter_module.php' />";
} ?>
</body>
</html>

