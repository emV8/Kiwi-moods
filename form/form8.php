<?php
if (session_status() == PHP_SESSION_NONE || session_id()== ""){
		session_start();
	}
	?>
			<form action="form/resform8.php" method="post" onsubmit="return false">
			<b> 9. Avez-vous apprécié cette playlist ? </b><br/>
			<br/>	
			<table>
				<tr>
					<td> Oui </td>
		       <td><input type='radio' name="goutplaylist" value="oui" /></td>
		   </tr>
		   <tr>
		   	<td> Non</td>
		      <td> <input type="radio" name="goutplaylist" value="non" /> </td>
		   </tr>
		   </table>
		   <br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)"/>
			<br/> <br/>
			<progress max="10" value = "8"></progress>
			<br/>
			</form>
