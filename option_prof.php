<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
$reponse2 = $bdd->query("SELECT  id_prof FROM prof ");
$reponse2 = $bdd->query("SELECT * FROM prof,login WHERE id_prof='".$_GET['id_prof']."' and login.Num=prof.id_prof");
$donnees=$reponse2 ->fetch();
//fin de requete
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/ajout_utilisateur.css">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/table.css">
<title>consulter prof</title>
</head>
<body style="background-color:#07415f;">
<div class="container" style="width:600px; height:400px; margin-top:30px;">
 <br><br>
<p style="font-size:24px;color:font-family: monospace;  letter-spacing:2px; color:#FFF;,text-align:center; margin-top:-40px;">CONSULTER ENSEIGNANT </p>


<center>
<table id="rounded-corner" style="width:300px; height:280px; border-radius:40px;">
<thead>
<tr> 
 <tr><th scope="col" style="border-bottom:solid #999" class="rounded-q2">Civilité</th>  <td bgcolor="#CCFFFF";><?php echo $donnees['civilite']; ?></td>
</tr>
<tr> <th scope="col" style="border-bottom:solid #999" class="rounded-q2">nom</th> <td><?php echo $donnees['nom']; ?></td>
</tr>
<tr> <th scope="col" style="border-bottom:solid #999" class="rounded-q2">prenom</th> <td><?php echo $donnees['prenom']; ?></td>
</tr>
<tr> <th scope="col" style="border-bottom:solid #999" class="rounded-q4"> Tel</th> <td><?php echo '0'.$donnees['tel']; ?></td>
</tr>
<tr> <th scope="col" style="border-bottom:solid #999" class="rounded-q4"> E mail</th> <td><?php echo $donnees['email']; ?></td>
</tr>
<tr> <th scope="col" style="border-bottom:solid #999" class="rounded-q4"> Login</th> <td><?php echo $donnees['pseudo']; ?></td>
</tr>
<tr> <th scope="col" style="border-bottom:solid #999" class="rounded-q4"> Password</th> <td><?php echo $donnees['passe']; ?></td>
</tr>
 </tr>
 </thead>
  <tbody>
 <tr >
  </tr>
</table></center>

 <a href="gestion_des_prof.php" style="text-decoration:none"><input  type="button" value="précedant" class="prec" ></a>
</div>
</body>
</html>