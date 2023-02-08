<?php 
include("menu_principale.php");
 ?>
<!DOCTYPE>
<html>
<head>
<!-- Required meta tags -->
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Ajouter formation</title>
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
	<br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Ajouter une formation.</h1>
                    <div class="px-5">
                        <form action="ajouetr_formation.php" method="post" class="justify-content-center">
                            <div class="form-group">                              
                                <input type="text" class="form-control local" placeholder="Nom du formation" maxlength="30" name="nom_formation" required value="<?php if (isset($_POST['nom_formation'])){echo $_POST['nom_formation'];} ?>">
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="cycle" required>
                                    <option selected disabled>Cycle</option>
                                    <option value="licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="nbre_semestre" required>
                                    <option selected disabled value="">nombre du semestre</option>
                                    <?php for($i=1;$i<=6;$i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
                                </select>
                            </div>
                            <button value="Ajouter" name="Ajouter" type="submit" class="btn btn-primary btn-lg local">Ajouter</button><br><br>
                            <a href="gestion_formation.php"><input type="button" value="Précedent" name="Fermer" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
$data=mysqli_query($db,"select * from formation");//select pour les promotions

?>
<?php
if(isset($_POST['nom_formation'])){//s'il a cliquer sur ajouter la 2eme fois
$nom_formation=$_POST['nom_formation'];
$cycle=$_POST['cycle'];
$nbre_semestre=$_POST['nbre_semestre'];

$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from formation where nom_formation='$nom_formation' and cycle='$cycle'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
?> <SCRIPT LANGUAGE="Javascript">	alert("Erreur d\'insertion, la formation <?php echo $nom_formation;  ?>  existe déja!"); </SCRIPT> <?php
 }
if($bool==true){
mysqli_query($db,"INSERT into formation(nom_formation,cycle,nbre_semestre) values ('$nom_formation','$cycle','$nbre_semestre')");

?> <SCRIPT LANGUAGE="Javascript">	alert(" la formation <?php echo $nom_formation;  ?> est ajoutée avec succés!"); </SCRIPT> 
<?php
echo "<meta http-equiv='refresh' content='0; gestion_formation.php' />";

}
 }
 
?>
</body>
</html>