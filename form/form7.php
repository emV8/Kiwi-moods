
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
		       <input type='radio' name="newmoodplaylist" value="colère" /> Colère <br/>
		       <input type="radio" name="newmoodplaylist" value="excitation" /> Excitation <br/>
		       <input type="radio" name="newmoodplaylist" value="calme" /> Calme/détente <br/>
		       <input type="radio" name="newmoodplaylist" value="joie" /> Joie <br/>
		       <input type="radio" name="newmoodplaylist" value="peur" /> Peur <br/>
		       <input type="radio" name="newmoodplaylist" value="fatigue" /> Fatigue <br/>
		       <input type="radio" name="newmoodplaylist" value="ennui" /> Ennui <br/>
		       <input type="radio" name="newmoodplaylist" value="tristesse" /> Tristesse <br/>
		       <input type="radio" name="newmoodplaylist" value="autre" id = "newmoodplaylist" /> Autre
		        <br/>
		       <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Si autre, écrire une humeur" style="text-align:center" onfocus="document.getElementById('newmoodplaylist').checked=true;"/> <br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/>
			<progress max="10" value = "7"></progress>
			<br/>
			</form>
