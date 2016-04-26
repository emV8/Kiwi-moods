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
<!--</br></br></br></br></br></br></br></br></br></br></br>-->
   

        <div id = "tuto2">
        	Vous écoutez la playlist n° <?php echo $_SESSION['playlist_id'] ?>. <br/>
            À la fin de cette playlist, vous passerez au questionnaire. <br/>
            Ce dernier est composé de 11 questions et chacune est obligatoire. <br/>
            N'hésitez pas à remplir le champ <i> "autre" </i> si aucune des formulations ne vous convient. <br/>
            Merci de répondre le plus honnêtement possible à ces questions et de ne pas interrompre le questionnaire. <br/>
            Pour une bonne navigation dans le questionnaire, merci de ne pas utiliser le bouton précédent. <br/> <br/>
            Merci !
            <br/>
            <br/>
            <input class = "suivanttuto" type="submit" value="Répondre au questionnaire >" onclick="self.location.href='form.php'"/>
        </div>

      
        <script src="jquery.js"></script>
        <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
        <script src="script.js"></script> 
</body>
</html>

    
    