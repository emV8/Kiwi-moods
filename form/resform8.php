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


if(isset($_POST['goutplaylist']) && $_POST['goutplaylist']!=""){
	global $dbprefix;
	$goutplaylist = $_POST['goutplaylist'];
	$requete = 'INSERT INTO  likeplaylist (user_id, mood_name , playlist_id) VALUES("'.$_SESSION['userid'].'","' .$goutplaylist.'", "'.$_SESSION['playlist_id'].'")';
	$res = $connexion -> query($requete);
	header("Location:form9.php");
}else{
	echo false;
}



?>