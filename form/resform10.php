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

$ok1 = true;
$playlist_id = $_SESSION['playlist_id'];



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
				$requete = 'INSERT INTO '.$dbprefix.'namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$_SESSION['playlist_id'].'")';
				$res = $connexion -> query($requete);
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);	
		}
	}
}else{
	echo false;
}

if($ok1){
	global $dbprefix;
	$requete2 = "INSERT INTO '.$dbprefix.'listened (user_id, playlist_id) VALUES('".$userid."','" .$playlist_id."')";
	$res2 = $connexion -> query($requete2);
	header("Location:../tmp.php");
	exit;
}else{
	echo false;
}

?>