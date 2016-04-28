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
$ok1 = false;
$ok2 = false;
$ok3= false;
$ok4 = false;
$ok5 = false;
$ok6 = false;
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if(isset($_POST['goutplaylist']) && $_POST['goutplaylist']!=""){
	global $dbprefix;
	$goutplaylist = $_POST['goutplaylist'];
	$requete = 'INSERT INTO  '.$dbprefix.'likeplaylist (user_id, mood_name , playlist_id) VALUES("'.$_SESSION['userid'].'","' .$goutplaylist.'", "'.$_SESSION['playlist_id'].'")';
	$res = $connexion -> query($requete);
	header("Location:form9.php");
}else{
	echo false;
}



?>