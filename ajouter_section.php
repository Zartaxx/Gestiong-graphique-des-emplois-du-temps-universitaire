<?php 
// appelle au code de connexion à la BDD
require_once("bdd.php");
include("menu_principale.php"); ?>
<html>
<head>
<!-- Required meta tags -->
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Ajouter section</title>
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
<?php
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
                    <h1 class="display-4 py-2 text-truncate">Ajouter une section. <br>
                    <h1 class="display-5 py-2 text-truncate"> Formation : <?php echo $nom_formation;?> </h1>
                    </h1>
                    <div class="px-5">
                        <form action="ajouter_section.php" method="post" class="justify-content-center">
                            <div class="form-group">                              
                                <input type="hidden" class="form-control local" maxlength="30" name="id_module" readonly>
                            </div>
                            <div class="form-group">                              
                                <input type="text" class="form-control local" placeholder=" libelle de section" maxlength="30" name="lib_section" required value="<?php if (isset($_POST['lib_section'])){echo $_POST['lib_section'];} ?>">
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
                            <a href="gestion_des_section.php"><input type="button" value="Précedent" class="btn btn-warning btn-lg local"></a><br><br>
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
$lib_section=$_POST['lib_section'];//Premier ou 2eme devoir -- 1 ou 2
$codeclasse=mysqli_fetch_array(mysqli_query($db,"select formation.nom_formation,id_formation from formation where nom_formation='$nom_formation'")) ;
$id_formation=$codeclasse['id_formation'];

/*
 pour ne pas ajouter deux modules similaires
 */
$data=mysqli_query($db,"select count(*) as nb from section where id_formation='$id_formation' and lib_section='$lib_section' and id_semestre='$id_semestre'");
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
		?><SCRIPT LANGUAGE="Javascript">alert("Erreur d\'insertion\ la  <?php echo $lib_section; ?> existe déja dans cette formation <?php echo $nom_formation;  ?>");</SCRIPT><?php
	}
	if($bool==true){
mysqli_query($db,"insert into section(lib_section,id_formation,id_semestre) values ('$lib_section','$id_formation','$id_semestre')");

	?> <SCRIPT LANGUAGE="Javascript">	alert("La section <?php echo $lib_section; ?> est ajoutée avec succés!"); </SCRIPT> <?php
	}
echo "<meta http-equiv='refresh' content='0; gestion_des_section.php' />";
}
 else {
$donnee=mysqli_query($db,"SELECT distinct nom_formation from formation"); 
?>
<!-- ---------------------------------------------------------- -->

<!-- --------------------------------------------------------- -->
<!-- -------------------------------------- -->
	<br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-5 py-2 text-truncate">Veuillez choisir une formation.</h1>
                    <div class="px-5">
                        <form action="ajouter_section.php" method="post" class="justify-content-center">
                            <div class="form-group">                                
                                <select class="form-control local" name="nom_formation" required>
                                    <option selected disabled>formation</option>
                                      <?php while($a=mysqli_fetch_array($donnee)){
                                      echo '<option value="'.$a['nom_formation'].'">'.$a['nom_formation'].'</option>';
                                      }?>
                                </select>
                            </div>
                            <button value="Valider" type="submit" class="btn btn-primary btn-lg local">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- -------------------------------------- -->
<!-- --------------------------------------------------------- -->
</body>
</html>


    
     