<?php

include_once('../../config-tut8.php');
	$connexion = mysqli_connect($databaselocation, $databaseuser, $databasepass, $databasename);
	if (!$connexion) {
       die('Could not connect: ' . mysqli_error());
    }
	$bdd = mysqli_select_db($connexion, $databasename);
	if (!$bdd) {
       die ('Impossible de sélectionner la base de données : ' . mysqli_error());
    }
	$connexion -> query("SET NAMES 'utf8'");
	
session_start();
$userid = $_SESSION['userid'];
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


$ok1 = false;
$ok2 = false;
$ok3 = false;
$ok4 = false;
$ok5 = false;
$ok6 = false;

$ok12 = false;
$ok22 = false;
$ok32 = false;
$ok42 = false;
$ok52 = false;
$ok62 = false;

$requete = "SELECT titre, artiste FROM ".$dbprefix."music WHERE playlist_id = '".$_SESSION ['playlist_id']."'";
$res = $connexion -> query($requete);	

while($row = mysqli_fetch_array($res)){
	$title_playlist[] = $row['titre'];
	$artist_playlist[] = $row['artiste'];
}

	//question 5
if (isset($_POST['connaissancetitre1']) && $_POST['connaissancetitre1']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowtitle (knowtitle, user_id , title) VALUES("'.$_POST['connaissancetitre1'].'","' .$userid.'","'.$title_playlist[0].'")';
	$res = $connexion -> query($requete);
	$ok1 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre2']) && $_POST['connaissancetitre2']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowtitle (knowtitle, user_id , title) VALUES("'.$_POST['connaissancetitre2'].'","' .$userid.'","'.$title_playlist[1].'")';
	$res = $connexion -> query($requete);
	$ok2 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre3']) && $_POST['connaissancetitre3']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowtitle (knowtitle, user_id , title) VALUES("'.$_POST['connaissancetitre3'].'","' .$userid.'","'.$title_playlist[2].'")';
	$res = $connexion -> query($requete);
	$ok3 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre4']) && $_POST['connaissancetitre4']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowtitle (knowtitle, user_id , title) VALUES("'.$_POST['connaissancetitre4'].'","' .$userid.'","'.$title_playlist[3].'")';
	$res = $connexion -> query($requete);
	$ok4 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre5']) && $_POST['connaissancetitre5']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowtitle (knowtitle, user_id , title) VALUES("'.$_POST['connaissancetitre5'].'","' .$userid.'","'.$title_playlist[4].'")';
	$res = $connexion -> query($requete);
	$ok5 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre6']) && $_POST['connaissancetitre6']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowtitle (knowtitle, user_id , title) VALUES("'.$_POST['connaissancetitre6'].'","' .$userid.'","'.$title_playlist[5].'")';
	$res = $connexion -> query($requete);
	$ok6 = true;
}else{
	echo false;
}


	//question 6

if (isset($_POST['connaissanceartiste1']) && $_POST['connaissanceartiste1']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowartist (knowartist, user_id , title) VALUES("'.$_POST['connaissanceartiste1'].'","' .$userid.'","'.$artist_playlist[0].'")';
	$res = $connexion -> query($requete);
	$ok12 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste2']) && $_POST['connaissanceartiste2']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowartist (knowartist, user_id , title) VALUES("'.$_POST['connaissanceartiste2'].'","' .$userid.'","'.$artist_playlist[1].'")';
	$res = $connexion -> query($requete);
	$ok22 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste3']) && $_POST['connaissanceartiste3']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowartist (knowartist, user_id , title) VALUES("'.$_POST['connaissanceartiste3'].'","' .$userid.'","'.$artist_playlist[2].'")';
	$res = $connexion -> query($requete);
	$ok32 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste4']) && $_POST['connaissanceartiste4']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowartist (knowartist, user_id , title) VALUES("'.$_POST['connaissanceartiste4'].'","' .$userid.'","'.$artist_playlist[3].'")';
	$res = $connexion -> query($requete);
	$ok42 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste5']) && $_POST['connaissanceartiste5']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowartist (knowartist, user_id , title) VALUES("'.$_POST['connaissanceartiste5'].'","' .$userid.'","'.$artist_playlist[4].'")';
	$res = $connexion -> query($requete);
	$ok52 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste6']) && $_POST['connaissanceartiste6']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  '.$dbprefix.'knowartist (knowartist, user_id , title) VALUES("'.$_POST['connaissanceartiste6'].'","' .$userid.'","'.$artist_playlist[5].'")';
	$res = $connexion -> query($requete);
	$ok62 = true;
}else{
	echo false;
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6 && $ok12 && $ok22 && $ok32 && $ok42 && $ok52 && $ok62){
	header("Location:form6.php");
}

?>