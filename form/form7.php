<?php
if (session_status() == PHP_SESSION_NONE || session_id()== ""){
		session_start();
	}

	?>
			<form action="form/resform7.php" method="post" onsubmit="return false">
			<b> 8. Si oui, vers quelle humeur a-t-elle changé ? 
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
			</b><br/>
			<br/>
			<table class="littlequestion">
				<tr>
					<td>  Colère </td>
		       <td> <input type='radio' name="newmoodplaylist" value="colère" /> </td>
		   </tr>
		   <tr>
		   	<td>  Excitation </td>
		       <td><input type="radio" name="newmoodplaylist" value="excitation" /> </td>
		   </tr>
		   <tr>
		   	<td>  Calme/détente </td>
		      <td> <input type="radio" name="newmoodplaylist" value="calme" /> </td>
		   </tr>
		   <tr>
		   	<td> Joie</td>
		       <td><input type="radio" name="newmoodplaylist" value="joie" /> </td>
		   </tr>
		   <tr>
		   	<td> Peur </td>
		       <td><input type="radio" name="newmoodplaylist" value="peur" /></td>
		   </tr>
		   <tr>
		   	<td>  Fatigue </td>
		       <td><input type="radio" name="newmoodplaylist" value="fatigue" /></td>
		   </tr>
		   <tr>
		   	<td> Ennui </td>
		       <td><input type="radio" name="newmoodplaylist" value="ennui" /></td>
		   </tr>
		   <tr>
		   	<td>  Tristesse </td>
		       <td><input type="radio" name="newmoodplaylist" value="tristesse" /></td>
		   </tr>
		   <tr>
		   	<td>  Autre : </td>
		      <td> <br/> <input type="radio" name="newmoodplaylist" value="autre" id = "newmoodplaylist" />
		       <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Si autre, écrire une humeur" style="text-align:center" onfocus="document.getElementById('newmoodplaylist').checked=true;"/> <br/>
			</td>
			</tr>
			</table>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/> <br/>
			<progress max="10" value = "7"></progress>
			<br/>
			</form>
