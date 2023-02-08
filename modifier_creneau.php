<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
$for=mysqli_query($db,"select id_formation,nom_formation from formation");
  ?>
<html>
<head>
<meta charset="UTF-8">
<title>creneau horaire </title>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/creneau.css">
</head>

<body style="background-color:#07415f;">
<br />
 <p style=" margin-left:15px; color:#fff;font-size:16px;	font-family:Verdana, Geneva, sans-serif;font-weight:bold;letter-spacing:1px;
	word-spacing:5px; padding-bottom:5px;">Choisissez une formation ! </p>
 <table id="rounded-corner">
<thead>
<tr> 
<th scope="col" style=" width:auto;"   class="rounded-q2">Formation</th>
<th scope="col"  style=" width:50px;"  class="rounded-q4"> Modifier créneau </th>
</tr></thead>
<?php 
while($a=mysqli_fetch_array($for)){ ?> 
<tr>
<td  style="color:#000; font-size:16px;width:auto;" ><b><?php  echo  $a['nom_formation']; ?></b>
<td style=" width:50px;"><a href="modifier_creneau_par_for.php?modifier=<?php  echo  $a['id_formation']; ?>" >Modifier</a> </td><?php }?>
</tr>
</table>
 
 </body>
</html>


    
     