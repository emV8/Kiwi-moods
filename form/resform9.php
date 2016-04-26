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


if(!empty($_POST['possiblecontextplaylist'])){
	global $dbprefix;
	foreach($_POST['possiblecontextplaylist'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec1']) && $_POST['autrec1']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO possiblecontextplaylist (context_name, user_id , playlist_id) VALUES("'.$context.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
				$res = $connexion -> query($requete);
				header("Location:form10.php");
				exit;
			}
		}else{
			$requete = 'INSERT INTO possiblecontextplaylist (context_name, user_id , playlist_id) VALUES("'.$context.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);
			header("Location:form10.php");
			exit;
		}
	}
}else{
	echo false;
}

?>