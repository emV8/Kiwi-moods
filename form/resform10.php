<?php
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}

$ok1 = true;



if(!empty($_POST['namemoodplaylist'])){
	global $dbprefix;
	foreach($_POST['namemoodplaylist'] as $mood){
		if ($mood=="autre"){
			if (empty($_POST['othermoodplaylist']) || $_POST['othermoodplaylist']==""){
				$ok1 = false;
				echo false;
				break;
			}else{
				$mood.= " : ";
				$othermood = $_POST['othermoodplaylist'];
				$mood.= $othermood;
				$requete = 'INSERT INTO namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$_SESSION['playlist_id'].'")';
				$res = $connexion -> query($requete);
			}
		}else{
			$requete = 'INSERT INTO namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);	
		}
	}
}else{
	echo false;
}

if($ok1){
	$requete2 = "INSERT INTO listened (user_id, playlist_id) VALUES('".$userid."','" .$playlist_id."')";
	$res2 = $connexion -> query($requete2);
	header("Location:../tmp.php");
	exit;
}else{
	echo false;
}

?>