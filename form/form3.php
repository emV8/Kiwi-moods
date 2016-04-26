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
		       <td> Oui </td>
		       <td> <input type='radio' name="gouttitre1" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre2" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre3" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre4" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre5" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td> Non</td>
		       <td><input type="radio" name="gouttitre1" value="non" /></td>
		       <td><input type="radio" name="gouttitre2" value="non" /></td>
		       <td><input type="radio" name="gouttitre3" value="non" /></td>
		       <td><input type="radio" name="gouttitre4" value="non" /></td>
		       <td><input type="radio" name="gouttitre5" value="non" /></td>
		       <td><input type="radio" name="gouttitre6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/>
			<progress max="10" value = "3"></progress>
			<br/>
			</form>

