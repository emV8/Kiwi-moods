<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  
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

	<div id = "player">
      <?php
      $connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
      $connexion -> query("SET NAMES 'utf8'");
        include 'player.php';
        genplaylist($connexion);
      ?>
  </div>
    <div class = "question">
      <?php
        include 'form/form1.php';
		?>     
    </div>
      
        <script src="jquery.js"></script>
        <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
        <script src="script.js"></script> 
</body>
</html>
