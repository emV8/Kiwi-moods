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
$playlist_id = $_SESSION['playlist_id'];


$listened_playlist = array();
$requete = "SELECT playlist_id FROM ".$dbprefix."listened WHERE user_id = '".$userid."'";
$res = $connexion -> query($requete);	

while($row = mysqli_fetch_array($res)){
	$listened_playlist[] = $row['playlist_id'];
}


if (count($listened_playlist)>=6){
	$dir = "end.php";
	header("Location:end.php");
}else{
	$dir = "mood.php";
}

?>

<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  <script src="script.js"></script>
</head>

<body>
<header>
	<div id = "loginUser">
	<?php
		echo "Bienvenue, ". $_SESSION['login']." !";
	?>
	</div>
</header>

<div class = "text" id="progression">
	Vos réponses pour la playlist n° <?php echo $_SESSION['playlist_id'] ?> ont bien été enregistrées. <br/>
	Vous avez écouté <?php echo count($listened_playlist) ?> playlists sur 6 ! <br/>
	En appuyant sur suivant, vous passerez à la prochaine playlist.
	<br/>
	<input type="button" id = "progression_button" class = "suivant" value = "Suivant" onclick = "self.location.href = '<?php echo $dir; ?>'"/>
</div>

</body>
</html>