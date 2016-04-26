<?php
if (session_status() == PHP_SESSION_NONE || session_id()== ""){
	session_start();
}

?>
<form action = "form/resform9.php" method="post" onsubmit="return false">
	<b> 10. Indépendamment de cette étude, dans quel(s) contextes(s) pourriez-vous réécouter cette playlist ? 
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
	<table class="mediumquestion">
		<tr>
			<td>Je ne la réécouterais pas </td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="jamais" /> </td>
		</tr>
		<tr>
			<td> Dans les transports en commun</td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="transport" /></td>
		</tr>
		<tr>
			<td>En conduisant </td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="conduite" /></td>
		</tr>
		<tr>
			<td>En travaillant </td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="travail" /></td>
		</tr>
		<tr>
			<td>En révisant </td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="révision" /></td>
		</tr>
		<tr>
			<td>En lisant </td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="lecture" /></td>
		</tr>
		<tr>
			<td> En surfant sur le web </td>
			<td> <input type="checkbox" name="possiblecontextplaylist[]" value="web" /> </td>
		</tr>
		<tr>
			<td> En jouant </td>
			<td> <input type="checkbox" name="possiblecontextplaylist[]" value="jeu" /> </td>
		</tr>
		<tr>
			<td>En faisant du sport</td>
			<td>  <input type="checkbox" name="possiblecontextplaylist[]" value="sport" /> </td>
		</tr>
		<tr>
			<td>  Seul</td>
			<td><input type="checkbox" name="possiblecontextplaylist[]" value="seul" /> </td>
		</tr>
		<tr>
			<td> Avec vos amis </td>
			<td> <input type="checkbox" name="possiblecontextplaylist[]" value="amis" /> </td>
		</tr>
		<tr> 
			<td>  Avec votre compagnon/compagne</td>
				<td>  <input type="checkbox" name="possiblecontextplaylist[]" value="compagnon" /></td>
			</tr>
			<tr>
				<td>Avec votre famille</td>
				<td><input type="checkbox" name="possiblecontextplaylist[]" value="famille" /></td>
			</tr>
			<tr> 
			<br/> 
				<td> Autre :</td>
				<td><input type="checkbox" name="possiblecontextplaylist[]" value="autre" />
					<input type = "text" name = "autre1" id = "autre1" placeholder = "Si autre, écrire un/des contexte(s)" style="text-align:center"/>
				</td>
			</tr>

		</table>
		<br/>
		<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
		<br/> <br/>
		<progress max="10" value = "9"></progress>
		<br/>
