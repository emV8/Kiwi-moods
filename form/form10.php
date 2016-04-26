<?php
if (session_status() == PHP_SESSION_NONE || session_id()== ""){
		session_start();
	}

	?>
			<form action="form/resform10.php" method="post" onsubmit="return false">
			<b> 11. A quelle(s) humeur(s) associeriez-vous cette playlist ?
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
			<table class="mediumquestion">
				<tr>
					<td> Colère </td>
		       <td><input type='checkbox' name="namemoodplaylist[]" value="colère" /></td>
		   </tr>
		   <tr>
		   	<td> Excitation </td>
		     <td>  <input type="checkbox" name="namemoodplaylist[]" value="excitation" /></td>
		   </tr>
		   <tr>
		   	<td> Calme/détente </td>
		      <td> <input type="checkbox" name="namemoodplaylist[]" value="calme" /> </td>
		   </tr>
		   <tr>
		   	<td> Joie </td>
		     <td>  <input type="checkbox" name="namemoodplaylist[]" value="joie" /> </td>
		   </tr>
		   <tr>
		   	<td> Peur </td>
		       <td><input type="checkbox" name="namemoodplaylist[]" value="peur" /></td>
		       <tr/>
		       <tr>
		       	<td> Fatigue </td>
		       <td><input type="checkbox" name="namemoodplaylist[]" value="fatigue" /></td>
		   </tr>
		   <tr>
		   	<td> Ennui </td>
		      <td> <input type="checkbox" name="namemoodplaylist[]" value="ennui" /> </td>
		   </tr>
		   <tr>
		   	<td> Tristesse </td>
		      <td> <input type="checkbox" name="namemoodplaylist[]" value="tristesse" /></td>
		   </tr>
		       <tr>
		       	<td> Autre : </td>
		       <td><input type="checkbox" name="namemoodplaylist[]" id = "namemoodplaylist[]" value="autre" />
		       	<input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Si autre, écrire une/des humeur(s)" style="text-align:center" onfocus="document.getElementById('namemoodplaylist[]').checked=true;"/> <br/>
			</td>
			</tr>
			</table>
			<input id = "last" class = "suivant" type="submit" value="Suivant" onclick="loadFormLast(this)">
			<br/> <br/>
			<progress max="10" value = "10"></progress>
		<br/>
			</form>
