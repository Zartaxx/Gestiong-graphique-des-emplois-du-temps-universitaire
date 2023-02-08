<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
?>
<html>
 <head>
 	 <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Ajouter enseignement</title>
 <script type="text/javascript">  
function test1(f)  
 {  
 if(f.nomcl.selectedIndex == 0) 
 {  
 alert('Vous devez selectionner une formation!');  
 return false;  
 }  
 else if(f.promotion.selectedIndex == 0)   
 {  
 alert('Vous devez selectionner un Semestre!');  
 return false;  
 } 
  else 
 {return true;} 
 }  
  
 function test2(f)  
 {  
  if(f.n_prof.selectedIndex == 0)   
 {  
 alert('Vous devez selectionner un prof !');  
 return false;  
 } 
 else {return true;} 
 }  
 </script>
</head>
 <body class="h-100" style="background-color:rgb(219,226,226);">
 	<!--  -->

    <!--  -->
<?php
if(isset($_POST['nomcl'])){
$_SESSION['nomcl']=$_POST['nomcl'];
$nomcl=$_POST['nomcl'];
$promo=$_POST['promotion'];
$_SESSION['promo']=$promo;  
$donnee=mysqli_query($db,"SELECT semestre.libelle_semestre,id_module,libelle_module,volume_horaire,formation.nom_formation from module,formation,semestre where module.id_semestre=semestre.id_semestre and module.id_formation=formation.id_formation and formation.nom_formation='$nomcl' and semestre.libelle_semestre='$promo'");
// $libelle_module1=mysqli_real_escape_string($db,htmlspecialchars($donnee['libelle_module']));
// echo $libelle_module1 ; 
$prof=mysqli_query($db,"SELECT DISTINCT id_prof, prof.nom, prof.prenom FROM prof
UNION ALL
SELECT utilisateur.id_user, utilisateur.nom , utilisateur.prenom  
FROM utilisateur, login
WHERE login.statut = 'prof'
AND login.Num = utilisateur.id_user");
?>

<!-- ---------------------------debut page 2 ------------------------------ -->
 <br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-5 py-2 text-truncate">Ajouter un enseignement.</h1>
                    <h3 class="display-5 py-2 text-truncate">Formation :<?php echo $nomcl;?>
                       &nbsp;&nbsp;Semestre : <?php echo $promo;?>
                    </h3>
                    <div class="px-5">
                        <form action="ajout_enseignement.php" method="POST" onSubmit="return test1(this);" class="justify-content-center">
                            <div class="form-group">                                
                                <select class="form-control local" name="n_prof" required>
                                    <option selected disabled>Enseignant</option>
                                    <?php while($prof2=mysqli_fetch_array($prof)){
                                     echo '<option value="'.$prof2['id_prof'] .'">'.$prof2['nom'].' '.$prof2['prenom'].'</option>';}
                                      ?>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <table class="table table-hover table-striped table-info table-responsive-md" style="font-size: 14px">
                                <thead>
                                <tr> 
                                <th>Sélection </th>
                                <th>Module</th>
                                <th>Volume horaire</th>
                                </tr>
                                </thead>
   
                                <?php 
                                while($a=mysqli_fetch_array($donnee)){
                                ?>
                                <tr>  
                                <td> 
                                <input name="choix_mat[]"  id="choix" type="checkbox" value="<?php echo  $a['id_module']; ?>" ></td>  
                                <td ><?php  echo  $a['libelle_module']; ?></td>  
                                <td><?php  echo  $a['volume_horaire'];?></td> <?php }?>
                                </tr>
                                </table>
                            </div>
                            <button type="submit" value="Ajouter" name="Ajouter" class="btn btn-primary btn-lg local">Ajouter</button><br><br>
                            <a href="module_enseigne.php"><input type="button" value="Annuler" name="annuler" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } 
// <!-- -------------------------------fin page 2----------------------------- -->

else if(isset($_POST['choix_mat'])){//s'il a cliquer sur ajouter la 2eme fois
$id_module=$_POST['choix_mat'];
$n_prof=$_POST['n_prof'];//Premier ou 2eme devoir -- 1 ou 2
$nomcl=$_SESSION['nomcl'];
$promo=$_SESSION['promo'];
$codeclasse=mysqli_fetch_array(mysqli_query($db,"SELECT formation.id_formation,semestre.id_semestre from formation,semestre where nom_formation='$nomcl' and libelle_semestre='$promo'")) ;
$id_formation=mysqli_real_escape_string($db,htmlspecialchars($codeclasse['id_formation']));
$id_semestre=mysqli_real_escape_string($db,htmlspecialchars($codeclasse['id_semestre']));
foreach( $id_module as $module) {
$data=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb , libelle_module from enseignement,module where enseignement.id_formation='$id_formation' and id_prof='$n_prof'   and enseignement.id_module='$module' and enseignement.id_semestre='$id_semestre'"));
$modu=mysqli_real_escape_string($db,htmlspecialchars($data['libelle_module']));

if($data['nb']>0){ ?>

<script  type="text/javascript"> alert('Erreur d\'insertion \n\n cette enseignement existe déja'); </script></b><?php  
 
echo "<meta http-equiv='refresh' content='0; module_enseigne.php' />"; } 
	
else{ mysqli_query($db,"INSERT into enseignement(id_formation,id_module,id_prof,id_semestre) values('$id_formation','$module','$n_prof','$id_semestre')");
?> <script type="text/javascript"> alert('le module <?php echo $modu; ?> est ajouté avec succés'); </script> <?php 
echo "<meta http-equiv='refresh' content='0; module_enseigne.php' />";
}}}  
 else {
$donnee=mysqli_query($db,"SELECT distinct nom_formation from formation");
$data1=mysqli_query($db,"SELECT distinct libelle_semestre from semestre"); ?>
 
 <!-- ----------------------------DEBUT de page 1--------------------------------- -->
 <br><br><br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h2 class="display-5 py-2 ">Veuillez choisir la Formation et le Semestre.</h2>
                    <div class="px-5">
                        <form action="ajout_enseignement.php" method="POST" onSubmit="return test1(this);" class="justify-content-center">
                            <div class="form-group">                                
                                <select class="form-control local" name="nomcl" required>
                                    <option selected disabled>Formation</option>
                                    <?php while($a=mysqli_fetch_array($donnee)){
                                    echo '<option value="'.$a['nom_formation'].'">'.$a['nom_formation'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="promotion" required>
                                    <option selected disabled value="">Semestre</option>
                                    <?php while($a=mysqli_fetch_array($data1)){
                                    echo '<option value="'.$a['libelle_semestre'].'">'.$a['libelle_semestre'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <button value="Afficher" type="submit" class="btn btn-primary btn-lg local">Afficher</button><br><br>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- ----------------------------FIN de page 1--------------------------------- -->
</body>
</html>
