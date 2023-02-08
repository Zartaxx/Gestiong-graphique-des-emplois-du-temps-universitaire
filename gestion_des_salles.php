<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
$scripts = array();
$tri= " type DESC";
$liste_tri = array('type');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri))
{
switch($_GET['tri'])
{
	case 'type':
 	$tri = ' '.$_GET['tri'].' ASC';
	break;
	 
}}
 $scripts1 = array();
$tri1= " bloc DESC";
$liste_tri1 = array('bloc');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri1))
{
switch($_GET['tri'])
{
	case 'bloc':
 	$tri = ' '.$_GET['tri'].' ASC';
	break; 
}}
 $scripts2 = array();
$tri2= " capacite DESC";
$liste_tri2 = array('capacite');
if(isset($_GET['tri']) && in_array($_GET['tri'],$liste_tri2))
{
switch($_GET['tri'])
{
	case 'capacite':
 	$tri = ' '.$_GET['tri'].' ASC';
	break; 
}}
?>
<!DOCTYPE html>
<html>
     <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/IMAGE1.png" type="image/x-icon">
     <title>Gestion des salles.</title>
</head>
<body style="background-color: rgb(219,226,226);">
     <?php include("menu_principale.php");
	 
	 if(isset($_GET['id_salle']))
{
$id_salle=$_GET['id_salle'];
mysqli_query($db,"DELETE FROM salle WHERE id_salle='$id_salle'");
mysqli_query($db,"DELETE FROM seance WHERE id_sal='$id_salle'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
 }
	 
	 ?> <br>
<!-- center le premier paragraphe -->
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Salles
              </h2>
          </div>
    </div>
    <br>
     <!-- fin de centre -->
<?php $compte=mysqli_fetch_array(mysqli_query($db,"select count(*) as nb  from salle"));
  if($compte['nb']>0){ ?>

  <div class="container" style="margin-bottom: 90px;">
<table class="table table-hover table-dark table-striped table-responsive-md">
<thead style="letter-spacing:2px;background: #0F1520; color: white;">
<tr> 
 <th scope="col"   class="rounded-q2">Libelle de la salle</th>
 <th scope="col" width="240">Type <?php 
  foreach($liste_tri as $typetri)
  {
 	  
	  	  echo '<a style="font-size:18px; " href="gestion_des_salles.php?tri='.$typetri.'"><img src="image/t2.png" width="15" height="15"></a>';

  }
  ?></th>
 <th scope="col" width="220" >bloc <?php 
  foreach($liste_tri1 as $typetri1)
  {
 	  
	  	  echo '<a style="font-size:18px; " href="gestion_des_salles.php?tri='.$typetri1.'"><img src="image/t1.png" width="15" height="15"></a>';

  }
  ?></th>
 <th scope="col" width="200"> capacité <?php 
  foreach($liste_tri2 as $typetri2)
  {
 	  
	  	  echo '<a style="font-size:18px; " href="gestion_des_salles.php?tri='.$typetri2.'"><img src="image/t2.png" width="15" height="15"></a>';

  }
  ?></th>
 <th scope="col"  width="180"> Action </th>
 </tr>
 </thead>
  <tbody style="height:30px;">
  
<?php $reponse=mysqli_query($db,"SELECT id_salle,libelle_salle,type,bloc,capacite FROM salle ORDER BY $tri"  );?>

 <?php while($donnees=mysqli_fetch_array($reponse)){
		 ?>
 <tr style="height:30px;">  
 <td style="height:30px;"><?php echo $donnees['libelle_salle']; ?></td>
 <td style="height:30px;"><?php echo $donnees['type']; ?></td>
 <td style="height:30px;"><?php echo $donnees['bloc']; ?></td>
 <td style="height:30px;"><?php echo $donnees['capacite']; ?></td>
 <td style="height:30px;">
   <a href="modifier_salle.php?modif_salle=<?php echo $donnees['id_salle'];?>"><img src="image/modifier3.png" title="modifier" width="30" height="30";/></a>   
  <a href="emplois_du_temps_salle.php?id_salle=<?php echo $donnees['id_salle'];?>"><img src="image/EDT2.png" width="30" height="30" title="afficher EDT"/></a>
  <a href="gestion_des_salles.php?id_salle=<?php echo $donnees['id_salle'];?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer"/></a> 
     </td>
         <?php } ?>
 </tr>
</tbody>
 </table>
</div>

 <?php } else { 	?><script language="JavaScript">alert("la table salle est vide!");</script><?php	
		echo "<meta http-equiv='refresh' content='0; ajouter_salle.php' />";
} ?>
 </body>
</html>
