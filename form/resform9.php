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

$ok1 = true;


if(!empty($_POST['possiblecontextplaylist'])){
	global $dbprefix;
	foreach($_POST['possiblecontextplaylist'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) || $_POST['autre1']==""){
				$ok1 = false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'possiblecontextplaylist (context_name, user_id , playlist_id) VALUES("'.$context.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
				$res = $connexion -> query($requete);
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'possiblecontextplaylist (context_name, user_id , playlist_id) VALUES("'.$context.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);
		}
	}

}else{
	echo false;
}

if($ok1){
	header("Location:form10.php");
			exit;
		}else{
			echo false;
		}

?>