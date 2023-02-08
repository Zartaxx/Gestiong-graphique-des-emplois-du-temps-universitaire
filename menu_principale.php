<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
if (isset($_SESSION['pseudo']) || isset($_SESSION['passe']) || isset($_SESSION['statut']))
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
    <link rel="Shortcut Icon" href="image/cx" type="image/x-icon">
<title>Espace Administrateur</title>    
</head>
<body>

<header class="header-area overlay d-print-none">
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
                    <li><a href="gestion_des_emplois_de_temps.php" title=" Emplois de temps" class="nav-item nav-link active"> EDT </a>
                    </li>
                                         <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Formation</a>
                        <div class="dropdown-menu">
                            <a href="gestion_formation.php" title="gestion des formations" title="gestion des formations" class="dropdown-item">Gestion des formations</a>
                            <a href="ajouetr_formation.php" title="ajouter une formations" class="dropdown-item">Ajouter une formation</a>
                        </div>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Semestre</a>
                        <div class="dropdown-menu">
                            <a href="gestion_des_semestres.php" title="gestion des semestre" class="dropdown-item">Gestion des semestre</a>
                            <a href="ajouter_semestre.php" title="ajouter un semestre" class="dropdown-item">Ajouter un semestre</a>
                        </div>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Section</a>
                        <div class="dropdown-menu">
                            <a href="gestion_des_section.php" title="ajouter une Section" class="dropdown-item">Gestion des sections</a>
                            <a href="ajouter_Section.php" title="ajouter une section" class="dropdown-item">Ajouter une section</a>
                        </div>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Groupe</a>
                        <div class="dropdown-menu">
                            <a href="gestion_des_groupes.php" title="gestion des groupes" class="dropdown-item">Gestion des groupes</a>
                            <a href="ajouter_Groupe.php" title="ajouter un groupe" class="dropdown-item">Ajouter un groupe</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Salle</a>
                        <div class="dropdown-menu">
                            <a href="gestion_des_salles.php" title="gestion des salles" class="dropdown-item">Gestion des salles</a>
                            <a href="ajouter_salle.php" title="ajouter une salle" class="dropdown-item">Ajouter une salle</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Module</a>
                        <div class="dropdown-menu">
                            <a href="gestion_module.php" title="gestion des modules" class="dropdown-item">Gestion des modules</a>
                            <a href="Ajouter_module.php" title="ajouter un module" class="dropdown-item">Ajouter un module</a>
                        </div>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Enseignant</a>
                        <div class="dropdown-menu">
                            <a href="gestion_des_prof.php" title="gestion des enseignants" class="dropdown-item">Gestion des enseignants</a>
                            <a href="ajouter_prof.php" title="ajouter un enseignant" class="dropdown-item">Ajouter un enseignant</a>
                            <a href="conslt_admin_dispo_prof.php" title="Disponibilité des enseignants" class="dropdown-item">Disponibilité</a>
                            <a href="module_enseigne.php" title="modules enseignés" class="dropdown-item">Modules enseignés</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">Utilisateur</a>
                        <div class="dropdown-menu">
                            <a href="gestion_des_utilisateurs.php" title="gestion des utilisateurs" class="dropdown-item">Gestion des utilisateurs</a>
                            <a href="ajout_utilisateur.php" title="ajouter un utilisateur" class="dropdown-item">Ajouter un utilisateur</a>
                            <a href="rechercher_utilisateur.php" title="Rechercher" class="dropdown-item">Rechercher</a>
                        </div>
                    </li>
                    <li><a href="logout.php" title="quitter" class="nav-item nav-link">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
</header>
    <!-- appelle aux fichiers BT js et jquery.js - popper.js inclu -  -->
    <script src="CSS/jquery.min.js"></script>
    <script src="CSS/bootstrap.bundle.min.js"></script>
<br>
<!-- footer -->
 <div class="piedDePage d-print-none">
        <p style="padding-top: 1px;margin-top:3px;">
       Ecole superieure de technologie FBS; 2021/2022 &bull;
        </p>
  </div><br />
<?php
}
?>
</body>
</html>