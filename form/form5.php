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
			<form action="form/resform5.php" method="post" onsubmit="return false">
			<b> 5. Connaissiez-vous chacun de ces titres avant cette écoute ? </b><br/>
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
		       <td class="titlename"> Oui </td>
		       <td> <input type='radio' name="connaissancetitre1" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre2" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre3" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre4" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre5" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td class="titlename"> Non</td>
		       <td><input type="radio" name="connaissancetitre1" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre2" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre3" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre4" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre5" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<br/>
			<b> 6. Connaissiez-vous l'artiste de chacun de ces titres avant cette écoute ? </b><br/>
			<br/>
			<table>
   			<tr>
   				<th> </th>
		       <th> <?php echo $artist[0] ?> </th>
		       <th> <?php echo $artist[1] ?> </th>
		       <th> <?php echo $artist[2] ?> </th>
		       <th> <?php echo $artist[3] ?> </th>
		       <th> <?php echo $artist[4] ?> </th>
		       <th> <?php echo $artist[5] ?> </th>
		   </tr>

		   <tr>	   	
		       <td class="titlename"> Oui </td>
		       <td> <input type='radio' name="connaissanceartiste1" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste2" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste3" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste4" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste5" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td class="titlename"> Non</td>
		       <td><input type="radio" name="connaissanceartiste1" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste2" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste3" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste4" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste5" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/> <br/>
			<progress max="10" value = "5"></progress>
			<br/>
			</form>
