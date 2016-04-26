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

<div class="text">
	Comment qualifieriez-vous votre humeur au cours des dernières heures ?
	<span id = "help">
	<a href="#" class="test">[?]
						<div class="raised">
						<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>
						<div class="boxcontent">
						 
						<b> Exemple d'autres adjectifs possibles pour qualifier votre humeur : </b>
						<p>
						 
						Tranquille - À l'aise - Attentif - Concentré ... <br />
						Surpris - Choqué - Confus - Dérouté ... <br />
						Abbatu - Chagriné - Démoralisé - Déprimé ... <br />
						Acerbe - Agacé - Amer - Contrarié ... <br />
						Furieux - Enragé - Furax - Furibon ... <br />
						Affolé - Alarmé - Angoissé - Anxieux ... <br />
						Dégoûté - Écœuré - Rébuté - Révulsé ... <br />
						Amusé - Comblé - Content - Égayé ... <br />
						... </br>
						</p>
						</div>
						<b class="bottom"><b class="b4b"></b><b class="b3b"></b><b class="b2b"></b><b class="b1b"></b></b>
						</div>
					</a>
				</span>
</div>
<div id = "currentMood">
	<form action="currentmood.php" method="post">
		<div id="excitation"> <img src="img/music/orange.png" width="25%" alt="excitation"> <br/> Excitation <br/> <span class ="radiomood"> <input type='radio' name="mood" value='excitation' /> </span> </div>
		<div id="angry"> <img src="img/music/rouge.png" width="25%" alt="colère"> <br/> Colère <br/> <span class ="radiomood"> <input type='radio' name="mood" value='colère' /> </span> </div>
		<div id="happiness"> <img src="img/music/jaune.png" width="25%" alt="joie"> <br/> Joie <br/> <span class ="radiomood"> <input type='radio' name="mood" value='joie' /> </span> </div>
		<div id="other"> <img src="img/music/blanc.png" width="25%" alt="autre"> <br/> Autre <br/> <span class ="radiomood"> <input id ="othermood" type='radio' name="mood" value='autre' /> </span> <br/> <input type="text" name="otherMood" id = "otherMood" placeholder="Si autre, écrire une/des émotion(s)..." onfocus="document.getElementById('othermood').checked=true;"/> </div>
		<div id="calm"> <img src="img/music/vert.png" width="25%" alt="calme"> <br/> Calme/relaxation <br/> <span class ="radiomood"> <input type='radio' name="mood" value='calme' /> </span> </div>
		<div id="sadness"> <img src="img/music/noir.png" width="25%" alt="tristesse"> <br/> Tristesse <br/> <span class ="radiomood"> <input type='radio' name="mood" value='tristesse' /> </span> </div>
		<div id="tired"> <img src="img/music/violet.png" width="25%" alt="fatigue"> <br/> Fatigue <br/> <span class ="radiomood"> <input type='radio' name="mood" value='fatigue' /> </span> </div>
		<input type="submit" class = "suivant" value="Envoyer" id="button_moods"/>
	</form>
</div>
</body>
</html>
