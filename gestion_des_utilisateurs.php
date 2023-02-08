<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
?>
<!DOCTYPE>
<html>
<head>
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/IMAGE1.png" type="image/x-icon">
     <title>Gestion des utilisateurs.</title>
</head>
<body style="background-color: rgb(219,226,226);">
   <?php include("menu_principale.php");
    //requete qui permet de la suppression un utilisateur
if(isset($_GET['supp']))
{
$reponse = $bdd->query("DELETE FROM  utilisateur WHERE id_user='".$_GET['id_user']."'");
$reponse = $bdd->query("DELETE FROM  login WHERE Num='".$_GET['id_user']."'   ");
?><SCRIPT LANGUAGE="Javascript">alert("Suppresion d'utilisateur avec succés");</SCRIPT><?php
}
//requete de liste pour les utilisateur
$reponse = $bdd->query("SELECT DISTINCT utilisateur.id_user, utilisateur.civilite, pseudo, passe, statut, utilisateur.tel, utilisateur.email, utilisateur.nom, utilisateur.prenom FROM login,utilisateur
WHERE login.Num = utilisateur.id_user");

//requete qui permet de la suppression de prof
if(isset($_GET['supp1']))
{
$reponse1 = $bdd->query("DELETE FROM prof WHERE id_prof='".$_GET['id_prof']."'");
$reponse1 = $bdd->query("DELETE FROM login WHERE Num='".$_GET['id_prof']."'");

?><SCRIPT LANGUAGE="Javascript">alert("Suppresion du prof avec succés");</SCRIPT><?php
}
//requete de liste pour les profs
$reponse1 = $bdd->query("SELECT DISTINCT prof.id_prof, prof.civilite, pseudo, passe, statut, prof.tel, prof.email, prof.nom, prof.prenom
FROM login, prof WHERE login.Num = prof.id_prof");    ?><br>
<!-- center le premier paragraphe -->
     <br>
     <div class="row">
          <div class="col d-flex justify-content-center">
              <h2 style=" letter-spacing:2px; color:#000;">
                Gestion Des Utilisateurs.
              </h2>
          </div>
    </div><br>
<!-- fin de centre -->
   <?php $compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb  FROM utilisateur"));
  if($compte['nb']>0){ ?>
 <div class="container" style="margin-bottom: 90px;">
<table class="table table-hover table-dark table-striped table-responsive-md">
<thead><tr> 
 <th scope="col">Civilité</th>
 <th scope="col">Nom</th>
 <th scope="col">Prenom</th>
 <th scope="col">Téléphone</th>
 <th scope="col">E mail</th>
 <th scope="col">Login</th>
 <th scope="col">Password</th>
 <th scope="col">Profil</th>
 <th scope="col">Action</th>
 </tr></thead>
 
 <tbody>
 <?php while($donnees=$reponse1 ->fetch()) { ?>
 <tr>
 <td><?php echo $donnees['civilite']; ?></td>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
 <td><?php echo $donnees['tel']; ?></td>
 <td><?php echo $donnees['email']; ?></td>
 <td><?php echo $donnees['pseudo']; ?></td>
 <td><?php echo $donnees['passe']; ?></td>
 <td><?php echo $donnees['statut']; ?></td>
  <td>
  
 
<a href="modifier_prof_ds_espc_utilisateur.php?modif_prof=<?php echo $donnees['id_prof'];?>"><img src="image/modifier3.png" title="modifier un prof" width="30" height="30"/></a>
       
<a href="gestion_des_utilisateurs.php?id_prof=<?php echo $donnees['id_prof'];?> &supp1=ok" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer un prof" style="margin-right:-20px;"/></a></td>
  <?php }?> 
  
  <?php while($donnees=$reponse ->fetch()) { ?>
 <tr>
  <td><?php echo $donnees['civilite']; ?></td>
  <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
 <td><?php echo $donnees['tel']; ?></td>
 <td><?php echo $donnees['email']; ?></td>
 <td><?php echo $donnees['pseudo']; ?></td>
 <td><?php echo $donnees['passe']; ?></td>
 <td><?php echo $donnees['statut']; ?></td>
 <td>
 
 <!-- <a href="ajout_utilisateur.php"><img src="image/ajouter2.png" width="30" height="30" title="Ajouter un utilisateur"/></a> -->

  <a href="modifier_utilisateur.php?modif_dip=<?php echo $donnees['id_user'];?>" onClick="return(confirm('Etes-vous sûr de vouloir modifier cette entrée?\ntous les enregistrements en relation avec cette entrée seront modifier'));"><img src="image/modifier3.png" title="modifier un utilisateur" width="30" height="30"/></a>
  
    <a href="gestion_des_utilisateurs.php?id_user=<?php echo $donnees['id_user'];?> &supp=ok" onClick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?\ntous les enregistrements en relation avec cette entrée seront perdus'));"><img src="image/delet2.png" width="30" height="30" title="Supprimer un utilisateur" /></a></td>
 
    <?php }?>
 </tr></tbody>
         
</table>
</div>
<?php } else { 	?><script language="JavaScript">alert("la table utilisateur est vide!");</script><?php	
		echo "<meta http-equiv='refresh' content='0; ajout_utilisateur.php' />";
} ?>
 
 </body>
</html>
