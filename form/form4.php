<?php
	$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");

	if (session_status() == PHP_SESSION_NONE || session_id()== ""){
		session_start();
	}

	$title = array();
	$artist = array();
	$title_list = $_SESSION['title_list'];
	for ($i=0; $i<6; $i++){
		$title[$i] = $title_list[$i]['title'];
		$artist[$i]= $title_list[$i]['artist'];
	}
?>
			<form action="form/resform4.php" method="post" onsubmit="return false">
			<b> 4. Indépendamment de cette étude, dans quel(s) contexte(s) pourriez-vous réécouter ces titres ? 
				<a href="#" class="test">[?]
						<div class="raised">
						<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>
						<div class="boxcontent">
						 
						<b> Exemple d'autres contextes possibles : </b>
						<p>
						 
						En faisant la vaisselle - En faisant le ménage ... <br />
						Sous la douche - Dans le lit ... <br />
						Avant de s'endormir - Après le repas ... <br />
						... <br/>
						</p>
						</div>
						<b class="bottom"><b class="b4b"></b><b class="b3b"></b><b class="b2b"></b><b class="b1b"></b></b>
						</div>
					</a>
			</b><br/>
			<br/>
			<table>
   			<tr>
   				<th> </th>
		       <th> <?php echo $title[0] ?> </th>
		       <th> <?php echo $title[1] ?> </th>
		       <th> <?php echo $title[2] ?> </th>
		       <th> <?php echo $title[3] ?> </th>
		       <th> <?php echo $title[4] ?> </th>
		       <th> <?php echo $title[5] ?> </th>
		   </tr>

		   <tr>
		       <td class="titlename" style="text-align:left">Je ne le réécouterais pas</td>
		       <td> <input type="checkbox" name="cptitre1[]" value="jamais" /> </td>
		       <td> <input type="checkbox" name="cptitre2[]" value="jamais" /> </td>
		       <td> <input type="checkbox" name="cptitre3[]" value="jamais" /> </td>
		       <td> <input type="checkbox" name="cptitre4[]" value="jamais" /> </td>
		       <td> <input type="checkbox" name="cptitre5[]" value="jamais" /> </td>
		       <td> <input type="checkbox" name="cptitre6[]" value="jamais" /> </td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">Dans les transports en commun</td>
		       <td> <input type="checkbox" name="cptitre1[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="cptitre2[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="cptitre3[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="cptitre4[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="cptitre5[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="cptitre6[]" value="transport" /> </td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En conduisant</td>
		       <td><input type="checkbox" name="cptitre1[]" value="conduite" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="conduite" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="conduite" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="conduite" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="conduite" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="conduite" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En travaillant</td>
		       <td><input type="checkbox" name="cptitre1[]" value="travail" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="travail" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="travail" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="travail" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="travail" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="travail" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En révisant</td>
		       <td><input type="checkbox" name="cptitre1[]" value="révision" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="révision" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="révision" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="révision" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="révision" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="révision" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En lisant</td>
		       <td><input type="checkbox" name="cptitre1[]" value="lecture" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="lecture" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="lecture" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="lecture" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="lecture" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="lecture" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En surfant sur le web</td>
		       <td><input type="checkbox" name="cptitre1[]" value="web" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="web" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="web" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="web" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="web" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="web" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En jouant</td>
		       <td><input type="checkbox" name="cptitre1[]" value="jeu" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="jeu" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="jeu" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="jeu" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="jeu" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="jeu" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">En faisant du sport</td>
		       <td><input type="checkbox" name="cptitre1[]" value="sport" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="sport" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="sport" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="sport" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="sport" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="sport" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">Seul</td>
		       <td><input type="checkbox" name="cptitre1[]" value="seul" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="seul" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="seul" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="seul" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="seul" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="seul" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">Avec vos amis</td>
		       <td><input type="checkbox" name="cptitre1[]" value="amis" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="amis" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="amis" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="amis" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="amis" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="amis" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">Avec votre compagnon/compagne</td>
		       <td><input type="checkbox" name="cptitre1[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="sport" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">Avec votre famille</td>
		       <td><input type="checkbox" name="cptitre1[]" value="famille" /></td>
		       <td><input type="checkbox" name="cptitre2[]" value="famille" /></td>
		       <td><input type="checkbox" name="cptitre3[]" value="famille" /></td>
		       <td><input type="checkbox" name="cptitre4[]" value="famille" /></td>
		       <td><input type="checkbox" name="cptitre5[]" value="famille" /></td>
		       <td><input type="checkbox" name="cptitre6[]" value="famille" /></td>
		   </tr>
		   <tr>
		       <td class="titlename" style="text-align:left">Autre</td>
		       <td><br/><input type="checkbox" name="cptitre1[]" id ="cptitre1" value="autrec" />
		       <input type = "text" name = "autrec1" id = "autrec1" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('cptitre1').checked=true;"/>
		   </td>
		       <td><br/><input type="checkbox" name="cptitre2[]" id ="cptitre2" value="autrec" />
		       <input type = "text" name = "autrec2" id = "autrec2" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('cptitre2').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="cptitre3[]" id ="cptitre3" value="autrec"/>
		       <input type = "text" name = "autrec3" id = "autrec3" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('cptitre3').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="cptitre4[]" id ="cptitre4" value="autrec" />
		       <input type = "text" name = "autrec4" id = "autrec4" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center"/ onfocus="document.getElementById('cptitre4').checked=true;"></td>
		       <td><br/><input type="checkbox" name="cptitre5[]" id ="cptitre5" value="autrec" />
		       <input type = "text" name = "autrec5" id = "autrec5" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('cptitre5').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="cptitre6[]" id ="cptitre6" value="autrec"/>
		       <input type = "text" name = "autrec6" id = "autrec6" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('cptitre1').checked=true;"/></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/> <br/>
			<progress max="10" value = "4"></progress>
			<br/>
			</form>
