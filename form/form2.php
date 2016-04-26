
<?php
  $connexion = mysql_connect("localhost", "root");
  $bdd = mysql_select_db("kiwimoods", $connexion);
  mysql_query("SET NAMES 'utf8'");

  session_start();  

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
			<form action = "form/resform2.php" method="post" onsubmit="return false">
			<b> 2. Dans le cadre de cette expérience, dans quel(s) contexte(s) avez-vous écouté chacun de ces titres ? 
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
		       <td style="text-align:left">Dans les transports en commun</td>
		       <td> <input type="checkbox" name="ctitre1[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre2[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre3[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre4[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre5[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre6[]" value="transport" /> </td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En conduisant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="conduite" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En travaillant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="travail" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En révisant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="révision" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En lisant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="lecture" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En surfant sur le web</td>
		       <td><input type="checkbox" name="ctitre1[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="web" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En jouant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="jeu" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En faisant du sport</td>
		       <td><input type="checkbox" name="ctitre1[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="sport" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Seul</td>
		       <td><input type="checkbox" name="ctitre1[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="seul" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Avec vos amis</td>
		       <td><input type="checkbox" name="ctitre1[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="amis" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Avec votre compagnon/compagne</td>
		       <td><input type="checkbox" name="ctitre1[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="sport" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Avec votre famille</td>
		       <td><input type="checkbox" name="ctitre1[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="famille" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Autre</td>
		       <td> <br/> <input type="checkbox" name="ctitre1[]" id = "ctitre1" value="autre" />
		       <input type = "text" name = "autre1" id = "autre1" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('ctitre1').checked=true;"/>
		   </td>
		       <td><br/><input type="checkbox" name="ctitre2[]" id = "ctitre2" value="autre" />
		       <input type = "text" name = "autre2" id = "autre2" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('ctitre2').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="ctitre3[]" id = "ctitre3" value="autre"/>
		       <input type = "text" name = "autre3" id = "autre3" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('ctitre3').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="ctitre4[]" id = "ctitre4" value="autre" />
		       <input type = "text" name = "autre4" id = "autre4" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('ctitre4').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="ctitre5[]" id = "ctitre5" value="autre" />
		       <input type = "text" name = "autre5" id = "autre5" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('ctitre5').checked=true;"/></td>
		       <td><br/><input type="checkbox" name="ctitre6[]" id = "ctitre6" value="autre"/>
		       <input type = "text" name = "autre6" id = "autre6" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center" onfocus="document.getElementById('ctitre6').checked=true;"/></td>
		   </tr>
			</table>
			<br/>
            <input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/> <br/>
			<progress max="10" value = "2"></progress>
			<br/>
