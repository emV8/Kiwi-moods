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


$requete = "SELECT titre, artiste FROM music WHERE playlist_id = '".$_SESSION ['playlist_id']."'";
$res = $connexion -> query($requete);	

while($row = mysqli_fetch_array($res)){
	$title_playlist[] = $row['titre'];
}

if(!empty($_POST['cptitre1'])){
	global $dbprefix;
	foreach($_POST['cptitre1'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec1']) && $_POST['autrec1']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[0].'")';
				$res = $connexion -> query($requete);
				$ok1 = true;
			}
		}else{
			$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[0].'")';
			$res = $connexion -> query($requete);
			$ok1 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['cptitre2'])){
	global $dbprefix;
	foreach($_POST['cptitre2'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec1']) && $_POST['autrec2']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec2'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[1].'")';
				$res = $connexion -> query($requete);
				$ok2 = true;
			}
		}else{
			$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[1].'")';
			$res = $connexion -> query($requete);
			$ok2 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['cptitre3'])){
	global $dbprefix;
	foreach($_POST['cptitre3'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec3']) && $_POST['autrec3']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec3'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[2].'")';
				$res = $connexion -> query($requete);
				$ok3 = true;
			}
		}else{
			$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[2].'")';
			$res = $connexion -> query($requete);
			$ok3 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['cptitre4'])){
	global $dbprefix;
	foreach($_POST['cptitre4'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec4']) && $_POST['autrec4']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec4'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[3].'")';
				$res = $connexion -> query($requete);
				$ok4 = true;
			}
		}else{
			$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[3].'")';
			$res = $connexion -> query($requete);
			$ok4 = true;
		}
	}
}
else{
	echo false;
}

if(!empty($_POST['cptitre5'])){
	global $dbprefix;
	foreach($_POST['cptitre5'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec5']) && $_POST['autrec5']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec5'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[4].'")';
				$res = $connexion -> query($requete);
				$ok5 = true;
			}
		}else{
			$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[4].'")';
			$res = $connexion -> query($requete);
			$ok5 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['cptitre6'])){
	global $dbprefix;
	foreach($_POST['cptitre6'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec6']) && $_POST['autrec6']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec6'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[5].'")';
				$res = $connexion -> query($requete);
				$ok6 = true;
			}
		}else{
			$requete = 'INSERT INTO  possiblecontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[5].'")';
			$res = $connexion -> query($requete);
			$ok6 = true;
		}
	}
}else{
	echo false;
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form5.php");
}

?>