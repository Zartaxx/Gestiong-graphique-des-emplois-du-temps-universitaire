<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
$data=mysqli_query($db,"SELECT * from semestre"); 
$data1=mysqli_query($db,"SELECT * from formation"); 
 ?>
<!doctype html>
<html>
<head>
<!-- Required meta tags -->
     <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="stylesheet" type="text/css" href="CSS/ajouter_style.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
     <title>Ajouter semestre</title>
     <!-- appelle aux fichiers BT js et jquery.js - popper.js inclu -  -->
     <script src="CSS/bootstrap.bubdle.min.js"></script>
     <script src="CSS/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="CSS/jquery-ui.css">
     <script src="JS/jquery-ui.min.js"></script>

<!--  -->
</head>
<body class="h-100" style="background-color:rgb(219,226,226);">
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
		<br>
<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Ajouter un semestre.</h1>
                    <div class="px-5">
                        <form name=formu action="ajouter_semestre.php"  method="POST" class="justify-content-center">
                            <div class="form-group">                              
                                <input type="text" class="form-control local text-center" placeholder="Session" maxlength="30" name="session" required value="<?php if (isset($_POST['session'])){echo $_POST['session'];} ?>">
                            </div>
                             <div class="form-group">                              
                                <input type="text" class="form-control local text-center" placeholder="libellé du semestre" maxlength="30" name="libelle_semestre" required value="<?php if (isset($_POST['libelle_semestre'])){echo $_POST['libelle_semestre'];} ?>">
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local text-center" readonly="readonly" placeholder="date debut semestre" value="<?php if (isset($_POST['date_debut_sem'])){echo $_POST['date_debut_sem'];} ?>" maxlength="10" name="date_debut_sem" id="txtFrom" required>
                            </div>
                            <div class="form-group">                              
                                <input class="form-control local text-center" readonly="readonly" placeholder="date  Fin du semestre" value="<?php if (isset($_POST['date_fin_sem'])){echo $_POST['date_fin_sem'];} ?>" maxlength="10" name="date_fin_sem" id="txtTo" required>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control local" name="id_formation" required>
                                    <option selected disabled value="">formation</option>
                                    <?php while($a=mysqli_fetch_array($data1)){
                                    echo '<option value="'.$a['id_formation'].'">'.$a['nom_formation'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <button value="Ajouter" name="Ajouter" type="submit" class="btn btn-primary btn-lg local">Ajouter</button><br><br>
                            <a href="gestion_des_semestres.php"><input type="button" value="Précedent" name="Fermer" class="btn btn-warning btn-lg local"></a><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- script jQuery qui verifier que la date de fin est superieur à la date de début -->
<script>
$(function(){
$("#txtFrom").datepicker({
numberOfMonths:1,
dateFormat:'yy/mm/dd',
onSelect:function(selectdate){
var dt = new Date(selectdate);
dt.setDate(dt.getDate()+1)
$("#txtTo").datepicker("option","minDate",dt);
}
});
$("#txtTo").datepicker({
numberOfMonths:1,
dateFormat:'yy/mm/dd',
onSelect:function(selectdate){
var dt = new Date(selectdate);
dt.setDate(dt.getDate()-1)
$("#txtFrom").datepicker("option","maxDate",dt);
}
});
});
</script>
<!-- ----------------------------------fin de script jQuery ----------------------------->
<?php
if(isset($_POST['libelle_semestre'])){//s'il a cliquer sur ajouter la 2eme fois
$id_formation=$_POST['id_formation'];
$session=$_POST['session'];
$libelle_semestre=$_POST['libelle_semestre'];
$date_debut_sem=$_POST['date_debut_sem'];
$date_fin_sem=$_POST['date_fin_sem'];
$compte=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from semestre where libelle_semestre='$libelle_semestre' and id_formation='$id_formation'"));
// $date_debut_sem = substr($date_debut_sem,6,4).'/'.substr($date_debut_sem,0,2).'/'.substr($date_debut_sem,3,2);
// $date_fin_sem = substr($date_fin_sem,6,4).'/'.substr($date_fin_sem,0,2).'/'.substr($date_fin_sem,3,2);
$bool=true;
if($compte['nb']>0){
$bool=false;
?> <SCRIPT LANGUAGE="Javascript">	alert("Erreur d\'insertion, le semestre <?php echo $libelle_semestre;  ?> existe déja!"); </SCRIPT>
 <?php 
 }
if($bool==true){
mysqli_query($db,"INSERT into semestre(libelle_semestre,session,date_debut_sem,date_fin_sem,id_formation) values ('$libelle_semestre','$session','$date_debut_sem','$date_fin_sem','$id_formation')");
?> <SCRIPT LANGUAGE="Javascript">	alert(" le semestre <?php echo $libelle_semestre;  ?>  est ajouté avec succés!"); </SCRIPT> 
<?php
		echo "<meta http-equiv='refresh' content='0; gestion_des_semestres.php' />";
}
}
?>
</div>

</body>
</html>