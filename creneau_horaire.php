<?php
// appelle au code de connexion à la BDD
require_once("bdd.php");
$for=mysqli_query($db,"SELECT id_formation,nom_formation from formation  WHERE  formation.id_formation  NOT IN (SELECT id_formation FROM creneau_horaire)");
  ?>
<html>
<meta charset="UTF-8">
<title>creneau horaire </title>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/creneau.css">
<head>
<script src="CSS/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	$('#heure1').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure1').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
		
		$( document ).ready(function() {
	$('#heure2').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure2').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
		
		$( document ).ready(function() {
	$('#heure3').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure3').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
		
		
		$( document ).ready(function() {
	$('#heure4').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure4').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
		
		$( document ).ready(function() {
	$('#heure5').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure5').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
		
		$( document ).ready(function() {
	$('#heure6').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 2 || inputLength === 8){
        var thisVal = event.target.value;
        thisVal += ':';
        $(event.target).val(thisVal);}}})});
 
 $( document ).ready(function() {
	$('#heure6').bind('keyup','keydown', function(event) {
  	var inputLength = event.target.value.length;
    if (event.keyCode != 11){
      if(inputLength === 5){
        var thisVal = event.target.value;
        thisVal += '-';
        $(event.target).val(thisVal);
    	}}})});
</script>
</head>
<body style="background-color:#07415f;">
<?php 
$cpt=mysqli_fetch_array(mysqli_query($db,"SELECT count(*) as nb from formation  WHERE formation.id_formation NOT IN (SELECT id_formation FROM creneau_horaire) "));
if( $cpt['nb']>0) {
 ?>

<br />
 <form method="post" action="#">
<p style=" margin-left:15px; color:#fff;font-size:16px;	font-family:Verdana, Geneva, sans-serif;font-weight:bold;letter-spacing:1px;
	word-spacing:5px; padding-bottom:5px;">Choisissez une formation ! </p>
 <table id="rounded-corner">
<thead>
<tr> 
<th scope="col" style=" width:auto;"   class="rounded-q2">Formation</th>
<th scope="col"  style=" width:50px;"  class="rounded-q4"> Sélection </th>
</tr></thead>
<?php 
while($a=mysqli_fetch_array($for)){ ?> 
<tr>
<td  style="color:#000; font-size:16px;width:auto;" ><b><?php  echo  $a['nom_formation']; ?></b>
<td style=" width:50px;"> <input style="width:40px;" name="formation[]"  id="formation" type="checkbox" value="<?php echo  $a['id_formation']; ?>" ></td><?php }?>
</tr>
</table>
<pre><p>AJOUTER UN CRENEAU HORAIRE </p></pre> 
       <table width="75%" border="1" cellspacing="1" style="margin-left:320px; margin-top:00px;">
  <tr>
    <td style="color:#FFF; width:45px; font-size:16px; text-align:center;">Heure</td>
    <td> <input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$";required name="heure1" id="heure1" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /></td>
    <td> <input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$" required name="heure2" id="heure2" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /></td>
    <td> <input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$" required name="heure3" id="heure3" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /></td>
    <td> <input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$" required name="heure4" id="heure4" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /></td>
    <td> <input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$" required name="heure5" id="heure5" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /></td>
    <td> <input pattern="^([0-1][0-9]:[0-5][0-9])-([0-1][0-9]:[0-5][0-9])$" required name="heure6" id="heure6" type="text" maxlength="11" placeholder="HH:MM-HH:MM" /></td>
    </tr>
</table>
<br>
<input name="Ajouter" class="valider" style="margin-left:675px;" value="Ajouter" type="Submit"> 
<a href="gestion_des_emplois_de_temps.php" style="text-decoration:none;"><input class="valider" type="button" value="précedent" style="width:120px ;"/></a>
</form>  
<?php 
if(isset($_POST['Ajouter'])){ 

if(isset($_POST['formation'])){ 
$id_formation=$_POST['formation'];
$heure1=$_POST['heure1'];$heure2=$_POST['heure2'];$heure3=$_POST['heure3'];$heure4=$_POST['heure4'];
$heure5=$_POST['heure5'];$heure6=$_POST['heure6'];

foreach($id_formation as $formation) {	
 mysqli_query($db,"INSERT INTO creneau_horaire(heure,id_formation) VALUES ('$heure1','$formation') "); 
 mysqli_query($db,"INSERT INTO creneau_horaire(heure,id_formation) VALUES ('$heure2','$formation') ");
 mysqli_query($db,"INSERT INTO creneau_horaire(heure,id_formation) VALUES ('$heure3','$formation') ");
 mysqli_query($db,"INSERT INTO creneau_horaire(heure,id_formation) VALUES ('$heure4','$formation') ");
 mysqli_query($db,"INSERT INTO creneau_horaire(heure,id_formation) VALUES ('$heure5','$formation') ");
 mysqli_query($db,"INSERT INTO creneau_horaire(heure,id_formation) VALUES ('$heure6','$formation') ");
 
 }?> <script type="text/javascript"> alert('le module  est ajouté avec succés'); </script> <?php 

 } } }else {?> <script type="text/javascript"> alert('le creneau horaire est programmé pour toutes les formations'); </script>
<?php echo "<meta http-equiv='refresh' content='0; gestion_des_emplois_de_temps.php' />";   }  ?>
  
 </body>
</html>


    
     