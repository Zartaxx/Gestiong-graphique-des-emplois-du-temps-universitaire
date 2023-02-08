<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
if (isset($_SESSION['pseudo']) || isset($_SESSION['passe']) || isset($_SESSION['id_prof']))
{	
?>
<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/enTete.css">
     <!-- <link rel="stylesheet" type="text/css" href="CSS/menu_espace_prof.css"> -->
     <link rel="Shortcut Icon" href="image/IMAGE1.png" type="image/x-icon">
     <title>Espace Prof</title>
</head>
<body>
    <!-- ================================================================================= -->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
           <img src="image/hola (1).png" height="11%" width="11%" style="margin-top: -6px;" alt="Logo_EST_FBS">
            
            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="menu-icon-bar"></span>
                <span class="menu-icon-bar"></span>
                <span class="menu-icon-bar"></span>
            </button> 
            
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                   <!-- <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown"> EDT </a>
                        <div class="dropdown-menu">
                            <a href="emplois_du_temps_prof.php?id_prof=<?php echo $_SESSION['id_prof'];?>" title="consulter l'emplois du temps" class="dropdown-item">Consulter l'EDT</a>
                        </div>
                    </li>-->
                    <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Disponibilité</a>
                        <div class="dropdown-menu">
                            <a href="disponibilite_prof.php?id_prof=<?php echo $_SESSION['id_prof'];?>" title="Consulter la disponibilité" class="dropdown-item">Consulter la disponibilité</a>
                        </div>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Parametre</a>
                        <div class="dropdown-menu">
                            <a href="changer_password_enseignant.php" title="Changer mot de passe" class="dropdown-item">Changer mot de passe</a>
                        </div>
                    </li>
                    <li><a href="logout.php" title="quitter" class="nav-item nav-link">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
</header>
    <!-- ================================================================================= -->
        
 <br />
<div>
 <p style="font-family: monospace; letter-spacing:-2px;text-align:center; color:#000; font-size:24px">
 Bienvenue <b><?php echo $_SESSION['nom'].' '. $_SESSION['prenom'];?></b> Dans Votre Espace  </p>
 </div> 
 <div class="piedDePage">
        <p style="padding-top: 1px;margin-top:3px;">
         Ecole superieure de technologie FBS &copy; 2021/2022 &bull;
        </p>
  </div><br />
  <!-- appelle aux fichiers BT js et jquery.js - popper.js inclu -  -->
    <script src="CSS/jquery.min.js"></script>
    <script src="CSS/bootstrap.min.js"></script>
<br>
<?php 
}
?>
</body>
</html>