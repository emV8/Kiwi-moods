<?php
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
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


if(isset($_POST['moodplaylist']) && $_POST['moodplaylist']!=""){
	global $dbprefix;
	$moodplaylist = $_POST['moodplaylist'];
	$requete = 'INSERT INTO  moodchange (user_id, changing , playlist_id) VALUES("'.$_SESSION['userid'].'","' .$moodplaylist.'","'.$_SESSION['playlist_id'].'")';
	$res = $connexion -> query($requete);
	if ($moodplaylist=="oui"){
		header("Location:form7.php");
	}else{
		header("Location:form8.php");
	}
}else{
	echo false;
}



?>