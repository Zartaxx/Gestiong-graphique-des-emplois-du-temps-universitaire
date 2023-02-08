<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include("menu_principale.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Ajouter formation</title>
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
<?php

// appelle au code de connexion à la BDD
require_once("bdd.php");
if(isset($_POST['nom_formation'])){
$_SESSION['nom_formation']=$_POST['nom_formation'];
$nom_formation=$_POST['nom_formation'];

$donnee=mysqli_query($db,"SELECT libelle_semestre,id_semestre,formation.nom_formation from semestre,formation where semestre.id_formation=formation.id_formation and formation.nom_formation='$nom_formation'");
?>
<!-- -------------------------------------------------------- -->
	<br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Ajouter un module. <br>
                    <h1 class="display-5 py-2 text-truncate"> Formation : <?php echo $nom_formation;?> </h1>
                    </h1>
                    <div class="px-5">
                        <form action="ajouter_module.php" method="post" class="justify-content-center">
                            <div class="form-group">                              
                                <input type="hidden" class="form-control local" maxlength="30" name="id_module" readonly>
                            </div>
                            <div class="form-group">                              
                                <input type="text" class="form-control local" placeholder=" libelle module " maxlength="30" name="libelle_module" required value="<?php if (isset($_POST['libelle_module'])){echo $_POST['libelle_module'];} ?>">
                            </div>
                            <div class="form-group">                              
                                <input type="number" class="form-control local" min="1" maxlength="3" placeholder=" volume horaire" name="volume_horaire" required value="<?php if (isset($_POST['volume_horaire'])){echo $_POST['volume_horaire'];} ?>">
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" required name="choix_mat" id="choix">
                                    <option selected disabled>Semestre</option>
                                    <?php
                                        while($a=mysqli_fetch_array($donnee)){
                                        echo '<option value="'.$a['id_semestre'].'">'.$a['libelle_semestre'].'</option>';} ?>
                                </select>
                            </div>
                            <button value="Ajouter" name="Ajouter" type="submit" class="btn btn-primary btn-lg local">Ajouter</button><br><br>
                            <a href="gestion_module.php"><input type="button" value="Précedent" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- -------------------------------------------------------- -->

<?php }
else if(isset($_POST['choix_mat'])){//s'il a cliquer sur ajouter la 2eme fois
$id_semestre=$_POST['choix_mat'];
$nom_formation=$_SESSION['nom_formation'];
$libelle_module=$_POST['libelle_module'];
$volume_horaire=$_POST['volume_horaire'];//Premier ou 2eme devoir -- 1 ou 2
$codeclasse=mysqli_fetch_array(mysqli_query($db,"SELECT formation.nom_formation,id_formation from formation where nom_formation='$nom_formation'")) ;
$id_formation=$codeclasse['id_formation'];

/*
 pour ne pas ajouter deux modules similaires
 */
$data=mysqli_query($db,"SELECT count(*) as nb from module where id_formation='$id_formation'  and libelle_module='$libelle_module' and volume_horaire='$volume_horaire' and id_semestre='$id_semestre'");
/*
 pour verifier si l'enseignemet (codecl,nommat,numsem) existe ou deja
 */
$nb=mysqli_fetch_array($data);
$bool=true;
	/*
	pour ne pas ajouter deux controles similaire
	*/
	if($nb['nb']>0){
		$bool=false;
		?><SCRIPT LANGUAGE="Javascript">alert("Erreur d\'insertion\le module <?php echo $libelle_module; ?>  existe déja dans cette formation<?php echo $nom_formation ; ?>");</SCRIPT><?php
	}
	if($bool==true){
mysqli_query($db,"INSERT into module(id_formation,volume_horaire,libelle_module,id_semestre) values('$id_formation','$volume_horaire','$libelle_module','$id_semestre')");

	?> <SCRIPT LANGUAGE="Javascript">	alert("Le Module <?php echo $libelle_module; ?> est Ajouté avec succés!"); </SCRIPT> <?php
	}
echo "<meta http-equiv='refresh' content='0; gestion_module.php' />";
}
 else {
$donnee=mysqli_query($db,"SELECT distinct nom_formation from formation"); 
?>

<!-- -------------------------------------- -->
	<br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-5 py-2 text-truncate">Veuillez choisir une formation.</h1>
                    <div class="px-5">
                        <form method="post" class="justify-content-center">
                            <div class="form-group">                                
                                <select class="form-control local" name="nom_formation" required>
                                    <option selected disabled>Formation</option>
                                      <?php while($a=mysqli_fetch_array($donnee)){
                                      echo '<option value="'.$a['nom_formation'].'">'.$a['nom_formation'].'</option>';
                                         }?>
                                </select>
                            </div>
                            <button value="Valider" name="Ajouter" type="submit" class="btn btn-primary btn-lg local">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- -------------------------------------- -->
</body>
</html>


    
     