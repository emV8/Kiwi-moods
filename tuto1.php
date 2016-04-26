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
	$_SESSION['tuto1'] = true;
	?>
	</div>
	</header>

	<div id = "tuto">
		Vous allez écouter 6 playlists composées chacune de 6 titres. <br/>
		À la fin de chaque playlist, vous devrez répondre à un questionnaire. <br/>
		Merci d'écouter chaque playlist jusqu'à la fin puis de passer au questionnaire dès que vous aurez <br/> 
		terminé d'écouter une playlist. Assurez-vous d'avoir le temps d'écouter une playlist et de répondre <br/>
		à son questionnaire (environ 30 minutes). <br/>
		Vous n'êtes pas obligé d'écouter toutes les playlists d'un coup, vous pouvez les répartir sur quelques jours. <br/>
		<br/>
		Bonne écoute !
		<br/>
		<br/>
		<span> <input type = "button" class="suivant" value = "Passer à l'écoute >" onclick = "self.location.href = 'tuto2.php'"/> </span>
	</div>
	


</body>
</html>