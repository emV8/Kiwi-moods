<?php
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
$ok1 = false;

if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if(!empty($_POST['newmoodplaylist'])){
	global $dbprefix;
	$mood = $_POST['newmoodplaylist'];
	if ($mood=="autre"){
		if (empty($_POST['othermoodplaylist']) && $_POST['othermoodplaylist']==""){
			$ok1 = false;
			echo false;
			break;
		}else{
			$mood.= " : ";
			$othermood = $_POST['othermoodplaylist'];
			$mood.= $othermood;
			$requete = 'INSERT INTO  newmoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);
		}
	}else{
		$requete = 'INSERT INTO  newmoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
		$res = $connexion -> query($requete);
	}
}else{
	echo false;
}

if($ok1){
	header("Location:form8.php");
	exit;
}else{
	echo false;
}

?>