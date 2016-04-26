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

if(!empty($_POST['ctitre1'])){
	global $dbprefix;
	foreach($_POST['ctitre1'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) && $_POST['autre1']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[0].'")';
				$res = $connexion -> query($requete);
				$ok1 = true;
			}
		}else{
			$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[0].'")';
			$res = $connexion -> query($requete);
			$ok1 = true;
		}
	}
}else{
    echo false;
}

if(!empty($_POST['ctitre2'])){
	global $dbprefix;
	foreach($_POST['ctitre2'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) && $_POST['autre2']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre2'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[1].'")';
				$res = $connexion -> query($requete);
				$ok2 = true;
			}
		}else{
			$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[1].'")';
			$res = $connexion -> query($requete);
			$ok2 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['ctitre3'])){
	global $dbprefix;
	foreach($_POST['ctitre3'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre3']) && $_POST['autre3']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre3'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[2].'")';
				$res = $connexion -> query($requete);
				$ok3 = true;
			}
		}else{
			$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[2].'")';
			$res = $connexion -> query($requete);
			$ok3 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['ctitre4'])){
	global $dbprefix;
	foreach($_POST['ctitre4'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre4']) && $_POST['autre4']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre4'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[3].'")';
				$res = $connexion -> query($requete);
				$ok4 = true;
			}
		}else{
			$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[3].'")';
			$res = $connexion -> query($requete);
			$ok4 = true;
		}
	}
}
else{
	echo false;
}

if(!empty($_POST['ctitre5'])){
	global $dbprefix;
	foreach($_POST['ctitre5'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre5']) && $_POST['autre5']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre5'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[4].'")';
				$res = $connexion -> query($requete);
				$ok5 = true;
			}
		}else{
			$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[4].'")';
			$res = $connexion -> query($requete);
			$ok5 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['ctitre6'])){
	global $dbprefix;
	foreach($_POST['ctitre6'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre6']) && $_POST['autre6']==""){
				echo false;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre6'];
				$context.= $othercontext;
				$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[5].'")';
				$res = $connexion -> query($requete);
				$ok6 = true;
			}
		}else{
			$requete = 'INSERT INTO  listencontext (context_name, user_id , title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[5].'")';
			$res = $connexion -> query($requete);
			$ok6 = true;
		}
	}
}else{
	echo false;
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form3.php");
}

?>