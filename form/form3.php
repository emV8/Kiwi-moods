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
			<form action="form/resform3.php" method="post" onsubmit="return false">
			<b> 3. Avez-vous apprécié ces titres ? </b><br/>
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
		       <td> <input type='radio' name="gouttitre1" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre2" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre3" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre4" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre5" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td class="titlename"> Non</td>
		       <td><input type="radio" name="gouttitre1" value="non" /></td>
		       <td><input type="radio" name="gouttitre2" value="non" /></td>
		       <td><input type="radio" name="gouttitre3" value="non" /></td>
		       <td><input type="radio" name="gouttitre4" value="non" /></td>
		       <td><input type="radio" name="gouttitre5" value="non" /></td>
		       <td><input type="radio" name="gouttitre6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)"/>
			<br/> <br/>
			<progress max="10" value = "3"></progress>
			<br/>
			</form>

