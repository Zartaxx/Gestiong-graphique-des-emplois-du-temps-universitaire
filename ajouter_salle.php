<?php
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
 $data=mysqli_query($db,"SELECT * from salle");//select pour les promotions

?>
<!doctype html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Ajouter salle</title>
</head>

<body class="h-100" style="background-color:rgb(219,226,226);">
	<br><br><br>
	<!-- -----------formulaire d'ajout------------------------ -->
	<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Ajouter une salle.</h1>
                    <div class="px-5">
                        <form name="form_ajout" action="ajouter_salle.php" method="post" onSubmit="return test(this);" class="justify-content-center">
                            <div class="form-group">                              
                                <input type="text" class="form-control local" placeholder="libelle de salle" maxlength="30" name="libelle_salle" required value="<?php if (isset($_POST['libelle_salle'])){echo $_POST['libelle_salle'];} ?>">
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="type" required>
                                	<?php echo '<option value="" >Type</option>','<option >TD</option>','<option >TP</option>','<option >Cours</option>';  ?>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="bloc" required>
                                      <option value="">Bloc</option>
                                      <option value="B1" >centre de calcule</option>
                                      <option value="NB" >nouvelle bibliothèque</option>
                                      <option value="B5" >bloc 5</option>
                                      <option value="B8" >bloc 8</option>
                                      <option value="faculté" >faculté</option>
                                      <option value="campus" >campus Targa</option>
                                </select>
                            </div>
                            <div class="form-group">                              
                                <input type="text" class="form-control local" placeholder="capacité de salle" maxlength="30" name="capacite" required value="<?php if (isset($_POST['capacite'])){echo $_POST['capacite'];} ?>">
                            </div>
                            <button value="Ajouter" name="Ajouter" type="submit" class="btn btn-primary btn-lg local">Ajouter</button><br><br>
                            <a href="gestion_des_salles.php"><input type="button" value="Précedent" name="Fermer" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fin formilaire ----------------------------------------->

<?php
if(isset($_POST['libelle_salle'])){//s'il a cliquer sur ajouter la 2eme fois
$libelle_salle=$_POST['libelle_salle'];
$type=$_POST['type'];
$bloc=$_POST['bloc'];
$capacite=$_POST['capacite'];
$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from salle where libelle_salle='$libelle_salle' and bloc='$bloc'"));
$bool=true;
if($compte['nb']>0){
$bool=false;
?>
<SCRIPT LANGUAGE="Javascript">alert("erreur! La salle <?php echo $libelle_salle ; ?> existe déja ");</SCRIPT><?php
 }
if($bool==true){
mysqli_query($db,"insert into salle(libelle_salle,type,bloc,capacite) values ('$libelle_salle','$type','$bloc','$capacite')");
  ?> <SCRIPT LANGUAGE="Javascript">	alert(" La salle <?php echo $libelle_salle ; ?> est ajoutée avec succés!"); </SCRIPT> <?php
   echo "<meta http-equiv='refresh' content='0; gestion_des_salles.php' />";

 }
}
 ?>

</body>
</html>