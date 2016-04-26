
			<form action="form/resform6.php" method="post" onsubmit="return false">
			<b> 7. Avant d'écouter cette playlist, vous avez choisi '
				<?php
					if (session_status() == PHP_SESSION_NONE || session_id()== ""){
						session_start();
					}
					$connexion = mysql_connect("localhost", "root");
					$bdd = mysql_select_db("kiwimoods", $connexion);
					mysql_query("SET NAMES 'utf8'");
					$userid = $_SESSION['userid'];
					$requete = "SELECT mood_name FROM currentmood WHERE user_id = '".$userid."' AND playlist_id = '".$_SESSION['playlist_id']."'";
					$res = mysql_query($requete);
					$row = mysql_fetch_row($res);
					if ($row[0]){
						echo $row[0];
					}
				?> ' pour qualifier votre humeur. <br/> 
				Trouvez-vous qu'elle ait changée après cette écoute ? </b><br/>
			<br/>
		       <input type='radio' name="moodplaylist" value="oui" /> Oui <br/>
		       <input type="radio" name="moodplaylist" value="non" /> Non <br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/>
			<progress max="10" value = "6"></progress>
			<br/>
			</form>
