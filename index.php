<?php
session_start();
// appelle au code de connexion à la BDD
require_once("bdd.php");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="Shortcut Icon" href="image/IMAGE1.png" type="image/x-icon">
<script language="JavaScript">
 function checkData() {
  var f1 = document.forms[0];
  var wm = " S'il vous plait Entrer votre :\r\n";
  var noerror = 1;
  var t1 = f1.pseudo;
  if (t1.value == "" || t1.value == " ") {
    wm += "Login\r\n";
    noerror = 0;
  }
    var t1 = f1.mdp;
  if (t1.value == "" || t1.value == " ") {
    wm += "Password\r\n";
    noerror = 0;
  }
  // --- check if errors occurred ---
  if (noerror == 0) {
    alert(wm);
    return false;
  }
  else return true;
}
//-->
</script>
<title>authentification</title>
</head>
<body>
<?php /*********************Verification du mot de passe ********************************/
if(isset($_POST['mdp']))
{
if($_POST['mdp']!= "" and $_POST['pseudo']!= "")
    {
  $mdp=$_POST['mdp'];
  $pseudo=$_POST['pseudo'];
  
$nb1=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb1,statut,Num,utilisateur.nom,utilisateur.prenom from login,utilisateur  where pseudo='$pseudo' and passe='$mdp' and login.Num = utilisateur.id_user"));
  
$nb=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb,statut,prof.id_prof,Num,prof.nom,prof.prenom from login,prof  where pseudo='$pseudo' and passe='$mdp' and login.Num = prof.id_prof "));
  
  if($nb['nb']==1)
  {
    if($nb['statut']=="prof")
        {
      $_SESSION['prof']=$nb['Num'];
      $_SESSION['pseudo']=$_POST['pseudo'];
          $_SESSION['mdp']=$_POST['mdp'];
      $_SESSION['nom']=$nb['nom'];
      $_SESSION['prenom']=$nb['prenom'];
      $_SESSION['id_prof']=$nb['id_prof'];
  echo "<meta http-equiv='refresh' content='0; espace_prof.php' />";
          }
  }
  
  else if($nb1['nb1']==1)
  {
    if($nb1['statut'] == "Etudiant")
      {
      $_SESSION['Etudiant']=$nb1['Num'];
      $_SESSION['pseudo']=$_POST['pseudo'];
          $_SESSION['mdp']=$_POST['mdp'];
      $_SESSION['nom']=$nb1['nom'];
      $_SESSION['prenom']=$nb1['prenom'];
    echo "<meta http-equiv='refresh' content='0; espace_etudiant.php' />";
      }
  }
  
  
  else{
?>
<script language="JavaScript">alert("Le login ou le mot de passe incorecte...");</script>
<?php  
  }
}
}
 ?>
<!--debut BOOTSTRAP -------------->
<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-secondary float-right" style="margin-top: 5px;">Admin</button>
<section class="Form my-4 mx-5">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-5">
        <img src="image/ULogin.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-7 px-5">
        <h1 class="font-weight-bold py-3">
          <img src="image/est.png" width="35%" height="30%" alt="">
        </h1>
        <h5 style="margin-top: -20px;">
          Département d'informatique <br>
          Services des emplois du temps <br><br>
          veuillez connecter à votre compte
        </h5>
        <form method="post" name="connecter" onSubmit="return checkData()">
          <div class="form-row">
            <div class="col-lg-7">
              <input type="text" name="pseudo" class="form-control my-2 p-4" placeholder="Login">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7">
              <input type="password" name="mdp" class="form-control my-2 p-4" placeholder="********">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7">
              <button type="submit" name="submit" class="btn1 mt-3 mb-5">Login</button>
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7 card-footer">
              <p> lien extene utile :  </p>
              <ul>
                <li><a href="http://estfbs.usms.ac.ma/">EST FBS</a></li>
              </ul>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--fin BOOTSTRAP MAJ-->

<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=memoiremaster', 'root', '');
if(isset($_POST['envoyer']))
{
// Vérification des identifiants *******************************************************
$req = $bdd->prepare('SELECT pseudo FROM  login WHERE 
pseudo = :pseudo
&& passe = :passe && statut = "admin" ');
$req->execute(array('pseudo' => $_POST['pseudo'],'passe' => $_POST['passe']));
$resultat = $req->fetch();
if (!$resultat)
{
?> <SCRIPT LANGUAGE="Javascript">
   window.alert('Login ou mot de passe incorrect')
  </SCRIPT>
<?php  } else { echo "<meta http-equiv='refresh' content='0; gestion_des_emplois_de_temps.php' />";
            $_SESSION['pseudo']=$_POST['pseudo'];
          $_SESSION['passe']=$_POST['passe'];
      $_SESSION['statut']='admin';
   }
}
?>

 <!---------------------------------début de Modal admin ------------------------------- -->
<div id="id01" class="modal" style="background-color: rgba(0,0,0,0.5);">
  <div class="modal-dialog modal-md">
  <div class="modal-content">
  <div class="modal-header">
  <div class="modal-body">
  <form method="post">
    <div>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
 
<div class="container">
  <h5>formulaire réservé à l'administration</h5>
  <div class="form-row">
      <input type="text" class="form-control my-2 p-4" placeholder="Login" name="pseudo" required > 
  </div>
  <div class="form-row"> 
      <input type="password" class="form-control my-2 p-4" placeholder="********" name="passe" required>
  </div>
  <div class="form-row">
      <button type="submit" class="btn1 mt-3 mb-5" name="envoyer">Login</button>
  </div> 
  <div class="form-row">
      <button type="button" class="btn2 mt-3 mb-5" onclick="document.getElementById('id01').style.display='none'">Annuler</button>
  </div>
</div>
  </form>
  </div>
  </div>
  </div>
  </div>
</div>
<!-- -------------------------------fin de Modal admin--------------------------------- -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- appelle aux fichiers BT js et jquery.js - popper.js inclu -  -->
<script src="CSS/bootstrap.bubdle.min.js"></script>
<script src="CSS/jquery.min.js"></script>
 
</body>
</html>
