<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
$for=mysqli_query($db,"SELECT DISTINCT nom_formation, libelle_semestre,
SESSION , lib_section, section.id_section
FROM section, groupe, formation, module, semestre
WHERE section.id_semestre = semestre.id_semestre
AND section.id_section = groupe.id_section
AND section.id_formation = formation.id_formation");

if (isset($_SESSION['pseudo']) || isset($_SESSION['passe']))
{
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="CSS/menu_espace_prof.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Espace etudiant</title>
</head>
<body>
<div id="imageUmmto-logoUmmto"> 
  <img id="imageUmmto"  src="image/ummto1.png" height="90" alt="imageummto"/> 
    <div id="logoUmmto">
   <div id="logo1Ummto"> UNIVERSITE MOULOUD MAMMERI DE TIZI-OUZOU</div>
   <div id="logo2Ummto"> 
             <div> جامعة مولود معمري  </div>
             <div id="logoKabyle">  ⵝⴰⵙⴷⴰⵓⵉⵝ   ⵎⵓⵏⵓⴷ  ⴰⵝⵎⴷⴰⵟⵙ  </div>
     </div></div></div>
  <hr width="100%" color="white" style=" z-index:1; margin-top:-2px;"/>
<div class="page">

<nav>
	<ul>
					<li><a aria-haspopup="true" style="color:#FFF"> Emploi du temps</a> 
                    <ul>
<li><a aria-haspopup="true" style="font-size:14px;" href="emploi_de_temp_etudiant .php">Consulter Emploi du temps</a><ul>
<?php while($a=mysqli_fetch_array($for)){ ?>
<li> 
<a href="emplois_du_temps_section.php?id_section=<?php echo $a['id_section'];?>" > <?php  echo  $a['nom_formation'];  echo'&laquo;'; echo $a['libelle_semestre']; echo'&raquo;'?></a></li>
 
<?php }?> </li>
                            </ul>
                            </ul>
                            </li>
                                                     
   <li><a aria-haspopup="true" style="color:#FFF">Parametre</a>
						<ul>
							<li><a href="changer_password_etudiant.php">changer mot de passe</a></li>                        </li>
                            </ul>
					<li class="deco"><a href="logout.php" style="color:#FFF">Déconnection</a></li>
				</ul>
			</nav>
		</div>
        
        <div class="fofo">
                 <p style="padding-top: 1px;margin-top:3px;">
                       Univercité Mouloud Memmeri &copy; 2016/2017 &bull; tous les droits resérvés &bull;
                 </p></div><br />
 <br />
<div>
<p style="text-align:center;font-size:24px;color:#FFF;letter-spacing:2px;font-style:italic; word-spacing:3px;font-family:'Comic Sans MS'; text-align:center;">
 Bienvenue <?php echo $_SESSION['nom'].' '. $_SESSION['prenom'];?> Dans Votre Espace  </p>
 </div>
  
  <?php
}
?>



 </body>
</html>