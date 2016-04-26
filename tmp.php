<?php

$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");

session_start();
$userid = $_SESSION['userid'];
$playlist_id = $_SESSION['playlist_id'];

$requete2 = "INSERT INTO  listened (user_id, playlist_id) VALUES('".$userid."','" .$playlist_id."')";
$res2 = $connexion -> query($requete2);

$listened_playlist = array();
$requete = "SELECT playlist_id FROM listened WHERE user_id = '".$userid."'";
$res = $connexion -> query($requete);	

while($row = mysqli_fetch_array($res)){
	$listened_playlist[] = $row['playlist_id'];
}


if (count($listened_playlist)>=6){
	header("Location: end.php");
}else{
	header("Location: mood.php");
}

?>