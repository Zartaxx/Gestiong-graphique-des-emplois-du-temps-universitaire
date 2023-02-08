<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
//requete de liste
$reponse = $bdd->query("SELECT * FROM prof ");
$reponse1 = $bdd->query("SELECT * FROM login,utilisateur where login.Num = utilisateur.id_user and statut='prof'");

?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>consulter disponibilite</title>
 <link rel="stylesheet" type="text/css" media="screen" href="CSS/table.css">
 </head>
<body>
<?php include("menu_principale.php")?><br>
  <p style="font-size:22px; color:#FFF; letter-spacing:3px; word-spacing:3px;; font-family:'Comic Sans MS'; text-align:center ">
Disponibilité</p>
<center>
<table id="rounded-corner" style="width:800px;">
<thead>
<tr> 
 <th scope="col" class="rounded-q2">nom</th>
 <th scope="col" class="rounded-q2">prenom</th>
 <th scope="col"  width="270" colspan="2"    class="rounded-q4">Action</th>
 </tr><br>
  </thead>
  <tbody>
    <?php while($donnees=$reponse ->fetch()) { ?>
 <tr bgcolor="#CCFFFF";>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
  
 <td>
    <a href="ajouter_disponibilite.php?modif=<?php echo $donnees['id_prof'];?>" style=" padding-right:20px;"> <img src="image/ajouter2.png" width="30" height="30" title="ajouter"/></a> 
    
   <a href="modifier_disponibilite.php?id_prof=<?php echo $donnees['id_prof'];?>" style=" padding-right:20px;"><img src="image/modifier3.png" width="30" height="30" title="modifier"/></a> 
   
   <a href="admin_consulter_disponibilite.php?id_prof=<?php echo $donnees['id_prof'];?>" ><img src="image/consulter2.png" width="30" height="30" title="consulter"/></a> 

       
             <?php }?>
             
             <?php while($donnees=$reponse1 ->fetch()) { ?>
 <tr bgcolor="#CCFFFF";>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
  
 <td>
    <a href="ajouter_disponibilite.php?modif=<?php echo $donnees['id_user'];?>" style=" padding-right:20px;"> Ajouter</a> 
    
   <a href="modifier_disponibilite.php?modif=<?php echo $donnees['id_user'];?>" style=" padding-right:20px;"> Modifier</a> 
   
   <a href="admin_consulter_disponibilite.php?modif=<?php echo $donnees['id_user'];?>" > Consulter</a> 

       
             <?php }?>
</td>
</tr>
</table>
</center>
</body>
</html>