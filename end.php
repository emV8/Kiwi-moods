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
			if (session_status() == PHP_SESSION_NONE || session_id()== ""){
				session_start();
				echo "Bienvenue, ". $_SESSION['login']." !";
			}
			?>
		</div>
	</header>
	<div id = "end">
		Vous avez écouté chacune des playlists et répondu aux questionnaires. <br/>
		Merci pour votre participation et pour l'attention que vous avez portez à cette expérience ! :-) <br/>
		<p id = "txt" hidden> Votre message a bien été pris en compte, merci. </p>
        
        <br />
        <br />
        
        <form action="end.php" method="post">
			<textarea name="suggestion" id = "sugg" rows="10" cols="50">Si vous avez des suggestions, merci de les renseigner ici.</textarea>
            <br />
            <input class = "suivant" type="submit" value="Envoyer" id = "sugg_button" />           
		</form>
	</div> 
</body>
</html>

<?php

$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");
$userid = $_SESSION['userid'];
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if (isset($_POST['suggestion']) && $_POST['suggestion']!="" && $_POST['suggestion']!='Si vous avez des suggestions, merci de les renseigner ici.'){

	$requete = 'INSERT INTO  suggestion (suggestion_message, user_id) VALUES("'.$_POST['suggestion'].'","' .$userid.'")';
	$res = $connexion -> query($requete);
	if ($res){
		echo "<script> document.getElementById('txt').style.display = 'block'; </script>";
		echo "<script> document.getElementById('sugg').style.display = 'none'; </script>";
		echo "<script> document.getElementById('sugg_button').style.display = 'none'; </script>";
	}else{
		echo "<script> alert('Une erreur est survenue lors de l'envoi de votre message. Merci de réessayer.) </script>";
	}
}
?>