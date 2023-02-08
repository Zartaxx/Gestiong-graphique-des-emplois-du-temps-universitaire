<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
//requete de liste
$reponse = $bdd->query("SELECT * FROM prof ");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>module enseigne</title>
<link rel="stylesheet" type="text/css" href="CSS/menu.inc.css" />
<link rel="stylesheet" type="text/css" media="screen" href="CSS/table.css">

</head>
<body>
      <?php include("menu_principale.php")?><br><br>
<center>
 
<table id="rounded-corner" style="width:700px;">
<thead>
<tr> 
 <th scope="col" class="rounded-q2">nom</th>
 <th scope="col" class="rounded-q2">prenom</th>
 <th scope="col" colspan="2"    class="rounded-q4"> Modules enseignées</th>
 <a href="ajout_enseignement.php" style="text-decoration:none;"><input type="submit"  class="img2"value="Ajouter +"  title="Ajouter un enseignement"/></a>

 </tr><br>
 
 </thead>
  <tbody>
    <?php while($donnees=$reponse ->fetch()) { ?>
 <tr bgcolor="#CCFFFF";>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
  
 <td>
   <a href="option_mod_enseigne.php?module=<?php echo $donnees['id_prof'];?>"><img src="image/consulter2.png" width="30" height="30" title="consulter"/></a> 
       
             <?php }?>
               </td>
 </tr>
</table></center>
</body>
</html>