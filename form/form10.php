
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
		       <input type='checkbox' name="namemoodplaylist[]" value="colère" /> Colère <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="excitation" /> Excitation <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="calme" /> Calme/détente <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="joie" /> Joie <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="peur" /> Peur <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="fatigue" /> Fatigue <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="ennui" /> Ennui <br/>
		       <input type="checkbox" name="namemoodplaylist[]" value="tristesse" /> Tristesse <br/>
		       <!--<input type="checkbox" name="namemoodplaylist[]" value="autre" /> Autre : 
		       <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Si autre, écrire une/des humeur(s)" style="text-align:center"/> <br/>
			<input class = "suivant" type="submit" value="Suivant >" />-->
		       <input type="checkbox" name="namemoodplaylist[]" id = "namemoodplaylist[]" value="autre" /> Autre : <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Si autre, écrire une/des humeur(s)" style="text-align:center" onfocus="document.getElementById('namemoodplaylist[]').checked=true;"/> <br/>
			<input id = "last" class = "suivant" type="submit" value="Suivant" onclick="loadFormLast(this)">
			<br/>
			<progress max="10" value = "10"></progress>
		<br/>
			</form>
