<?php

include_once('../../config-tut8.php');
	$connexion = mysql_connect($databaselocation, $databaseuser, $databasepass);
	if (!$connexion) {
       die('Could not connect: ' . mysql_error());
    }
	$bdd = mysql_select_db($databasename, $connexion);
	if (!$bdd) {
       die ('Impossible de sélectionner la base de données : ' . mysql_error());
    }

$ok1 = false;
$ok2 = false;
$ok3= false;
$ok4 = false;
$ok5 = false;
$ok6 = false;

$requete = "SELECT titre, artiste FROM ".$dbprefix."music WHERE playlist_id = '".$_SESSION ['playlist_id']."'";
$res = $connexion -> query($requete);	

while($row = mysqli_fetch_array($res)){
	$title_playlist[] = $row['titre'];
}

if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if(!empty($_POST['etitre1'])){
	global $dbprefix;
	foreach($_POST['etitre1'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) || $_POST['autre1']==""){
				$ok1=false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[0].'")';
				$res = $connexion -> query($requete);
				$ok1 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'","'.$title_playlist[0].'")';
			$res = $connexion -> query($requete);
			$ok1 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['etitre2'])){
	global $dbprefix;
	foreach($_POST['etitre2'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) || $_POST['autre2']==""){
				$ok2=false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre2'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[1].'")';
				$res = $connexion -> query($requete);
				$ok2 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[1].'")';
			$res = $connexion -> query($requete);
			$ok2 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['etitre3'])){
	global $dbprefix;
	foreach($_POST['etitre3'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre3']) || $_POST['autre3']==""){
				$ok3=false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre3'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[2].'")';
				$res = $connexion -> query($requete);
				$ok3 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[2].'")';
			$res = $connexion -> query($requete);
			$ok3 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['etitre4'])){
	global $dbprefix;
	foreach($_POST['etitre4'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre4']) || $_POST['autre4']==""){
				$ok4=false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre4'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[3].'")';
				$res = $connexion -> query($requete);
				$ok4 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[3].'")';
			$res = $connexion -> query($requete);
			$ok4 = true;
		}
	}
}
else{
	echo false;
}

if(!empty($_POST['etitre5'])){
	global $dbprefix;
	foreach($_POST['etitre5'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre5']) || $_POST['autre5']==""){
				$ok5=false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre5'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[4].'")';
				$res = $connexion -> query($requete);
				$ok5 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[4].'")';
			$res = $connexion -> query($requete);
			$ok5 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['etitre6'])){
	global $dbprefix;
	foreach($_POST['etitre6'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre6']) || $_POST['autre6']==""){
				$ok6=false;
				echo false;
				break;
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre6'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[5].'")';
				$res = $connexion -> query($requete);
				$ok6 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.'emotion (emotion_name, user_id, title) VALUES("'.$context.'","' .$userid.'", "'.$title_playlist[5].'")';
			$res = $connexion -> query($requete);
			$ok6 = true;
		}
	}
}else{
	echo false;
}

if ($ok1 && $ok2 & $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form2.php");
}

?>