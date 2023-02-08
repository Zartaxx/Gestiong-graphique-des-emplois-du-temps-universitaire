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
    <link rel="Shortcut Icon" href="image/IMAGE1.png" type="image/x-icon">
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
                    <li>
                    </li>
                                         <li class="dropdown">
                        
                        <div class="dropdown-menu">
                            
                            
                        </div>
                    </li>
                     <li class="dropdown">
                        
                        <div class="dropdown-menu">
                           
                            
                        </div>
                    </li>
                     <li class="dropdown">
                        
                        <div class="dropdown-menu">
                            
                        </div>
                    </li>
                     <li class="dropdown">
                       
                        <div class="dropdown-menu">
                          
                        </div>
                    </li>
                    <li class="dropdown">
                        
                        <div class="dropdown-menu">
                            
                        </div>
                    </li>
                    <li class="dropdown">
                       
                        <div class="dropdown-menu">
                           
                        </div>
                    </li>
                     <li class="dropdown">
                       
                        <div class="dropdown-menu">
                           
                        </div>
                    </li>
                    <li class="dropdown">
                       
                        <div class="dropdown-menu">
                          
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
        Université de Béjaia &copy; 2019/2020 &bull; tous les droits resérvés &bull;
        </p>
  </div><br />
<?php
}
?>
</body>
</html>