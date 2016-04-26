<?php
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if(!empty($_POST['namemoodplaylist'])){
	global $dbprefix;
	foreach($_POST['namemoodplaylist'] as $mood){
		if ($mood=="autre"){
			if (empty($_POST['othermoodplaylist']) || $_POST['othermoodplaylist']==""){
				echo false;
			}else{
				$mood.= " : ";
				$othermood = $_POST['othermoodplaylist'];
				$mood.= $othermood;
				$requete = 'INSERT INTO namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$_SESSION['playlist_id'].'")';
				$res = $connexion -> query($requete);
				header("Location:../tmp.php");
			}
		}else{
			$requete = 'INSERT INTO namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);
			header("Location:../tmp.php");
		}
	}
}else{
	echo false;
}

?>