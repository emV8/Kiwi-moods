
<?php
  $connexion = mysql_connect("localhost", "root");
  $bdd = mysql_select_db("kiwimoods", $connexion);
  mysql_query("SET NAMES 'utf8'"); 

  $title = array();
            $artist = array();
            $link = array();
            $requete = "SELECT titre, artiste, lien FROM music WHERE playlist_id = '".$_SESSION['playlist_id']."'";
            $res = mysql_query($requete);   
            while($row = mysql_fetch_array($res)){
                $title[] = $row['titre'];
                $artist[] = $row['artiste'];
                $link[] = $row['lien'];

            }
?>
			<form id = "premier" action="form/resform1.php" method="post" onsubmit="return false">
			<b> 1. Pour chacun des titres écoutés, quelle(s) émotion(s)
			 avez-vous ressentie(s) ?
			 	<a href="#" class="test">[?]
						<div class="raised">
						<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>
						<div class="boxcontent">
						 
						<b> Exemple d'autres adjectifs possibles pour qualifier vos émotions : </b>
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
			<table>
   			<tr>
   				<th></th>
		       <th style="text-align:center"> <?php echo $title[0] ?> </th>
		       <th style="text-align:center"> <?php echo $title[1] ?> </th>
		       <th style="text-align:center"> <?php echo $title[2] ?> </th>
		       <th style="text-align:center"> <?php echo $title[3] ?> </th>
		       <th style="text-align:center"> <?php echo $title[4] ?> </th>
		       <th style="text-align:center"> <?php echo $title[5] ?> </th>
		   </tr>

		   <tr>
		       <td style="text-align:left">Colère</td>
		       <td> <input type="checkbox" name="etitre1[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre2[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre3[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre4[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre5[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre6[]" value="colère" /> </td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Excitation</td>
		       <td><input type="checkbox" name="etitre1[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="excitation" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Calme/détente</td>
		       <td><input type="checkbox" name="etitre1[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="calme" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Joie</td>
		       <td><input type="checkbox" name="etitre1[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="joie" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Fatigue</td>
		       <td><input type="checkbox" name="etitre1[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="fatigue" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Ennui</td>
		       <td><input type="checkbox" name="etitre1[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="ennui" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Tristesse</td>
		       <td><input type="checkbox" name="etitre1[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="tristesse" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Indifférence</td>
		       <td><input type="checkbox" name="etitre1[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="indifference" /></td>
		   </tr>
		    <tr>
		       <td style="text-align:left">Autre</td>
		       <td><br/><input type="checkbox" name="etitre1[]" id = "etitre1" value="autre" />
		       <input type = "text" name = "autre1" id = "autre1" placeholder = "Si autre, écrire une/des émotion(s)" style="text-align:center" onfocus="document.getElementById('etitre1').checked=true;"/>
		   </td>
		       <td><br/><input type="checkbox" name="etitre2[]" id = "etitre2" value="autre" />
		       <input type = "text" name = "autre2" id = "autre2" placeholder = "Si autre, écrire une/des émotion(s)" style="text-align:center" onfocus="document.getElementById('etitre2').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="etitre3[]" id = "etitre3" value="autre"/>
		       <input type = "text" name = "autre3" id = "autre3" placeholder = "Si autre, écrire une/des émotion(s)" style="text-align:center" onfocus="document.getElementById('etitre3').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="etitre4[]" id = "etitre4" value="autre" />
		       <input type = "text" name = "autre4" id = "autre4" placeholder = "Si autre, écrire une/des émotion(s)" style="text-align:center" onfocus="document.getElementById('etitre4').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="etitre5[]" id = "etitre5" value="autre" />
		       <input type = "text" name = "autre5" id = "autre5" placeholder = "Si autre, écrire une/des émotion(s)" style="text-align:center" onfocus="document.getElementById('etitre5').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="etitre6[]" id = "etitre6" value="autre"/>
		       <input type = "text" name = "autre6" id = "autre6" placeholder = "Si autre, écrire une/des émotion(s)" style="text-align:center" onfocus="document.getElementById('etitre6').checked=true;"/></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/> <br/>
			<progress max="10" value = "1"></progress>
			<br/>
			</form>
	
			
