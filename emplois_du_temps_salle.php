<?php  
include("menu_principale.php");
// appelle au code de connexion à la BDD
require_once("bdd.php");
if(isset($_GET['id_salle']))
{
$id_salle=$_GET['id_salle'];
$var=$id_salle;
$salle=mysqli_fetch_array(mysqli_query($db,"SELECT `id_salle` , `libelle_salle` , `type` , `bloc` , `capacite` FROM `salle` WHERE salle.id_salle=$var"));
$libelle_salle=mysqli_real_escape_string($db,htmlspecialchars($salle['libelle_salle']));
$type=mysqli_real_escape_string($db,htmlspecialchars($salle['type']));
$bloc=mysqli_real_escape_string($db,htmlspecialchars($salle['bloc']));
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <link rel="Shortcut Icon" href="image/LogoUnivBejaia.png" type="image/x-icon">
<title>Emploi du Temps de Salle</title>
<script language="Javascript">
	function imprimer(){ window.print();}
</script>
</head>
<body style="background-color: rgb(219,226,226);">
	<!-- en tete caché, visible qu'en impression  -->
    <div class="col-md-12 d-none d-print-block" style="text-align: center;">
      <h3 style="text-transform: uppercase;">république algérienne démocratique et populaire</h3>
      <h4 style="text-transform: uppercase;">ministère de la recherche scientifique et de l'enseignement supérieur</h4>
      <h4>université abderrahmane mira de Béjaïa</h4>
      <h4>faculté des sciences exactes: départeement d'informatique</h4>
    </div>
<!-- centrer le paragraphe  --------------------------->
<div class="row d-print-none">
    <div class="col d-flex justify-content-center">
        <a href="#" value="imprimer" name="imprimer" onClick="imprimer()">
        <img src="image/imprimrer1.png" width='35' height='35'/>
        </a>
    </div>
</div>
<div class="row">
          <div class="col d-flex justify-content-center">
          	  <h2 style="font-family: monospace;letter-spacing:2px;">Emploi du Temps de Salle</h2>
          </div>
</div>
<div class="row">
          <div class="col d-flex justify-content-center">
              <h3 style="font-family: monospace;letter-spacing:2px;">
                SALLE :<span style="color:#00F"><?php echo $libelle_salle;?> </span>&nbsp;&nbsp;   TYPE :<span style="color:#00F"> <?php echo $type;?></span> &nbsp;&nbsp;
                BLOC : <span style="color:#00F"><?php echo $bloc;?></span>
              </h3>
          </div>
</div>
<a href="gestion_des_salles.php" style="text-decoration:none;"><input type="button" value="Précedent" name="retour" class="col float-right btn btn-primary m-4 d-print-none" style="width:110px ; font-size:16px;"></a>
<!----------------------------------------------------->  
<?php
$ligne31= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof
AND heure = '08:00-09:30' AND jour = 'Samedi'
 ");
 
$ligne32= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '09:40-11:10' AND jour = 'Samedi'
");

  $ligne33= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '11:20-12:50' AND jour = 'Samedi'");

 $ligne34= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '13:00-14-30' AND jour = 'Samedi'");
 
$ligne35= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '14-40-16:10' AND jour = 'Samedi'");
 
$ligne36= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '16:20-17:50' AND jour = 'Samedi'");





$ligne111= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof
AND heure = '08:00-09:30' AND jour = 'Vendredi'
 ");
 
$ligne2= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '09:40-11:10' AND jour = 'Vendredi'
");

  $ligne3= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '11:20-12:50' AND jour = 'Vendredi'");

 $ligne4= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '13:00-14-30' AND jour = 'Vendredi'");
 
$ligne5= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '14-40-16:10' AND jour = 'Vendredi'");
 
$ligne6= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof AND heure = '16:20-17:50' AND jour = 'Vendredi'");

$ligne7= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Lundi' and heure='08:00-09:30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne8=mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Lundi' and heure='09:40-11:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne9= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Lundi' and heure='11:20-12:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");
 
$ligne10= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Lundi' and heure='13:00-14-30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne11= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Lundi' and heure='14-40-16:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne12= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Lundi' and heure='16:20-17:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");
//fin Lundi debut mardi
$ligne13= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mardi' and heure='08:00-09:30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne14= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mardi' and heure='09:40-11:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne15= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mardi' and heure='11:20-12:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne16= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mardi' and heure='13:00-14-30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne17= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mardi' and heure='14-40-16:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne18= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mardi' and heure='16:20-17:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");
//fin mardi debut mercredi
$ligne19= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mercredi' and heure='08:00-09:30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne20= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mercredi' and heure='09:40-11:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne21= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mercredi' and heure='11:20-12:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne22= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mercredi' and heure='13:00-14-30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne23= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mercredi' and heure='14-40-16:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne24= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Mercredi' and heure='16:20-17:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");
//fin mecredi debut jeudi
$ligne25= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Jeudi' and heure='08:00-09:30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof") ;

$ligne26= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Jeudi' and heure='09:40-11:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne27= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Jeudi' and heure='11:20-12:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne28= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Jeudi' and heure='13:00-14-30'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne29= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Jeudi' and heure='14-40-16:10'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof");

$ligne30= mysqli_query($db,"SELECT `id_for` , `id_sem` , `id_gr` , `id_pr` , `id_mod` , `id_sal` , `id_sec` , `type` , `heure` , `id` , `jour` , nom_formation, libelle_groupe, `libelle_module` , `nom` , `prenom`
FROM `seance` , `formation` , `groupe` , `module` , `prof`
WHERE id_sal =$var AND jour='Jeudi' and heure='16:20-17:50'
AND seance.id_for = formation.id_formation
AND seance.id_gr = groupe.id_groupe
AND seance.id_mod = module.id_module
AND seance.id_pr = prof.id_prof"); 
//fin de jeudi
 ?>
 <div class="container" style="margin-bottom: 90px;">
 <table class="table table-dark table-hover table-striped table-bordered table-responsive-md" style="font-size: 13px;">
 <thead>
  <tr>
   <th></th>
    <th style="height:25px;font-weight:bold;">08:00-09:30</th>
    <th style="height:25px;font-weight:bold;">09:40-11:10</th>
    <th style="height:25px;font-weight:bold;">11:20-12:50</th>
    <th style="height:25px;font-weight:bold;">13:00-14-30</th>
    <th style="height:25px;font-weight:bold;">14-40-16:10</th>
    <th style="height:25px;font-weight:bold;">16:20-17:50</th>
  </tr></thead>
  <tbody>
  <tr>
    <th style=" height:50px;" >Samedi</th> 
      <td><?php  
  while($a31= mysqli_fetch_array($ligne31)){?>
<?php if( $a31['type'] == true){ echo '<b>Formation :</b> '.$a31['nom_formation'];}; ?> <br>
<?php if($a31['type'] == true) {  echo '<b>Module :</b>'.$a31['libelle_module'];  }; ?> <br/>
 <?php if( $a31['type'] == true){ echo '<b>Prof :</b> '.$a31['nom'].' '.$a31['prenom'];} ?><br /><?php if( $a31['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a31['libelle_groupe'];}?><?php if ( $a31['type'] =='Cours') break; } ?></td>

</td>

<td><?php  
  while($a32= mysqli_fetch_array($ligne32)){?>
<?php if($a32['type'] == true) {  echo '<b>Formation :</b>'.$a32['nom_formation'];} ?> <br/>
<?php if($a32['type'] == true) {  echo '<b>Module :</b>'.$a32['libelle_module'];  } ?> <br/>
 <?php if( $a32['type'] == true){ echo '<b>Prof :</b> '.$a32['nom'].' '.$a32['prenom'];}  ?><br /><?php if( $a32['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a32['libelle_groupe'];}?><?php if ( $a32['type'] =='Cours') break; } ?></td>

 </td>
 
   <td>         
   <?php  
  while($a33= mysqli_fetch_array($ligne33)){?>
<?php if($a33['type'] == true) {  echo '<b>Formation :</b>'.$a33['nom_formation'];} ?> <br/>
<?php if($a33['type'] == true) {  echo '<b>Module :</b>'.$a33['libelle_module'];} ?> <br/>
 <?php if( $a33['type'] == true){ echo '<b>Prof :</b> '.$a33['nom'].' '.$a33['prenom']; } ?><br /><?php if( $a33['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a33['libelle_groupe'];}?><?php if ( $a33['type'] =='Cours') break; } ?></td>

 </td>

     
    <td><?php  
  while($a34= mysqli_fetch_array($ligne34)){?>
<?php if($a34['type'] == true) {  echo '<b>Formation :</b>'.$a34['nom_formation'];} ?> <br/>
<?php if($a34['type'] == true) {  echo '<b>Module :</b>'.$a34['libelle_module'];  } ?> <br/>
 <?php if( $a34['type'] == true){ echo '<b>Prof :</b> '.$a34['nom'].' '.$a34['prenom'];} ?><br /><?php if( $a34['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a34['libelle_groupe'];}?><?php if ( $a34['type'] =='Cours') break; } ?></td>

 </td>

    <td><?php  
  while($a35= mysqli_fetch_array($ligne35)){?>
<?php if($a35['type'] == true) {  echo '<b>Formation :</b>'.$a35['nom_formation'];} ?> <br/>
<?php if($a35['type'] == true) {  echo '<b>Module :</b>'.$a35['libelle_module'];  } ?> <br/>
<?php if( $a35['type'] == true){ echo '<b>Prof :</b> '.$a35['nom'].' '.$a35['prenom']; } ?><br>
<?php if( $a35['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a35['libelle_groupe'];}?><?php if ( $a35['type'] =='Cours') break; } ?></td>

     <td><?php  
  while($a36= mysqli_fetch_array($ligne36)){?>
<?php if($a36['type'] == true) {  echo '<b>Formation :</b>'.$a36['nom_formation'];} ?> <br/>
<?php if($a36['type'] == true) {  echo '<b>Module :</b>'.$a36['libelle_module'];  } ?> <br/>
 <?php if( $a36['type'] == true){ echo '<b>Prof :</b> '.$a36['nom'].' '.$a36['prenom']; } ?><br /><?php if( $a36['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a36['libelle_groupe'];}?><?php if ( $a36['type'] =='Cours') break; } ?></td>
    </tr>
  
  <tr>
    <th style=" height:50px;">Vendredi</th> 
      <td><?php  
  while($a1= mysqli_fetch_array($ligne111)){?>
<?php if( $a1['type'] == true){ echo '<b>Formation :</b> '.$a1['nom_formation'];}; ?> <br>
<?php if($a1['type'] == true) {  echo '<b>Module :</b>'.$a1['libelle_module'];  }; ?> <br/>
 <?php if( $a1['type'] == true){ echo '<b>Prof :</b> '.$a1['nom'].' '.$a1['prenom'];} ?><br /><?php if( $a1['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a1['libelle_groupe'];}?><?php if ( $a1['type'] =='Cours') break; } ?></td>

</td>

<td><?php  
  while($a2= mysqli_fetch_array($ligne2)){?>
<?php if($a2['type'] == true) {  echo '<b>Formation :</b>'.$a2['nom_formation'];} ?> <br/>
<?php if($a2['type'] == true) {  echo '<b>Module :</b>'.$a2['libelle_module'];  } ?> <br/>
 <?php if( $a2['type'] == true){ echo '<b>Prof :</b> '.$a2['nom'].' '.$a2['prenom'];}  ?><br /><?php if( $a2['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a2['libelle_groupe'];}?><?php if ( $a2['type'] =='Cours') break; } ?></td>

 </td>
 
   <td>         
   <?php  
  while($a3= mysqli_fetch_array($ligne3)){?>
<?php if($a3['type'] == true) {  echo '<b>Formation :</b>'.$a3['nom_formation'];} ?> <br/>
<?php if($a3['type'] == true) {  echo '<b>Module :</b>'.$a3['libelle_module'];} ?> <br/>
 <?php if( $a3['type'] == true){ echo '<b>Prof :</b> '.$a3['nom'].' '.$a3['prenom']; } ?><br /><?php if( $a3['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a3['libelle_groupe'];}?><?php if ( $a3['type'] =='Cours') break; } ?></td>

 </td>

     
    <td><?php  
  while($a4= mysqli_fetch_array($ligne4)){?>
<?php if($a4['type'] == true) {  echo '<b>Formation :</b>'.$a4['nom_formation'];} ?> <br/>
<?php if($a4['type'] == true) {  echo '<b>Module :</b>'.$a4['libelle_module'];  } ?> <br/>
 <?php if( $a4['type'] == true){ echo '<b>Prof :</b> '.$a4['nom'].' '.$a4['prenom'];} ?><br /><?php if( $a4['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a4['libelle_groupe'];}?><?php if ( $a4['type'] =='Cours') break; } ?></td>

 </td>

    <td><?php  
  while($a5= mysqli_fetch_array($ligne5)){?>
<?php if($a5['type'] == true) {  echo '<b>Formation :</b>'.$a5['nom_formation'];} ?> <br/>
<?php if($a5['type'] == true) {  echo '<b>Module :</b>'.$a5['libelle_module'];  } ?> <br/>
<?php if( $a5['type'] == true){ echo '<b>Prof :</b> '.$a5['nom'].' '.$a5['prenom']; } ?><br>
<?php if( $a5['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a5['libelle_groupe'];}?><?php if ( $a5['type'] =='Cours') break; } ?></td>

     <td><?php  
  while($a6= mysqli_fetch_array($ligne6)){?>
<?php if($a6['type'] == true) {  echo '<b>Formation :</b>'.$a6['nom_formation'];} ?> <br/>
<?php if($a6['type'] == true) {  echo '<b>Module :</b>'.$a6['libelle_module'];  } ?> <br/>
 <?php if( $a6['type'] == true){ echo '<b>Prof :</b> '.$a6['nom'].' '.$a6['prenom']; } ?><br /><?php if( $a6['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a6['libelle_groupe'];}?><?php if ( $a6['type'] =='Cours') break; } ?></td>
    </tr>
  <tr>
      <th height="104" style=" height:50px;">Lundi</th>
    <td><?php  
  while($a7= mysqli_fetch_array($ligne7)){?>
<?php if($a7['type'] == true) {  echo '<b>Formation :</b>'.$a7['nom_formation'];} ?> <br/>
<?php if($a7['type'] == true) {  echo '<b>Module :</b>'.$a7['libelle_module'];  } ?> <br/>
 <?php if( $a7['type'] == true){ echo '<b>Prof :</b> '.$a7['nom'].' '.$a7['prenom'];}  ?><br /><?php if( $a7['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a7['libelle_groupe']; }?><?php if ( $a7['type'] =='Cours') break; } ?>

 </td>

 <td><?php  
  while($a8= mysqli_fetch_array($ligne8)){?>
<?php if($a8['type'] == true) {  echo '<b>Formation :</b>'.$a8['nom_formation'];} ?> <br/>
<?php if($a8['type'] == true) {  echo '<b>Module :</b>'.$a8['libelle_module'];  } ?> <br/>
 <?php if( $a8['type'] == true){ echo '<b>Prof :</b> '.$a8['nom'].' '.$a8['prenom'];}  ?><br /><?php if( $a8['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a8['libelle_groupe'];}?><?php if ( $a8['type'] =='Cours') break; } ?>

 </td>

<td><?php  
  while($a9= mysqli_fetch_array($ligne9)){?>
<?php if($a9['type'] == true) {  echo '<b>Formation :</b>'.$a9['nom_formation'];} ?> <br/>
<?php if($a9['type'] == true) {  echo '<b>Module :</b>'.$a9['libelle_module'];  } ?> <br/>
 <?php if( $a9['type'] == true){ echo '<b>Prof :</b> '.$a9['nom'].' '.$a9['prenom']; } ?><br /><?php if( $a9['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a9['libelle_groupe'];}?><?php if ( $a9['type'] =='Cours') break; } ?>
 </td>
<td><?php  
  while($a10= mysqli_fetch_array($ligne10)){?>
<?php if($a10['type'] == true) {  echo '<b>Formation :</b>'.$a10['nom_formation'];} ?> <br/>
<?php if($a10['type'] == true) {  echo '<b>Module :</b>'.$a10['libelle_module'];  } ?> <br/>
 <?php if( $a10['type'] == true){ echo '<b>Prof :</b> '.$a10['nom'].' '.$a10['prenom'];}  ?><br /><?php if( $a10['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a10['libelle_groupe'];}?><?php if ( $a10['type'] =='Cours') break; } ?>
 </td>
     
   <td><?php  
  while($a11= mysqli_fetch_array($ligne11)){?>
<?php if($a11['type'] == true) {  echo '<b>Formation :</b>'.$a11['nom_formation'];} ?> <br/>
<?php if($a11['type'] == true) {  echo '<b>Module :</b>'.$a11['libelle_module'];  } ?> <br/>
 <?php if( $a11['type'] == true){ echo '<b>Prof :</b> '.$a11['nom'].' '.$a11['prenom']; } ?><br /><?php if( $a11['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a11['libelle_groupe'];}?><?php if ( $a11['type'] =='Cours') break; } ?>
 </td>

     
     <td><?php  
  while($a12= mysqli_fetch_array($ligne12)){?>
<?php if($a12['type'] == true) {  echo '<b>Formation :</b>'.$a12['nom_formation'];} ?> <br/>
<?php if($a12['type'] == true) {  echo '<b>Module :</b>'.$a12['libelle_module'];  } ?> <br/>
<?php if( $a12['type'] == true){ echo '<b>Prof :</b> '.$a12['nom'].' '.$a12['prenom'];} ?><br /><?php if( $a12['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a12['libelle_groupe'];}?><?php if ( $a12['type'] =='Cours') break; } ?>
 </td>
  </tr>
  
  <tr>
    <th height="85" style=" height:50px;">Mardi</th>
    <td><?php  
  while($a13= mysqli_fetch_array($ligne13)){?>
<?php if($a13['type'] == true) {  echo '<b>Formation :</b>'.$a13['nom_formation'];} ?> <br/>
<?php if($a13['type'] == true) {  echo '<b>Module :</b>'.$a13['libelle_module'];  } ?> <br/>
 <?php if( $a13['type'] == true){ echo '<b>Prof :</b> '.$a13['nom'].' '.$a13['prenom']; } ?><br /><?php if( $a13['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a13['libelle_groupe'];}?><?php if ( $a13['type'] =='Cours') break; } ?>
 </td>

   <td><?php  
  while($a14= mysqli_fetch_array($ligne14)){?>
<?php if($a14['type'] == true) {  echo '<b>Formation :</b>'.$a14['nom_formation'];} ?> <br/>
<?php if($a14['type'] == true) {  echo '<b>Module :</b>'.$a14['libelle_module'];  } ?> <br/>
 <?php if( $a14['type'] == true){ echo '<b>Prof :</b> '.$a14['nom'].' '.$a14['prenom'];} ?><br /><?php if( $a14['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a14['libelle_groupe'];}?><?php if ( $a14['type'] =='Cours') break; } ?>
 </td>

   <td><?php  
  while($a15= mysqli_fetch_array($ligne15)){?>
<?php if($a15['type'] == true) {  echo '<b>Formation :</b>'.$a15['nom_formation'];} ?> <br/>
<?php if($a15['type'] == true) {  echo '<b>Module :</b>'.$a15['libelle_module'];  } ?> <br/>
 <?php if( $a15['type'] == true){ echo '<b>Prof :</b> '.$a15['nom'].' '.$a15['prenom'];} ?><br /><?php if( $a15['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a15['libelle_groupe'];}?><?php if ( $a15['type'] =='Cours') break; } ?>
 </td>
 
    <td><?php  
  while($a16= mysqli_fetch_array($ligne16)){?>
<?php if($a16['type'] == true) {  echo '<b>Formation :</b>'.$a16['nom_formation'];} ?> <br/>
<?php if($a16['type'] == true) {  echo '<b>Module :</b>'.$a16['libelle_module'];  } ?> <br/>
 <?php if( $a16['type'] == true){ echo '<b>Prof :</b> '.$a16['nom'].' '.$a16['prenom'];}?><br /><?php if( $a16['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a16['libelle_groupe'];}?><?php if ( $a16['type'] =='Cours') break; } ?>
 </td>
 
   <td><?php  
  while($a17= mysqli_fetch_array($ligne17)){?>
<?php if($a17['type'] == true) {  echo '<b>Formation :</b>'.$a17['nom_formation'];} ?> <br/>
<?php if($a17['type'] == true) {  echo '<b>Module :</b>'.$a17['libelle_module'];  } ?> <br/>
 <?php if( $a17['type'] == true){ echo '<b>Prof :</b> '.$a17['nom'].' '.$a17['prenom'];} ?><br /><?php if( $a17['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a17['libelle_groupe'];}?><?php if ( $a17['type'] =='Cours') break; } ?>
 </td>

<td><?php  
  while($a18= mysqli_fetch_array($ligne18)){?>
<?php if($a18['type'] == true) {  echo '<b>Formation :</b>'.$a18['nom_formation'];} ?> <br/>
<?php if($a18['type'] == true) {  echo '<b>Module :</b>'.$a18['libelle_module'];  } ?> <br/>
<?php if( $a18['type'] == true){ echo '<b>Prof :</b> '.$a18['nom'].' '.$a18['prenom'];} ?><br /><?php if( $a18['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a18['libelle_groupe'];}?><?php if ( $a18['type'] =='Cours') break; } ?>
 </td>
  </tr>
  <tr>
    <th style=" height:50px;">Mercredi</th>
    <td><?php  
  while($a19= mysqli_fetch_array($ligne19)){?>
<?php if($a19['type'] == true) {  echo '<b>Formation :</b>'.$a19['nom_formation'];} ?> <br/>
<?php if($a19['type'] == true) {  echo '<b>Module :</b>'.$a19['libelle_module'];  } ?> <br/>
<?php if( $a19['type'] == true){ echo '<b>Prof :</b> '.$a19['nom'].' '.$a19['prenom'];}  ?><br /><?php if( $a19['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a19['libelle_groupe'];}?><?php if ( $a19['type'] =='Cours') break; } ?>
 </td>

   <td><?php  
  while($a20= mysqli_fetch_array($ligne20)){?>
<?php if($a20['type'] == true) {  echo '<b>Formation :</b>'.$a20['nom_formation'];} ?> <br/>
<?php if($a20['type'] == true) {  echo '<b>Module :</b>'.$a20['libelle_module'];  } ?> <br/>
<?php if( $a20['type'] == true){ echo '<b>Prof :</b> '.$a20['nom'].' '.$a20['prenom'];}  ?><br /><?php if( $a20['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a20['libelle_groupe'];}?><?php if ( $a20['type'] =='Cours') break; } ?>
 </td>

   <td><?php  
  while($a21= mysqli_fetch_array($ligne21)){?>
<?php if($a21['type'] == true) {  echo '<b>Formation :</b>'.$a21['nom_formation'];} ?> <br/>
<?php if($a21['type'] == true) {  echo '<b>Module :</b>'.$a21['libelle_module'];  } ?> <br/>
<?php if( $a21['type'] == true){ echo '<b>Prof :</b> '.$a21['nom'].' '.$a21['prenom'];}?><br /><?php if( $a21['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a21['libelle_groupe'];}?><?php if ( $a21['type'] =='Cours') break; } ?>
 </td>
   
   <td><?php  
  while($a22= mysqli_fetch_array($ligne22)){?>
<?php if($a22['type'] == true) {  echo '<b>Formation :</b>'.$a22['nom_formation'];} ?> <br/>
<?php if($a22['type'] == true) {  echo '<b>Module :</b>'.$a22['libelle_module'];  } ?> <br/>
<?php if( $a22['type'] == true){ echo '<b>Prof :</b> '.$a22['nom'].' '.$a22['prenom']; } ?><br /><?php if( $a22['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a22['libelle_groupe'];}?><?php if ( $a22['type'] =='Cours') break; } ?>
 </td>

  <td><?php  
  while($a23= mysqli_fetch_array($ligne23)){?>
<?php if($a23['type'] == true) {  echo '<b>Formation :</b>'.$a23['nom_formation'];} ?> <br/>
<?php if($a23['type'] == true) {  echo '<b>Module :</b>'.$a23['libelle_module'];  } ?> <br/>
<?php if( $a23['type'] == true){ echo '<b>Prof :</b> '.$a23['nom'].' '.$a23['prenom']; } ?><br /><?php if( $a23['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a23['libelle_groupe'];}?><?php if ( $a23['type'] =='Cours') break; } ?>
 </td>

    <td><?php  
  while($a24= mysqli_fetch_array($ligne24)){?>
<?php if($a24['type'] == true) {  echo '<b>Formation :</b>'.$a24['nom_formation'];} ?> <br/>
<?php if($a24['type'] == true) {  echo '<b>Module :</b>'.$a24['libelle_module'];  } ?> <br/>
<?php if( $a24['type'] == true){ echo '<b>Prof :</b> '.$a24['nom'].' '.$a24['prenom']; } ?><br /><?php if( $a24['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a24['libelle_groupe'];}?><?php if ( $a24['type'] =='Cours') break; } ?>
 </td>

  </tr>
  <tr>
    <th height="96" style=" height:50px;">Jeudi</th>
   <td><?php  
  while($a25= mysqli_fetch_array($ligne25)){?>
<?php if($a25['type'] == true) {  echo '<b>Formation :</b>'.$a25['nom_formation'];} ?> <br/>
<?php if($a25['type'] == true) {  echo '<b>Module :</b>'.$a25['libelle_module'];  } ?> <br/>
<?php if( $a25['type'] == true){ echo '<b>Prof :</b> '.$a25['nom'].' '.$a25['prenom']; } ?><br /><?php if( $a25['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a25['libelle_groupe'];}?><?php if ( $a25['type'] =='Cours') break; } ?>
 </td>

<td><?php  
  while($a26= mysqli_fetch_array($ligne26)){?>
<?php if($a26['type'] == true) {  echo '<b>Formation :</b>'.$a26['nom_formation'];} ?> <br/>
<?php if($a26['type'] == true) {  echo '<b>Module :</b>'.$a26['libelle_module'];  } ?> <br/>
<?php if( $a26['type'] == true){ echo '<b>Prof :</b> '.$a26['nom'].' '.$a26['prenom'];}  ?><br /><?php if( $a26['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a26['libelle_groupe'];}?><?php if ( $a26['type'] =='Cours') break; } ?>
 </td>

     
    <td><?php  
  while($a27= mysqli_fetch_array($ligne27)){?>
<?php if($a27['type'] == true) {  echo '<b>Formation :</b>'.$a27['nom_formation'];} ?> <br/>
<?php if($a27['type'] == true) {  echo '<b>Module :</b>'.$a27['libelle_module'];  } ?> <br/>
<?php if( $a27['type'] == true){ echo '<b>Prof :</b> '.$a27['nom'].' '.$a27['prenom']; } ?><br /><?php if( $a27['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a27['libelle_groupe'];}?><?php if ( $a27['type'] =='Cours') break; } ?>
 </td>

     
  <td><?php  
  while($a28= mysqli_fetch_array($ligne28)){?>
<?php if($a28['type'] == true) {  echo '<b>Formation :</b>'.$a28['nom_formation'];} ?> <br/>
<?php if($a28['type'] == true) {  echo '<b>Module :</b>'.$a28['libelle_module'];  } ?> <br/>
<?php if( $a28['type'] == true){ echo '<b>Prof :</b> '.$a28['nom'].' '.$a28['prenom']; } ?><br /><?php if( $a28['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a28['libelle_groupe'];}?><?php if ( $a28['type'] =='Cours') break; } ?>
 </td>
 
   <td><?php  
  while($a29= mysqli_fetch_array($ligne29)){?>
<?php if($a29['type'] == true) {  echo '<b>Formation :</b>'.$a29['nom_formation'];} ?> <br/>
<?php if($a29['type'] == true) {  echo '<b>Module :</b>'.$a29['libelle_module'];  } ?> <br/>
<?php if( $a29['type'] == true){ echo '<b>Prof :</b> '.$a29['nom'].' '.$a29['prenom'];}  ?><br /><?php if( $a29['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a29['libelle_groupe'];}?><?php if ( $a29['type'] =='Cours') break; } ?>
 </td>

<td><?php  
  while($a30= mysqli_fetch_array($ligne30)){?>
<?php if($a30['type'] == true) {  echo '<b>Formation :</b>'.$a30['nom_formation'];} ?> <br/>
<?php if($a30['type'] == true) {  echo '<b>Module :</b>'.$a30['libelle_module'];  } ?> <br/>
<?php if( $a30['type'] == true){ echo '<b>Prof :</b> '.$a30['nom'].' '.$a30['prenom']; } ?><br /><?php if( $a30['type'] =='Cours') {  echo '<b></b>';} else {echo '<b>Groupe :</b> '.$a30['libelle_groupe'];}?><?php if ( $a30['type'] =='Cours') break; } ?>
 </td>
  </tr></tbody>
</table>
  </div>
   
  <?php    }?>
  

 
 </body>
</html>
